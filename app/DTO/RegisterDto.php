<?php

namespace App\DTO;
use Illuminate\Http\Request;

class RegisterDto
{
    public function __construct(

        public string $name,
        public string $surname,
        public string $phone,
        public string $email,
        public string $password

    )
    {}
    public static function fromRequestDto(Request $request): RegisterDto {
        return  new self(
            name: $request->name,
            surname: $request->surname,
            phone:$request->phone,
            email: $request->email,
            password: $request->password
        );
    }
    public function toArray()
    {
        return [
            'name' => $this->name,
            'surname' => $this->surname,
            'phone'=> $this->phone,
            'email'=>$this->email,
            'password'=>$this->password
        ];
    }



}






