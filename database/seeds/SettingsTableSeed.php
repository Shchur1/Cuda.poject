<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'key' => 'site_name',
                'value' => 'Anton New',
            ],
            [
                'key' => 'admin_email',
                'value' => 'anton@gmail.com',
            ],
            [
                'key' => 'default_meta_keywords',
                'value' => 'keywords',
            ],
            [
                'key' => 'default_meta_description',
                'value' => 'description',
            ],
        ]);
    }
}
