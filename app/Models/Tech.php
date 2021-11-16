<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $fillable = ["name", "description", "photo_url"];
}
