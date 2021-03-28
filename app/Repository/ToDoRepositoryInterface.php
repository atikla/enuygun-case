<?php

namespace App\Repository;

use App\Models\Users;
use Illuminate\Support\Collection;

/**
* Interface UserRepositoryInterface 
* @package App\Repositories
*/
interface ToDoRepositoryInterface 
{
   public function all(): Collection;
}