<?php

namespace App\Http\Controllers\Movies;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use function App\Http\Controllers\json;
use function redirect;
use function response;
use function view;

use App\Models\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("movies.index", [
            'movies' => Movie::paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view("movies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MovieRequest $request
     * @return RedirectResponse
     */
    public function store(MovieRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $movie = Movie::create($data);
        $movie->save();
        return redirect(route('movies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Movie  $movie
     * @return View
     */
    public function show(Movie $movie): View
    {
        return view("movies.show", [
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Movie $movie
     * @return View
     */
    public function edit(Movie $movie): View
    {
        return view("movies.edit", [
            'movie' => $movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Movie $movie
     * @return View
     */
    public function update(Request $request, Movie $movie): RedirectResponse
    {
        $movie->fill($request->all());
        $movie->save();
        return redirect(route('movies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Movie $movie
     * @return JsonResponse
     */
    public function destroy(Movie $movie): JsonResponse
    {
        try {
            $movie->delete();
            return response()-json([
                'status' => 'success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error!'
            ])->setStatusCode(500);
        }
    }
}
