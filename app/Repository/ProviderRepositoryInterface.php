<?php

namespace App\Repository;

use App\Models\Provider;
use Illuminate\Support\Collection;

/**
* Interface ProviderRepositoryInterface
* @package App\Repositories
*/
interface ProviderRepositoryInterface
{
   public function all(): Collection;
}