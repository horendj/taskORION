<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function address(){
      return $this->belongsTo(Address::class);
    }

    public function companies(){
      return $this->belongsToMany(Company::class);
    }

    public function cars(){
      return $this->belongsToMany(Car::class);
    }

}
