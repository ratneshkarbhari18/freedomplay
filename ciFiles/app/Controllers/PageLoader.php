<?php

namespace App\Controllers;

use App\Models\HeaderImagesModel;
use App\Models\FAQModel;

class PageLoader extends BaseController
{

	private function page_loader($viewName,$data){
		echo view("templates/header",$data);
		echo view("pages/".$viewName,$data);
		echo view("templates/footer",$data);
	}

	private function admin_page_loader($viewName,$data){
		echo view("templates/admin_header",$data);
		echo view("admin_pages/".$viewName,$data);
		echo view("templates/admin_footer",$data);
	}

	public function home()
	{
		echo "HomePage will be here";
	}

	public function header_images_mgt($success="",$error="")
	{
		$role = session("role");
		if ($role!="admin") {
			return redirect()->to(site_url("")); 
		} else {
			$headerImagesModel = new HeaderImagesModel();
			$data = array("title"=>"Header Images Mgt.","header_images"=>$headerImagesModel->findAll(),"success"=>$success,"error"=>$error);
			$this->admin_page_loader("header_images_mgt",$data);
		}
	}

	public function faqs_mgt($success="",$error="")
	{
		$role = session("role");
		if ($role!="admin") {
			return redirect()->to(site_url("")); 
		} else {
			$faqModel = new FAQModel();
			$data = array("title"=>"FAQs Mgt.","faqs"=>$faqModel->findAll(),"success"=>$success,"error"=>$error);
			$this->admin_page_loader("faqs_mgt",$data);
		}
	}

	public function admin_login($error="")
	{
		$role = session("role");
		if ($role=="admin") {
			return redirect()->to(site_url("")); 
		} else {
			$data = array("title"=>"Admin Login","error"=>$error);
			$this->page_loader("admin_login",$data);
		}
	}

	public function dashboard(){
		$role = session("role");
		if ($role!="admin") {
			return redirect()->to(site_url("dashboard")); 
		} else {
			$data = array("title"=>"Dashboard");
			$this->admin_page_loader("dashboard",$data);
		}
	}

}
