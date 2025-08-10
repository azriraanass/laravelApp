<?php

    namespace App\Services;

    use App\Models\Produit;

    class ProduitsService
    {
        /**
         * Create a new class instance.
         */
        public function __construct()
        {
            //
        }

        public function allProduits() 
        {
            $allProduits = Produit::with('company')->cursorPaginate(8);
            return $allProduits;
        }

        public function findOneProduit(int $idProduit) : Produit
        {
            $oneProduit = Produit::find($idProduit);
            if($oneProduit === null)
                abort(404);
            return $oneProduit;
        }

        public function createProduit(array $newProduit) : void 
        {
            Produit::create($newProduit);
        }


    }
