<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Slider extends Model
{
    protected $table = 'slider';
    protected $fillable = ['image','caption','note','read_more'];

    public function getSlider(){
        $sliders = Slider::all();
        return $sliders;
    }
    public function getSliderAdmin(){
        $sliders = Slider::all();
        $admin_show = Admin_Show::where('menu_eng','like','%slider%')->first();
        if($admin_show->is_show == 1) {
            return $sliders;
        }
        return;
    }

    public function createSlider($request){
        if($request->hasFile('image')){
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Slider::create(['image' => trim($imageName),
                            'caption' => trim($request->caption),
                            'note' => trim($request->note),
                            'read_more' => trim($request->read_more)]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function getId($id){
        $slider = Slider::find($id);
        return $slider;
    }

    public function updateSlider($request){
        if($request->hasFile('image')){
            $image_old = Slider::find($request->po_slider_id)->image;
            $flag_1 = File::delete(public_path('upload').'/'.$image_old);
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Slider::where('id',$request->po_slider_id)->update(['image' => trim($imageName),
                                    'caption' => trim($request->caption),
                                    'note' => trim($request->note),
                                    'read_more' => trim($request->read_more)]);
            if($flag && $flag_1){
                return true;
            }else{
                return false;
            }
        }else{
            $flag = Slider::where('id',$request->po_slider_id)->update(['caption' => trim($request->caption),
                                    'note' => trim($request->note),
                                    'read_more' => trim($request->read_more)]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }
    }
}
