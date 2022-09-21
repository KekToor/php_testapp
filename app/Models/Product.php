<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class, 'manufacturers_id');
    }

    public function parttype(){
        return $this->belongsTo(Parttype::class, 'parttypes_id');
    }
}
