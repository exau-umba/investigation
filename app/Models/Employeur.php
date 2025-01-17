<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'employeur',
    ];

    public function sanctions()
    {
        return $this->hasMany(Sanction::class);
    }
}