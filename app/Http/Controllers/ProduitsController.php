<?php

    namespace App\Http\Controllers;

use App\Services\ProduitsService;
use Illuminate\Contracts\View\View;
    use Illuminate\Http\Request;

    class ProduitsController 
    {
        public function __construct(protected readonly ProduitsService $produitsService)
        {}
        
        public function getProduits() : View
        {

            return view('Pages.produits',
                    [
                        'Produits' => $this->produitsService->all(),
                    ]);
            
        }

        public function findOneProduit(int $idProduit) : View
        {
            return view('Pages.oneProduit',
                            [
                                'oneProduit' => $this->produitsService->findOne($idProduit),
                            ]);
        }   

    }
