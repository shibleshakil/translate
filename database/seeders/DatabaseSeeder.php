<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_roles')->insert([
            [
                "id" => 1,
                "name" => "Master Admin",
                "module_access" => NULL,
                "is_active" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('admins')->insert([
            [
                "id" => 1,
                "name" => "Admin",
                "role_id" => 1,
                "email" => "admin@admin.com",
                "password" => bcrypt('admin'),
                "is_active" => 1,
                "email_verified_at" => date('Y-m-d H:i:s'),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ]
        ]);

        DB::table('business_settings')->insert([
            [
                "type" => "company_name",
                "value" => "Chamaz",
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "type" => "maintenance_mode",
                "value" => 0,
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "type" => "logo",
                "value" => "logo.png",
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "type" => "favicon",
                "value" => "favicon.png",
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "type" => "company_email",
                "value" => "info@chamaz.com",
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "type" => "company_phone",
                "value" => "+8801717124584",
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "type" => "company_address",
                "value" => "House# 07, Road# SW 07, Gulshan-1, Dhaka-1212, Bangladesh",
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "type" => "mail_config",
                "value" => '{"status":1,"MAIL_MAILER":"smtp","MAIL_HOST":"smtp.gmail.com","MAIL_PORT":"smtp",
                    "MAIL_USERNAME":"25","MAIL_PASSWORD":"noreply.nextwave@gmail.com","MAIL_ENCRYPTION":"noreply.nextwave@gmail.com",
                    "MAIL_FROM_ADDRESS":"tls","MAIL_FROM_NAME":"pijhpzmtdplwgchn"}',
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
            [
                "type" => "copy_right_text",
                "value" => "Copyright © 2023 Chamaz",
                "updated_by" => 1,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
            ],
        ]);

    }
}
