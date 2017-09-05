<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\EditGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    private $gallery;
    private $admincustomController;
    public function __construct(AdminCustomController $adminCustomController)
    {
        $this->gallery = new Gallery();
        $this->admincustomController = $adminCustomController;
    }

    public function index(){
        $gallerys = $this->gallery->getGallery();
        $data['gallerys'] = $gallerys;
        return view('admin.gallery',$data);
    }

    public function getAllGallery(){
        $gallerys = $this->gallery->getAllGallery();
        return $gallerys;
    }

    public function getLimitGallery(){
        $number_limit = $this->admincustomController->getCustomPerGallery();
        $gallerys = $this->gallery->getLimitGallery($number_limit);
        return $gallerys;
    }

    public function create(){
        return view('admin.gallery-create');
    }

    public function create_gallery(CreateGalleryRequest $request){
        $flag = $this->gallery->createGallery($request);
        if($flag){
            return redirect('admin/gallery')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        }else{
            return redirect('admin/gallery')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function edit($id){
        $gallery = $this->gallery->getId($id);
        $data['gallery'] = $gallery;
        return view('admin.gallery-detail', $data);
    }

    public function save_edit(EditGalleryRequest $request){
        $flag = $this->gallery->updateGallery($request);
        if($flag){
            return redirect('admin/gallery')->with(['flash_level' => 'success', 'flash_messages' => 'Cập nhật thành công!']);
        }else{
            return redirect('admin/gallery')->with(['flash_level' => 'danger', 'flash_messages' => 'Cập nhật thất bại!']);
        }
    }

    public function delete(Request $request){
        $gallery = $this->gallery->getId($request->po_gallery_id);
        $flag = false;
        if(!empty($gallery)){
            $flag_1 = File::delete(public_path('upload').'/'.$gallery->image);
            $flag = $gallery->delete();
        }
        if($flag && $flag_1){
            return redirect('admin/gallery')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
        }else{
            return redirect('admin/gallery')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }
}
