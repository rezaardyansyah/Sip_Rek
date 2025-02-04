<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id_role';
    protected $fillable = ['nm_role'];

    // Relasi ke User
    public function users()
    {
        return $this->hasMany(User::class, 'role_id_role');
    }
}
