<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage() 
    {
        $imagePath = ($this->image) ?  $this->image : 'profile/s1CCy51zBb32vcnNQHTIyrTkRaqQecrotMrJ7TGZ.jpeg';
        return '/storage/' . $imagePath;
    }

    public function user() 
    {
        //creating relationship in fetching user id by their foreign key
        return $this->belongsTo(User::class);
    }
}
