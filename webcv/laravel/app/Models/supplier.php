<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    public $table="suppliers";
    protected $fillable= ['name','email','phone','address','id_user'];

    public function product() 
    {
        return $this->belongsToMany(Products::class)->withPivot('id_supplier');
    }
}
