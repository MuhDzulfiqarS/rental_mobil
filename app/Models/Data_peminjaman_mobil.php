<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Data_peminjaman_mobil extends Model
{
    use HasFactory;
    protected $table = 'data_peminjaman_mobils';
    protected $guarded = [];  

    public function data_mobil(): BelongsTo
    {
        return $this->belongsTo(Data_mobil::class, 'data_mobil_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function data_pengembalian_mobil(): HasMany
    {
        return $this->hasMany(Data_pengembalian_mobil::class);
    }
}
