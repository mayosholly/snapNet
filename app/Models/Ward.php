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
        $this->belongsTo(Lga::class, 'lga_id');
    }

    public function citizen()
    {
        $this->hasMany(Citizen::class, 'ward_id');
    }
}
