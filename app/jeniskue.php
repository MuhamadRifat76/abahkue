<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jeniskue extends Model
{
    protected $fillable = ['foto', 'nama', 'harga', 'kategori'];
}
