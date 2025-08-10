<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = ['name', 'location', 'createYear'];

    public function products()
    {
        return $this->hasMany(Produit::class, 'company_Id');
    }

    
}
