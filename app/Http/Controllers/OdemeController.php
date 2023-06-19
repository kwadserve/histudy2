<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\OgrenciKurs;

class OdemeController extends Controller
{
	public function odeme(Request $request)
	{
		$request->validate([
			"name" => "required",
			"surname" => "required",
			"phone" => "required",
			"email" => "required",
			"address" => "required",
		], [
			"name.required" => "İsim boş bırakıldı.",
			"surname.required" => "Soy isim boş bırakıldı.",
			"email.required" => "Email boş bırakıldı.",
			"phone.required" => "Telefon boş bırakıldı.",
			"address.required" => "Adres boş bırakıldı.",
		]);
		$kisi_id = $request->kisi_id;
		$course_id = $request->course_id;


		$merchant_id = "356099";
		$merchant_key = "P1qb8iuwEYzLamiB";
		$merchant_salt = "aWoxi7YpSTR6MHo7";

		$random_id = "11" . rand(1, 999) . rand(1, 88) * rand(1, 50);

		$email = $request->email;
		$payment_amount = $request->price * 100; //9.99 için 9.99 * 100 = 999 gönderilmelidir.
		$merchant_oid = $random_id;
		$user_name = $request->name . " " . $request->surname;
		$user_address = $request->address;
		$user_phone = $request->phone;
		$merchant_ok_url = route("front.course.basarili");
		$merchant_fail_url = route("front.course.hatali");
		$urun = Course::find($request->course_id);
		## Müşterinin sepet/sipariş içeriği
		$user_basket = base64_encode(json_encode(array(array($urun->title, $urun->price, 1))));
		$max_installment = 6;
		## Kullanıcının IP adresi
		if (isset($_SERVER["HTTP_CLIENT_IP"])) {
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		} elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		} else {
			$ip = $_SERVER["REMOTE_ADDR"];
		}

		$user_ip = $ip;
		$timeout_limit = "5";	//zaman aşımı süresi 5dk
		$debug_on = 1;	//hata gösterimi modu acık
		$test_mode = 1;	//test modu için 1
		$no_installment = 0; //taksit yok
		$currency = "TL";

		####### Bu kısımda herhangi bir değişiklik yapmanıza gerek yoktur. #######
		$hash_str = $merchant_id . $user_ip . $merchant_oid . $email . $payment_amount . $user_basket . $no_installment . $max_installment . $currency . $test_mode;
		$paytr_token = base64_encode(hash_hmac('sha256', $hash_str . $merchant_salt, $merchant_key, true));
		$data_vals = array(
			'merchant_id' => $merchant_id,
			'user_ip' => $user_ip,
			'merchant_oid' => $merchant_oid,
			'email' => $email,
			'payment_amount' => $payment_amount,
			'paytr_token' => $paytr_token,
			'user_basket' => $user_basket,
			'debug_on' => $debug_on,
			'no_installment' => $no_installment,
			'max_installment' => $max_installment,
			'user_name' => $user_name,
			'user_address' => $user_address,
			'user_phone' => $user_phone,
			'merchant_ok_url' => $merchant_ok_url,
			'merchant_fail_url' => $merchant_fail_url,
			'timeout_limit' => $timeout_limit,
			'currency' => $currency,
			'test_mode' => $test_mode
		);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_vals);
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);

		$result = curl_exec($ch);
		curl_close($ch);

		if (curl_errno($ch))
			die("PAYTR IFRAME connection error. err:" . curl_error($ch));


		$result = json_decode($result, 1);

		if ($result['status'] == 'success') {
			$token = $result['token'];
		} else
			die("PAYTR IFRAME failed. reason:" . $result['reason']);
		$request->session()->put('kisi_id', $request->kisi_id);
		$request->session()->put('course_id', $request->course_id);
		$request->session()->put('merchant_oid', $merchant_oid);
		$request->session()->put('merchant_oid', $request->course_id);

		return view("frontend.course.sonuc", compact('result'));
	}
	public function bildirim(Request $request)
	{
		## 2. ADIM için örnek kodlar ##

		## ÖNEMLİ UYARILAR ##
		## 1) Bu sayfaya oturum (SESSION) ile veri taşıyamazsınız. Çünkü bu sayfa müşterilerin yönlendirildiği bir sayfa değildir.
		## 2) Entegrasyonun 1. ADIM'ında gönderdiğniz merchant_oid değeri bu sayfaya POST ile gelir. Bu değeri kullanarak
		## veri tabanınızdan ilgili siparişi tespit edip onaylamalı veya iptal etmelisiniz.
		## 3) Aynı sipariş için birden fazla bildirim ulaşabilir (Ağ bağlantı sorunları vb. nedeniyle). Bu nedenle öncelikle
		## siparişin durumunu veri tabanınızdan kontrol edin, eğer onaylandıysa tekrar işlem yapmayın. Örneği aşağıda bulunmaktadır.

		$post = $request->all();

		####################### DÜZENLEMESİ ZORUNLU ALANLAR #######################
		#
		## API Entegrasyon Bilgileri - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.
		$merchant_key   = 'P1qb8iuwEYzLamiB';
		$merchant_salt  = 'aWoxi7YpSTR6MHo7';
		###########################################################################

		####### Bu kısımda herhangi bir değişiklik yapmanıza gerek yoktur. #######
		#
		## POST değerleri ile hash oluştur.
		$hash = base64_encode(hash_hmac('sha256', $post['merchant_oid'] . $merchant_salt . $post['status'] . $post['total_amount'], $merchant_key, true));
		#
		## Oluşturulan hash'i, paytr'dan gelen post içindeki hash ile karşılaştır (isteğin paytr'dan geldiğine ve değişmediğine emin olmak için)
		## Bu işlemi yapmazsanız maddi zarara uğramanız olasıdır.
		if ($hash != $post['hash'])
			die('PAYTR notification failed: bad hash');
		###########################################################################

		## BURADA YAPILMASI GEREKENLER
		## 1) Siparişin durumunu $post['merchant_oid'] değerini kullanarak veri tabanınızdan sorgulayın.
		## 2) Eğer sipariş zaten daha önceden onaylandıysa veya iptal edildiyse  echo "OK"; exit; yaparak sonlandırın.

		/* Sipariş durum sorgulama örnek
       $durum = SQL
       if($durum == "onay" || $durum == "iptal"){
            echo "OK";
            exit;
        }
     */

		if ($post['status'] == 'success') { ## Ödeme Onaylandı

			## BURADA YAPILMASI GEREKENLER
			## 1) Siparişi onaylayın.
			## 2) Eğer müşterinize mesaj / SMS / e-posta gibi bilgilendirme yapacaksanız bu aşamada yapmalısınız.
			## 3) 1. ADIM'da gönderilen payment_amount sipariş tutarı taksitli alışveriş yapılması durumunda
			## değişebilir. Güncel tutarı $post['total_amount'] değerinden alarak muhasebe işlemlerinizde kullanabilirsiniz.

		} else { ## Ödemeye Onay Verilmedi

			## BURADA YAPILMASI GEREKENLER
			## 1) Siparişi iptal edin.
			## 2) Eğer ödemenin onaylanmama sebebini kayıt edecekseniz aşağıdaki değerleri kullanabilirsiniz.
			## $post['failed_reason_code'] - başarısız hata kodu
			## $post['failed_reason_msg'] - başarısız hata mesajı

		}

		## Bildirimin alındığını PayTR sistemine bildir.
		echo "OK";
		exit;
	}

	function basarili(Request $request)
	{
		$course_id = $request->session()->get('course_id', null);
		$kisi_id = $request->session()->get('kisi_id', null);
		if ((isset($course_id) && !empty($course_id)) &&  (isset($kisi_id) && !empty($kisi_id))) {
			OgrenciKurs::create([
				"ogr_id" => $kisi_id,
				"kurs_id" => $course_id
			]);

			$request->session()->put('course_id', '');
			$request->session()->put('kisi_id', '');
		}

		return redirect()->route('front.home');
		
	}

	function hatali(Request $request)
	{
		dd($request);
	}

	public function 
}
