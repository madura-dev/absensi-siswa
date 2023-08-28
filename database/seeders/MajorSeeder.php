<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::insert([
            [
                'major_name' => 'Administrasi Perkantoran',
                'major_code' => 'MJ001',
                'major_alias' => 'AP',
            ], [
                'major_name' => 'Akutansi',
                'major_code' => 'MJ002',
                'major_alias' => 'AK',
            ], [
                'major_name' => 'Farmasi',
                'major_code' => 'MJ003',
                'major_alias' => 'FR',
            ], [
                'major_name' => 'Keperawatan',
                'major_code' => 'MJ004',
                'major_alias' => 'KP',
            ], [
                'major_name' => 'Multimedia',
                'major_code' => 'MJ005',
                'major_alias' => 'MM',
            ], [
                'major_name' => 'Pemasaran',
                'major_code' => 'MJ006',
                'major_alias' => 'PM',
            ], [
                'major_name' => 'Perhotelan',
                'major_code' => 'MJ007',
                'major_alias' => 'PH',
            ], [
                'major_name' => 'Tata Boga',
                'major_code' => 'MJ008',
                'major_alias' => 'TB',
            ], [
                'major_name' => 'Rekayasa Perangkat Lunak',
                'major_code' => 'MJ009',
                'major_alias' => 'RPL',
            ], [
                'major_name' => 'Tata Busana',
                'major_code' => 'MJ010',
                'major_alias' => 'TBA',
            ], [
                'major_name' => 'Keuangan Syariah',
                'major_code' => 'MJ011',
                'major_alias' => 'KSY',
            ], [
                'major_name' => 'Tata Rias',
                'major_code' => 'MJ012',
                'major_alias' => 'TRS',
            ], [
                'major_name' => 'Teknik Komputer Jaringan',
                'major_code' => 'MJ013',
                'major_alias' => 'TKJ',
            ]
        ]);
    }
}
