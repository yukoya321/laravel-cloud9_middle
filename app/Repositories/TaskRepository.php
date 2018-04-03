<?php
namespace App\Repositories;

use App\User;

class TaskRepository
{   
    
    protected $user;
    
    
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    /**
     * 指定ユーザーの全タスク取得
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}