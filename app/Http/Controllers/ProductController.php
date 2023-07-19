<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function read()
    {
        return (new Product())->read();
    }

    public function create(Request $request)
    {
        return (new Product())->insert($request);
    }

    public function exclude(int $id)
    {
        return (new Product())->exclude($id);
    }
}
