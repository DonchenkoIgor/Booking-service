<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['master_id', 'service_id', 'date', 'time', 'duration', 'price'];

    public function master()
    {
        return $this->belongsTo(Master::class, 'master_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
