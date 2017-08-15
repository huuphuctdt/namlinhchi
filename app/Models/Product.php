<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['image','name','description','old_price','new_price','read_more'];

    public function getProduct(){
        $products = Product::all();
        return $products;
    }

    public function getId($id){
        $product = Product::find($id);
        return $product;
    }

    public function createProduct($request){
        if($request->hasFile('image')){
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Product::create(['image' => trim($imageName),
                'name' => trim($request->name),
                'description' => trim($request->description),
                'old_price' => trim(intval($request->old_price)),
                'new_price' => trim(intval($request->new_price)),
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

    public function updateProduct($request){
        if($request->hasFile('image')){
            $image_old = Product::find($request->po_product_id)->image;
            $flag_1 = File::delete(public_path('upload').'/'.$image_old);
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Product::where('id',$request->po_product_id)->update(['image' => trim($imageName),
                'name' => trim($request->name),
                'description' => trim($request->description),
                'old_price' => trim($request->old_price),
                'new_price' => trim($request->new_price),
                'read_more' => trim($request->read_more)]);
            if($flag && $flag_1){
                return true;
            }else{
                return false;
            }
        }else{
            $flag = Product::where('id',$request->po_product_id)->update([
                'name' => trim($request->name),
                'description' => trim($request->description),
                'old_price' => trim($request->old_price),
                'new_price' => trim($request->new_price),
                'read_more' => trim($request->read_more)]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }
    }
}
