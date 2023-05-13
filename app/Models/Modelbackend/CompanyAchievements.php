<?php

namespace App\Models\Modelbackend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAchievements extends Model
{
    use HasFactory;
    protected $fillable=["clients","employee","since"];
}
