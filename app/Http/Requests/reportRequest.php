<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reportRequest extends FormRequest
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
            "title"=>"required|min:2|max:64",
            "description"=>"required|min:32|max:500",
            "action"=>"required|in:warningOnly,warningWithDelete",
            "testId"=>"required|numeric|gt:0"
        ];
    }
}
