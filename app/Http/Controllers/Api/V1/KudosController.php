<?php

namespace App\Http\Controllers\Api\V1;

use App\Model\Kudos;
use App\Http\Requests\Api\V1\KudosRequest;
use App\Http\Controllers\Api\ApiController;


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
     * @param KudosRequest $request
     * @return mixed|\Symfony\Component\HttpFoundation\ParameterBag
     */
    public function store(KudosRequest $request)
    {
        //Throwing a bad request if
        if ($request->getValidator()->fails()) {
            return $this->badRequest($request->getValidator()->errors());
        }

        //TODO: create kudos with validator data.


//        //TODO: Need to add validation rule so that recognition_user_id can not be same as auth user.
//        //TODO: Need to add validation so the recognition_user_id must be on same team.
//        $validator = Validator::make($request->all(), [
//            'recognitionUserId' => 'required|integer',
//            'message' => 'required|string'
//        ]);
//
//        //Throwing a bad request if
//        if ($validator->fails()) {
//            return $this->badRequest($validator->errors());
//        }
//
//        //Preparing the data.
//        $user = auth()->user();
//        $userId = $user->id;
//        $teamId = $user->currentTeam->id;
//        $recognitionUserId = $request->recognitionUserId;
//        $message = $request->message;
//
//        try {
//            $kudos = new Kudos();
//            $kudos->setUserId($userId)
//                ->setTeamId($teamId)
//                ->setRecognitionUserId($recognitionUserId)
//                ->setMessage($message)
//                ->save();
//            return $this->created($kudos);
//        } catch (\Exception $exception) {
//          return $this->error($exception->getMessage());
//        }

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
