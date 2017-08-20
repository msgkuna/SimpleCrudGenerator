<?php

use Orchestra\Testbench\TestCase;

class CrudMakeCommandTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return ['Luthfi\CrudGenerator\ServiceProvider'];
    }

    /** @test */
    public function it_can_generate_simple_crud_files()
    {
        $this->artisan('make:crud', ['name' => 'Test', '--no-interaction' => true]);

        $this->assertFileExists(app_path('Test.php'));
        // $this->assertFileExists(app_path('Http/Controllers/TestsController.php'));
        // $this->assertFileExists(resource_path('views/tests/index.blade.php'));
        // $this->assertFileExists(resource_path('views/tests/forms.blade.php'));
        // $this->assertFileExists(base_path('tests/Feature/ManageTestsTest.php'));
        // $this->assertFileExists(base_path('tests/Unit/Models/TestTest.php'));

        exec('rm '.app_path('Test.php'));
        // exec('rm -r '.app_path('Http/Controllers'));
        // exec('rm -r '.resource_path('views/tests'));
        // exec('rm '.base_path('tests/Feature/ManageTestsTest.php'));
        // exec('rm '.base_path('tests/Unit/ModelsTestTest.php'));
    }
}