<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Company_data extends Model
{
    use HasFactory;
    protected $table = 'Company_data';
    protected $fillable = [
        'name',              
        'Relations_Officer', 
        'nuber_phone',      
        'email',             
        'Knowledge_transfer', 
    ];
}
