<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = [
        "description",
        "number",
        "zipcode",
        "district",
        "city",
        "state",
        "country",
        "complement"

    ];
}
