<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categori extends Model
{
    protected  $fillable = ['nama', 'slug'];

    public function jeniskue()
    {
        return $this->hasMany(jeniskue::class);
    }
}
