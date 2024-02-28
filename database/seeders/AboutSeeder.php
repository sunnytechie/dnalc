<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $about = new About();
            $about->title = 'Welcome to DNA Learning Center, Nigeria - The Point of Excellence in Scientific Training and Research.';
            $about->description = 'The DNALC Nigeria is a model molecular biology...';
            $about->heading_1 = 'Established In 1988';
            $about->content_1 = 'DNA Learning Center (DNALC) was founded by Dr. David...';
            $about->heading_2 = 'CSHL DNALC Certificate Of Recognition';
            $about->heading_2_content = 'Licensed to operate in Nigeria...';
            $about->content = 'The mission of this DNA Learning Center...';
            $about->list_1 = 'List 1';
            $about->list_2 = 'List 2';
            $about->list_3 = 'List 3';
            $about->thumbnail = 'Thumbnail';
            $about->thumbnail_2 = 'Thumbnail 2';
            $about->phone = 'Phone';
            $about->phone_2 = 'Phone 2';
            $about->email = 'address@gmail.com';
            $about->email_2 = 'address2@gmail.com';
            $about->address = 'Address';
            $about->facebook = 'Facebook handle';
            $about->twitter = 'Twitter handle';
            $about->instagram = 'Instagram handle';
            $about->linkedin = 'Linkedin handle';
            $about->sunday_schedule = 'Closed';
            $about->monday_schedule = '8:00 AM - 5:00 PM';
            $about->tuesday_schedule = '8:00 AM - 5:00 PM';
            $about->wednesday_schedule = '8:00 AM - 5:00 PM';
            $about->thursday_schedule = '8:00 AM - 5:00 PM';
            $about->friday_schedule = '8:00 AM - 5:00 PM';
            $about->saturday_schedule = 'Closed';
            $about->save();
    }
}
