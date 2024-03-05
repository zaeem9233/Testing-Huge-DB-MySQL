<?php

namespace App\Console\Commands;

use App\Models\Customer;
use Illuminate\Console\Command;

class AddCustomers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:customers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to add fake customer in customers table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Customer::factory(10000)->create();
    }
}
