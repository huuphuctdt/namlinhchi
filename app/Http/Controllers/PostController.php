<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Models\Post;
use App\Models\Post_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    private $post;
    private $post_category;
    public function __construct()
    {
        $this->post = new Post();
        $this->post_category = new Post_Category();
    }

    public function index(){
        $posts = $this->post->getPost();
        $data['posts'] = $posts;
        return view('admin.post',$data);
    }

    public function getAllPost(){
        $posts = $this->post->getPostAdmin();
        return $posts;
    }

    public function getTop2Post(){
        $posts = $this->post->getTop2Post();
        return $posts;
    }

    public function getAllPostCategory($category){
        $posts = $this->post->getPostCategory($category);
       return $posts;
    }

    public function getNamePostCategory($category){
        $name_postcategory = $this->post->getNamePostCategory($category);
        return $name_postcategory;
    }

    public function getPostDetail($id){
        $post = $this->post->getId($id);
        return $post;
    }

    public function create(){
        $post_categorys = $this->post_category->getPostCategory();
        $data['post_categorys'] = $post_categorys;
        return view('admin.post-create',$data);
    }

    public function create_post(CreatePostRequest $request){
        $flag = $this->post->createPost($request);
        if($flag){
            return redirect('admin/post')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        }else{
            return redirect('admin/post')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function delete(Request $request)
    {
        $post = $this->post->getId($request->po_post_id);
        $flag = false;
        if (!empty($post)) {
            $flag_1 = File::delete(public_path('upload') . '/' . $post->image);
            $flag = $post->delete();
        }
        if ($flag && $flag_1) {
            return redirect('admin/post')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
        } else {
            return redirect('admin/post')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }

    public function edit($id){
        $post = $this->post->getId($id);
        $post_categorys = $this->post_category->getPostCategory();
        $data['post_categorys'] = $post_categorys;
        $data['post'] = $post;
        return view('admin.post-detail', $data);
    }

    public function save_edit(EditPostRequest $request){
        $flag = $this->post->updatePost($request);
        if($flag){
            return redirect('admin/post')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/post')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }
}
