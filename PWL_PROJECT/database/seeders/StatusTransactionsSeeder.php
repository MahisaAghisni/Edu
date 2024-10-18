<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('status_transactions')->insert([
            [
                'nama' => 'belum dibayar'
            ],
            [
                'nama' => 'Booking'
            ],
            [
                'nama' => 'selesai'
            ],
            [
                'nama' => 'batal'
            ]
        ]);
    }
}
