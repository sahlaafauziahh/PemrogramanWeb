<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'date',
        'start_time',
        'end_time',
        'route',
    ];
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
