<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Setting::create([
            'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            'name' => 'IA Project',
            'tag' => 'Temukan furniture dengan kualitas terbaik',
            'icon' => '/logo.jpg',
            'logo' => '/logo.jpg',
            'meta_author' => '@iapropertyproject',
            'meta_description' => 'IA Property Project - Temukan pengalaman berbelanja furniture ditangani langsung oleh ahli di bidangnya dengan kualitas internasional',
            'additional_meta' => 'keywords:ia property,furniture\nrobots:follow,index'
        ]);

        $links = [
            'tiktok' => 'https://www.tiktok.com/@iapropertyproject?_t=8jdfzny32cg&_r=1',
            'instagram' => 'https://instagram.com/iapropertyproject',
            'whatsapp' => 'https://wa.me/6287857580910',
            'line' => 'https://line.me/ti/p/vPzH86Oqo3',
            'shopee' => 'http://shopee.co.id/iaproject',
            'tokopedia' => 'https://tokopedia.link/Xlvh9NDNV9',
            'website' => 'http://localhost:8000',
        ];
        foreach ($links as $label => $url) {
            \App\Models\Linker::create(
                [
                    'label' => $label,
                    'url' => $url
                ]
            );
        }

        $this->call(ProductCategory::class);
    }
}
