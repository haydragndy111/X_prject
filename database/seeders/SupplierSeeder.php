<?php

namespace Database\Seeders;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            'name'=>'supplier',
            'email'=>'supplier@gmail.com',
        ]);
    }
}
