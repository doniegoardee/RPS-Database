<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BackupDatabase extends Command
{
    protected $signature = 'db:backup';
    protected $description = 'Backup the database to a .sql file';

    public function handle()
    {
        $filename = 'backup-' . date('Y-m-d_H-i-s') . '.sql';
        $path = base_path('database');


        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');
        $port = config('database.connections.mysql.port');

       $mysqldumpPath = 'C:\xampp\mysql\bin\mysqldump.exe';
$command = "\"{$mysqldumpPath}\" --user={$username} --password={$password} --host={$host} --port={$port} {$database} > \"{$path}\\{$filename}\"";

        $result = null;
        $output = null;

        exec($command, $output, $result);

        if ($result === 0) {
            $this->info("✅ Backup successful: {$filename}");
        } else {
            $this->error("❌ Backup failed. Please check your database credentials or mysqldump installation.");
        }
    }
}
