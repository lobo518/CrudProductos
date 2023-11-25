<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{

  public function categoria()
  {
    return $this->belongsTo(Categoria::class);
  }

  protected $fillable = ['nombre', 'descripcion', 'precio', 'categoria_id'];
}
