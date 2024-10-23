<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    protected $model = Order::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory()->count(10)->create(); 
    }   
}
