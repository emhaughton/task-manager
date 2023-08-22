<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use PDO;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crear base de datos';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $type = config('database.default') ?? 'mysql';
            $collation = "CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
            $nameDatabase = config('database.connections.mysql.database') ?? 'task_manager';

            $crearbd = DB::connection($type)
                        ->select("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '".$nameDatabase."'");

            if(empty($crearbd)) {
                DB::connection($type)->select('CREATE DATABASE '. $nameDatabase .' '.$collation);
                $this->info("La Base de Datos '$nameDatabase' de tipo '$type' con Cotejamiento '$collation' ha sido creada Correctamente ! ");
            }
            else {
                $this->info("La Base de Datos con el nombre '$nameDatabase' ya existe ! ");
            }

        }

        catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
