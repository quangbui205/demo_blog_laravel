<?php


namespace App\Http\Repositories;


use App\User;

class UserRepository
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user=$user;
    }

    public function getAll()
    {
        return $this->user->all();
    }

    public function findById($id)
    {
        return $this->user->findOrFail($id);
    }
}
