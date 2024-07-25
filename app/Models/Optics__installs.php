<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optics__installs extends Model
{
    use HasFactory;

    protected $fillable = ['sonar_id', 'name', 'address', 'optics__project_id', 'optics__status_id', 'notes'];

    public function optics_status()
    {
        return $this->hasOne(optics__project_status::class, 'id', 'optics__status_id');
    }
    public function optics_project()
    {
        return $this->hasOne(optics__projects::class, 'id', 'optics__project_id');
    }
}
