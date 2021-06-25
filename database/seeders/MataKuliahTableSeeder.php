<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matakuliah = [
            [
                "name"       => "Sistem Jaringan Komputer",
                "dosen"        => "Anang Pramono, S.Kom, M.M",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Pemrograman Berorientasi Objek",
                "dosen"      => "Aris Sudaryanto, S.St, MT",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name"       => "Rekayasa Perangkat Lunak",
                "dosen"      => "Ahmad Habib, S.Kom, M.M ",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Matematika Diskrit",
                "dosen" => "Elsen Ronando, S.Si., M.Si., M.Sc",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Kecerdasan Buatan",
                "dosen" => "Elvianto Dwi Hartono, ST, M.Kom, M.M",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Manajemen Proyek Perangkat Lunak",
                "day" => "Intan Dzikria,S.Kom., M.I.M",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ];

        MataKuliah::insert($matakuliah);
    }
}
