<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserRepository{

    /**
     * @var Model
     * */
    protected $user;

    /**
     * User Repository Constructor
     * @param User $user
     */
    public function __construct(User $user){
        $this->$user = $user;
    }

}
