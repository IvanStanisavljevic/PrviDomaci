<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {

        // 1. Napraviti varijablu $sat koliko je trenutno sati 12, 13, 15
        // 2. Proslediti taj podatak u blade

        $sat = date("h");


        $trenutnoVreme = date("h:i:s"); // sat:minut:sekund, 09:08:54

        /*
         * Domaci> Izvuci poslednjih 6 proizvoda i ispisati ih na stranici
         *
         * SELECT * FROM products ORDER BY id DESC LIMIT 6
         *
         * 7,6,5,4,3,2,1
         * LIMIT 6 = 7,6,5,4,3,2
        */


        $products = ProductsModel::orderByDesc("id") // ORDER BY id DESC
            ->take(6) // LIMIT 6
            ->get();


        return view('welcome', compact('trenutnoVreme', 'sat', 'products'));
    }
}
