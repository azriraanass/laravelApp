<?php

    namespace App\Services;

    class GlobalService
    {
        
        protected $services = [
            ['id' => 1, 'name' => 'Web Design', 'description' => 'Creating modern websites.'],
            ['id' => 2, 'name' => 'SEO Optimization', 'description' => 'Improve your site ranking.'],
            ['id' => 3, 'name' => 'Digital Marketing', 'description' => 'Grow your audience online.'],
            ['id' => 4, 'name' => 'Consulting', 'description' => 'Expert advice for your business.'],
        ];

        /**
         * Create a new class instance.
         */
        public function __construct()
        {
            //
        }
        
        public function allService(): array
        {
            return $this->services;
        }
    }
