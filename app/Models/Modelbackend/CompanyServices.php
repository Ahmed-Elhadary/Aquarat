<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyServices extends Model
{
    use HasFactory;
    protected $fillable=["ar_name","ar_details","image"];

}
