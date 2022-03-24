<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'completed_projects' => 'required',
            'ongoing_projects' => 'required',
            'companies' => 'required',
            'experience' => 'required'
        ];
    }
}
