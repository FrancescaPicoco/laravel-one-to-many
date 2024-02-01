<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = 
    [
      'title',
      'description',
      'img',
      'author',
    ];
    public function types(){
      return $this->belongsTo(Type::class);
    }
}

