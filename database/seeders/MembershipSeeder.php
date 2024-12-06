<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipSeeder extends Seeder
{
    public function run()
    {
        DB::table('membership')->insert([
            ['name' => 'Basic', 'price' => 199, 'access' => '1 Member', 'devices' => 'Mobile, Tablet', 'resolution' => '720p', 'video_sound_quality' => 'Good'],
            ['name' => 'Standard', 'price' => 399, 'access' => '3 Members', 'devices' => 'Mobile, Tablet, Laptop', 'resolution' => '1080p', 'video_sound_quality' => 'Great'],
            ['name' => 'Pro', 'price' => 599, 'access' => '5 Members', 'devices' => 'Mobile, Tablet, Laptop, TV', 'resolution' => '1440p', 'video_sound_quality' => 'Best'],
            ['name' => 'Premium', 'price' => 799, 'access' => 'Up to 10 Members', 'devices' => 'All Platforms', 'resolution' => '4K + HDR', 'video_sound_quality' => 'Amazing'],
        ]);
    }
}

