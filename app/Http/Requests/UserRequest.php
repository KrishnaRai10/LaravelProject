<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'password_confirmation'=>'required',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Bro enter the name',
            'email.required'=>'Bro enter the email',
            'password.required'=>'Bro enter the Password',
            'password_confirmation.required'=>'Bro reenter the :attribute  ',
        ];
    }
    public function attributes(){
        return[
            'name'=>'Bro_name',
            'email'=>'Bro_email',
            'password'=>'Bro_password',
            'password_confirmation'=>'Bro_confirm_password',
        ];
    }
    protected function prepareForValidation():void{
        $this->merge([
            // 'name'=> strtoupper($this->name),
            'name'=> Str::slug($this->name),
        ]);
    }
}
