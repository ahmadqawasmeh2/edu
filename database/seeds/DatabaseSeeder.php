<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AllcitiesTableSeeder::class);
        $this->call(AllcountryTableSeeder::class);
        $this->call(AllstatesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(CareersTableSeeder::class);
        $this->call(ColorOptionsTableSeeder::class);
        //
        $this->call(BlogsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ChildCategoriesTableSeeder::class);
        $this->call(CourseChaptersTableSeeder::class);
        $this->call(GetStartedsTableSeeder::class);
        $this->call(CourseClassesTableSeeder::class);
        $this->call(CourseIncludesTableSeeder::class);
        $this->call(CourseLanguagesTableSeeder::class);
        $this->call(SliderFactsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(SubCategoriesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(TrustedsTableSeeder::class);
        $this->call(WhatLearnsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
