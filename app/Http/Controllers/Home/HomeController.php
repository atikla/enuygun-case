<?php

namespace App\Http\Controllers\Home;

use App\Repository\ProviderRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $userRepository;
  
    public function __construct(ProviderRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd($this->userRepository->all());
        return view('home');
    }
}
