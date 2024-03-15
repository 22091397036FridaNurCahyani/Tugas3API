<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_contact', 'street', 'city', 'province', 'country', 'postal_code'];

}
