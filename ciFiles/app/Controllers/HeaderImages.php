<?php
namespace App\Controllers;

use App\Models\HeaderImagesModel;
use App\Controllers\PageLoader;

class HeaderImages extends BaseController
{

    public function create()
    {
        $role = session("role");
		if ($role!="admin") {
			return redirect()->to(site_url("")); 
		} else {
            $headerImagesModel = new HeaderImagesModel();
            $headerImage = $this->request->getFile('header-image');
            $headerImgLink = $this->request->getPost("headerImgLink");
            $imageSavePath = "./assets/images/";
            $randomName = $headerImage->getRandomName();
            $moveSuccess = $headerImage->move($imageSavePath,$randomName);
            if ($moveSuccess) {
                $headerImagesModel->insert(
                    array(
                        "name" => $randomName,
                        "link" => $headerImgLink
                    )
                );
                return redirect()->to(site_url("header-images-mgt"));
            } else {
                $pageLoader = new PageLoader();
                $pageLoader->header_images_mgt("","Header Image not uploaded");
            }
        }
    }

    public function delete()
    {
        $role = session("role");
		if ($role!="admin") {
			return redirect()->to(site_url("")); 
		} else {
            $headerImageId = $this->request->getPost("hi-id");
            $headerImagesModel = new HeaderImagesModel();
            $headerImage = $headerImagesModel->find($headerImageId);
            $deleted = $headerImagesModel->delete($headerImageId);
            $pageLoader = new PageLoader();
            if ($deleted) {
                if (is_file("./assets/images/".$headerImage["name"])) {
                    unlink("./assets/images/".$headerImage["name"]);
                }
                $pageLoader->header_images_mgt("Header Image deleted","");                
            } else {
                $pageLoader->header_images_mgt("","Header Image not deleted");
            }
        }
    }

}