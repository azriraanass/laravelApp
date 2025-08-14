<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\View\View;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompaniesController
{
    public function index(): View
    {
        return view("companies.index", [
            "Companies" => Company::cursorPaginate(8),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            "name" => "required",
            "location" => "required",
            "createYear" => "required",
        ]);

        Company::create($validated);

        return redirect()->route("companies.index");
    }

    public function show(Company $company): View
    {
        return view("companies.show", ["company" => $company]);
    }

    public function edit(Company $company): View
    {
        return view("companies.edit", ["company" => $company]);
    }

    public function update(Company $company, Request $request): RedirectResponse
    {
        $company->name = $request["name"];
        $company->location = $request["location"];
        $company->createYear = $request["createYear"];

        $company->save();

        return redirect()->route("companies.show", ["company" => $company]);
    }

    public function destroy(Company $company): RedirectResponse
    {
        $company->delete();
        return redirect()->route("companies.index");
    }
}
