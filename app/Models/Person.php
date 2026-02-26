<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids; // Import Trait UUID
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory, HasUuids; // Tambahkan HasUuids di sini

    protected $fillable = [
        'name',
        'id_number',
        'category',
        'prodi',
        'faculty',
        'image'
    ];

    // Opsional: Jika ingin memastikan tipe ID adalah string
    protected $keyType = 'string';
    public $incrementing = false;
}