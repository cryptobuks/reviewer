<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Spark\Team as SparkTeam;

class Team extends SparkTeam
{
    use SoftDeletes;

    public function kudos()
    {
        return $this->hasMany(Kudos::class);
    }
}
