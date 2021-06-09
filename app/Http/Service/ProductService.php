<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-06-09
 * Time: 09:45
 */

namespace App\Http\Service;


use App\Http\Repositories\ProductRepository;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;
    }

    function getAll()
    {
        return $this->productRepo->getAll();
    }

    function store($request)
    {
        $product = $this->productRepo->getInstance();
        $product->fill($request->all());
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('product', 'public');
            $product->img = $path;

        }
        $this->productRepo->store($product);
    }

    function getById($id)
    {
        return $this->productRepo->findById($id);
    }

    function update($request)
    {
        $product = $this->productRepo->findById($request->id);
        $product->fill($request->all());
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('product', 'public');
            $product->img = $path;

        }
        $this->productRepo->update($product);
    }

    function delete($id)
    {
        $product = $this->productRepo->findById($id);
        $product->delete();
    }
}
