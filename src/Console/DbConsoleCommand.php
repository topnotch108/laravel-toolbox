<?php

namespace Guapp\LaravelToolbox\Console;

use Illuminate\Console\Command;

class DbConsoleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:console';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command opens a MySQL console and logs in the database user.';

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
        $user = env("DB_USERNAME");
        $pass = env("DB_PASSWORD");
        $db = env("DB_DATABASE");
        $command = "mysql -u $user -p$pass $db 1>&2";
        exec($command);
    }
}
