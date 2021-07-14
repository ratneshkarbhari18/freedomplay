<?php

namespace App\Controllers;

use App\Models\FAQModel;
use App\Controllers\PageLoader;

class Faqs extends BaseController
{

    public function create()
    {
        
        $role = session("role");
		if ($role!="admin") {
			return redirect()->to(site_url("")); 
		} else {

            $questionEntered = $this->request->getPost("question");
            $answerEntered = $this->request->getPost("answer");
            $pageLoader = new PageLoader();
            if ($questionEntered==""||$answerEntered=="") {
                $pageLoader->faqs_mgt("","Please enter both question and answer");
            } else {
                $faqModel = new FAQModel();
                $faqCreated = $faqModel->insert(
                    array(
                        "question" => $questionEntered,
                        "answer" => $answerEntered
                    )
                );
                if ($faqCreated) {
                    $pageLoader->faqs_mgt("FAQ Added","");
                } else {
                    $pageLoader->faqs_mgt("","FAQ not Added");
                }
                
            }
            
        }

    }

    public function delete()
    {
        $role = session("role");
		if ($role!="admin") {
			return redirect()->to(site_url("")); 
		} else {
            $faqModel = new FAQModel();
            $faqId = $this->request->getPost("faq-id");
            $deleted = $faqModel->delete($faqId);
            $pageLoader = new PageLoader();
            if ($deleted) {
                $pageLoader->faqs_mgt("FAQ deleted","");
            } else {
                $pageLoader->faqs_mgt("","FAQ not deleted");
            }
        }
    }

}