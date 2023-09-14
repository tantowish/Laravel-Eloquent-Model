<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use Carbon\Carbon;
use Database\Factories\BukuFactory;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $formattedDate = Carbon::createFromFormat('d/m/Y', '20/3/2012')->format('Y-m-d');

        // Buku::create([
        //     'judul' => 'The Ikigai',
        //     'penulis' => 'Tantowi Shah',
        //     'harga' => 20000,
        //     'tgl_terbit' => $formattedDate
        // ]);
        Buku::factory(10)->create();
    }
}
