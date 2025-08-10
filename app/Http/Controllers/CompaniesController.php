<?php

    namespace App\Http\Controllers;

    use App\Models\Company;
    use Illuminate\Contracts\View\View;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;

    class CompaniesController
    {
        public function index() : View
        {
            return view('companies.index' , 
            [
                'Companies' => Company::cursorPaginate(8),
            ]);
        }

        public function store(Request $request) : RedirectResponse
        {
            $name = $request['name'];
            $location = $request['location'];
            $createYear = $request['createYear'];

            Company::create(['name' => $name, 'location' => $location, 'createYear' => $createYear]);

            return redirect()->route('companies.index');
        }
    }
