<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\PortfolioImage;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'Renovasi Rumah dan Desain Interior Pak YL',
                'description' => 'Proyek renovasi rumah dengan konsep modern minimalis yang ceria dan menyegarkan. Eksterior menggunakan kombinasi warna tosca green, wood brown, dan grey yang memberikan kesan elegan namun berani.',
                'category' => 'rumah',
                'location' => 'Jakarta Selatan',
                'year' => 2025,
                'area' => 180.50,
                'status' => 'completed',
                'is_featured' => true,
                'sort_order' => 1,
                'image' => 'portfolios/placeholder-1.jpg'
            ],
            [
                'title' => 'Desain Interior Modern Minimalis',
                'description' => 'Ruang tamu dengan konsep modern minimalis yang nyaman dan elegan. Menggunakan furniture berkualitas tinggi dengan aksen warna yang harmonis.',
                'category' => 'interior',
                'location' => 'Jakarta Pusat',
                'year' => 2024,
                'area' => 45.00,
                'status' => 'completed',
                'is_featured' => true,
                'sort_order' => 2,
                'image' => 'portfolios/placeholder-2.jpg'
            ],
            [
                'title' => 'Dapur Modern dengan Island',
                'description' => 'Dapur modern dengan island counter yang fungsional. Menggunakan material premium dan lighting yang optimal untuk aktivitas memasak.',
                'category' => 'interior',
                'location' => 'Tangerang',
                'year' => 2024,
                'area' => 25.00,
                'status' => 'completed',
                'is_featured' => false,
                'sort_order' => 3,
                'image' => 'portfolios/placeholder-3.jpg'
            ],
            [
                'title' => 'Kantor Rumah Kontemporer',
                'description' => 'Ruang kerja yang dirancang khusus untuk produktivitas maksimal. Menggunakan paneling vertikal dan lighting yang nyaman untuk mata.',
                'category' => 'interior',
                'location' => 'Bekasi',
                'year' => 2024,
                'area' => 20.00,
                'status' => 'completed',
                'is_featured' => false,
                'sort_order' => 4,
                'image' => 'portfolios/placeholder-4.jpg'
            ],
            [
                'title' => 'Kamar Tidur Bunk Bed Modern',
                'description' => 'Kamar tidur dengan bunk bed yang dirancang khusus untuk anak-anak. Menggunakan material yang aman dan lighting LED yang menarik.',
                'category' => 'interior',
                'location' => 'Depok',
                'year' => 2024,
                'area' => 15.00,
                'status' => 'completed',
                'is_featured' => false,
                'sort_order' => 5,
                'image' => 'portfolios/placeholder-5.jpg'
            ],
            [
                'title' => 'Rumah Modern 2 Lantai',
                'description' => 'Rumah modern 2 lantai dengan desain eksterior yang menarik. Menggunakan material yang tepat dan landscaping yang indah.',
                'category' => 'rumah',
                'location' => 'Bogor',
                'year' => 2023,
                'area' => 250.00,
                'status' => 'completed',
                'is_featured' => true,
                'sort_order' => 6,
                'image' => 'portfolios/placeholder-6.jpg'
            ],
            [
                'title' => 'Renovasi Eksterior Rumah',
                'description' => 'Proyek renovasi eksterior rumah dengan perubahan total tampilan. Menggunakan material berkualitas dan desain yang modern.',
                'category' => 'eksterior',
                'location' => 'Bandung',
                'year' => 2023,
                'area' => 120.00,
                'status' => 'completed',
                'is_featured' => false,
                'sort_order' => 7,
                'image' => 'portfolios/placeholder-7.jpg'
            ],
            [
                'title' => 'Desain Taman Minimalis',
                'description' => 'Taman minimalis yang dirancang untuk memberikan ketenangan dan keindahan. Menggunakan tanaman yang mudah dirawat.',
                'category' => 'eksterior',
                'location' => 'Surabaya',
                'year' => 2023,
                'area' => 80.00,
                'status' => 'completed',
                'is_featured' => false,
                'sort_order' => 8,
                'image' => 'portfolios/placeholder-8.jpg'
            ],
            [
                'title' => 'Rumah Kontemporer Premium',
                'description' => 'Rumah kontemporer dengan standar premium. Menggunakan material terbaik dan teknologi modern dalam konstruksi.',
                'category' => 'rumah',
                'location' => 'Semarang',
                'year' => 2023,
                'area' => 300.00,
                'status' => 'completed',
                'is_featured' => true,
                'sort_order' => 9,
                'image' => 'portfolios/placeholder-9.jpg'
            ]
        ];

        foreach ($portfolios as $portfolioData) {
            $portfolio = Portfolio::create($portfolioData);

            // Create additional images for each portfolio (3x3 grid)
            for ($i = 1; $i <= 9; $i++) {
                PortfolioImage::create([
                    'portfolio_id' => $portfolio->id,
                    'image' => "portfolios/portfolio-{$portfolio->id}-image-{$i}.jpg",
                    'title' => "Gambar {$i} - {$portfolio->title}",
                    'description' => "Detail gambar {$i} dari project {$portfolio->title}",
                    'sort_order' => $i - 1
                ]);
            }
        }
    }
}
