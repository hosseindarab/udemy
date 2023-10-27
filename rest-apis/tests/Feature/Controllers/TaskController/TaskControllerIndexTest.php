<?php

namespace Tests\Feature\TaskController;

use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class TaskControllerIndexTest extends TestCase
{
    public function test_authenticated_users_can_fetch_the_task_list(): void
    {
        Sanctum::actingAs(User::factory()->create());

        $route = route("tasks.index");
        $response = $this->getJson($route);
        $response->assertOk();
    }

    public function test_unauthenticated_users_can_not_fetch_the_task_lists(): void
    {
        $route = route("tasks.index");
        $response = $this->getJson($route);
        $response->assertUnauthorized();
    }
}