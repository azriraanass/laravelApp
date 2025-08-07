<?php

    namespace App\Http\Controllers;

use App\Services\GlobalService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

    class GlobalController
    {
        public function __construct(protected readonly GlobalService $globalService)
        {}

        public function index() : View
        {
            return view('Pages.home');
        }

        public function about() : View
        {
            return view('Pages.about');
        }

        public function contact() : View
        {
            return view('Pages.contact');
        }

        public function services() : View
        {
            return view('Pages.services',
                        [
                            'Services' => $this->globalService->allService(),
                        ]);
        }

    }
