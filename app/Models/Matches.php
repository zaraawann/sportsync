<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    public function activities()
{
    return $this->hasMany(Activity::class);
}

    use HasFactory;
}
