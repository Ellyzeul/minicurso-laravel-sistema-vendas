<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['name', 'price'];

    public function read()
    {
        return Product::get();
    }

    public function insert(Request $request)
    {
        return Product::create($request->all());
    }

    public function exclude(int $id)
    {
        $deleted = Product::where('id', $id)->delete();

        return [
            'success' => $deleted > 0
        ];
    }
}
