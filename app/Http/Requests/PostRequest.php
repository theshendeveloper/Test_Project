<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => ['required','string','min:10','max:255'],
            'banner' => ['required','image','max:5120'],
            'video' => ['required','file','mimes:mp4,mov,ogg','max:20480'],
            'content' => ['required','string','min:50'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'banner.max' => 'حداکثر حجم بنر ۵ مگابایت می‌باشد.',
            'video.max' => 'حداکثر حجم ویدئو ۲۰ مگابایت می‌باشد.',
        ];
    }
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'title' => 'عنوان',
            'banner' => 'بنر',
            'video' => 'ویدئو',
            'content' => 'متن',
        ];
    }
}
