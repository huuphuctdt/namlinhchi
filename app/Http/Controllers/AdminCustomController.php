<?php

namespace App\Http\Controllers;

use App\Models\Admin_Custom;
use Illuminate\Http\Request;

class AdminCustomController extends Controller
{
    private $admin_custom;
    public function __construct()
    {
        $this->admin_custom = new Admin_Custom();
    }

    public function getCustomPerSlider(){
        $admin_custom = $this->admin_custom->getCustomPerSlider();
        return $admin_custom;
    }

    public function change_number_slider(Request $request){
        $flag = $this->admin_custom->setCustomPerSlider($request);
        if($flag){
            return redirect('admin/admin-show')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/admin-show')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }

    public function getCustomPerIntro(){
        $admin_custom = $this->admin_custom->getCustomPerIntro();
        return $admin_custom;
    }

    public function change_number_intro(Request $request){
        $flag = $this->admin_custom->setCustomPerIntro($request);
        if($flag){
            return redirect('admin/admin-show')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/admin-show')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
