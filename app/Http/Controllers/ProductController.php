<?php

namespace App\Http\Controllers;

use App\Http\Service\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        $products = $this->productService->getAll();
        return view('product.list',compact('products'));
    }

    public function add()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        $this->productService->store($request);
        return redirect()->route('list.product');

    }


    public function edit($id)
    {
        $products = $this->productService->getById($id);
        return view('product.edit', compact('products'));
    }

    public function update(Request $request)
    {
        $this->productService->update($request);
        return redirect()->route('list.product');
    }

    public function delete($id)
    {
        $this->productService->delete($id);
        return redirect()->route('list.product');
   }

}
