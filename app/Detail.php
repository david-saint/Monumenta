<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{

    protected $fillable = [ 'age', 'phone', 'address', 'bio', 'facebook', 'twitter', 'google', 'linkedin'];

    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
