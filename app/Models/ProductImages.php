<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function setFilenamesAttribute($value){
        $this->attributes['image_name'] = json_encode($value);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
