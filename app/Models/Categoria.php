<?php

namespace App\Models;

use App\Models\productos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
  public function productos()
  {
    return $this->hasMany(productos::class);
  }
  use HasFactory;
}
