<?php

namespace App\Models;

use App\Models\Vente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    use HasFactory;

    public function ventes() {
        return $this->hasMany(Vente::class);
    }
}
