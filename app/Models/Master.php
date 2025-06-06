<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'position'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'master_id');
    }
}
