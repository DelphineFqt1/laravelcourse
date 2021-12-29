<?php

namespace App\Models;

// use App\Models\Vendeur;
use App\Models\Product;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    /*
    public function vendeur() {
        return $this->belongsTo(Vendeur::class);
    }
    */
}
