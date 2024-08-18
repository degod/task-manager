<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Task\TaskRepository;
use App\Repository\Task\TaskRepositoryInterface;
use App\Repository\Project\ProjectRepository;
use App\Repository\Project\ProjectRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
    }
}
