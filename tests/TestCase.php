<?php

namespace VendorName\Skeleton\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use VendorName\Skeleton\SkeletonServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'VendorName\\Skeleton\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            SkeletonServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // include_once __DIR__ . '/../database/migrations/create_skeleton_table.php.stub';
        // (new \CreatePackageTable())->up();
    }
}
