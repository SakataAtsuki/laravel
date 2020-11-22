<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Hankaku;

class MemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'register')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name_sei' => 'required|max:20',
            'name_mei' => 'required|max:20',
            'nickname' => 'required|max:10',
            'gender' => 'required',
            'password1' => ['required', new Hankaku, 'min:8', 'max:20'],
            'password2' => ['required', new Hankaku, 'min:8', 'max:20', 'same:password1'],
            'email' => 'required|max:200|email|unique:members'
        ];
    }

    public function messages()
    {
        return [
            'name_sei.required' => '　　　　　※氏名（姓）は必須入力です',
            'name_sei.max' => '　　　　　※氏名（姓）は２０文字以内で入力してください',
            'name_mei.required' => '　　　　　※氏名（名）は必須入力です',
            'name_mei.max' => '　　　　　※氏名（名）は２０文字以内で入力してください',
            'nickname.required' => '　　　　　※ニックネームは必須入力です',
            'nickname.max' => '　　　　　※ニックネームは１０文字以内で入力してください',
            'gender.required' => '　　　　　※性別は選択必須です',
            'password1.required' => '　　　　　※パスワードは必須入力です',
            'password1.min' => '　　　　　※パスワードは８〜２０文字で入力してください',
            'password1.max' => '　　　　　※パスワードは８〜２０文字で入力してください',
            'password2.required' => '　　　　　※パスワードは必須入力です',
            'password2.min' => '　　　　　※パスワードは８〜２０文字で入力してください',
            'password2.max' => '　　　　　※パスワードは８〜２０文字で入力してください',
            'password2.same' => '　　　　　※入力した文字が「パスワード」と一致しません',
            'email.required' => '　　　　　※メールアドレスは必須入力です',
            'email.max' => "　　　　　※メールアドレスは\n　　　　　　２００文字以内で入力してください",
            'email.email' => '　　　　　※メールアドレスは正しい形式で入力してください',
            'email.unique' => '　　　　　※このメールアドレスは既に登録されています'
        ];
    }
}
