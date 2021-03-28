<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\UserRepositoryInterface ;
use Illuminate\Support\Collection;

class UserRepository  extends BaseRepository implements UserRepositoryInterface 
{

   /**
    * UserRepository constructor.
    *
    * @param Provider $model
    */
   public function __construct(User $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }

    /**
    * @return Collection
    */
    public function getAllOrderedByWithTodo($todo, $column, $order = 'asc'): Collection
    {
        $users = $this->model->orderBy($column, $order)->get();    
        $todo = $todo->map(function($job) {
            $job->totalTime =  ($job->difficulty * $job->duration);
           return $job;
        })->sortByDesc(function ($job) {
            return $job->difficulty * $job->duration;
        });
        $arrays = $todo->chunk($users->count())->toArray();
        $users =  $users->map(function($user, $key) use ($arrays){
            $userToDo = collect();
            $total = 0;
            foreach ($arrays as $array) {
                $array = array_values($array);
                if(isset($array[$key])) {
                    $userToDo->push($array[$key]);
                    $total += $array[$key]['totalTime'];
                }
            }
            $user->totalTime = $total;
            $user->todo = $userToDo;
            return $user;
        });
        return $users;
    }
}