<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $products = $this->product->getProduct();
        $data['products'] = $products;
        return view('admin.product', $data);
    }

    public function create()
    {
        return view('admin.product-create');
    }

    public function create_product(CreateProductRequest $request)
    {
        $flag = $this->product->createProduct($request);
        if ($flag) {
            return redirect('admin/product')->with(['flash_level' => 'success', 'flash_messages' => 'Tạo thành công!']);
        } else {
            return redirect('admin/product')->with(['flash_level' => 'danger', 'flash_messages' => 'Tạo thất bại!']);
        }
    }

    public function delete(Request $request)
    {
        $product = $this->product->getId($request->po_product_id);
        $flag = false;
        if (!empty($product)) {
            $flag_1 = File::delete(public_path('upload') . '/' . $product->image);
            $flag = $product->delete();
        }
        if ($flag && $flag_1) {
            return redirect('admin/product')->with(['flash_level' => 'success', 'flash_messages' => 'Xoá thành công!']);
        } else {
            return redirect('admin/product')->with(['flash_level' => 'danger', 'flash_messages' => 'Xoá thất bại!']);
        }
    }
}
