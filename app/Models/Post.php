<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable= ['category_id','image','name','content','date','month','year'];

    public function post_category(){
        return $this->belongsTo('App\Models\Post_Category','category_id');
    }

    public function getPost(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return $posts;
    }

    public function getId($id){
        $post = Post::find($id);
        return $post;
    }

    public function createPost($request){
        if($request->hasFile('image')){
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);

            $date = date('j');
            $month = date('F');
            $year = date('Y');

            $flag = Post::create(['image' => trim($imageName),
                'category_id' => $request->post_category,
                'name' => trim($request->name),
                'content' => trim($request->content),
                'date' => $date,
                'month' => $month,
                'year' => $year]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function updatePost($request){
        if($request->hasFile('image')){
            $image_old = Post::find($request->po_post_id)->image;
            $flag_1 = File::delete(public_path('upload').'/'.$image_old);
            $file= $request->file('image');
            $imageName = time().".".$file->extension();
            $path = public_path('upload');
            $file->move($path , $imageName);
            $flag = Post::where('id',$request->po_post_id)->update(['image' => trim($imageName),
                'category_id' => $request->post_category,
                'name' => trim($request->name),
                'content' => trim($request->content)]);
            if($flag && $flag_1){
                return true;
            }else{
                return false;
            }
        }else{
            $flag = Post::where('id',$request->po_post_id)->update([
                'category_id' => $request->post_category,
                'name' => trim($request->name),
                'content' => trim($request->content)]);
            if($flag){
                return true;
            }else{
                return false;
            }
        }
    }
}
