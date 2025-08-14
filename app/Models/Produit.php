<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;
    protected $table = "produit";
    protected $fillable = [
        "name",
        "price",
        "description",
        "company_Id",
        "user_id",
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, "company_Id");
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
