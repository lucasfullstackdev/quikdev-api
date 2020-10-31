<?php

namespace App\Http\Controllers;

use Repositories\GenresRepository;

class GenresController extends Controller
{

    /** @var GenresRepository */
    protected $genresRepository;

    public function __construct(GenresRepository $genresRepository)
    {
        $this->genresRepository = $genresRepository;
    }

    public function index()
    {
        return $this->genresRepository->get();
    }
}
