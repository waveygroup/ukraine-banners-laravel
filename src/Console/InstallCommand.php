<?php

namespace Wavey\UkraineBanners\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ukraine-banners:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Ukraine Banners components and resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'ukraine-banners-config', '--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'ukraine-banners-views', '--force' => true]);

        $this->line('');
        $this->info('Ukraine Banners successfully installed.');
        $this->comment('Please add <x-ukraine-banner></x-ukraine-banner> at the bottom of your layout before the </body> tag.');
    }
}
