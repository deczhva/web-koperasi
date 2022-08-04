<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seragam extends Model
{
    use HasFactory;

    //tambahkan kode berikut
    protected $fillable = [
        'seragam', 'harga', 'ukuran'
    ];
}
