<?php

namespace Modules\ProgramHotel\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProgramHotelStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'program_id' => 'required|integer|exists:programs,id',
            'city_id' => 'required|integer|exists:cities,id',
            'hotel_id' => 'required|integer|exists:hotels,id',
            'residence_type' => 'required|string|max:255',
            'num_of_days' => 'required|integer|min:1'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
