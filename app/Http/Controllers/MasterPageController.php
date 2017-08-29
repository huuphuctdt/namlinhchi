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
    private $footerController;
    private $introductionController;
    public function __construct(HeaderController $headerController,
                                GalleryController $galleryController,
                                ProductController $productController,
                                PostController $postController,
                                PostCategoryController $postCategoryController,
                                FooterController $footerController,
                                IntroductionController $introductionController)
    {
        $this->headerController = $headerController;
        $this->galleryController = $galleryController;
        $this->productController = $productController;
        $this->postController = $postController;
        $this->postCategoryController = $postCategoryController;
        $this->footerController = $footerController;
        $this->introductionController = $introductionController;
    }

    public function index(){
        $data["header"] = $this->headerController->getAllHeader();
        $data["gallerys"] = $this->galleryController->getAllGallery();
        $data["footer"] = $this->footerController->getAllFooter();
        $data["top_2_post"] = $this->postController->getTop2Post();
        return view("master-page",$data);
    }

    public function index_product(){
        $data["header"] = $this->headerController->getAllHeader();
        $data["products"] = $this->productController->getAllProduct();
        $data["footer"] = $this->footerController->getAllFooter();
        $data["top_2_post"] = $this->postController->getTop2Post();
        return view("master-page",$data);
    }

    public function post_detail($category,$title){
        $id = array_first(explode('.',array_last(explode('-',$title))));
        $post = $this->postController->getPostDetail($id);
        $data["post_category"] = $this->postCategoryController->getAllCategory();
        $data["header"] = $this->headerController->getAllHeader();
        $data["post"] = $post;
        $data["footer"] = $this->footerController->getAllFooter();
        $data["top_2_post"] = $this->postController->getTop2Post();
        return view("master-page",$data);
    }

    public function post_all($category){
        $post_all = $this->postController->getAllPostCategory($category);
        $data["name_postcategory"] = $this->postController->getNamePostCategory($category);
        $data["post_category"] = $this->postCategoryController->getAllCategory();
        $data["header"] = $this->headerController->getAllHeader();
        $data["post_all"] = $post_all;
        $data["category"] = $category;
        $data["footer"] = $this->footerController->getAllFooter();
        $data["top_2_post"] = $this->postController->getTop2Post();
        return view("master-page",$data);
    }

    public function intro_detail($id){
        $intro_detail = $this->introductionController->getId($id);
        $data["intro_detail"] = $intro_detail;
        $data["header"] = $this->headerController->getAllHeader();
        $data["footer"] = $this->footerController->getAllFooter();
        $data["top_2_post"] = $this->postController->getTop2Post();
        return view("master-page",$data);
    }
}
