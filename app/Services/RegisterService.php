<?php
namespace App\Services;

use App\Repositories\RegisterRepository;

class RegisterService{

    public function __construct(
        protected RegisterRepository $registerRepository
    ) {
    }
    public function storeRegister($data){
        // dd($data->toArray());
        return $this->registerRepository->register($data->toArray());
    }
}

