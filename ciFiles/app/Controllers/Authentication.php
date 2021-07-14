<?php
namespace App\Controllers;

use App\Models\AdminAuthModel;
use App\Controllers\PageLoader;

class Authentication extends BaseController
{

    public function admin_login(){
        
        $adminAuthModel = new AdminAuthModel();
        $pageLoader = new PageLoader();

        $usernameEntered = $this->request->getPost("admin_username");
        $passwordEntered = $this->request->getPost("admin_password");

        if ($usernameEntered==""||$passwordEntered=="") {
      
            $pageLoader->admin_login("Please enter both username and password");

            exit();
      
        } else {
            
            $adminData = $adminAuthModel->where("username",$usernameEntered)->first();

            if (!$adminData) {

                $pageLoader->admin_login("Username is incorrect");

                exit();
            
            } else {

                if (password_verify($passwordEntered,$adminData["password"])) {
                    
                    $session = session();
                    $session->set(
                        array(
                            "first_name"=> $adminData["first_name"],
                            "last_name"=> $adminData["last_name"],
                            "username"=> $adminData["username"],
                            "role"=> "admin"
                        )
                    );
    
                    return redirect()->to(site_url("dashboard"));
                    
                } else {

                    $pageLoader->admin_login("Password is incorrect");

                    exit();
                    
                }
               
            }
            
        }
        
    }

}