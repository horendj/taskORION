<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  public function people(){
    return $this->belongsToMany(Person::class);
  }
}
