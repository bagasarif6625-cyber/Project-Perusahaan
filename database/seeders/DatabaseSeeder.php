<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Bandwidth Dedicated',
                'icon' => 'speedometer',
                'description' => 'Bandwidth dedicated eksklusif yang memastikan kecepatan konsisten dan konektivitas stabil untuk operasional bisnis Anda.',
            ],
            [
                'title' => 'Bandwidth Sesuai Kebutuhan',
                'icon' => 'gauge',
                'description' => 'Solusi bandwidth fleksibel yang dapat disesuaikan naik atau turun berdasarkan kebutuhan penggunaan bisnis Anda.',
            ],
            [
                'title' => 'Colocation Server',
                'icon' => 'server',
                'description' => 'Layanan colocation server yang aman di lingkungan data centre andal dengan redundansi daya dan jaringan penuh.',
            ],
            [
                'title' => 'Operasional Data Centre',
                'icon' => 'server stack',
                'description' => 'Manajemen dan operasional fasilitas data centre secara profesional untuk memastikan uptime dan performa maksimal.',
            ],
            [
                'title' => 'Koneksi Point to Point',
                'icon' => 'connected nodes',
                'description' => 'Koneksi point-to-point dedicated berkecepatan tinggi yang ideal untuk menghubungkan beberapa lokasi kantor secara aman dan efisien.',
            ],
            [
                'title' => 'Pengembangan Pemrograman',
                'icon' => 'code box',
                'description' => 'Pengembangan perangkat lunak dan sistem khusus yang disesuaikan untuk mendukung proses dan tujuan bisnis Anda.',
            ],
        ];

        foreach ($services as $i => $service) {
            Service::create($service + ['sort' => $i + 1]);
        }

        $projects = [
    [
        'Internet Dedicated Perkantoran Medika',
        'Internet Dedicated',
        'PT Medika Utama Sejahtera',
        2026,
        'Koneksi dedicated 1:1 berkecepatan 100 Mbps terhubung ke backbone Gedung Cyber untuk operasional 200+ karyawan.',
        '#f43f5e', // warna gradient awal (rose-500)
        '#f59e0b', // warna gradient akhir (amber-500)
    ],
    [
        'Wi-Fi & Bandwidth Shaping Game Center',
        'Infrastruktur Jaringan',
        'CyberZone Esports Arena',
        2026,
        'Perancangan topologi jaringan, instalasi access point high-density, dan pengaturan QoS untuk ping game sangat rendah.',
        '#2563eb', // warna gradient awal (blue-600)
        '#06b6d4', // warna gradient akhir (cyan-500)
    ],
    [
        'Jaringan Intranet VPN/MPLS Antar Cabang',
        'Jaringan Antar Kantor',
        'PT Bangun Prima Logistik',
        2025,
        'Menghubungkan kantor pusat dan 3 lokasi gudang dengan jaringan private terenkripsi untuk sinkronisasi data real-time.',
        '#4f46e5', // warna gradient awal (indigo-600)
        '#38bdf8', // warna gradient akhir (sky-400)
    ],
    [
        'Managed Network & NOC Monitoring 24/7',
        'Managed Services',
        'Dinas Komunikasi & Informatika',
        2025,
        'Layanan pemantauan jaringan 24/7, pengelolaan firewall, dan backup link otomatis untuk server pelayanan publik.',
        '#f97316', // warna gradient awal (orange-500)
        '#eab308', // warna gradient akhir (yellow-500)
    ],
    [
        'Penataan Server Room & Cabling Management',
        'Infrastruktur Jaringan',
        'PT Indo Perdana Industri',
        2025,
        'Cabling management, instalasi managed switch, serta segmentasi VLAN untuk jaringan operasional pabrik.',
        '#059669', // warna gradient awal (emerald-600)
        '#22d3ee', // warna gradient akhir (cyan-400)
    ],
    [
        'Internet Temporary High-Speed Event',
        'Internet Dedicated',
        'TechExpo Nusantara',
        2024,
        'Penyediaan akses internet temporary Dedicated FO dan Wireless P2P untuk live streaming 4K dan ribuan pengunjung.',
        '#9333ea', // warna gradient awal (purple-600)
        '#ec4899', // warna gradient akhir (pink-500)
    ],
];

        foreach ($projects as [$title, $category, $client, $year, $description, $from, $to]) {
            Project::create([
                'title' => $title,
                'category' => $category,
                'client' => $client,
                'year' => $year,
                'description' => $description,
                'color_from' => $from,
                'color_to' => $to,
            ]);
        }

        $team = [
            ['Rian Pratama', 'CEO Executive Officer (CEO)', 'Memimpin arah strategis MAXMEDIA dalam menghadirkan konektivitas dedicated dan memperluas kemitraan jaringan di seluruh wilayah.', '#6366f1', '#22d3ee'],
            ['Reza Febrian', 'Lead Network Engineer', 'Bertanggung jawab atas stabilitas jalur backbone, konfigurasi routing ke Gedung Cyber/IDC, dan optimalisasi trafik jaringan.', '#ec4899', '#f59e0b'],
            ['Dhani Rahardian', 'Head of Infrastructure & NOC', 'Mengawasi operasional Network Operations Center 24/7 untuk memastikan pemantauan server dan penanganan kendala teknis secara langsung.', '#10b981', '#3b82f6'],
            ['Siti Nurhaliza', 'Corporate Account Manager', 'Menghubungkan kebutuhan jaringan skala besar untuk sektor perkantoran, instansi pemerintah, dan industri dengan solusi yang tepat.', '#f97316', '#e11d48'],
        ];

        foreach ($team as $i => [$name, $position, $bio, $from, $to]) {
            TeamMember::create([
                'name' => $name,
                'position' => $position,
                'bio' => $bio,
                'color_from' => $from,
                'color_to' => $to,
                'sort' => $i + 1,
            ]);
        }
    }
}
