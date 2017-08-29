<?php

namespace App\Http\Controllers;

use App\Models\Admin_Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AdminShowController extends Controller
{
    private $admin_show;
    private $adminCustomController;
    public function __construct(AdminCustomController $adminCustomController)
    {
        $this->admin_show = new Admin_Show();
        $this->adminCustomController = $adminCustomController;
    }

    public function index(){
        $number = $this->adminCustomController->getCustomPerSlider();
        $number_intro = $this->adminCustomController->getCustomPerIntro();
        $data['per_slider'] = $number;
        $data['per_intro'] = $number_intro;
        $data["admins"] = $this->admin_show->getAdminShow();
        return view("admin.admin-show",$data);
    }

    public function change_isShow(Request $request){
        $flag = $this->admin_show->change_isShow($request);
        return response()->json(['result' => $flag]);
    }

    public function getAllMapAdmin(){
        $maps = $this->admin_show->getMapShow();
        return $maps;
    }



}
