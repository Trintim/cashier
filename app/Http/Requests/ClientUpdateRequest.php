<?php

namespace App\Http\Requests;

use App\Models\Address;
use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
        $clientRules = [
            'name' => [
                'required', 'min:3'
            ],
            'email' => [
                'required', 'email', 'unique:clients,email,' . $this->client
            ],
            'cpf' => [
                'required', 'string', 'digits:11', 'unique:clients,cpf,' . $this->client
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
                'required', 'numeric', 'digits:7', 'unique:clients,rg,' . $this->client
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
                'required', 'numeric', 'min:2'
            ],
            'plan' => [
                'required'
            ],
            'password' => []
        ];
        $rules = array_merge($clientRules, Address::rules());
        return $rules;
    }
}
