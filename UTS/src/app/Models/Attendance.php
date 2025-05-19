<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'driver_id',
        'date',
        'check_in',
        'check_out',
        'status',
    ];
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
