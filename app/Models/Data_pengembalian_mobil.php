<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Data_pengembalian_mobil extends Model
{
    use HasFactory;
    protected $table = 'data_pengembalian_mobils';
    protected $guarded = [];  

    public function data_mobil(): BelongsTo
    {
        return $this->belongsTo(Data_mobil::class, 'data_mobil_id');
    }

    public function data_peminjaman_mobil(): BelongsTo
    {
        return $this->belongsTo(Data_peminjaman_mobil::class, 'data_peminjaman_mobil_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
