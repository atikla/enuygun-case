<?php

namespace App\Repository\Eloquent;

use App\Models\ToDo;
use App\Repository\ToDoRepositoryInterface ;
use Illuminate\Support\Collection;

class ToDoRepository  extends BaseRepository implements ToDoRepositoryInterface 
{

   /**
    * ToDoRepository constructor.
    *
    * @param Provider $model
    */
   public function __construct(ToDo $model)
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

}