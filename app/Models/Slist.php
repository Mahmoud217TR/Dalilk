<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slist extends Model
{
    use HasFactory;

    public function types(){
        return $this->belongsToMany(Stype::class);
    }

    public function sites(){
        return $this->belongsToMany(Site::class);
    }

}
