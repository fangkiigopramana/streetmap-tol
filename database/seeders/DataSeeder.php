<?php

namespace Database\Seeders;

use App\Models\JenisInfrastruktur;
use App\Models\Lokasi;
use App\Models\PotensiBahaya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hasils = [
            [
                'jenis_infrastruktur' => 'Fasilitas Jalan',
                'potensi_bahaya' => 'Perkir Liar',
                'Effect of Failure' => 'Jalan tol adalah jalur cepat, sehingga kendaraan yang diparkir di bahu jalan atau lajur utama bisa menyebabkan tabrakan beruntun.'
            ],
            [
                'jenis_infrastruktur' => 'Fasilitas Jalan',
                'potensi_bahaya' => 'Banyak Penjual Asongan',
                'Effect of Failure' => 'Jalan tol adalah jalan bebas hambatan. Keberadaan pedagang liar dapat menimbulkan kendaraan berhenti untuk membeli dagangan. Sehingga, hal tersebut mengakibatkan kemacetan dan tabrak beruntun.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan Berlubang ( potholes )',
                'Effect of Failure' => 'Mengakibatkan kehilangan kendali pengemudi saat melintasi jalan tersebut.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan Berlubang ( potholes ) dan retak memanjang (longitudinal cracking)',
                'Effect of Failure' => 'Dapat menyebabkan genangan air dan melemahkan struktur perkerasan. Meningkatkan risiko kerusakan kendaraan (ban, suspense, kemudi) apabila melewatinya.'
            ],
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Pita penggaduh di gerbang tol',
                'Effect of Failure' => 'Efektivitas getaran dan suara berkurang saat dilintasi kendaraan mengakibatkan pengemudi tidak mendapatkan peringatan cukup kuat saat memasuki pintu gerbang tol.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan amblas ( depression )',
                'Effect of Failure' => 'Permukaan jalan yang tidak rata akibat tambalan yang tidak presisi dapat menyebabkan hilangnya kenyamanan berkendara, meningkatkan risiko hilangnya kendali kendaraan, terutama pada kecepatan tinggi. Selain itu, dapat menyebabkan kerusakan suspense dan ban kendaraan.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Dapat mengganggu stabilitas kendaraan, terutama pada kecepatan tinggi. Sehingga berpotensi mengakibatkan kecelakaan Tunggal.'
            ],
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Guardrail',
                'Effect of Failure' => 'End terminal guardrail yang tajam dapat menyebabkan penetrasi (menembus) kabin kendaraan apabila terjadi kecelakaan.'
            ], // Interpreted based on the context of guardrails and typical hazard reporting. Source 1 formatting for this line is ambiguous. Source 2 indicates "Perlengkapan Jalan" and "Guardrail" as Potensi Bahaya.
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan amblas ( depression )',
                'Effect of Failure' => 'Mengganggu kestabilan kendaraan yang melintas, meningkatkan risiko kehilangan kendali, kecelakaan tunggal atau beruntun terutama pada kecepatan tinggi.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan Berlubang ( potholes )',
                'Effect of Failure' => 'Lubang atau cekungan di permukaan jalan seperti ini dapat menyebabkan ketidakstabilan kendaraan, terutama pada kecepatan tinggi. Dapat mengakibatkan kerusakan pada ban atau suspensi, serta hilangnya kontrol kendaraan yang berpotensi menimbulkan kecelakaan.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Lubang ( potholes ) dan tambalan ( patching )',
                'Effect of Failure' => 'Permukaan yang tidak rata atau tambalan dapat menyebabkan guncangan dan ketidaknyamanan berkendara, terutama pada kecepatan tinggi. Hal ini dapat membuat pengemudi kehilangan kendali atau melakukan manuver mendadak yang membahayakan. Tambalan dapat Kembali rusak dan menjadi lubang yang besar, meningkatkan risiko kecelakaan.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Kerusakan seperti ini dapat berkembang menjadi lubang lebih besar jika tidak segera diperbaiki. Dapat menyebabkan guncangan mendadak, kehilangan kendali, dan pada kondisi hujan dapat menyimpan air sehingga menciptakan risiko selip.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Tepi Jalan',
                'Effect of Failure' => 'Jika kendaraan keluar dari lajur dan memasuki area tidak rata dapat mengakibatkan risiko kecelakaan terutama pada kecepatan tinggi.'
            ], // Assuming "Tepi Jalan" is both Jenis Infrastruktur (or category) and Potensi Bahaya here.
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Lubang seperti ini dapat menyebabkan kerusakan serius pada kendaraan seperti pecah ban, suspensi rusak, hingga kehilangan kendali. Pada kecepatan tinggi seperti di jalan tol, potensi kecelakaan tunggal sangat besar, dan bisa berujung pada tabrak beruntun.'
            ], // Source 1 indicates "Perlengkapan Jalan" in Jenis Infrastruktur for this pothole.
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Retak buaya ( alligator cracking )',
                'Effect of Failure' => 'Retakan memanjang seperti ini dapat menyebabkan penurunan kenyamanan dan keamanan berkendara. Jika tidak segera diperbaiki, air dapat masuk ke dalam retakan dan mempercepat keruskan struktur lapisan bawah jalan, yang menyebabkan lubang lebih parah. Di jalan tol, hal ini dapat menyebabkan risiko kecelakaan akibat kendaraan tergelincir, terutama saat hujan.'
            ], // Inherits "Perlengkapan Jalan" from the previous item under No. 5 if not specified otherwise.
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Lubang di tengah lajur dapat menyebabkan kendaraan kehilangan kendali, terutama pada kecepatan tinggi. Risiko kecelakaan Tunggal atau tabrak beruntun karena pengemudi tiba-tiba menghindar.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Potensi kerusakan kendaraan (ban atau suspensi) saat melintasi pinggir lajur. Meningkatkan keausan dan erosi permukaan yang dapat memperbesar lubang.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Jalan berlubang dapat menyebabkan pengendara kehilangan kendali atas kendaraan, terutama pada kecepatan tinggi dapat meningkatkan risiko kecelakaan. lubang di jalan juga dapat menyebabkan kerusakaan pada kendaraan.'
            ],
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Tepi Jalan',
                'Effect of Failure' => 'Kendaraan yang melewati dapat kehilangan keseimbangan karena perbedaan ketinggian aspal yang signifikan.'
            ], // Source 1 indicates "Perlengkapan Jalan" as Jenis Infrastruktur for this "Tepi Jalan" hazard.
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Guardrail',
                'Effect of Failure' => 'Tidak mampu memberikan perlindungan terhadap tindakan saat terjadi kecelakaan.'
            ], // Inherits "Perlengkapan Jalan"
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Jalan berlubang berpotensi menyebabkan kecelakaan, terutama jika pengemudi tidak menyadari keberadaan lubang tersebut atau tidak dapat menghindarinya. Lubang besar atau tidak terlihat dengan jelas bisa menyebabkan pengemudi kehilangan kendali, terguling, menabrak objek.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Jika berlubang yang terendam air dapat menyembunyikan lubang tersebut, sehingga pengendara tidak dapat melihat dengan jelas. Hal ini dapat menyebabkan kecelakaan karena pengemudi menghindari lubang secara mendadak atau tidak dapat mengontrol kendaraan.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Retak buaya ( alligator cracking )',
                'Effect of Failure' => 'Retak buaya yang cukup parah dapat menyebabkan permukaan jalan yang tidak rata dan bertekstur kasar. Hal ini bisa membuat pengendara kesulitan mengendalikan kendaraan, terutama pada kecepatan tinggi di jalan tol. kecelakaan atau kehilangan kontrol kendaraan bisa lebih mudah terjadi.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Tepi Jalan',
                'Effect of Failure' => 'Perbedaan ketebalan lapisan aspal dapat mengakibatkan kendaraan kehilangan keseimbangan dan tergelincir.'
            ], // Inherits "Perkerasan Jalan"
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Amblas ( depression )',
                'Effect of Failure' => 'Dapat menyebabkan kendaraan kehilangan stabilitas saat melewati jalan tersebut. Jika pengemudi tidak sempat menghindari, dapat mengakibatkan kendaraan tergelincir.'
            ], // Inherits "Perkerasan Jalan"
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Tambalan aspal tidak rata',
                'Effect of Failure' => 'Tambalan yang lebih tinggi atau lebih rendah dari permukaan aspal sekitarnya menyebabkan kendaraan terguncang, berisiko membuat pengendara kehilangan kendali.'
            ], // Source 1 indicates "Perlengkapan Jalan"
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Lampu Mati di Malam Hari',
                'Effect of Failure' => 'Mengurangi visibilitas pengguna jalan, meningkatkan risiko kecelakaan terutama pada malam hari.'
            ], // Inherits "Perlengkapan Jalan"
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Guardrail',
                'Effect of Failure' => 'Tidak dapat memproteksi atau melindungi tindakan apabila terjadi kecelakaan.'
            ], // Source 1 lists "Perlengkapan Jalan" and "Perkerasan Jalan" together for this Guardrail, choosing "Perlengkapan Jalan" as more specific for Guardrail.
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan amblas ( depression )',
                'Effect of Failure' => 'Pengemudi dapat kehilangan kendali Ketika rosa masuk pada area lubang yang amblas, terutama pada malam hari atau cuaca buruk saat visibilitas rendah. Pada gambar tersebut masih digolongkan kerusakan ringan.'
            ], // Source 1 indicates this amblas is related to Perkerasan Jalan.
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Tidak Ada Pagar Pengaman di Lokasi Sering Terjadi Kecelakaan',
                'Effect of Failure' => 'Kendaraan yang terjadi kecelakaan dapat berpindah jalur dan mengakibatkan kecelakaan fatal.'
            ],
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Pita penggaduh di gerbang tol',
                'Effect of Failure' => 'Efektivitas getaran dan suara berkurang saat dilintasi kendaraan mengakibatkan pengemudi tidak mendapatkan peringatan cukup kuat saat memasuki pintu gerbang tol.'
            ], // Inherits "Perlengkapan Jalan"
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Amblas ( depression ) dan retak ( cracking )',
                'Effect of Failure' => 'Dapat menyebabkan guncangan saat melalui area tersebut. Selain itu, memicu kerusakan lebih parah jika tidak segera diperbaiki karena air yang menggenang.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Jalan berlubang ( potholes )',
                'Effect of Failure' => 'Dengan lubang yang cukup dalam dapat menyebabkan genangan air yang menutupi kedalaman dan ukuran lubang, sehingga pengemudi tidak menyadari bahaya di depan. Kendaraan bisa oleng, pecah ban, atau terguling saat menghantam lubang dalam kecepatan tinggi.'
            ],
            [
                'jenis_infrastruktur' => 'Fasilitas Jalan',
                'potensi_bahaya' => 'Proyek Nasional Pipa Gas',
                'Effect of Failure' => 'Adanya alat berat, penggalian, dan pekerja proyek di sekitar jalan tol meningkatkan risiko kecelakaan bagi pengguna jalan jika tidak ada sistem pengaman.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Aspal Terkelupas ( ravelling )',
                'Effect of Failure' => 'Agregat yang terlepas membuat jalan tidak nyaman untuk dilalui, terutama pada kecepatan tinggi.'
            ],
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Guardrail',
                'Effect of Failure' => 'Pagar pengaman yang lemah atau rusak mungkin tidak dapat menahan kendaraan yang menabraknya, sehingga kendaraan bisa terperosok ke jurang, masuk ke jalur berlawanan, atau menabrak objek berbahaya.'
            ],
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Guardrail',
                'Effect of Failure' => 'Jika guardrail rusak dapat mengakibatkan kendaraan menembus pembatas dan masuk ke area yang lebih berbahaya seperti jurang atau jalan berlawanan.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Aspal Terkelupas ( ravelling )',
                'Effect of Failure' => 'Permukaan yang kehilangan agregat membuat traksi ban berkurang, meningkatkan risiko tergelincir, terutama saat hujan.'
            ],
            [
                'jenis_infrastruktur' => 'Perkerasan Jalan',
                'potensi_bahaya' => 'Aspal Tergerus',
                'Effect of Failure' => 'Lapisan aspal yang semula halus menjadi kasar dan bergelombang, mengurangi kenyamanan berkendara. Jika tidak segera diperbaiki, permukaan terus terkikis hingga menunjukkan agregat atau lapisan dasar.'
            ],
            [
                'jenis_infrastruktur' => 'Fasilitas Jalan',
                'potensi_bahaya' => 'Lubang ( potholes ) dan Amblas ( depression )',
                'Effect of Failure' => 'Dapat menyebabkan pengemudi kehilangan kendali karena kerusakan berada di tengah lajur. Sehingga mengakibatkan kendaraan oleng atau bahkan kerusakaan kendaraan yang melaju dengan kecepatan tinggi.'
            ], // Source 1 specifies "Fasilitas Jalan" for this combination.
            [
                'jenis_infrastruktur' => 'Fasilitas Jalan',
                'potensi_bahaya' => 'Bahu Jalan',
                'Effect of Failure' => 'Pengemudi yang melintas dapat kehilangan keseimbangan dan mengakibatkan kecelakaan, terutama pada kecepatan tinggi.'
            ], // Inherits "Fasilitas Jalan" as context for Bahu Jalan.
            [
                'jenis_infrastruktur' => 'Fasilitas Jalan',
                'potensi_bahaya' => 'Parkir Liar',
                'Effect of Failure' => 'Mengganggu kelancaran lalu lintas dan meningkatkan risiko tabrak beruntun akibat kendaraan berhenti mendadak, terutama jalan menikung.'
            ], // Inherits "Fasilitas Jalan"
            [
                'jenis_infrastruktur' => 'Perlengkapan Jalan',
                'potensi_bahaya' => 'Pita penggaduh di gerbang tol',
                'Effect of Failure' => 'Pengemudi tidak mendapat peringatan dini saat mendekati gerbang tol karena efek suara atau getaran yang sangat minim.'
            ],
        ];

        $lokasis = Lokasi::all('id');

        foreach ($lokasis as $index => $lokasi) {
            if (isset($hasils[$index])) {
                $data = $hasils[$index];
                $data['lokasi_id'] = $lokasi->id;
                PotensiBahaya::create([
                    'lokasi_id' => $data['lokasi_id'],
                    'potensi_bahaya' => $data['potensi_bahaya'],
                    'infrastruktur_id' => JenisInfrastruktur::where('nama', $data['jenis_infrastruktur'])->first()->id ?? 0,
                    'effect_of_failure' => $data['Effect of Failure'],
                    'gambar' => 'contoh.jpg'
                ]);
            }
        }
    }
}
