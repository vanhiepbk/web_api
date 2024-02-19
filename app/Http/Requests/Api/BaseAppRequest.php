<?php

namespace App\Http\Requests\Api;

class BaseAppRequest extends \Illuminate\Foundation\Http\FormRequest
{
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $this->validator->errors();

        throw new \Illuminate\Http\Exceptions\HttpResponseException(
            response()->json([
                'errors' => $errors,
                'message' => 'The given data was invalid.',

                'testing' => 'Whatever custom data you want here...',
            ], 422)
        );
    }
}
