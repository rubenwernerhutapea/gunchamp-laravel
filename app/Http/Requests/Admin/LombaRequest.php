<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LombaRequest extends FormRequest
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
            'user_id' => 'required|exists:user,id',
            'name' => 'required|max:255',
            'poster' => 'required|image',
            'description' => 'required',
            'registration_period' => 'required',
            'registration_fee' => 'required',
            'registration_link' => 'required',
            'categories' => 'required|in:FIKTI,FTI,FSB,FIKOM,FPSIKOLOGI,D3BK,FTSP',
            'sosmed' => 'required',
        ];
    }
}
