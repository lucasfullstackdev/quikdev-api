<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Repositories\MoviesRepository;
use Repositories\TrendsRepository;

class MoviesController extends Controller
{
    /** @var MoviesRepository */
    protected $moviesRepository;

    /** @var TrendsRepository */
    protected $trendsRepository;

    public function __construct(
        MoviesRepository $moviesRepository,
        TrendsRepository $trendsRepository
    ) {
        $this->moviesRepository = $moviesRepository;
        $this->trendsRepository = $trendsRepository;
    }

    public function index(Request $request)
    {
        if (count($request->all())) {
            return $this->moviesRepository->findByName($request->all());
        }

        return $this->trendsRepository->get();
    }

    public function genre($id)
    {
        return $this->moviesRepository->findByGenre($id);
    }

    public function show($id)
    {
        return  $this->moviesRepository->find($id);
    }
}
