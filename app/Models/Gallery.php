<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = ['name', 'image'];

    public function getGallery(){
        $gallerys = Gallery::orderBy('created_at', 'desc')->paginate(env('PER_PAGE'));
        return $gallerys;
    }

    public function getId($id){
        $gallery = Gallery::find($id);
        return $gallery;
    }

    public function getAllGallery(){
        $gallerys = Gallery::orderBy('created_at','desc')->get();
        return $gallerys;
    }

    public function getLimitGallery($limit){
        $gallerys = Gallery::orderBy('created_at','desc')->offset(0)->limit($limit)->get();
        return $gallerys;
    }

    public function createGallery($request){
        if($request->hasFile('image')){
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Gallery::create(['image' => trim($imageName), 'name' => trim($request->name)]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function updateGallery($request){
        if($request->hasFile('image')){
            $image_old = Gallery::find($request->po_gallery_id)->image;
            $flag_1 = File::delete(public_path('upload').'/'.$image_old);
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Gallery::where('id',$request->po_gallery_id)->update(['image' => trim($imageName), 'name' => trim($request->name)]);
            if($flag && $flag_1){
                return true;
            }else{
                return false;
            }
        }else{
            $flag = Gallery::where('id',$request->po_gallery_id)->update(['name' => trim($request->name)]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }
    }
}
