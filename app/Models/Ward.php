<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lga_id',
    ];

    public function lga()
    {
        return $this->belongsTo(Lga::class, 'lga_id');
    }

    public function citizen()
    {
        return $this->hasMany(Citizen::class, 'ward_id');
    }
}
