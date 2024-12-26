<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['firstName', 'lastName', 'email', 'password', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
