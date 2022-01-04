<?php

namespace App\Models;

use App\Models\Vente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'stock', 'type', 'image'];

    public function ventes() {
        return $this->hasMany(Vente::class);
    }
}
