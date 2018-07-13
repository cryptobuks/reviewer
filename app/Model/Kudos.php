<?php

namespace App\Model;

//use App\Model\User;
//use App\Model\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kudos extends Model
{
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function recognition()
    {
        return $this->belongsTo(User::class);
    }

}
