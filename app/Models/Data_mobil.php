<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Data_mobil extends Model
{
    use HasFactory;
    protected $table = 'data_mobils';
    protected $guarded = [];  

    public function data_peminjaman_mobil(): HasMany
    {
        return $this->hasMany(Data_peminjaman_mobil::class);
    }

    public function data_pengembalian_mobil(): HasMany
    {
        return $this->hasMany(Data_pengembalian_mobil::class);
    }
}
