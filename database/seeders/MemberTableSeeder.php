<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            "name" => "Mike Mkali",
            "slug" => Str::slug("Mike Mkali".date('Y-m-d')),
            "position" => "Chief Executive Officer",
            "body" => "<p>A visionary leader and founder of SEPOSALE and Mkali
Group, Mike brings over a decade of experience in
construction, manufacturing, finance, and real estate.
He holds a degree from the University of Malawi, along
with postgraduate qualifications in Marketing and
Investment Banking. His mission is to catalyze
economic transformation in Africa through smart
innovation and inclusive development.</p>",
            "photo" => "images/mike-1.jpeg",
            "links" => json_encode([
                "facebook" => "",
                "twitter" => "",
                "linkedin" => "",
            ]),
        ]);
        Member::create([
            "name" => "Thokozani Chilaga Mdulamizu",
            "slug" => Str::slug("Thokozani Chilaga Mdulamizu".date('Y-m-d')),
            "position" => "Chief Operations
Officer",
            "body" => "<p>An expert in digital marketing, supply chain strategy,
and data analysis, Thokozani oversees SEPOSALE’s
day-to-day operations and client fulfillment. Her cross-
sector expertise enables precision, speed, and
scalability across the value chain.</p>",
            "photo" => "images/thoko.jpeg",
            "links" => json_encode([
                "facebook" => "",
                "twitter" => "",
                "linkedin" => "",
            ]),
        ]);
        Member::create([
            "name" => "Kunozga Mlowoka",
            "slug" => Str::slug("Kunozga Mlowoka".date('Y-m-d')),
            "position" => "Chief Technology Officer",
            "body" => "<p>A tech visionary with an electrical engineering
background, Kunozga leads the design and
implementation of SEPOSALE’s digital infrastructure.
His focus is on developing scalable, secure, and
intuitive systems that elevate customer experience and
drive operational efficiency.</p>",
            "photo" => "images/kuno.jpeg",
            "links" => json_encode([
                "facebook" => "",
                "twitter" => "",
                "linkedin" => "",
            ]),
        ]);
    }
}
