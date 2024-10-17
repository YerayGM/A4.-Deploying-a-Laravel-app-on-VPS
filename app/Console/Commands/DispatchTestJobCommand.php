<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TestJob;  // Asegúrate de importar la clase del trabajo

class DispatchTestJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:test-job';  // Firma del comando

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch a test job';  // Descripción del comando

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Despacha el trabajo a la cola
        dispatch(new TestJob());

        // Muestra un mensaje en la consola
        $this->info('Test job dispatched.');
    }
}
