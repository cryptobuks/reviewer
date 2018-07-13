<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Kudos;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Validator;

/**
 * Class KudosController
 * @package App\Http\Controllers\Api
 */
class KudosController extends ApiController
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $kudos = Kudos::all();
        return $this->success($kudos);
    }

    /**
     * @param Request $request
     * @return mixed|\Symfony\Component\HttpFoundation\ParameterBag
     */
    public function store(Request $request)
    {

        //TODO: Need to add validation rule so that recognition_user_id can not be same as auth user.
        //TODO: Need to add validation so the recognition_user_id must be on same team.
        $validator = Validator::make($request->all(), [
            'recognition_user_id' => 'required|integer',
            'message' => 'required|string'
        ]);

        //Throwing a bad request if
        if ($validator->fails()) {
            return $this->badRequest($validator->errors());
        }

        //Get the user specific info I need.
        $user = auth()->user();
        $userId = $user->id;
        $teamId = $user->currentTeam->id;

        //Create the Kudos.
        $kudos = new Kudos();
        $kudos->user_id = $userId;
        $kudos->team_id = $teamId;
        $kudos->recognition_user_id = $request->recognition_user_id;
        $kudos->message = $request->message;
        //TODO: Do I need to confirm that I saved here or am I safe?
        $kudos->save();

        return $this->created($kudos);
    }



    public function show(Kudos $kudos)
    {
//        $teamId = auth()->user()->currentTeam->id;

        $value = $kudos->getUserIdAttribute();

        dd($value);



        //TODO: Need validate that you can only see people in your team.
        return $this->success($kudos);
    }



}
