<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DevController extends Controller
{
    protected array $tables = ['invoices', 'invoices_avoir', 'estimates', 'bills', 'articles'];

    public function composerDump(): void
    {
        \shell_exec('composer dump-autoload');
    }

    public function composerUpdate(): void
    {
        \shell_exec('composer update');
    }

    public function clearTables(): void
    {
        foreach ($this->tables as $name) {
            //if you don't want to truncate migrations
            //if ($name == 'migrations') {
            //continue;
            //}
            //  DB::table($name)->truncate();
        }
    }

    public function storageLink(): void
    {
        Artisan::call('storage:link');
    }

    public function storageUnLink(): void
    {
        \shell_exec('cd public');
        \shell_exec('rm storage');
    }

    public function cleareAll(): void
    {
        Artisan::call('optimize:clear');

        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
    }

    public function cacheAll(): void
    {
        Artisan::call('optimize');
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
    }

    public function migrateAll(): void
    {
        Artisan::call('migrate', [
            '--force' => true,
        ]);
    }

    public function migrateFresh(): void
    {
        Artisan::call('migrate:fresh', [
            '--force' => true,
        ]);
    }

    public function migrateSeed(): void
    {
        Artisan::call('db:seed', [
            '--force' => true,
        ]);
    }

    public function migrateSeedWithClass(string $class): void
    {
        //dd($class);
        Artisan::call('db:seed', [
            '--force' => true,
            '--class' => $class,
        ]);
    }

    public function appDown(): void
    {
        Artisan::call('down');
    }

    public function appUp(): void
    {
        Artisan::call('up');
    }
}
