<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'no_regis_donor' => '102T009807',
            'name' => 'Jason Lionardi',
            'username' => 'jesen9',
            'phone' => '081290140997',
            'email' => 'lionardijason@gmail.com',
            'date_of_birth' => '2002-11-30',
            'nomor_kartu' => '102T009807',
            'gender' => 'M',
            'blood_type' => 'B',
            'rhesus' => '+',
            'password' => bcrypt('jason'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'no_regis_donor' => '4NF94NDF94',
            'name' => 'Lorem Ipsum',
            'username' => 'loremsum',
            'phone' => '1029384756',
            'email' => 'lorem@gmail.com',
            'date_of_birth' => '2000-02-01',
            'nomor_kartu' => '7204T93290',
            'gender' => 'M',
            'blood_type' => 'O',
            'rhesus' => '-',
            'password' => bcrypt('lorem'),
        ]);

//        DB::table('pemeriksaans')->insert([
//            'user_id' => 1,
//            'tensi' => '120/80',
//            'berat_badan' => 65,
//        ]);

        DB::table('pendonorans')->insert([
            'no_pendonoran' => 'B22032000080',
            'waktu_donor' => '2022-03-20 14:18:27',
            'location' => 'PMI CABANG JAKARTA BARAT',
            'user_id' => 1,
            'pendonoran_ke' => 1,
            'petugas_periksa' => 'Bryan',
            'hemoglobin' => 14.6,
            'berat_badan' => 65,
            'tensi' => '120/80',
            'cc_diambil' => 470,
            'kembali_setelah' => '2022-05-19'
        ]);
    }
}
