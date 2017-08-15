<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    private $headerController;
    private $menuController;
    private $sliderController;
    public function __construct(HeaderController $headerController, MenuController $menuController, SliderController $sliderController)
    {
        $this->headerController = $headerController;
        $this->menuController = $menuController;
        $this->sliderController = $sliderController;
    }

    public function index(){
        //Content Header
        $data["header"] = $this->headerController->getAllHeader();
        $data["menus"] = $this->menuController->getAllMenu();
        $data["sliders"] = $this->sliderController->getAllSlider();
        return view("master", $data);
    }
}
