<?php

namespace App\Http\Controllers;

use App\Models\{Produit, Company};
use App\Services\ProduitsService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ProduitsController
{
    public function __construct(
        protected readonly ProduitsService $produitsService,
    ) {}

    public function index(): View
    {
        return view("produits.index", [ "Produits" => $this->produitsService->allProduits() ]);
    }

    public function show(Produit $produit): View
    {
        return view("produits.show", [ "oneProduit" => $produit ]);
    }

    public function create(Request $request): RedirectResponse
    {
        $validedAttributs = request()->validate([
            "name" => ["required"],
            "price" => ["required"],
            "description" => ["required"],
            "company" => ["required"],
        ]);

        [ $name, $price, $description, $company_Id ] = array_values($validedAttributs);

        $this->produitsService->createProduit([
            "name" => $name,
            "price" => $price,
            "description" => $description,
            "company_Id" => $company_Id,
            "user_id" => Auth::user()->id,
        ]);

        return redirect()->route("produits.index");
    }

    public function update(Produit $produit, Request $request): RedirectResponse
    {
        $validedAttributs = request()->validate([
            "name" => ["required"],
            "price" => ["required"],
            "description" => ["required"],
            "company" => ["required"],
        ]);

        if (Auth::user()->can("edit-produit", $produit) !== true)
            abort(403);

        [ $produit->name, $produit->price, $produit->description, $produit->company_Id ] = array_values($validedAttributs);

        $produit->save();

        return redirect()->route("produits.show", ["produit" => $produit]);
    }

    public function edit(Produit $produit) : View | RedirectResponse
    {
        return view("produits.edit", [ "Produit" => $produit, "companies" => Company::all() ]);
    }

    public function destroy(Prduit $produit) : RedirectResponse
    {
        $produit->delete();

        return redirect()->route("produits.index");
    }
}
