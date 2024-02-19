<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class);
}
protected $fillable = ['sport', 'availability'];
public function availabilityArray()
{
    return explode(', ', $this->availability);
}


}
