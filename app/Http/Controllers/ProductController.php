<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Obtener los productos con paginación de 5 por página
        $products = Product::paginate(5);

         // Pasar los productos a la vista welcome
         return view('welcome', compact('products'));
    }
}
