<?php

    namespace App\Services;

    use Illuminate\Database\Eloquent\Collection;
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

        public function all() : Collection
        {
            return Produit::all();
        }

        public function findOne(int $idProduit) : Produit
        {
            $oneProduit = Produit::find($idProduit);
            if($oneProduit === null)
                abort(404);
            return $oneProduit;
        }

    }
