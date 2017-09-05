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

    public function getCustomPerGallery(){
        $admin_custom = $this->admin_custom->getCustomPerGallery();
        return $admin_custom;
    }

    public function getCustomPerProduct(){
        $admin_custom = $this->admin_custom->getCustomPerProduct();
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

    public function change_number_gallery(Request $request){
        $flag = $this->admin_custom->setCustomPerGallery($request);
        if($flag){
            return redirect('admin/admin-show')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/admin-show')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }

    public function change_number_product(Request $request){
        $flag = $this->admin_custom->setCustomPerProduct($request);
        if($flag){
            return redirect('admin/admin-show')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/admin-show')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
