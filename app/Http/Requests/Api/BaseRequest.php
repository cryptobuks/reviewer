<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

/**
 * Class BaseRequest
 * @package App\Http\Requests\Api
 * @property Validator $validator
 */
abstract class BaseRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $this->setValidator($validator);
    }

    /**
     * @return Validator
     */
    public function getValidator(): Validator
    {
        return $this->validator;
    }

    /**
     * @param Validator $validator
     * @return BaseRequest
     */
    public function setValidator(Validator $validator): BaseRequest
    {
        $this->validator = $validator;
        return $this;
    }


}
