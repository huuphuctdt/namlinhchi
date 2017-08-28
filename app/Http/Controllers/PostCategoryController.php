<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostCategoryRequest;
use App\Http\Requests\EditPostCategoryRequest;
use App\Models\Post;
use App\Models\Post_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostCategoryController extends Controller
{
    private $post_category;
    public function __construct()
    {
        $this->post_category = new Post_Category();
    }

    public function index(){
        $postcategorys = $this->post_category->getPostCategory();
        $data['postcategorys'] = $postcategorys;
        return view('admin.postcategory',$data);
    }

    public function getAllCategory(){
        $post_category = $this->post_category->getPostCategory();
        return $post_category;
    }

    public function create(){
        return view('admin.postcategory-create');
    }

    public function create_post_category(CreatePostCategoryRequest $request){
        $flag = $this->post_category->createPostCategory($request);
        if($flag){
            return redirect('admin/post_category')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        }else{
            return redirect('admin/post_category')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function edit($id){
        $post_category = $this->post_category->getId($id);
        $data['post_category'] = $post_category;
        return view('admin.postcategory-detail', $data);
    }

    public function save_edit(EditPostCategoryRequest $request){
        $flag = $this->post_category->updatePostCategory($request);
        if($flag){
            return redirect('admin/post_category')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/post_category')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }

    public function delete(Request $request){
        $post_category = $this->post_category->getId($request->po_post_category_id);
        if($post_category->id == 1) {
            return false;
        }
        DB::beginTransaction();
        try {
            Post::where('category_id', $post_category->id)->update(['category_id' => 1]);
            $flag1 = $post_category->delete();
            DB::commit();

            if ($flag1) {
                return redirect('admin/post_category')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
            } else {
                return redirect('admin/post_category')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
            }

        }catch (\Exception $exception){
            DB::rollback();
            return redirect('admin/post_category')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }
}
