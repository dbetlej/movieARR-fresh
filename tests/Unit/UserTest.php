<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A user create test.
     *
     * @return void
     */
    public function test_store_user()
    {
        // creating user
        $user = User::factory()->create();

        // check do user is created
        $this->assertIsObject($user);
        $this->assertModelExists($user);
    }

    /**
     * A user change test.
     *
     * @return void
     */
    public function test_update_user()
    {
        // creating user
        $user = User::factory()->create();

        // change user data
        $user->name = 'Positive test';
        $user->save();

        // check do user is updated
        $this->assertDatabaseHas('users', [
            'name' => 'Positive test',
        ]);
    }

    /**
     * A delete user test
     *
     * @return void
     */
    public function test_delete_user()
    {
        // creating user
        $user = User::factory()->create();

        // delete user
        $user->delete();

        // check do user is missing
        $this->assertModelMissing($user);
    }
}
