<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsPage;

class CmsPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cmsPagesRecords = [
            ['id'=>1, 'title'=>'Hakkımızda', 'description'=>'Yakında içerik yüklenecek', 'url' => 'about-us', 'meta_title' => 'Hakkımızda', 'meta_description' => 'Hakkımızda yazısı', 'meta_keywords' => 'Hakkımızda', 'status' => 1],
        ];
        CmsPage::insert($cmsPagesRecords);
    }
}
