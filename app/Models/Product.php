<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['merchant_id','title', 'description','price'];

    public function user()
    {
        return $this->belongsTo(Merchant::class);
    }
}
