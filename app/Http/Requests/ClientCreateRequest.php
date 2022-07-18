<?php

namespace App\Http\Requests;

use App\Models\Address;
use Illuminate\Foundation\Http\FormRequest;

class ClientCreateRequest extends FormRequest
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
    public function rules(): array
    {
        $clientRules = [
            'name' => [
                'required', 'min:3'
            ],
            'email' => [
                'required', 'email', 'unique:clients,email'
            ],
            'cpf' => [
                'required', 'string', 'digits:11'
            ],
            'profession' => [
                'required', 'min:3'
            ],
            'relationStatus' => [
                'required'
            ],
            'naturality' => [
                'required', 'min:3'
            ],
            'rg' => [
                'required', 'string', 'min:7'
            ],
            'orgExpRG' => [
                'required', 'min:3'
            ],
            'phone' => [
                'required', 'min:9'
            ],
            'zip_code' => [
                'required', 'min:8'
            ],
            'addrs' => [
                'required', 'min:3'
            ],
            'country' => [
                'required', 'min:3'
            ],
            'state' => [
                'required', 'min:2'
            ],
            'city' => [
                'required', 'min:3'
            ],
            'ngbh' => [
                'required', 'min:3'
            ],
            'complement' => [
                'required', 'min:3'
            ],
            'number' => [
                'required', 'string', 'min:3'
            ],
            'plan' => [],
            'password' => [
                'required', 'min:8'
            ]
        ];
        $rules = array_merge($clientRules, Address::rules());
        return $rules;
    }
}
