<?php

namespace App\Model;

//use App\Model\User;
//use App\Model\Team;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Model\Kudos
 *
 * @property int $id
 * @property int $user_id
 * @property int $team_id
 * @property int $recognition_user_id
 * @property string $message
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Model\User $recognition
 * @property-read \App\Model\Team $team
 * @property-read \App\Model\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Kudos onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereRecognitionUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Kudos whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Kudos withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Kudos withoutTrashed()
 * @mixin \Eloquent
 */
class Kudos extends Model
{
    use SoftDeletes;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        if(Auth::check()) {
            $user = auth()->user();
            $this->setUserId($user->id);
            $this->setTeamId($user->currentTeam->id);
        }
    }

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


    /*** Getters and Setters ***/

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Kudos
     */
    public function setId(int $id): Kudos
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return Kudos
     */
    public function setUserId(int $user_id): Kudos
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeamId(): int
    {
        return $this->team_id;
    }

    /**
     * @param int $team_id
     * @return Kudos
     */
    public function setTeamId(int $team_id): Kudos
    {
        $this->team_id = $team_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecognitionUserId(): int
    {
        return $this->recognition_user_id;
    }

    /**
     * @param int $recognition_user_id
     * @return Kudos
     */
    public function setRecognitionUserId(int $recognition_user_id): Kudos
    {
        $this->recognition_user_id = $recognition_user_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Kudos
     */
    public function setMessage(string $message): Kudos
    {
        $this->message = $message;
        return $this;
    }

}
