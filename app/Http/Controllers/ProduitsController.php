<?php

    namespace App\Http\Controllers;

    
    use App\Models\{Produit, Company};
    use App\Services\ProduitsService;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Ramsey\Uuid\Type\Decimal;

    class ProduitsController 
    {
        public function __construct(protected readonly ProduitsService $produitsService)
        {}
        
        public function index() : View
        {

            return view('produits.index',
                    [
                        'Produits' => $this->produitsService->allProduits
                        (),
                    ]);
            
        }

        public function show(int $idProduit) : View
        {
            return view('produits.show',
                            [
                                'oneProduit' => $this->produitsService->findOneProduit($idProduit),
                            ]);
        }   

        public function create(Request $request) : RedirectResponse
        {
            request()->validate(
                [
                    'name' => ['required'],
                    'price' => ['required'],
                    'description' => ['required'],
                    'company' => ['required']
                ]
                );

            $name = $request['name'];
            $price = $request['price'];
            $description = $request['description'];
            $company_Id = $request['company'];

            $this->produitsService
                    ->createProduit(['name' => $name, 'price' => $price, 'description' => $description, 'company_Id' => $company_Id]);

            return redirect()
                    ->route('produits.index');
        }

        public function update(int $idProduit, Request $request) : RedirectResponse
        {
            request()->validate(
                [
                    'name' => ['required'],
                    'price' => ['required'],
                    'description' => ['required'],
                    'company' => ['required']
                ]
                );

            $produit = Produit::findOrFail($idProduit);
            $produit->name = $request['name'];
            $produit->price = $request['price'];
            $produit->description = $request['description'];
            $produit->company_Id = $request['company'];

            $produit->save();
            
            return redirect()
                    ->route('produits.show', [ 'idProduit' => $idProduit ]);
        }

        public function edit(int $idProduit) : View
        {
            return view('produits.edit',[
                'Produit' => Produit::findOrFail($idProduit),
                'companies' => Company::all()
            ]);
        }

        public function destroy(int $idProduit) : RedirectResponse
        {
            Produit::findOrFail($idProduit)
                    ->delete();

            return redirect()
                    ->route('produits.index');
        }



    }
