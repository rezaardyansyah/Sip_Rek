<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisions';
    protected $primaryKey = 'id_divisi';
    protected $fillable = ['nm_divisi'];

    // Relasi ke User
    public function users()
    {
        return $this->hasMany(User::class, 'divisi_id_divisi');
    }
}
