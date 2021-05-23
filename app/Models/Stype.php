<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stype extends Model
{
    use HasFactory;

    public function sites(){
        return $this->belongsToMany(Site::class);
    }

    public function lists(){
        return $this->belongsToMany(Slist::class);
    }
}
