<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=["main_category_id","ar_name","ar_details","image"];

    public function maincategory()
    {
        return $this->belongsTo("\App\Models\Modelbackend\MainCategory");
    }

}
