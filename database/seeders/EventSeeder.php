<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'Webinar Teknologi AI',
            'start_date' => '2026-04-01',
            'end_date' => '2026-04-01',
            'description' => 'Pelatihan tentang kecerdasan buatan untuk mahasiswa.',
            'skp_weight' => 2,
            'cost' => 0,
            'type' => 'webinar',
            'registration_link' => 'https://example.com/register/webinar-ai',
        ]);

        Event::create([
            'name' => 'Lomba Karya Tulis Ilmiah',
            'start_date' => '2026-05-01',
            'end_date' => '2026-05-15',
            'description' => 'Kompetisi menulis karya ilmiah untuk mahasiswa.',
            'skp_weight' => 5,
            'cost' => 50000,
            'type' => 'lomba',
            'registration_link' => 'https://example.com/register/lomba-kti',
        ]);

        Event::create([
            'name' => 'Pengabdian Masyarakat Desa',
            'start_date' => '2026-06-01',
            'end_date' => '2026-06-07',
            'description' => 'Kegiatan pengabdian di desa untuk membantu masyarakat.',
            'skp_weight' => 3,
            'cost' => 0,
            'type' => 'pengabdian',
            'registration_link' => 'https://example.com/register/pengabdian-desa',
        ]);
    }
}
