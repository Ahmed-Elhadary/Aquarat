<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;

    protected $fillable = ["image","image2","image3","image4", "ar_year", "ar_company_name", "ar_details"];

}
