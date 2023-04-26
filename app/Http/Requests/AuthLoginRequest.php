<?php

use Illuminate\Foundation\Http\FormRequest;

class AuthLoginRequest extends FormRequest
{
  public function rules() {
    return [
      'username'  => 'required|string|min:6|max:255',
      'password'  => 'required|string|min:6'
    ];
  }
}