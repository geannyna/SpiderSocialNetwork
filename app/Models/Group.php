<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable =['title','description'];

    public function posts() 
    {
        return $this->hasMany(Post::class);
    }
    // se puede poner o el de arriba o ese: protected guarded = [''];
    public function users() 
    {
        return $this->belongsToMany(User::class);
    } 
}
