<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Introduction extends Model
{
    protected $table = 'introduction';
    protected $fillable = ['image','name','note','read_more'];

    public function getIntroduction(){
        $intro = Introduction::all();
        return $intro;
    }
    public function getIntroductionAdmin(){
        $intro = Introduction::all();
        $admin_show = Admin_Show::where('menu_eng','like','%pagearea%')->first();
        if($admin_show->is_show == 1) {
            return $intro;
        }
        return;
    }

    public function getId($id){
        $intro = Introduction::find($id);
        return $intro;
    }

    public function createIntroduction($request){
        if($request->hasFile('image')){
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Introduction::create(['image' => trim($imageName),
                                    'name' => trim($request->name),
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

    public function updateIntroduction($request){
        if($request->hasFile('image')){
            $image_old = Introduction::find($request->po_intro_id)->image;
            $flag_1 = File::delete(public_path('upload').'/'.$image_old);
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Introduction::where('id',$request->po_intro_id)->update(['image' => trim($imageName),
                                                                        'name' => trim($request->name),
                                                                        'note' => trim($request->note),
                                                                        'read_more' => trim($request->read_more)]);
            if($flag && $flag_1){
                return true;
            }else{
                return false;
            }
        }else{
            $flag = Introduction::where('id',$request->po_intro_id)->update(['name' => trim($request->name),
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
