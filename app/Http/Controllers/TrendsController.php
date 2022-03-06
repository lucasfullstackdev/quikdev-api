<?php

namespace App\Http\Controllers;

use Repositories\TrendsRepository;

class TrendsController extends Controller
{
    /** @var TrendsRepository */
    protected $trendsRepository;

    public function __construct(TrendsRepository $trendsRepository)
    {
        $this->trendsRepository = $trendsRepository;
    }

    public function index()
    {
        return $this->trendsRepository->get();
    }
}
