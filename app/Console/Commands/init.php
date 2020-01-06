<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Artisan;

class init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize repository';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Initialisation du dépôt en cours...');
        $this->line("\n");
        // $this->confirm('bouyah ??');

        $this->info('Dépendances de Laravel en téléchargement...');

        $bar = $this->output->createProgressBar(1, shell_exec('composer install -q'));
        $bar->start();
        $bar->advance();
        $bar->finish();
        $this->line("\n");
        $this->info('Téléchargement terminé.');
        $this->line("\n");

        $name = $this->choice('What is your name?', ['Migrate', 'Migrate fresh and seeding'], 0);

        // Artisan::call('');
        $this->line($name);

        if ($name === 1) {
            Artisan::call('migrate:fresh --seed');
        } else {
            Artisan::call('migrate');
        }

        if ($this->confirm('Do you wish to continue?')) {
            //
        }
//            line, info, error, question, ask, comment, confirm
    }
}
