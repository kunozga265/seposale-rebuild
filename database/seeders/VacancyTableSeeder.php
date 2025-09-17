<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class VacancyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vacancy::create([
            "title" => "Sales and Digital Marketer ",
            "slug" => Str::slug("Sales and Digital Marketer".date("-Y-m-d")),
            "date" => Carbon::create(2025, 9, 27, 23, 59, 0, "Africa/Johannesburg")->getTimestamp(),
            "department" => "Sales and Marketing Department",
            "body" => "
            <p>Seposale Limited is a fast-growing Malawian company specializing in the online sale of construction materials. We are looking for a dynamic, self-motivated, and innovative <strong>Sales and Digital Marketer</strong> to join our team. The ideal candidate will drive both online and offline sales while building Seposale&rsquo;s brand visibility in the construction industry.&nbsp;</p>

            <p><strong>Key Responsibilities</strong></p>

            <ul><li>Develop and implement digital marketing strategies to promote Seposale&rsquo;s products online.&nbsp;</p>
                </li><li>Manage company social media platforms, website content, and digital campaigns.&nbsp;</p>
                </li><li>Identify potential clients (individuals, contractors, and companies) and close sales.&nbsp;</p>
                </li><li>Build and maintain strong customer relationships.&nbsp;</p>
                </li><li>Monitor and analyze marketing performance, preparing regular reports.&nbsp;</p>
                </li><li>Collaborate with the management team to design promotions, campaigns, and branding activities.&nbsp;</p>
                </li>
            </ul>

            <p><strong>Qualifications &amp; Skills</strong></p>

            <ul><li>Degree in Marketing, Business Administration, ICT, or related field.&nbsp;</p>
                </li><li>Proven experience in sales and digital marketing.&nbsp;</p>
                </li><li>Strong knowledge of social media management, content creation, and SEO.&nbsp;</p>
                </li><li>Excellent communication and negotiation skills.&nbsp;</p>
                </li><li>Ability to work independently and meet targets.&nbsp;</p>
                </li><li>Knowledge of the construction industry will be an added advantage.&nbsp;</p>
                </li>
            </ul>
            ",
            "fields" => json_encode([
                [
                    "label" => "Do you have experience in sales and/or digital marketing? Please describe. ",
                    "placeholder" => "Short essay answer",
                    "type" => "text",
                    "value" => "",
                ],

                [
                    "label" => "Which digital marketing tools/platforms are you most familiar with (e.g., Facebook Ads, Google Ads, SEO, Canva, WordPress)? ",
                    "placeholder" => "Short essay answer",
                    "type" => "text",
                    "value" => "",
                ],
                [
                    "label" => "What strategies would you use to market construction materials online in Malawi? ",
                    "placeholder" => "Short essay answer",
                    "type" => "text",
                    "value" => "",
                ],
                [
                    "label" => "Have you ever met or exceeded sales targets in a past role? If yes, please share details. ",
                    "placeholder" => "Essay answer",
                    "type" => "text",
                    "value" => "",
                ],
                [
                    "label" => "Upload Your CV ",
                    "placeholder" => "(File upload: PDF or Word) ",
                    "type" => "file",
                    "value" => "",
                ],
                [
                    "label" => "Upload Your Cover Letter ",
                    "placeholder" => "(File upload: PDF or Word) ",
                    "type" => "file",
                    "value" => "",
                ],
                  [
                    "label" => "Enter Your Salary Expectation",
                    "placeholder" => "",
                    "type" => "text",
                    "value" => "",
                ],

            ]),
        ]);
    }
}
