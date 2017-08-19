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
    public function __construct(HeaderController $headerController,
                                MenuController $menuController,
                                SliderController $sliderController,
                                IntroductionController $introductionController,
                                PromotionController $promotionController,
                                ProductController $productController,PostController $postController)
    {
        $this->headerController = $headerController;
        $this->menuController = $menuController;
        $this->sliderController = $sliderController;
        $this->introductionController = $introductionController;
        $this->promotionController = $promotionController;
        $this->productionController = $productController;
        $this->postController = $postController;
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
        return view("master", $data);
    }
}
