<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumniProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Non-binary,Other',
            'graduation_year' => 'required|integer|min:1900|max:' . date('Y'),
            'major' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website_portfolio_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'socialmedia_link' => 'nullable|url',
            'phonenumber' => 'nullable|string|max:20',
        ];
    }
}
