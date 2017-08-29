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
}
