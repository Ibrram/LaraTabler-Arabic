<?php

namespace Piro\LaraTabler;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class LaraTablerInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laratabler:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish LaraTabler Files then install Laravel UI and replace UI Auth views with the Tabler one';

    protected $views = [
        'login.blade.php'       => 'login.blade.php',
        'register.blade.php'    => 'register.blade.php',
        'verify.blade.php'      => 'verify.blade.php',
        'email.blade.php'       => 'passwords/email.blade.php',
        'reset.blade.php'       => 'passwords/reset.blade.php',
        'confirm.blade.php'     => 'passwords/confirm.blade.php'
    ];


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Publishing Tabler admin Files');

        Artisan::call('vendor:publish --tag=LaraTabler');

        $this->info('Install Laravel/UI (using php artisan ui:auth --force)');

        Artisan::call('ui:auth --force');

        $this->info('Replace the UI auth viwes with the Tabler one');

        $this->exportViews();

        $this->warn('All is done you can point a route to (LaraTabler.home) view');
    }

    /**
     * Export the authentication views.
     *
     * @return void
     */
    protected function exportViews()
    {
        foreach ($this->views as $key => $value) {
            copy(__DIR__.'/../Auth/'.$key, $this->getViewPath('auth/' . $value));
        }
    }


    /**
     * Get full view path relative to the application's configured view path.
     *
     * @param  string  $path
     * @return string
     */
    protected function getViewPath($path)
    {
        return implode(DIRECTORY_SEPARATOR, [
            config('view.paths')[0] ?? resource_path('views'), $path,
        ]);
    }
}
