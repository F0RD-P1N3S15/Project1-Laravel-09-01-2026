<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Forms;
use App\Models\FAQ;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

    // What you start with
    public function run(): void
    {
        //Admins x1
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@ehb.be',
            'password' => 'Password!321',
            'is_admin' => 1
        ]);

        // Users x2
        User::factory()->create([
            'name' => 'User1',
            'email' => 'user1@ehb.be',
            'password' => 'Password!321',
            'is_admin' => 0
        ]);
        User::factory()->create([
            'name' => 'User2',
            'email' => 'user2@ehb.be',
            'password' => 'Password!321',
            'is_admin' => 0
        ]);

        //Categories x2
        $c1 = Categories::create([   // https://laravel.com/docs/13.x/eloquent#mass-assignment
            'title' => 'category1'
        ]);
        $c2 = Categories::create([
            'title' => 'category2'
        ]);

        // FAQs x2
        FAQ::create([
            'title' => 'Question1',
            'content' => 'Answer, and information.',
            'faq_category_id' => $c1->id
        ]);
        FAQ::create([
            'title' => 'Question2',
            'content' => 'Answer, and information.',
            'faq_category_id' => $c2->id
        ]);

        // Forms x3
        Forms::create([
            'title' => 'Special Request',
            'email' => 'user1@ehb.be',
            'content' => 'information...',
            'admin_answer' => 'The admin answer'
        ]);
        Forms::create([
            'title' => 'Special Question',
            'email' => 'user2@ehb.be',
            'content' => 'information...',
            'admin_answer' => 'The admin answer'
        ]);
        Forms::create([
            'title' => 'Special Statement',
            'email' => 'user1@ehb.be',
            'content' => 'information...'
        ]);

        // News x1
        News::create([
            'title' => '(most-likely) Fake News!',
            'content' => 'The amazing and shocking information...',
            'image' => ''
        ]);
    }
}
