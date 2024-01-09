<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voucer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function customer(){
        return $this->belongsTo(costumer::class);
    }
}
