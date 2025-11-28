<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSQLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = database_path('sql/employees_seed.sql');

        if (!file_exists($file)) {
            throw new \Exception("No s'ha trobat el fitxer SQL: $file");
        }

        $sql = file_get_contents($file);
        
        DB::unprepared($sql);
    }
}
