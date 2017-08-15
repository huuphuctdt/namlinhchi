<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\EditSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    private $slider;
    public function __construct()
    {
        $this->slider = new Slider();
    }

    public function getAllSlider(){
        $sliders = $this->slider->getSlider();
        return $sliders;
    }

    public function index(){
        $sliders = $this->slider->getSlider();
        $data['sliders'] = $sliders;
        return view('admin.slider', $data);
    }

    public function create(){
        return view('admin.slider-create');
    }

    public function create_slider(CreateSliderRequest $request){
        $flag = $this->slider->createSlider($request);
        if($flag){
            return redirect('admin/slider')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        }else{
            return redirect('admin/slider')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function delete(Request $request){
        $slider = $this->slider->getId($request->po_slider_id);
        $flag = false;
        if(!empty($slider)){
            $flag_1 = File::delete(public_path('upload').'/'.$slider->image);
            $flag = $slider->delete();
        }
        if($flag && $flag_1){
            return redirect('admin/slider')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
        }else{
            return redirect('admin/slider')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }

    public function edit($id){
        $slider = $this->slider->getId($id);
        $data['slider'] = $slider;
        return view('admin.slider-detail', $data);
    }

    public function save_edit(EditSliderRequest $request){
        $flag = $this->slider->updateSlider($request);
        if($flag){
            return redirect('admin/slider')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/slider')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
