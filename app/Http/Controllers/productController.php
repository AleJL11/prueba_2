<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class productController extends Controller
{
    public function select(): View
    {
        //seleccionar datos de la tabla products
        $products = DB::select('select * from products');

        return view('product.select', ['name_products' => $products]);
    }

    public function insert(): View
    {
        //insertar datos en la tabla products
        $insert = DB::insert('insert into products (name_product) values (?)', ['Product 1']);

        return view('product.insert', ['name_products' => $insert]);
    }
    
    public function update(): View
    {
        //actualizar datos en la tabla products
        $update = DB::update('update products set name_product = "Product 2"');

        return view('product.update', ['name_products' => $update]);
    }

    public function delete(): View
    {
        //eliminar datos en la tabla products
        $delete = DB::delete('delete from products where id = ?', [1]);

        return view('product.delete', ['name_products' => $delete]);
    }
    
}
