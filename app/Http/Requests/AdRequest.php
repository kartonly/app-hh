<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:200|string',
            'about' => 'required|max:1000|string',
            'links' => 'required'
        ];
    }
}
