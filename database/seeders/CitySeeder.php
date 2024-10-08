<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        $cities = [
            'Adana' => 'Adana',
            'Adıyaman' => 'Adıyaman',
            'Afyonkarahisar' => 'Afyonkarahisar',
            'Ağrı' => 'Ağrı',
            'Amasya' => 'Amasya',
            'Ankara' => 'Ankara',
            'Antalya' => 'Antalya',
            'Artvin' => 'Artvin',
            'Aydın' => 'Aydın',
            'Balıkesir' => 'Balıkesir',
            'Bilecik' => 'Bilecik',
            'Bingöl' => 'Bingöl',
            'Bitlis' => 'Bitlis',
            'Bolu' => 'Bolu',
            'Burdur' => 'Burdur',
            'Bursa' => 'Bursa',
            'Çanakkale' => 'Çanakkale',
            'Çankırı' => 'Çankırı',
            'Çorum' => 'Çorum',
            'Denizli' => 'Denizli',
            'Diyarbakır' => 'Diyarbakır',
            'Edirne' => 'Edirne',
            'Elazığ' => 'Elazığ',
            'Erzincan' => 'Erzincan',
            'Erzurum' => 'Erzurum',
            'Eskişehir' => 'Eskişehir',
            'Gaziantep' => 'Gaziantep',
            'Giresun' => 'Giresun',
            'Gümüşhane' => 'Gümüşhane',
            'Hakkâri' => 'Hakkâri',
            'Hatay' => 'Hatay',
            'Isparta' => 'Isparta',
            'Mersin' => 'Mersin',
            'İstanbul' => 'İstanbul',
            'İzmir' => 'İzmir',
            'Kars' => 'Kars',
            'Kastamonu' => 'Kastamonu',
            'Kayseri' => 'Kayseri',
            'Kırklareli' => 'Kırklareli',
            'Kırşehir' => 'Kırşehir',
            'Kocaeli' => 'Kocaeli',
            'Konya' => 'Konya',
            'Kütahya' => 'Kütahya',
            'Malatya' => 'Malatya',
            'Manisa' => 'Manisa',
            'Kahramanmaraş' => 'Kahramanmaraş',
            'Mardin' => 'Mardin',
            'Muğla' => 'Muğla',
            'Muş' => 'Muş',
            'Nevşehir' => 'Nevşehir',
            'Niğde' => 'Niğde',
            'Ordu' => 'Ordu',
            'Rize' => 'Rize',
            'Sakarya' => 'Sakarya',
            'Samsun' => 'Samsun',
            'Siirt' => 'Siirt',
            'Sinop' => 'Sinop',
            'Sivas' => 'Sivas',
            'Tekirdağ' => 'Tekirdağ',
            'Tokat' => 'Tokat',
            'Trabzon' => 'Trabzon',
            'Tunceli' => 'Tunceli',
            'Şanlıurfa' => 'Şanlıurfa',
            'Uşak' => 'Uşak',
            'Van' => 'Van',
            'Yozgat' => 'Yozgat',
            'Zonguldak' => 'Zonguldak',
            'Aksaray' => 'Aksaray',
            'Bayburt' => 'Bayburt',
            'Karaman' => 'Karaman',
            'Kırıkkale' => 'Kırıkkale',
            'Batman' => 'Batman',
            'Şırnak' => 'Şırnak',
            'Bartın' => 'Bartın',
            'Ardahan' => 'Ardahan',
            'Iğdır' => 'Iğdır',
            'Yalova' => 'Yalova',
            'Karabük' => 'Karabük',
            'Kilis' => 'Kilis',
            'Osmaniye' => 'Osmaniye',
            'Düzce' => 'Düzce'
        ];

        $citiesArray = [];
        $id = 1;

        foreach ($cities as $city) {
            $citiesArray[] = [
                'id' => $id,
                'name' => $city,
            ];
            $id++;
        }

        DB::table('cities')->insert($citiesArray);
    }
}
