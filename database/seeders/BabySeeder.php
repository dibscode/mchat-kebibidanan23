<?php

namespace Database\Seeders;

use App\Models\Baby;
use Illuminate\Database\Seeder;

class BabySeeder extends Seeder
{
    public function run()
    {
        $babies = [
            [
                'nama_bayi' => 'Aisyah Putri',
                'nama_ibu' => 'Siti Aminah',
                'nama_ayah' => 'Muhammad Yasin',
                'alamat_lengkap' => 'Jawa Timur, Surabaya, Rungkut, Kalirungkut, RT 01/RW 01',
                'tanggal_lahir' => '2023-05-01',
                'nilai_total' => 5,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Budi Pratama',
                'nama_ibu' => 'Dewi Sartika',
                'nama_ayah' => 'Agus Pratama',
                'alamat_lengkap' => 'Jawa Barat, Bandung, Kiaracondong, Babakan Sari, RT 02/RW 02',
                'tanggal_lahir' => '2023-04-15',
                'nilai_total' => 3,
                'status' => 'Kemungkinan GPPH'
            ],
            [
                'nama_bayi' => 'Citra Permata',
                'nama_ibu' => 'Anisa Widya',
                'nama_ayah' => 'Bagus Setiawan',
                'alamat_lengkap' => 'Jawa Tengah, Semarang, Pedurungan, Kalicari, RT 03/RW 03',
                'tanggal_lahir' => '2023-03-30',
                'nilai_total' => 4,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Dani Saputra',
                'nama_ibu' => 'Fatimah Zahra',
                'nama_ayah' => 'Ahmad Saputra',
                'alamat_lengkap' => 'Jawa Timur, Malang, Sukun, Gadang, RT 04/RW 04',
                'tanggal_lahir' => '2023-02-10',
                'nilai_total' => 6,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Eka Pradana',
                'nama_ibu' => 'Ika Wulandari',
                'nama_ayah' => 'Pradana Wijaya',
                'alamat_lengkap' => 'Jawa Barat, Bekasi, Pondok Gede, Jatibening, RT 05/RW 05',
                'tanggal_lahir' => '2023-01-25',
                'nilai_total' => 2,
                'status' => 'Kemungkinan GPPH'
            ],
            [
                'nama_bayi' => 'Fitrah Maulana',
                'nama_ibu' => 'Sri Rahayu',
                'nama_ayah' => 'Maulana Yusuf',
                'alamat_lengkap' => 'Sumatera Utara, Medan, Medan Kota, Pasar Baru, RT 06/RW 06',
                'tanggal_lahir' => '2023-01-10',
                'nilai_total' => 7,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Gilang Pratama',
                'nama_ibu' => 'Ratna Sari',
                'nama_ayah' => 'Pratama Wirawan',
                'alamat_lengkap' => 'Jawa Timur, Surabaya, Kenjeran, Bulak Banteng, RT 07/RW 07',
                'tanggal_lahir' => '2023-01-01',
                'nilai_total' => 5,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Hana Qatrunnada',
                'nama_ibu' => 'Fadillah Amalia',
                'nama_ayah' => 'Muhammad Irfan',
                'alamat_lengkap' => 'Jawa Tengah, Solo, Laweyan, Pajang, RT 08/RW 08',
                'tanggal_lahir' => '2022-12-15',
                'nilai_total' => 3,
                'status' => 'Kemungkinan GPPH'
            ],
            [
                'nama_bayi' => 'Indah Permata',
                'nama_ibu' => 'Diah Ayu',
                'nama_ayah' => 'Permadi Satria',
                'alamat_lengkap' => 'Jawa Barat, Bogor, Cibinong, Karadenan, RT 09/RW 09',
                'tanggal_lahir' => '2022-12-01',
                'nilai_total' => 6,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Indah Permata',
                'nama_ibu' => 'Diah Ayu',
                'nama_ayah' => 'Permadi Satria',
                'alamat_lengkap' => 'Jawa Barat, Bogor, Cibinong, Karadenan, RT 09/RW 09',
                'tanggal_lahir' => '2022-12-01',
                'nilai_total' => 6,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Indah Permata',
                'nama_ibu' => 'Diah Ayu',
                'nama_ayah' => 'Permadi Satria',
                'alamat_lengkap' => 'Jawa Barat, Bogor, Cibinong, Karadenan, RT 09/RW 09',
                'tanggal_lahir' => '2022-12-01',
                'nilai_total' => 6,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Indah Permata',
                'nama_ibu' => 'Diah Ayu',
                'nama_ayah' => 'Permadi Satria',
                'alamat_lengkap' => 'Jawa Barat, Bogor, Cibinong, Karadenan, RT 09/RW 09',
                'tanggal_lahir' => '2022-12-01',
                'nilai_total' => 6,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Indah Permata',
                'nama_ibu' => 'Diah Ayu',
                'nama_ayah' => 'Permadi Satria',
                'alamat_lengkap' => 'Jawa Barat, Bogor, Cibinong, Karadenan, RT 09/RW 09',
                'tanggal_lahir' => '2022-12-01',
                'nilai_total' => 6,
                'status' => 'Normal'
            ],
            [
                'nama_bayi' => 'Joko Santoso',
                'nama_ibu' => 'Kartini Sulastri',
                'nama_ayah' => 'Santoso Wibowo',
                'alamat_lengkap' => 'Yogyakarta, Sleman, Depok, Condongcatur, RT 10/RW 10',
                'tanggal_lahir' => '2022-11-15',
                'nilai_total' => 2,
                'status' => 'Kemungkinan GPPH'
            ]
        ];

        foreach ($babies as $baby) {
            Baby::create($baby);
        }
    }
}
