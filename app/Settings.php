<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = ['key', 'value'];

    public function getSettings() {
        return Settings::get();
    }
}
