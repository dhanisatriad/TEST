<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costumer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function voucer(){
        return $this->hasMany(voucer::class);
    }
}
