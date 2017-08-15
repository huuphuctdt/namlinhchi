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
    public function __construct(HeaderController $headerController,
                                MenuController $menuController,
                                SliderController $sliderController,
                                IntroductionController $introductionController,PromotionController $promotionController)
    {
        $this->headerController = $headerController;
        $this->menuController = $menuController;
        $this->sliderController = $sliderController;
        $this->introductionController = $introductionController;
        $this->promotionController = $promotionController;
    }

    public function index(){
        //Content Header
        $data["header"] = $this->headerController->getAllHeader();
        $data["menus"] = $this->menuController->getAllMenu();
        $data["sliders"] = $this->sliderController->getAllSlider();
        $data["intros"] = $this->introductionController->getAllIntro();
        $data["promotions"] = $this->promotionController->getAllPromotion();
        return view("master", $data);
    }
}
