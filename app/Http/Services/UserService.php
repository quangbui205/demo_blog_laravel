<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;

class UserService
{
    protected $userRepo;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo =$userRepository;
    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function findById($id)
    {
        return $this->userRepo->findById($id);
    }
}
