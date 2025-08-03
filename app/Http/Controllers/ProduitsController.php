<?php

    namespace App\Http\Controllers;

    use Illuminate\Contracts\View\View;
    use Illuminate\Http\Request;

    class ProduitsController 
    {
        public function getProduits() : View
        {
            return view('Pages.produits');
            
        }

    }
