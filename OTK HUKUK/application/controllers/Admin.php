<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Europe/Istanbul');
require FCPATH.'vendor/autoload.php';
class Admin extends CI_Controller {
	



//
	public function login()
	{
		$this->load->view('Admin/login');
	}

	public function loginislem()
	{

		$password = postvalue('sifre');
		$username = postvalue('kadi');
		
		$exist=users::find([

			'username'=>$username,
			'password'=>$password
		]);

		if ($exist) {
			session_start();
			$this->session->set_userdata('adminlogin', true);
			$this->session->set_userdata('admininfo', $exist);


			redirect('admin/slidergoruntule');
		} else {
			$hata = "Email adresi veya şifre hatalı.";
			$this->session->set_flashdata('error', $hata);
			redirect('Admin/login');
		}
	}
	public function cikis()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

//



    //
	public function index()
	{
		$data['slider'] = slider::query("SELECT sliderbaslik FROM anaslider");
		$data['faaliyet'] = Faaliyet::query("SELECT * FROM faaliyet LIMIT 4;");
		$data['praticearea'] = pratice::select();
		$data['faaliyetalani'] = faaliyetalani::select();
		$data['tablo1'] = tablo1::select();
		$data['tablo2'] = tablo2::select();
		$data['tablo3'] = tablo3::select();
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();
		$this->load->view('index',$data);
	}
	public function hakkimizda()
	{
		$data['hakkimizda'] = hakkimizda::select();
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();



		$this->load->view('about-us',$data);
	}

	public function faaliyet()
	{
		$data['faaliyetalani'] = faaliyetalani::select();
		$data['faaliyet'] = faaliyet::select();
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();



		$this->load->view('faaliyetalanlari',$data);
	}

	public function partner()
	{
		$data['partnerlerimizkart'] = partnerlerimizkart::select();
		$data['partnerlerimiz'] = partnerlerimiz::select();
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();


		$this->load->view('partners',$data);
		

	}

	public function yayin()
	{
		$start = 0;
		$length = 4;
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['pagecount'] = yayinlar::query("SELECT CEIL(COUNT(*) / $length) AS 'sayi' FROM yayinlar");
		$data['yayinlar'] = yayinlar::query("SELECT * FROM yayinlar  ORDER BY b_updateedildigitarih DESC LIMIT $start, $length");
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();

		


		$this->load->view('yayinlar',$data);
	}
	public function yayinServerSide()
	{
		$start = postvalue('start');
		$length = postvalue('length');
		$yayinlar = yayinlar::query("SELECT * FROM yayinlar ORDER BY b_updateedildigitarih DESC LIMIT $start, $length");

		echo json_encode($yayinlar);
	}
	public function yayinServerSideSearch()
	{
		$start = postvalue('start');
		$length = postvalue('length');
		$search = postvalue('search');
		$yayinlar = yayinlar::query("SELECT * FROM yayinlar WHERE b_onbaslik LIKE '%$search%' OR b_onsoz LIKE '%$search%' OR b_sayfabaslik LIKE '%$search%' OR b_sayfaaciklama LIKE '%$search%' OR b_eklendigitarih LIKE '%$search%' OR b_updateedildigitarih LIKE '%$search%' ORDER BY id DESC LIMIT $start, $length");
		echo json_encode($yayinlar);
	}
	public function iletisim()
	{
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();


		$this->load->view('contact-us',$data);
	}

	public function blogg($id)
	{
		
		$data['faaliyet'] = Faaliyet::select(['id'=>$id]);
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();


		
		$this->load->view('blog',$data);
	}

	public function blogg2($id)
	{
		$data['yayinlar'] = yayinlar::select(['id'=>$id]);
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();


		$this->load->view('blog2',$data);
	}


	public function cerez()
	{
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['cerez'] = cerez::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();


		$this->load->view('cerezpolitikasi',$data);
	}

	public function gizlilik()
	{
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['gizlilik'] = gizlilik::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();



		$this->load->view('gizlilikpolitkasi',$data);
	}

	public function kvk()
	{
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['kvk'] = kvk::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();



		$this->load->view('kvkk',$data);
	}

	public function uyari()
	{
		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select();
		$data['uyari'] = uyari::select();
		$data['footer'] = footer::select();
		$data['logo'] = logo::select();
		


		$this->load->view('uyarimetni',$data);
	}

	//Admin Panel



	//////////////SLİDER//////////////

	public function slidergoruntule()
	{
		$slider['slider'] = Slider::select();
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/slidergoruntule',$slider);
		}else{

			redirect('admin/login');
		}
	}


	public function slider()
	{
		$this->load->view('admin/sliderekle');
	}

	public function sliderekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);

			
			$data = [
				
				'sliderbaslik' => postvalue('sliderbaslik'),
				'slideryazi' => postvalue('slideryazi'),
				'resimyol' => imageupload('resimyol','slider/'),
			];

			
			
			Slider::insert($data);
			
			
			flash('success','check','Başarılı','Slider Başarıyla Eklenmiştir...');
		}

		back();
	}


	public function slidersil($id)
	{
		$isExist=Slider::find($id);
		if($isExist)
		{
			Slider::delete($id);
			flash('success','check','Başarılı','Slider Başarıyla Silindi');
			back();
		}
	}


	//////////////SLİDER//////////////

	///////////////FAALİYETALANLARI//////////////

	public function faaliyetalanlarigoruntule()
	{
		$faaliyet['faaliyet'] = Faaliyet::select();
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/faaliyetalanlarigoruntule',$faaliyet);
		}else{

			redirect('admin/login');
		}
	}


	public function faaliyetalanlariekleindex()
	{
		$this->load->view('admin/faaliyetalanlariekle');
	}

	public function faaliyetalanlariekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			
			
			$data = [
				
				'kartbaslik' => postvalue('kartbaslikekle'),
				'kartonsoz' => postvalue('kartonsozekle'),
				'f_blogbaslik' => postvalue('blogbaslik'),
				'f_blogaciklama' => postvalue('blokaciklama'),
				'f_blogresim' => imageupload('f_blogresim','faaliyetblog/'),
				'kartresim' => imageupload('kartresim','faaliyetkart/'),



				
			];

			
			
			faaliyet::insert($data);
			
			
			flash('success','check','Başarılı','Faaliyet Alanları Başarıyla Eklenmiştir...');
		}
		back();
	}

	public function faaliyetalanlariduzenleindex($id)
	{
		
		$data['faaliyet']=faaliyet::find($id);
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/faaliyetalanlariduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
		

	public function faaliyetalanlariduzenle()
	{
		if (isset($_POST['kaydett'])) {
			$data = [




				'kartbaslik' => postvalue('kartbaslikekle'),
				'kartonsoz' => postvalue('kartonsozekle'),
				'f_blogbaslik' => postvalue('f_blogbaslik'),
				'f_blogaciklama' => postvalue('f_blogaciklama')
			];




			$id = postvalue('id');
			faaliyet::update($id, $data);
			redirect('admin/faaliyetalanlarigoruntule');


		} elseif (isset($_POST['kaydet'])) {
			$config['upload_path'] = 'assets/upload/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$data = [
				







				'f_blogresim' => imageupload('f_blogresim', 'faaliyetblog/'),
			];


			$id = postvalue('id');
			faaliyet::update($id, $data);
			redirect('admin/faaliyetalanlarigoruntule');

		} elseif (isset($_POST['kaydettt'])) {
			$config['upload_path'] = 'assets/upload/';
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			$data = [
				







				'kartresim' => imageupload('kartresim', 'faaliyetkart/'),
			];


			$id = postvalue('id');
			faaliyet::update($id, $data);
			redirect('admin/faaliyetalanlarigoruntule');
		} else {
			back();
		}
	}





	public function faaliyetalanlarisil($id)
	{
		$isExist=faaliyet::find($id);
		if($isExist)
		{
			faaliyet::delete($id);
			flash('success','check','Başarılı','Faaliyet Alanı Başarıyla Silindi');
			back();
		}
	}
	public function faaliyetalaniaciklamaduzenle()
	{
		$data['faaliyetalani'] = faaliyetalani::select();

		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/faaliyetalanlarıbaslikduzenle',$data);
		}else{

			redirect('admin/login');
		}

	}

	public function faaliyetalaniaciklamaduzenlee()
	{
		if (isPost())
		{
			$data = [

				'ff_baslik' => postvalue('ff_baslik'),
				'ff_aciklama' => postvalue('ff_aciklama'),
				
				



				
			];
			$id = 1;

			
			
			faaliyetalani::update($id,$data);
			

			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Uygulanmıştır...');
		}
		back();
	}




	///////////////FAALİYETALANLARI//////////////

	///////////////HAKKIMIZDA//////////////


	public function hakkimizdaindex()
	{

		$data['hakkimizda'] = Hakkimizda::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/hakkimizdaduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function hakkimizdaduzenlee()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			$id = 1;

			$data = [
				
				'baslik1' => postvalue('baslik1'),
				'baslik1aciklama' => postvalue('baslik1aciklama'),
				'baslik2' => postvalue('baslik2'),
				'baslik2aciklama' => postvalue('baslik2aciklama'),
				'baslik3' => postvalue('baslik3'),
				'baslik3aciklama' => postvalue('baslik3aciklama'),

				'yanresim' => imageupload('yanresim','hakkimda/'),
			];



			Hakkimizda::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}





	///////////////HAKKIMIZDA//////////////
	///////////////PARTNERLERİMİZ//////////////

	public function partnerlerimizkartgoruntule()
	{
		$partnerlerimizkart['partnerlerimizkart'] = partnerlerimizkart::select();
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/partnerlerimizkartgoruntule',$partnerlerimizkart);
		}else{

			redirect('admin/login');
		}
	}
	public function partnerlerkartekleindex()
	{
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/partnerlerkartekle');
		}else{

			redirect('admin/login');
		}
	}
	public function partnerlerkartekle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);

			
			$data = [
				
				'kartaciklama' => postvalue('kartaciklamaekle'),
				'kartbaslik' => postvalue('kartbaslikekle'),
				'k_facebook' => postvalue('k_facebook'),
				'k_twitter' => postvalue('k_twitter'),
				'k_instagram' => postvalue('k_instagram'),
				'k_linkedin' => postvalue('k_linkedin'),


				
				'kartresim' => imageupload('kartresim','partnerlerkart/'),
			];

			
			
			partnerlerimizkart::insert($data);
			
			
			flash('success','check','Başarılı','Partner Kart Başarıyla Eklenmiştir...');
		}

		back();
	}

	public function partnerlerkartduzenle($id)
	{
		$data['partnerlerimizkart'] = partnerlerimizkart::find($id);

		$this->load->view('admin/partnerlerkartduzenle', $data);
	}


	
	public function partnerlerkartduzenlee()
	{
		if(isset($_POST['kaydett']))
		{
			$data=[

				'kartaciklama' => postvalue('kartaciklamaduzenle'),
				'kartbaslik' => postvalue('kartbaslikduzenle'),
				'k_facebook' => postvalue('k_facebookduzenle'),
				'k_twitter' => postvalue('k_twitterduzenle'),
				'k_instagram' => postvalue('k_instagramduzenle'),
				'k_linkedin' => postvalue('k_linkedinduzenle')
			];
			$id = postvalue('id');

			partnerlerimizkart::update($id,$data);
		}
		if(isset($_POST['kaydet']))
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';


			$this->load->library('upload', $config);


			$data=[


				'kartresim'  	=> imageupload('resim','partnerlerkart/')


			];
			$id = postvalue('id');

			partnerlerimizkart::update($id,$data);

			redirect('admin/partnerlerimizkartgoruntule');
		}

		back();
	}	
	public function partnerlerimizkartsil($id)
	{
		$isExist=partnerlerimizkart::find($id);
		if($isExist)
		{
			partnerlerimizkart::delete($id);
			flash('success','check','Başarılı','Kart Başarıyla Silindi');
			back();
		}
	}
	public function partnerleranasayfaduzenlegoruntule()
	{
		$partnerlerimiz['partnerlerimiz'] = partnerlerimiz::select();

		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/partnerleranasayfaduzenle',$partnerlerimiz);
		}else{

			redirect('admin/login');
		}
	}
	public function partnerleranasayfaduzenlee()
	{
		if (isPost())
		{

			$id = 1;
			$data = [
				'p_baslik' => postvalue('p_baslik'),
				'p_aciklama' => postvalue('p_aciklama'),

			];





			partnerlerimiz::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}

	///////////////PARTNERLERİMİZ//////////////
    ///////////////YAYINLAR//////////////

	public function yayinlargoruntule()
	{
		$yayinlar['yayinlar'] = yayinlar::select();

		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/yayinlargoruntule',$yayinlar);
		}else{

			redirect('admin/login');
		}
	}
	public function yayinlarkarteklegoruntule()
	{
		
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/yayinlarkartekle');
		}else{

			redirect('admin/login');
		}

	}
	public function yayinlarkarteklee()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			$date = date('Y-m-d');

			$data = [

				'b_onbaslik' => postvalue('b_onbaslik'),
				'b_onsoz' => postvalue('b_onsoz'),
				'b_sayfabaslik' => postvalue('b_sayfabaslik'),
				'b_sayfaaciklama' => postvalue('b_sayfaaciklama'),
				'b_resim' => imageupload('b_resim','yayinlarkart/'),
				'b_eklendigitarih'=> $date,
				'b_updateedildigitarih'=>$date

			];



			yayinlar::insert($data);


			flash('success','check','Başarılı','Yayınlar Kart Başarıyla Eklenmiştir...');
		}

		back();
	}

	public function yayinlarkartduzenlee($id)
	{

		$data['yayinlar']=yayinlar::find($id);



		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/yayinlarkartduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}

	public function yayinlarkartduzenleee()
	{
		if(isset($_POST['kaydett']))
		{
			$date = date('Y-m-d');
			$data=[

				'b_onbaslik' => postvalue('b_onbaslikduzenle'),
				'b_onsoz' => postvalue('b_onsozduzenle'),
				'b_sayfabaslik' => postvalue('b_sayfabaslikduzenle'),
				'b_sayfaaciklama' => postvalue('b_sayfaaciklamaduzenle'),
				'b_updateedildigitarih'=>$date
			];
			$id = postvalue('id');

			yayinlar::update($id,$data);
		}
		if(isset($_POST['kaydet']))
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']      = '*';


			$this->load->library('upload', $config);


			$data=[


				'b_resim' => imageupload('b_resim','yayinlarkart/'),


			];
			$id = postvalue('id');

			yayinlar::update($id,$data);

			redirect('admin/yayinlargoruntule');
		}

		back();
	}	
	public function yayinlarkartsil($id)
	{
		$isExist=yayinlar::find($id);
		if($isExist)
		{
			yayinlar::delete($id);
			flash('success','check','Başarılı','Kart Başarıyla Silindi');
			back();
		}
	}


	///////////////YAYINLAR//////////////

	//////////////İLETİŞİM///////////////
	public function contactduzenle()
	{
		$data['contact'] = contact::select();


		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/iletisimduzenle',$data);
		}else{

			redirect('admin/login');
		}

	}

	public function contactduzenlee()
	{
		if (isPost())
		{
			$data = [

				'emailbaslik' => postvalue('emailbaslik'),
				'emailaciklama' => postvalue('emailaciklama'),
				'phonenumberbaslik' => postvalue('phonenumberbaslik'),
				'phonenumberaciklama' => postvalue('phonenumberaciklama'),
				'adresbaslik' => postvalue('adresbaslik'),
				'adresaciklama' => postvalue('adresaciklama'),
				'haritakey' => postvalue('haritakey'),






			];
			$id = 1;



			Contact::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Uygulanmıştır...');
		}
		back();
	}
	public function message()
	{
		if (isPost())
		{



			$data=[

				'name'   	=> postvalue('name'),
				'subject' 	=> postvalue('subject'),
				'mail' 	    => postvalue('mail'),
				'phone'     => postvalue('phone'),
				'message' 	=> postvalue('message'),
				'date'		=> postvalue('date'),
				'time'		=> postvalue('time'),

			];

			Mesajlar::insert($data);
			flash('success','check','Başarılı','Mesajınız İletildi,En Kısa Sürede Dönüş Yapılacaktır.');

			back();
		}

	}
	public function mesajlar()
	{
		$data['mesajlar']=mesajlar::select();
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/mesajlar',$data);
		}else{

			redirect('admin/login');
		}

	}
	public function mesajsil($id)
	{
		$isExist=Mesajlar::find($id);
		if($isExist)
		{
			mesajlar::delete($id);

			back();
		}
	}







    //////////////İLETİŞİM///////////////
    //////////////PRATİCEAREA///////////////
	public function praticeareaindex()
	{

		$data['praticearea'] = Pratice::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/praticeareabaslikduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function praticeareaduzenlee()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'ppbaslik' => postvalue('ppbaslik'),
				'ppaciklama' => postvalue('ppaciklama'),

			];





			Pratice::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}


    //////////////PRATİCEAREA///////////////
    //////////////TABLO1///////////////
	public function tablo1index()
	{

		$data['tablo1'] = tablo1::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/tablo1duzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function tablo1duzenlee()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			$id = 1;

			$data = [
				't_baslik' => postvalue('t_baslik'),
				't_anabaslik' => postvalue('t_anabaslik'),
				't_anaaciklama' => postvalue('t_anaaciklama'),


				't_resim' => imageupload('t_resim','tablo1/'),
			];



			tablo1::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}


    //////////////TABLO1///////////////
    //////////////TABLO2///////////////
	public function tablo2index()
	{

		$data['tablo2'] = tablo2::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/tablo2duzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function tablo2duzenlee()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			$id = 1;

			$data = [
				't_baslik' => postvalue('t_baslik'),
				't_anabaslik' => postvalue('t_anabaslik'),
				't_anaaciklama' => postvalue('t_anaaciklama'),


				't_resim' => imageupload('t_resim','tablo2/'),
			];



			tablo2::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}

    //////////////TABLO2///////////////
       //////////////TABLO3///////////////
	public function tablo3index()
	{

		$data['tablo3'] = tablo3::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/tablo3duzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function tablo3duzenlee()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);
			$id = 1;

			$data = [
				't_baslik' => postvalue('t_baslik'),
				't_anabaslik' => postvalue('t_anabaslik'),
				't_anaaciklama' => postvalue('t_anaaciklama'),


				't_resim' => imageupload('t_resim','tablo3/'),
			];



			tablo3::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}

    //////////////TABLO3///////////////

    /////////////////////////////////////////////////////////////////////////////////////POLİTİKALAR/////////////////////////////////////////////////////////////////////////////////////

    //////////////ÇEREZ POLİTİKASI///////////////
	public function cerezduzenleindex()
	{

		$data['cerez'] = cerez::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/cerezduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function cerezduzenlee()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'c_baslik' => postvalue('c_baslik'),
				'c_aciklama' => postvalue('c_aciklama'),

			];





			cerez::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}

    //////////////ÇEREZ POLİTİKASI///////////////
    //////////////GİZLİLİK POLİTİKASI///////////////
	public function gizlilikduzenleindex()
	{

		$data['gizlilik'] = Gizlilik::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/gizlilikduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function gizlilikduzenlee()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'g_baslik' => postvalue('g_baslik'),
				'g_aciklama' => postvalue('g_aciklama'),

			];





			Gizlilik::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}


    //////////////GİZLİLİK POLİTİKASI///////////////
    //////////////KVKK///////////////
	public function kvkduzenleindex()
	{

		$data['kvk'] = kvk::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/kvkduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function kvkduzenlee()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'k_baslik' => postvalue('k_baslik'),
				'k_aciklama' => postvalue('k_aciklama'),

			];





			kvk::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}

    //////////////KVKK///////////////
    //////////////UYARI METNİ///////////////
	public function uyariduzenleindex()
	{

		$data['uyari'] = uyari::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/uyariduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function uyariduzenlee()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'u_baslik' => postvalue('u_baslik'),
				'u_aciklama' => postvalue('u_aciklama'),

			];





			uyari::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}












    //////////////UYARI METNİ///////////////






     /////////////////////////////////////////////////////////////////////////////////////POLİTİKALAR/////////////////////////////////////////////////////////////////////////////////////

	//////////////SOSYAL MEDYA///////////////
	public function sosyalmedyaduzenleindex()
	{

		$data['contact'] = Contact::select();
		$data['sosyalmedya'] = sosyalmedya::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/sosyalmedyaduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function sosyalmedyaduzenlee()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'f_facebook' => postvalue('f_facebook'),
				'f_twitter' => postvalue('f_twitter'),
				'f_instagram' => postvalue('f_instagram'),
				'f_linkedin' => postvalue('f_linkedin'),


			];





			sosyalmedya::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}



	//////////////SOSYAL MEDYA///////////////
	//////////////FOOTER///////////////
	public function footerduzenleindex()
	{

		$data['footer'] = footer::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/footerduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function footerduzenle()
	{

		if (isPost())
		{

			$id = 1;
			$data = [
				'baslik' => postvalue('baslik'),
				'aciklama' => postvalue('aciklama')
				

			];





			footer::update($id,$data);


			flash('success','check','Başarılı','Değişiklikleriniz Başarıyla Güncellenmiştir...');
		}
		back();
	}






	//////////////FOOTER///////////////
	public function logoduzenleindex()
	{

		$data['logo'] = logo::select(); 
		$yetki = $this->session->admininfo->yetki;
		if ($yetki == "admin") {
			$this->load->view('admin/logoduzenle',$data);
		}else{

			redirect('admin/login');
		}
	}
	public function logoduzenle()
	{
		if (isPost())
		{
			$config['upload_path']          = '.assets/upload/';
			$config['allowed_types']        = '*';
			$this->load->library('upload', $config);


			$data = [

				
				'logo' => imageupload('logo','logo/')
			];



			logo::insert($data);


			flash('success','check','Başarılı','Yayınlar Kart Başarıyla Eklenmiştir...');
		}

		back();
	}





































	////////
















}







