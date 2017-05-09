<?php

namespace Scool\Enrollment\Providers;

use Acacha\Names\Providers\NamesServiceProvider;
use Acacha\Stateful\Providers\StatefulServiceProvider;
use Illuminate\Support\ServiceProvider;
use Scool\Enrollment\ScoolEnrollment;

/**
 * Class EnrollmentServiceProvider
 * @package Scool\Enrollment\Providers
 */
class EnrollmentServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function register()
    {
        if (!defined('SCOOL_ENROLLMENT_PATH')) {
            define('SCOOL_ENROLLMENT_PATH', realpath(__DIR__.'/../../'));
        }

        $this->registerNamesServiceProvider();


        $this->registerStatefulEloquentServiceProvider();
        $this->app->bind(\Scool\Enrollment\Repositories\EnrollmentRepository::class, \Scool\Enrollment\Repositories\EnrollmentRepositoryEloquent::class);
        $this->app->bind(\Scool\Enrollment\Repositories\EnrollmentStudySubmoduleRepository::class, \Scool\Enrollment\Repositories\EnrollmentStudySubmoduleRepositoryEloquent::class);
//        $this->app->bind(StatsRepositoryInterface::class,function() {
//            return new CacheableStatsRepository(new StatsRepository());
//        });

    }


    /**
     *
     */
    public function boot()
    {
        $this->loadMigrations();
        $this->publishFactories();
        $this->publishConfig();
        $this->defineRoutes();
        $this->loadViews();
        //$this->publishTests();
    }

    /*
    * Define the curriculum routes.
    */
    /**
     *
     */
    protected function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');
            $router->group(['namespace' => 'Scool\Enrollment\Http\Controllers'], function () {
                require __DIR__ . '/../Http/routes.php';
            });
        }
    }

    /**
     * Publish files in folder views.
     */
    private function loadViews()
    {
        $this->loadViewsFrom(SCOOL_ENROLLMENT_PATH . '/resources/views', 'enrollment');
    }

    /**
     * Publish files in Folder Migrations
     */
    private function loadMigrations()
    {
        $this->loadMigrationsFrom(SCOOL_ENROLLMENT_PATH . '/database/migrations');
    }

    /**
     * Publish Factories
     */
    private function publishFactories()
    {
        $this->publishes(
            ScoolEnrollment::factories(),"scool_enrollment"
        );
    }

    /**
     *  Publish Config file
     */
    private function publishConfig() {
        $this->publishes(
            ScoolEnrollment::configs(),"scool_enrollment"
        );
        $this->mergeConfigFrom(
            SCOOL_ENROLLMENT_PATH . '/config/enrollment.php', 'scool_enrollment'
        );
    }

    /**
     * Publish Tests Files
     */
    // Todo Test
//    public function publishTests()
//    {
//        $this->publishes(
//            [
//                SCOOL_ENROLLMENT_PATH .'/tests/EnrollmentTest.php' => 'tests/EnrollmentTest.php'
//            ], "scool_enrollment"
//        );
//    }

    /**
     * Register Acacha Names
     */
    protected function registerNamesServiceProvider()
    {
        $this->app->register(NamesServiceProvider::class);
    }

    /**
     * Register Stateful Eloquent
     */
    protected function registerStatefulEloquentServiceProvider()
    {
        $this->app->register(StatefulServiceProvider::class);
    }
}
