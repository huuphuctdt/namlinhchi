<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin_Custom extends Model
{
    protected $table = 'admin_custom';
    protected $fillable = ['name','custom'];

    public function getCustomPerSlider(){
        $admin = Admin_Custom::where('name','like','%per-slider%')->first();
        return $admin->custom;
    }

    public function setCustomPerSlider($request){
        $number_slider = intval(trim($request->number_slider));
        $flag = Admin_Custom::where('name','like','%per-slider%')->update(['custom' => $number_slider]);
        return $flag;
    }

    public function getCustomPerIntro(){
        $admin = Admin_Custom::where('name','like','%per-intro%')->first();
        return $admin->custom;
    }

    public function setCustomPerIntro($request){
        $number_intro = intval(trim($request->number_intro));
        $flag = Admin_Custom::where('name','like','%per-intro%')->update(['custom' => $number_intro]);
        return $flag;
    }

    public function getCustomPerGallery(){
        $admin = Admin_Custom::where('name','like','%per-gallery%')->first();
        return $admin->custom;
    }

    public function setCustomPerGallery($request){
        $number_gallery = intval(trim($request->number_gallery));
        $flag = Admin_Custom::where('name','like','%per-gallery%')->update(['custom' => $number_gallery]);
        return $flag;
    }

    public function setCustomPerProduct($request){
        $number_product = intval(trim($request->number_product));
        $flag = Admin_Custom::where('name','like','%per-product%')->update(['custom' => $number_product]);
        return $flag;
    }

    public function getCustomPerProduct(){
        $admin = Admin_Custom::where('name','like','%per-product%')->first();
        return $admin->custom;
    }
}
