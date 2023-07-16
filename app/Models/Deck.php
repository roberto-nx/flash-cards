<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deck extends Model
{
    
    use HasFactory;
    protected $fillable=[
        'title',
        'description'
    ];


public function card(){
    return $this->hasOne(Card::class);
}
}