<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name'];

    public function adresses()
    {
        return $this->hasMany(Adress::class);
    }
    
    public function careers()
    {
        return $this->hasMany(Career::class);
    }
}
