<?php

namespace App\Models;

class Polindra
{
    private static $blog_polindra = [
        [
            "Judul" => "About Polindra",
            "Isi" => "Politeknik Negeri Indramayu (disingkat POLINDRA) adalah sebuah perguruan tinggi negeri yang terletak di Jl. Raya Lohbener Lama, Desa Lohbener, Kecamatan Lohbener, Kabupaten Indramayu.

            Pada tahun 2014 Politeknik Indramayu berubah status dari Perguruan Tinggi Swasta (PTS) menjadi Perguruan Tinggi Negeri (PTN) yang diresmikan pada tanggal 6 Oktober 2014, oleh Presiden Republik Indonesia Dr. Susilo Bambang Yudhoyono, mengacu pada peraturan menteri pendidikan dan kebudayaan No.101 tahun 2014 tentang pendirian, organisasi dan tata kerja Politeknik Negeri Indramayu.
            
            Perkembangan Saat Ini
            
            Pasca Politeknik Indramayu berubah status menjadi perguruan tinggi negeri, pada tahun 2015 memiliki tiga program studi yaitu Teknik Informatika (D3), Teknik Mesin (D3), dan Teknik Pendigin dan Tata Udara (D3), kemudian Politeknik Negeri Indramayu melakukan usulan program studi baru yaitu Rekayasa Perangkat Lunak (D4) dan Perancangan Manufaktur (D4), kemudian pada tahun berikutnya (2016) telah terbit Surat Keputusan Menteri Riset,Teknologi dan Pendidikan Tinggi Pada Tanggal 03 Februari 2016 nomor 67/KPT/I/2016 tentang pembukaan program studi Perancangan Manufaktur (D4), dan Rekayasa Perangkat Lunak (D4) melalui surat keputusan Menteri Riset, Teknologi dan Pendidikan Tinggi pada tanggal 13 September 2016 nomor 325/KPT/I/2019 tentang pembukaan program studi Rekayasa Perangkat Lunak (D4).
            
            Pada tahun 2019, Bupati Indramayu melalui Keputusan Bupati Indramayu Nomor 431/Kep.67.1.1-BKD/2019 tentang Hibah Barang Milik Pemerintah Kabupaten Indramayu Kepada Kementerian Riset, Teknologi dan Pendidikan Tinggi, dan DPRD Kabupaten Indramayu Provinsi Jawa Barat melalui Keputusan DPRD Kabupaten Indramayu Nomor 170/12/KEP/DPRD/2019 tentang Persetujuan DPRD Kabupaten Indramayu terhadap Permohonan Persetujuan Penyatuan AKPER PEMDA dan Pemindah tanganan barang milik daerah kabupaten Indramayu kepada Kementerian Riset,Teknologi dan Pendidikan Tinggi, dengan dasar tersebut Kementerian Riset, Teknologi dan dilakukan serah terima akper pemda pada tanggal 24 Juli 2019 menghasilkan naskah perjanjian hibah daerah Pemerintah Kabupaten Indramayu dengan Kementerian Riset, Teknologi dan Pendidikan Tinggi Nomor 599/NPHD.9-Tapem/2019 dan Nomor T/133/A.A3/PL.02.02/2019.
            
            Pasca dilakukan serah terima maka secara resmi Akademi Keperawatan Pemerintah Daerah menyatu dengan Politeknik Negeri Indramayu melalui terbitnya Surat Keputusan Menteri Riset, Teknologi dan Pendidikan Tinggi pada tanggal 19 Agustus 2019 nomor 725/KPT/I/2019 tentang pembukaan program studi keperawatan (D3).",
        ]
    ];

    public static function all()
    {
        return self::$blog_polindra;
    }
}
