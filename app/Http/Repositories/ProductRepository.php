<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-06-09
 * Time: 09:45
 */

namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepository
{
    function getAll()
    {

        return Product::all();

    }
    function getInstance()
    {

        return new Product();
    }

    function store($product)
    {
        $product->save();
    }

    function findById($id)
    {
        return Product::findOrFail($id);
    }

    function update($product)
    {
        $product->update();
    }
}
