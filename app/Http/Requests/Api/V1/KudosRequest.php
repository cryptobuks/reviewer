<?php

namespace App\Http\Requests\Api\V1;

use App\Rules\CantTargetYourself;
use App\Http\Requests\Api\BaseRequest;

/**
 * Class KudosRequest
 * @package App\Http\Requests\Api\V1
 */
class KudosRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'recognitionUserId' => [
                'required',
                'exists:users,id',
                new CantTargetYourself()
            ],
            'message' => 'required|string'
        ];
    }

}
