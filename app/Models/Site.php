<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    public function links(){
        return $this->belongsToMany(Slink::class);
    }

    public function lists(){
        return $this->belongsToMany(Slist::class);
    }

    public function types(){
        return $this->belongsToMany(Stype::class);
    }
}
