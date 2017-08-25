<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterPageController extends Controller
{
    private $headerController;
    private $galleryController;
    private $productController;
    private $postController;
    private $postCategoryController;
    public function __construct(HeaderController $headerController,
                                GalleryController $galleryController,
                                ProductController $productController,
                                PostController $postController,
                                PostCategoryController $postCategoryController)
    {
        $this->headerController = $headerController;
        $this->galleryController = $galleryController;
        $this->productController = $productController;
        $this->postController = $postController;
        $this->postCategoryController = $postCategoryController;
    }

    public function index(){
        $data["header"] = $this->headerController->getAllHeader();
        $data["gallerys"] = $this->galleryController->getAllGallery();
        return view("master-page",$data);
    }

    public function index_product(){
        $data["header"] = $this->headerController->getAllHeader();
        $data["products"] = $this->productController->getAllProduct();
        return view("master-page",$data);
    }

    public function post_detail($category,$title){
        $id = array_first(explode('.',array_last(explode('-',$title))));
        $post = $this->postController->getPostDetail($id);
        $data["post_category"] = $this->postCategoryController->getAllCategory();
        $data["header"] = $this->headerController->getAllHeader();
        $data["post"] = $post;
        return view("master-page",$data);
    }
}
