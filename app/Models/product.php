<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\order;

class product extends Model    

{    
      use HasFactory; 
    
    protected $fillable = [
    'name',
    's_name',
    'salary',
    'count',
   
];



}
