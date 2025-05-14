<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
			'no_order' => 'string',
			'type' => 'string',
			'date_order' => 'string',
			'no_container' => 'string',
			'no_kapal' => 'string',
			'no_gudang' => 'string',
			'loading' => 'string',
			'destination' => 'string',
			'status' => 'string',
			'keterangan' => 'string',
        ];
    }
}
