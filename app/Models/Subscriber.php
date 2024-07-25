<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'company', 'phone', 'email', 'address', 'service_id', 'groups', 'latitude', 'longitude', 'sonar_id'
    ];

    public function refcodes()
    {
        return $this->hasOne(Refcode::class)->withDefault([
            'refcode' => 'none'
        ]);
    }
}
