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

    public function show($id)
    {
        return 'listar dados do filme selecionado';
    }
}
