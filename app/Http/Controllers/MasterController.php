<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    private $headerController;
    private $menuController;
    private $sliderController;
    private $introductionController;
    private $promotionController;
    private $productionController;
    private $postController;
    private $galleryController;
    private $footerController;
    public function __construct(HeaderController $headerController,
                                MenuController $menuController,
                                SliderController $sliderController,
                                IntroductionController $introductionController,
                                PromotionController $promotionController,
                                ProductController $productController,
                                PostController $postController,
                                GalleryController $galleryController,
                                FooterController $footerController)
    {
        $this->headerController = $headerController;
        $this->menuController = $menuController;
        $this->sliderController = $sliderController;
        $this->introductionController = $introductionController;
        $this->promotionController = $promotionController;
        $this->productionController = $productController;
        $this->postController = $postController;
        $this->galleryController = $galleryController;
        $this->footerController = $footerController;
    }

    public function index(){
        //Content Header
        $data["header"] = $this->headerController->getAllHeader();
        $data["menus"] = $this->menuController->getAllMenu();
        $data["sliders"] = $this->sliderController->getAllSlider();
        $data["intros"] = $this->introductionController->getAllIntro();
        $data["promotions"] = $this->promotionController->getAllPromotion();
        $data["products"] = $this->productionController->getAllProduct();
        $data["posts"] = $this->postController->getAllPost();
        $data["gallerys"] = $this->galleryController->getLimitGallery();
        $data["footer"] = $this->footerController->getAllFooter();
        return view("master", $data);
    }
}
