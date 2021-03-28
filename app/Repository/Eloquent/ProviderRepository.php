<?php

namespace App\Repository\Eloquent;

use App\Models\Provider;
use App\Repository\ProviderRepositoryInterface;
use Illuminate\Support\Collection;

class ProviderRepository extends BaseRepository implements ProviderRepositoryInterface
{

   /**
    * ProviderRepository constructor.
    *
    * @param Provider $model
    */
   public function __construct(Provider $model)
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