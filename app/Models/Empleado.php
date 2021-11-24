<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Seguro;

class Empleado extends Model
{
    use HasFactory;

    // relación uno a uno
    public function roles() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function seguros() {
        return $this->belongsTo(Seguro::class, 'seguro_id');
    }

}
