<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'header';

    public function getHeader(){
        $header = Header::all();
        return $header->first();
    }

    public function updateHeader($request){
        if($request->hasFile('image')){
            $image_old = Header::find($request->po_header_id)->image;
            File::delete(public_path('upload').'/'.$image_old);
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            Header::query()->update(['logo' => $imageName]);
        }
        $flag = Header::query()->update(['tagline' => $request->tagline]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }
}
