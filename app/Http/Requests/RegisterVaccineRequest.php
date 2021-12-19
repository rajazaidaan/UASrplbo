<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterVaccineRequest extends FormRequest
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
            'fullname' => 'required|max:255',
            'email' => 'required|email',
            'sex' => 'required',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'vaccine_doses' => ['required', Rule::unique('participants')->where('nik', $this->nik)],
            'vaccine_id' => 'required',
            'nik' => 'required|numeric|digits_between:1,18'
            
        ];
    }

    public function messages()
    {
        return[
            'vaccine_doses.unique' => 'Kamu sudah pernah mendaftar'
        ];
    }
}
