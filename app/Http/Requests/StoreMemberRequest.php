<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            'name' => 'required|max:255',
            'designation' => 'required',
            'aboutme' => 'required',
            'image' => 'image|required|mimes:jpeg,bmp,png,jpg',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'name.required' => 'The name field is required !!',
                'designation.required' => 'The designation field is required !!',
                'aboutme.required' => 'The about me field is required !!',
                'image.required' => 'The image field is required !!',
                'image' => 'The image field must be an image !!',
                'image.mimes' => 'The image must be a file of type: :values.',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'name.required' => 'नाम का फील्ड आवश्यक है !!',
                'designation.required' => 'पदनाम फ़ील्ड आवश्यक है !!',
                'aboutme.required' => 'मेरे बारे में फ़ील्ड आवश्यक है !!',
                'image.required' => 'इमेज़ फ़ील्ड आवश्यक है !!',
                'image' => 'इमेज़ फ़ील्ड एक इमेज़ होना चाहिए !!',
                'image.mimes' => 'इमेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
            ];
        }
    }
}
