<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings\HeaderFooter;

class HeaderFooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeaderFooter::create([
            "mobile" => "8884538378",
            "email" => "connect@medisspro.com",
            "corporate_office" => "Bengaluru",
            "branch_office" => json_encode([
                "Hyderabad",
                "Coimbatore"
            ]),
            "web" => "www.medisspro.com",
            "facebook" => "https://www.facebook.com/",
            "instagram" => "https://www.instagram.com/",
            "linkdin" => "https://in.linkedin.com/",
            "twitter" => "https://x.com/",
            "footer_text" => "THE WORLD'S MOST INNOVATIVE HEALTHCARE NETWORK"
        ]);
    }
}
