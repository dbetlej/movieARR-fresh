<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\Movie;

class MoviesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A movie create test.
     *
     * @return void
     */
    public function test_store_movie()
    {
        // creating movie
        $movie = Movie::factory()->create();

        // check do movie is created
        $this->assertIsObject($movie);
        $this->assertModelExists($movie);
    }

    /**
     * A movie change test.
     *
     * @return void
     */
    public function test_update_movie()
    {
        // creating movie
        $movie = Movie::factory()->create();

        // change movie data
        $movie->name = 'Positive test';
        $movie->save();

        // check do movie is updated
        $this->assertDatabaseHas('movies', [
            'name' => 'Positive test',
        ]);
    }

    /**
     * A delete movie test
     *
     * @return void
     */
    public function test_delete_movie()
    {
        // creating movie
        $movie = Movie::factory()->create();

        // delete movie
        $movie->delete();

        // check do movie is missing
        $this->assertModelMissing($movie);
    }
}
