<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            [
                'courses_name' => 'Pendidikan Agama dan Budi Pekerti',
                'courses_code' => 'CR001',
            ],
            [
                'courses_name' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'courses_code' => 'CR002',
            ],
            [
                'courses_name' => 'Bahasa Indonesia',
                'courses_code' => 'CR003',
            ],
            [
                'courses_name' => 'Matematika',
                'courses_code' => 'CR004',
            ],
            [
                'courses_name' => 'Sejarah Indonesia',
                'courses_code' => 'CR005',
            ],
            [
                'courses_name' => 'Bahasa Inggris',
                'courses_code' => 'CR006',
            ],
            [
                'courses_name' => 'Seni Budaya',
                'courses_code' => 'CR007',
            ],
            [
                'courses_name' => 'Kewirausahaan',
                'courses_code' => 'CR008',
            ],
            [
                'courses_name' => 'Pendidikan Jasmani, Olah Raga dan Kesehatan',
                'courses_code' => 'CR009',
            ],
            [
                'courses_name' => 'Simulasi Digital',
                'courses_code' => 'CR010',
            ],
            [
                'courses_name' => 'Fisika',
                'courses_code' => 'CR011',
            ],
            [
                'courses_name' => 'Sistem Komputer',
                'courses_code' => 'CR012',
            ],
            [
                'courses_name' => 'Teknik Kerja Bengkel',
                'courses_code' => 'CR013',
            ],
            [
                'courses_name' => 'Teknik Elektronika Dasar',
                'courses_code' => 'CR014',
            ],
            [
                'courses_name' => 'Pemrograman Dasar',
                'courses_code' => 'CR015',
            ],
            [
                'courses_name' => 'Teknik Microprosessor',
                'courses_code' => 'CR016',
            ],
            [
                'courses_name' => 'Teknik Listrik',
                'courses_code' => 'CR017',
            ],
            [
                'courses_name' => 'Dasar Sistem Telekomunikasi',
                'courses_code' => 'CR018',
            ],
            [
                'courses_name' => 'Teknik Instalasi Jaringan Akses Radio (JARLOKAR)',
                'courses_code' => 'CR019',
            ],
            [
                'courses_name' => 'Teknik Instalasi Jaringan Akses Fiber (JARLOKAF)',
                'courses_code' => 'CR020',
            ],
            [
                'courses_name' => 'Teknik Instalasi Jaringan Akses Tembaga (JARLOKAT)',
                'courses_code' => 'CR021',
            ],
            [
                'courses_name' => 'Instalasi di Pelanggan (CPE)',
                'courses_code' => 'CR022',
            ],
            [
                'courses_name' => 'Instalasi VSAT',
                'courses_code' => 'CR023',
            ],
            [
                'courses_name' => 'Merancang Jaringan Akses Telekomunikasi',
                'courses_code' => 'CR024',
            ],
            [
                'courses_name' => 'Kimia',
                'courses_code' => 'CR025',
            ],
            [
                'courses_name' => 'Bahasa Mandarin',
                'courses_code' => 'CR026',
            ]
            ]);

    }
}
