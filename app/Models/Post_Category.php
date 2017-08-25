<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_Category extends Model
{
    protected $table = 'post_category';
    protected $fillable = ['name'];

    public function post(){
        return $this->hasMany('App\Models\Post','category_id');
    }

    public function getPostCategory(){
        $postCategory = Post_Category::all();
        return $postCategory;
    }

    public function createPostCategory($request){
        $flag = Post_Category::create(['name' => trim($request->name)]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }

    public function getId($id){
        $postCategory = Post_Category::find($id);
        return $postCategory;
    }

    public function updatePostCategory($request){
        $flag = Post_Category::where('id',$request->po_post_category_id)->update(['name' => trim($request->name)]);
        if($flag){
            return true;
        }else{
            return false;
        }
    }
}
