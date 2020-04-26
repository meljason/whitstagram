<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user() {
        //creating relationship in fetching user id by their foreign key
        return $this->belongsTo(User::class);
    }
}
