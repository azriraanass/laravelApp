<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Produit extends Model
    {
        use HasFactory;
        protected $table = 'produit';
        protected $fillable = ['name', 'price', 'description', 'company_Id'];

        public function company()
        {
            return $this->belongsTo(Company::class,'company_Id');
        }
    }
