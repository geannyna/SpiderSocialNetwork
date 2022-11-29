<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable =['title','description'];

    // se puede poner o el de arriba o ese: protected guarded = ['']; 
}
