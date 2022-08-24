<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
        "user_id", "address", "city", "province", "phone"
    ];

    public function user() {
        return $this->belongsTo("App\User");
    }
}
