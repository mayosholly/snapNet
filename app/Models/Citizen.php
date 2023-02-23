<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'gender',
        'address',
        'phone',
        'ward_id',
    ];

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }
}
