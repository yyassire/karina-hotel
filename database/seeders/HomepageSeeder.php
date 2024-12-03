<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homepages')->insert([
            [
                'title_tr' => 'KARİNNA HOTEL | ULUDAĞ - RESMİ WEB SİTESİ',
                // 'keywords_tr' => 'anahtar, kelimeler, tr',
                // 'description_tr' => 'Bu, Türkçe açıklama metnidir.',
                'slider_text_one_tr' => 'Kaydırıcı Metin Bir TR',
                // 'slider_text_two_tr' => 'TATİL HİÇ BİTMESİN İSTERSİN',
                // 'slider_text_three_tr' => 'Kaydırıcı Metin Üç TR',
                'about_one_tr' => 'KARİNNA HOTEL CONVENTION & SPA CENTER | ULUDAĞ',
                'about_two_tr' => 'HAKKIMIZDA',
                'about_content_tr' => 'Türkiye’nin en popüler kayak merkezi Uludağ’ın zirvesinde yer alan Karinna Hotel Convention Center & SPA seçkin mimarisi ve üstün hizmet anlayışıyla Uludağ keyfini sınırsızca misafirlerine yaşatıyor. Karinna Hotel Convention Center& Spa, Uludağ’ın büyüleyici manzarasını sıcak odalarında yaşatıyor. 10 katlı otelin her cephesi farklı bir manzaraya sahiptir.
',
                'room_one_tr' => 'KARİNNA HOTEL CONVENTION & SPA CENTER | ULUDAĞ',
                'room_two_tr' => 'Oda İki TR',
                'room_content_tr' => 'Bu, Türkçe oda içerik metnidir.',
                'activity_one_tr' => 'Aktivite Bir TR',
                'activity_two_tr' => 'Aktivite İki TR',
                'activity_content_tr' => 'Bu, Türkçe aktivite içerik metnidir.',
                'video_tr' => "KARİNNA'DA TATİLİN HİÇ BİTMESİN İSTERSİN",
                'video_content_tr' => 'Bu, Türkçe video içerik metnidir.',

                'title_en' => 'KARINNA HOTEL | ULUDAĞ - OFFICIAL WEB SITES',
                // 'keywords_en' => 'keywords, en, example',
                // 'description_en' => 'This is an English description text.',
                'slider_text_one_en' => 'YOU WANT IT TO NEVER END AT KARINNA',
                // 'slider_text_two_en' => 'Slider Text Two EN',
                // 'slider_text_three_en' => 'Slider Text Three EN',
                'about_one_en' => 'Karinna Hotel, located in Turkey’s most popular ski resort Uludağ’s summit, re - newed to live Uludağ’s joy for 4 seasons with its select architecture and outstanding service manner. Karinna Hotel Convention Center & Spa makes you live the magnificent view of Uludağ in its warm rooms. Each front of the hotel has a different view.',
                'about_two_en' => 'ABOUT US',
                'about_content_en' => 'This is the English about content text.',
                'room_one_en' => 'KARINNA HOTEL CONVENTION & SPA CENTER | ULUDAĞ',
                'room_two_en' => 'Room Two EN',
                'room_content_en' => 'This is the English room content text.',
                'activity_one_en' => 'Activity One EN',
                'activity_two_en' => 'Activity Two EN',
                'activity_content_en' => 'This is the English activity content text.',
                'video_en' => 'Video Title EN',
                'video_content_en' => 'MAKE UNFORGETTABLE MEMORIES',

                'video_url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/mnC65j3FWqM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
