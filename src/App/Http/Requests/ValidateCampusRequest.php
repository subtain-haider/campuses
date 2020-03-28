<?php

namespace Sibtain\Campuses\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCampusRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
