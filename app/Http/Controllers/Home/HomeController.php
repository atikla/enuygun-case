<?php

namespace App\Http\Controllers\Home;

use App\Repository\UserRepositoryInterface;
use App\Repository\ToDoRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Models\ToDo;
use App\Models\User;

class HomeController extends Controller
{

    private $user;
    private $todo;

    public function __construct(UserRepositoryInterface $user, ToDoRepositoryInterface $todo)
    {
        $this->user = $user;
        $this->todo = $todo;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $todo  =$this->todo->all();
        $users = $this->user->getAllOrderedByWithTodo($todo, 'level', 'desc');
        return view('home', ['users' => $users]);
    }
}
