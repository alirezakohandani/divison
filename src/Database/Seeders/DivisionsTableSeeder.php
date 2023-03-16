<?php

namespace Alirezakohandani\Dvision\Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DivisionsTableSeeder extends Seeder
{
    /** @var string */
    protected $table_name = "divisions";

    /** @var string */
    protected $unique_field = "id";

    /** @var bool */
    protected $truncate_first = true;



    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->CreateDivision($this->iranStates());
        $this->CreateDivision($this->iranCities());
        $this->CreateDivision($this->worldContinents());
        $this->CreateDivision($this->asianCountries());
        $this->CreateDivision($this->africanCountries());
        $this->CreateDivision($this->australiaAndOceaniaCountries());
        $this->CreateDivision($this->europeanCountries());
        $this->CreateDivision($this->northAmericanCountries());
        $this->CreateDivision($this->southAmericanCountries());
        $this->CreateDivision($this->tehranNeighbourhoods());
    }



    /**
     * @param $values
     */
    protected function CreateDivision($values)
    {
        foreach($values as $value)
        {
            Division::create($value);

        }
    }






    /**
     * seed world continents name
     *
     * @return array
     */
    protected function worldContinents()
    {

        $continents = [
            [
                "id"       => "475",
                "slug"     => "AF",
                "title_en" => "Africa",
                "title_fa" => "آفریقا",
                "type"     => "continent",
            ],
            [
                "id"       => "476",
                "slug"     => "AS",
                "title_en" => "Asia",
                "title_fa" => "آسیا",
                "type"     => "continent",
            ],
            [
                "id"       => "477",
                "slug"     => "NA",
                "title_en" => "North America",
                "title_fa" => "آمریکای شمالی",
                "type"     => "continent",
            ],
            [
                "id"       => "478",
                "slug"     => "SA",
                "title_en" => "South America",
                "title_fa" => "آمریکای جنوبی",
                "type"     => "continent",
            ],
            [
                "id"       => "479",
                "slug"     => "EU",
                "title_en" => "Europe",
                "title_fa" => "اروپا",
                "type"     => "continent",
            ],
            [
                "id"       => "480",
                "slug"     => "AU",
                "title_en" => "Australia and Oceania",
                "title_fa" => "استرالیا و اقیانوسیه",
                "type"     => "continent",
            ],
            [
                "id"       => "481",
                "slug"     => "AN",
                "title_en" => "Antarctica",
                "title_fa" => "جنوبگان",
                "type"     => "continent",
            ],
        ];

        return $continents;
    }



    /**
     * Return Asian countries and the Asia continent ID
     *
     * @return array
     */
    protected function asianCountries()
    {

        $asian_countries = [
            [

                "title_en"     => "Afghanistan",
                "title_fa"     => "افغانستان",
                "continent_id" => "476",
                "country_code" => "+93",
            ],
            [

                "title_en"     => "Armenia",
                "title_fa"     => "ارمنستان",
                "continent_id" => "476",
                "country_code" => "+374",
            ],
            [

                "title_en"     => "Azerbaijan",
                "title_fa"     => "آذربایجان",
                "continent_id" => "476",
                "country_code" => "+994",
            ],

            [

                "title_en"     => "Bahrain",
                "title_fa"     => "بحرین",
                "continent_id" => "476",
                "country_code" => "+973",
            ],
            [

                "title_en"     => "Bangladesh",
                "title_fa"     => "بنگلادش",
                "continent_id" => "476",
                "country_code" => "+880",
            ],
            [

                "title_en"     => "Bhutan",
                "title_fa"     => "بوتان",
                "continent_id" => "476",
                "country_code" => "+267",
            ],
            [

                "title_en"     => "Brunei",
                "title_fa"     => "برونئی",
                "continent_id" => "476",
                "country_code" => "+673",
            ],

            [

                "title_en"     => "Cambodia",
                "title_fa"     => "کلمبیا",
                "continent_id" => "476",
                "country_code" => "+57",
            ],
            [

                "title_en"     => "China",
                "title_fa"     => "چین",
                "continent_id" => "476",
                "country_code" => "+86",
            ],
            [

                "title_en"     => "Cyprus",
                "title_fa"     => "قبرس",
                "continent_id" => "476",
                "country_code" => "+357",
            ],

            [

                "title_en"     => "Georgia",
                "title_fa"     => "گرجستان",
                "continent_id" => "476",
                "country_code" => "+955",
            ],

            [

                "title_en"     => "India",
                "title_fa"     => "هندوستان",
                "continent_id" => "476",
                "country_code" => "+91",
            ],
            [

                "title_en"     => "Indonesia",
                "title_fa"     => "اندونزی",
                "continent_id" => "476",
                "country_code" => "+62",
            ],
            [

                "title_en"     => "Iran",
                "title_fa"     => "ایران",
                "continent_id" => "476",
                "language"     => "fa",
                "currency"     => "IRR",
                "country_code" => "+98",
            ],
            [

                "title_en"     => "Iraq",
                "title_fa"     => "عراق",
                "continent_id" => "476",
                "country_code" => "+964",
            ],
            [

                "title_en"     => "Israel",
                "title_fa"     => "اسرائیل",
                "continent_id" => "476",
                "country_code" => "+972",
            ],

            [

                "title_en"     => "Japan",
                "title_fa"     => "ژاپن",
                "continent_id" => "476",
                "country_code" => "+81",
            ],
            [

                "title_en"     => "Jordan",
                "title_fa"     => "اردن",
                "continent_id" => "476",
                "country_code" => "+962",
            ],

            [

                "title_en"     => "Kazakhstan",
                "title_fa"     => "قزاقستان",
                "continent_id" => "476",
                "country_code" => "+7",
            ],
            [

                "title_en"     => "Kuwait",
                "title_fa"     => "کویت",
                "continent_id" => "476",
                "country_code" => "+965",
            ],
            [

                "title_en"     => "Kyrgyzstan",
                "title_fa"     => "قرقیزستان",
                "continent_id" => "476",
                "country_code" => "+7331",
            ],

            [

                "title_en"     => "Laos",
                "title_fa"     => "لائوس",
                "continent_id" => "476",
                "country_code" => "+856",
            ],
            [

                "title_en"     => "Lebanon",
                "title_fa"     => "لبنان",
                "continent_id" => "476",
                "country_code" => "+961",
            ],

            [

                "title_en"     => "Malaysia",
                "title_fa"     => "مالزی",
                "continent_id" => "476",
                "country_code" => "+60",
            ],
            [

                "title_en"     => "Maldives",
                "title_fa"     => "مالدیو",
                "continent_id" => "476",
                "country_code" => "+960",
            ],
            [

                "title_en"     => "Mongolia",
                "title_fa"     => "مغولستان",
                "continent_id" => "476",
                "country_code" => "+976",
            ],
            [

                "title_en"     => "Myanmar",
                "title_fa"     => "میانمار",
                "continent_id" => "476",
                "country_code" => "+95",
            ],

            [

                "title_en"     => "Nepal",
                "title_fa"     => "نپال",
                "continent_id" => "476",
                "country_code" => "+977",
            ],
            [

                "title_en"     => "North Korea",
                "title_fa"     => "کره شمالی",
                "continent_id" => "476",
                "country_code" => "+850",
            ],

            [

                "title_en"     => "Oman",
                "title_fa"     => "عمان",
                "continent_id" => "476",
                "country_code" => "+968",
            ],

            [

                "title_en"     => "Pakistan",
                "title_fa"     => "پاکستان",
                "continent_id" => "476",
                "country_code" => "+92",
            ],
            [

                "title_en"     => "Palestine",
                "title_fa"     => "فلسطین",
                "continent_id" => "476",
                "country_code" => "+970",
            ],
            [

                "title_en"     => "Philippines",
                "title_fa"     => "فیلیپین",
                "continent_id" => "476",
                "country_code" => "+63",
            ],

            [

                "title_en"     => "Qatar",
                "title_fa"     => "قطر",
                "continent_id" => "476",
                "country_code" => "+974",
            ],

            [

                "title_en"     => "Russia",
                "title_fa"     => "روسیه",
                "continent_id" => "476",
                "country_code" => "+7095",
            ],

            [

                "title_en"     => "Saudi Arabia",
                "title_fa"     => "عربستان سعودی",
                "continent_id" => "476",
                "country_code" => "+966",
            ],
            [

                "title_en"     => "Singapore",
                "title_fa"     => "سنگاپور",
                "continent_id" => "476",
                "country_code" => "+65",
            ],
            [

                "title_en"     => "South Korea",
                "title_fa"     => "کره جنوبی",
                "continent_id" => "476",
                "country_code" => "+82",
            ],
            [

                "title_en"     => "Sri Lanka",
                "title_fa"     => "سریلانکا",
                "continent_id" => "476",
                "country_code" => "+94",
            ],
            [

                "title_en"     => "Syria",
                "title_fa"     => "سوریه",
                "continent_id" => "476",
                "country_code" => "+963",
            ],

            [

                "title_en"     => "Taiwan",
                "title_fa"     => "تایوان",
                "continent_id" => "476",
                "country_code" => "+886",
            ],
            [

                "title_en"     => "Tajikistan",
                "title_fa"     => "تاجیکستان",
                "continent_id" => "476",
                "country_code" => "+992",
            ],
            [

                "title_en"     => "Thailand",
                "title_fa"     => "تایلند",
                "continent_id" => "476",
                "country_code" => "+66",
            ],
            [

                "title_en"     => "Timor-Leste",
                "title_fa"     => "تیمور شرقی",
                "continent_id" => "476",
                "country_code" => "+670",
            ],
            [

                "title_en"     => "Turkey",
                "title_fa"     => "ترکیه",
                "continent_id" => "476",
                "country_code" => "+90",
            ],
            [

                "title_en"     => "Turkmenistan",
                "title_fa"     => "ترکمنستان",
                "continent_id" => "476",
                "country_code" => "+7363",
            ],

            [

                "title_en"     => "United Arab Emirates (UAE)",
                "title_fa"     => "امارات متحده عربی",
                "continent_id" => "476",
                "country_code" => "+971",
            ],
            [

                "title_en"     => "Uzbekistan",
                "title_fa"     => "ازبکستان",
                "continent_id" => "476",
                "country_code" => "+7371",
            ],

            [

                "title_en"     => "Vietnam",
                "title_fa"     => "ویتنام",
                "continent_id" => "476",
                "country_code" => "+84",
            ],

            [

                "title_en"     => "Yemen",
                "title_fa"     => "یمن",
                "continent_id" => "476",
                "country_code" => "+967",
            ],
        ];

        $asian_countries = array_map(function ($key) {
            $key['type'] = "country";

            return $key;
        }, $asian_countries);

        return $asian_countries;
    }



    /**
     * Return African countries list which is bound to the Africa continent ID
     *
     * @return array
     */
    protected function africanCountries()
    {
        $african_countries = [
            [

                "title_en"     => "Algeria",
                "title_fa"     => "الجزایر",
                "continent_id" => "475",
                "country_code" => "+213",
            ],
            [

                "title_en"     => "Angola",
                "title_fa"     => "آنگولا",
                "continent_id" => "475",
                "country_code" => "+244",
            ],

            [

                "title_en"     => "Benin",
                "title_fa"     => "بنین",
                "continent_id" => "475",
                "country_code" => "+229",
            ],
            [

                "title_en"     => "Botswana",
                "title_fa"     => "بوتسوانا",
                "continent_id" => "475",
                "country_code" => "+267",
            ],
            [

                "title_en"     => "Burkina Faso",
                "title_fa"     => "بورکینافاسو",
                "continent_id" => "475",
                "country_code" => "+226",
            ],
            [

                "title_en"     => "Burundi",
                "title_fa"     => "بوروندی",
                "continent_id" => "475",
                "country_code" => "+257",
            ],

            [

                "title_en"     => "Cabo Verde",
                "title_fa"     => "کاپ ورد",
                "continent_id" => "475",
                "country_code" => "+238",
            ],
            [

                "title_en"     => "Cameroon",
                "title_fa"     => "کامرون",
                "continent_id" => "475",
                "country_code" => "+237",
            ],

            [

                "title_en"     => "Central African Republic (CAR)",
                "title_fa"     => "جمهوری آفریقای مرکزی",
                "continent_id" => "475",
                "country_code" => "+236",
            ],
            [

                "title_en"     => "Chad",
                "title_fa"     => "چاد",
                "continent_id" => "475",
                "country_code" => "+235",
            ],
            [

                "title_en"     => "Comoros",
                "title_fa"     => "کومور",
                "continent_id" => "475",
                "country_code" => "+269",
            ],
            [

                "title_en"     => "Democratic Republic of the Congo",
                "title_fa"     => "جمهوری دموکراتیک کنگو",
                "continent_id" => "475",
                "country_code" => "+243",
            ],
            [

                "title_en"     => "Republic of the Congo",
                "title_fa"     => "جمهوری کنگو",
                "continent_id" => "475",
                "country_code" => "+242",
            ],
            [

                "title_en"     => "Cote d'Ivoire",
                "title_fa"     => "ساحل عاج",
                "continent_id" => "475",
                "country_code" => "+225",
            ],

            [

                "title_en"     => "Djibouti",
                "title_fa"     => "جیبوتی",
                "continent_id" => "475",
                "country_code" => "+253",
            ],

            [

                "title_en"     => "Egypt",
                "title_fa"     => "مصر",
                "continent_id" => "475",
                "country_code" => "+20",
            ],
            [

                "title_en"     => "Equatorial Guinea",
                "title_fa"     => "گینه استوایی",
                "continent_id" => "475",
                "country_code" => "+240",
            ],
            [

                "title_en"     => "Eritrea",
                "title_fa"     => "اریتره",
                "continent_id" => "475",
                "country_code" => "+291",
            ],
            [

                "title_en"     => "Eswatini(formerly Swaziland)",
                "title_fa"     => "سوازیلند",
                "continent_id" => "475",
                "country_code" => "+268",
            ],
            [

                "title_en"     => "Ethiopia",
                "title_fa"     => "اتیوپی",
                "continent_id" => "475",
                "country_code" => "+251",
            ],

            [

                "title_en"     => "Gabon",
                "title_fa"     => "گابن",
                "continent_id" => "475",
                "country_code" => "+241",
            ],
            [

                "title_en"     => "Gambia",
                "title_fa"     => "گامبیا",
                "continent_id" => "475",
                "country_code" => "+220",
            ],
            [

                "title_en"     => "Ghana",
                "title_fa"     => "غنا",
                "continent_id" => "475",
                "country_code" => "+233",
            ],
            [

                "title_en"     => "Guinea",
                "title_fa"     => "گینه",
                "continent_id" => "475",
                "country_code" => "+224",
            ],
            [

                "title_en"     => "Guinea - Bissau",
                "title_fa"     => "گینه بیسائو",
                "continent_id" => "475",
                "country_code" => "+245",
            ],

            [

                "title_en"     => "Kenya",
                "title_fa"     => "کنیا",
                "continent_id" => "475",
                "country_code" => "+254",
            ],

            [

                "title_en"     => "Lesotho",
                "title_fa"     => "لسوتو",
                "continent_id" => "475",
                "country_code" => "+266",
            ],
            [

                "title_en"     => "Liberia",
                "title_fa"     => "لیبریا",
                "continent_id" => "475",
                "country_code" => "+231",
            ],
            [

                "title_en"     => "Libya",
                "title_fa"     => "لیبی",
                "continent_id" => "475",
                "country_code" => "+218",
            ],

            [

                "title_en"     => "Madagascar",
                "title_fa"     => "ماداگاسکار",
                "continent_id" => "475",
                "country_code" => "+261",
            ],
            [

                "title_en"     => "Malawi",
                "title_fa"     => "مالاوی",
                "continent_id" => "475",
                "country_code" => "+265",
            ],
            [

                "title_en"     => "Mali",
                "title_fa"     => "مالی",
                "continent_id" => "475",
                "country_code" => "+223",
            ],
            [

                "title_en"     => "Mauritania",
                "title_fa"     => "موریتانی",
                "continent_id" => "475",
                "country_code" => "+222",
            ],
            [

                "title_en"     => "Mauritius",
                "title_fa"     => "موریس",
                "continent_id" => "475",
                "country_code" => "+230",
            ],
            [

                "title_en"     => "Morocco",
                "title_fa"     => "مراکش",
                "continent_id" => "475",
                "country_code" => "+212",
            ],
            [

                "title_en"     => "Mozambique",
                "title_fa"     => "موزامبیک",
                "continent_id" => "475",
                "country_code" => "+258",
            ],

            [

                "title_en"     => "Namibia",
                "title_fa"     => "نامیبیا",
                "continent_id" => "475",
                "country_code" => "+264",
            ],
            [

                "title_en"     => "Niger",
                "title_fa"     => "نیجر",
                "continent_id" => "475",
                "country_code" => "+227",
            ],
            [

                "title_en"     => "Nigeria",
                "title_fa"     => "نیجریه",
                "continent_id" => "475",
                "country_code" => "+234",
            ],

            [

                "title_en"     => "Rwanda",
                "title_fa"     => "روآندا",
                "continent_id" => "475",
                "country_code" => "+250",
            ],

            [

                "title_en"     => "Sao Tome and Principe",
                "title_fa"     => "سائوتومه و پرنسیپ",
                "continent_id" => "475",
                "country_code" => "+239",
            ],
            [

                "title_en"     => "Senegal",
                "title_fa"     => "سنگال",
                "continent_id" => "475",
                "country_code" => "+221",
            ],
            [

                "title_en"     => "Seychelles",
                "title_fa"     => "سیشل",
                "continent_id" => "475",
                "country_code" => "+148",
            ],
            [

                "title_en"     => "Sierra Leone",
                "title_fa"     => "سیرالئون",
                "continent_id" => "475",
                "country_code" => "+232",
            ],
            [

                "title_en"     => "Somalia",
                "title_fa"     => "سومالی",
                "continent_id" => "475",
                "country_code" => "+252",
            ],
            [

                "title_en"     => "South Africa",
                "title_fa"     => "آفریقای جنوبی",
                "continent_id" => "475",
                "country_code" => "+27",
            ],
            [

                "title_en"     => "South Sudan",
                "title_fa"     => "سودان جنوبی",
                "continent_id" => "475",
                "country_code" => "+211",
            ],
            [

                "title_en"     => "Sudan",
                "title_fa"     => "سودان",
                "continent_id" => "475",
                "country_code" => "+249",
            ],
            [

                "title_en"     => "Swaziland(renamed to Eswatini)",
                "title_fa"     => "سوازیلند",
                "continent_id" => "475",
                "country_code" => "+268",
            ],

            [

                "title_en"     => "Tanzania",
                "title_fa"     => "تانزانیا",
                "continent_id" => "475",
                "country_code" => "+255",
            ],
            [

                "title_en"     => "Togo",
                "title_fa"     => "توگو",
                "continent_id" => "475",
                "country_code" => "+228",
            ],
            [

                "title_en"     => "Tunisia",
                "title_fa"     => "تونس",
                "continent_id" => "475",
                "country_code" => "+216",
            ],

            [

                "title_en"     => "Uganda",
                "title_fa"     => "اوگاندا",
                "continent_id" => "475",
                "country_code" => "+25",
            ],

            [

                "title_en"     => "Zambia",
                "title_fa"     => "زامبیا",
                "continent_id" => "475",
                "country_code" => "+260",
            ],
            [

                "title_en"     => "Zimbabwe",
                "title_fa"     => "زیمبابوه",
                "continent_id" => "475",
                "country_code" => "+263",
            ],
        ];

        $african_countries = array_map(function ($key) {
            $key['type'] = "country";

            return $key;
        }, $african_countries);

        return $african_countries;
    }



    /**
     * Returns Australia and Oceania countries list which are bound to the continent ID
     *
     * @return array
     */
    protected function australiaAndOceaniaCountries()
    {
        $countries = [
            [

                "title_en"     => "Australia",
                "title_fa"     => "استرالیا",
                "continent_id" => "480",
                "country_code" => "+61",
            ],
            [

                "title_en"     => "Fiji",
                "title_fa"     => "فیجی",
                "continent_id" => "480",
                "country_code" => "+679",
            ],
            [

                "title_en"     => "Kiribati",
                "title_fa"     => "کیریباتی",
                "continent_id" => "480",
                "country_code" => "+686",
            ],
            [

                "title_en"     => "Marshall Islands",
                "title_fa"     => "جزایر مارشال",
                "continent_id" => "480",
                "country_code" => "+692",
            ],
            [

                "title_en"     => "Micronesia",
                "title_fa"     => "میکرونزی",
                "continent_id" => "480",
                "country_code" => "+691",
            ],
            [

                "title_en"     => "Nauru",
                "title_fa"     => "نائورو",
                "continent_id" => "480",
                "country_code" => "+674",
            ],
            [

                "title_en"     => "New Zealand",
                "title_fa"     => "نیوزیلند",
                "continent_id" => "480",
                "country_code" => "+64",
            ],

            [

                "title_en"     => "Palau",
                "title_fa"     => "پالائو",
                "continent_id" => "480",
                "country_code" => "+680",
            ],
            [

                "title_en"     => "Papua New Guinea",
                "title_fa"     => "پاپوآ گینه نو",
                "continent_id" => "480",
                "country_code" => "+675",
            ],

            [

                "title_en"     => "Samoa",
                "title_fa"     => "ساموآ",
                "continent_id" => "480",
                "country_code" => "+685",
            ],
            [

                "title_en"     => "Solomon Islands",
                "title_fa"     => "جزایر سلیمان",
                "continent_id" => "480",
                "country_code" => "+677",
            ],

            [

                "title_en"     => "Tonga",
                "title_fa"     => "تونگا",
                "continent_id" => "480",
                "country_code" => "+676",
            ],
            [

                "title_en"     => "Tuvalu",
                "title_fa"     => "تووالو",
                "continent_id" => "480",
                "country_code" => "+688",
            ],

            [

                "title_en"     => "Vanuatu",
                "title_fa"     => "وانواتو",
                "continent_id" => "480",
                "country_code" => "+678",
            ],
        ];

        $countries = array_map(function ($key) {
            $key['type'] = "country";

            return $key;
        }, $countries);


        return $countries;
    }



    /**
     * Returns the European countries list which is bound to the Europe continent ID
     *
     * @return array
     */
    protected function europeanCountries()
    {
        $european_countries = [
            [

                "title_en"     => "Albania",
                "title_fa"     => "آلبانی",
                "continent_id" => "479",
                "country_code" => "+355",
            ],
            [

                "title_en"     => "Andorra",
                "title_fa"     => "آندورا",
                "continent_id" => "479",
                "country_code" => "+376",
            ],
            [

                "title_en"     => "Armenia",
                "title_fa"     => "ارمنستان",
                "continent_id" => "479",
                "deleted_at"   => now()->toDateTimeString(),
                "country_code" => "+374",
            ],
            [

                "title_en"     => "Austria",
                "title_fa"     => "اتریش",
                "continent_id" => "479",
                "country_code" => "+43",
            ],
            [

                "title_en"     => "Azerbaijan",
                "title_fa"     => "آذربایجان",
                "continent_id" => "479",
                "deleted_at"   => now()->toDateTimeString(),
                "country_code" => "+994",
            ],
            [

                "title_en"     => "Belarus",
                "title_fa"     => "بلاروس",
                "continent_id" => "479",
                "country_code" => "+375",
            ],
            [

                "title_en"     => "Belgium",
                "title_fa"     => "بلژیک",
                "continent_id" => "479",
                "country_code" => "+32",
            ],
            [

                "title_en"     => "Bosnia and Herzegovina",
                "title_fa"     => "بوسنی و هرزگوین",
                "continent_id" => "479",
                "country_code" => "+387",
            ],
            [

                "title_en"     => "Bulgaria",
                "title_fa"     => "بلغارستان",
                "continent_id" => "479",
                "country_code" => "+359",
            ],
            [

                "title_en"     => "Croatia",
                "title_fa"     => "کرواسی",
                "continent_id" => "479",
                "country_code" => "+385",
            ],
            [

                "title_en"     => "Cyprus",
                "title_fa"     => "قبرس",
                "continent_id" => "479",
                "country_code" => "+357",
            ],
            [

                "title_en"     => "Czech Republic",
                "title_fa"     => "جمهوری چک",
                "continent_id" => "479",
                "country_code" => "+42",
            ],
            [

                "title_en"     => "Denmark",
                "title_fa"     => "دانمارک",
                "continent_id" => "479",
                "country_code" => "+45",
            ],
            [

                "title_en"     => "Estonia",
                "title_fa"     => "استونی",
                "continent_id" => "479",
                "country_code" => "+372",
            ],
            [

                "title_en"     => "Finland",
                "title_fa"     => "فنلاند",
                "continent_id" => "479",
                "country_code" => "+358",
            ],
            [

                "title_en"     => "France",
                "title_fa"     => "فرانسه",
                "continent_id" => "479",
                "country_code" => "+33",
            ],
            [

                "title_en"     => "Georgia",
                "title_fa"     => "گرجستان",
                "continent_id" => "479",
                "deleted_at"   => now()->toDateTimeString(),
                "country_code" => "+955",
            ],
            [

                "title_en"     => "Germany",
                "title_fa"     => "آلمان",
                "continent_id" => "479",
                "country_code" => "+49",
            ],
            [

                "title_en"     => "Greece",
                "title_fa"     => "یونان",
                "continent_id" => "479",
                "country_code" => "+30",
            ],
            [

                "title_en"     => "Hungary",
                "title_fa"     => "مجارستان",
                "continent_id" => "479",
                "country_code" => "+36",
            ],
            [

                "title_en"     => "Iceland",
                "title_fa"     => "ایسلند",
                "continent_id" => "479",
                "country_code" => "+354",
            ],
            [

                "title_en"     => "Ireland",
                "title_fa"     => "ایرلند",
                "continent_id" => "479",
                "country_code" => "+353",
            ],
            [

                "title_en"     => "Italy",
                "title_fa"     => "ایتالیا",
                "continent_id" => "479",
                "country_code" => "+39",
            ],
            [

                "title_en"     => "Kosovo",
                "title_fa"     => "کوزوو",
                "continent_id" => "479",
                "country_code" => "+383",
            ],
            [

                "title_en"     => "Latvia",
                "title_fa"     => "لاتویا",
                "continent_id" => "479",
                "country_code" => "+371",
            ],
            [

                "title_en"     => "Liechtenstein",
                "title_fa"     => "لیختن اشتاین",
                "continent_id" => "479",
                "country_code" => "+423",
            ],
            [

                "title_en"     => "Lithuania",
                "title_fa"     => "لیتوانی",
                "continent_id" => "479",
                "country_code" => "+370",
            ],
            [

                "title_en"     => "Luxembourg",
                "title_fa"     => "لوگزامبورگ",
                "continent_id" => "479",
                "country_code" => "+352",
            ],
            [

                "title_en"     => "Macedonia",
                "title_fa"     => "مقدونیه",
                "continent_id" => "479",
                "country_code" => "+389",
            ],
            [

                "title_en"     => "Malta",
                "title_fa"     => "مالت",
                "continent_id" => "479",
                "country_code" => "+356",
            ],
            [

                "title_en"     => "Moldova",
                "title_fa"     => "مولداوی",
                "continent_id" => "479",
                "country_code" => "+373",
            ],
            [

                "title_en"     => "Monaco",
                "title_fa"     => "موناکو",
                "continent_id" => "479",
                "country_code" => "+377",
            ],
            [

                "title_en"     => "Montenegro",
                "title_fa"     => "مونته نگرو",
                "continent_id" => "479",
                "country_code" => "+382",
            ],
            [

                "title_en"     => "The Netherlands",
                "title_fa"     => "هلند",
                "continent_id" => "479",
                "country_code" => "+31",
            ],
            [

                "title_en"     => "Norway",
                "title_fa"     => "نروژ",
                "continent_id" => "479",
                "country_code" => "+47",
            ],
            [

                "title_en"     => "Poland",
                "title_fa"     => "لهستان",
                "continent_id" => "479",
                "country_code" => "+48",
            ],
            [

                "title_en"     => "Portugal",
                "title_fa"     => "پرتغال",
                "continent_id" => "479",
                "country_code" => "+351",
            ],
            [

                "title_en"     => "Romania",
                "title_fa"     => "رومانی",
                "continent_id" => "479",
                "country_code" => "+40",
            ],
            [

                "title_en"     => "Russia",
                "title_fa"     => "روسیه",
                "continent_id" => "479",
                "deleted_at"   => now()->toDateTimeString(),
                "country_code" => "+7095",
            ],
            [

                "title_en"     => "San Marino",
                "title_fa"     => "سان مارینو",
                "continent_id" => "479",
                "country_code" => "+378",
            ],
            [

                "title_en"     => "Serbia",
                "title_fa"     => "صربستان",
                "continent_id" => "479",
                "country_code" => "+381",
            ],
            [

                "title_en"     => "Slovakia",
                "title_fa"     => "اسلواکی",
                "continent_id" => "479",
                "country_code" => "+421",
            ],
            [

                "title_en"     => "Slovenia",
                "title_fa"     => "اسلوونی",
                "continent_id" => "479",
                "country_code" => "+386",
            ],
            [

                "title_en"     => "Spain",
                "title_fa"     => "اسپانیا",
                "continent_id" => "479",
                "country_code" => "+34",
            ],
            [

                "title_en"     => "Sweden",
                "title_fa"     => "سوئد",
                "continent_id" => "479",
                "country_code" => "+46",
            ],
            [

                "title_en"     => "Switzerland",
                "title_fa"     => "سوئیس",
                "continent_id" => "479",
                "country_code" => "+41",
            ],
            [

                "title_en"     => "Turkey",
                "title_fa"     => "ترکیه",
                "continent_id" => "479",
                "deleted_at"   => now()->toDateTimeString(),
                "country_code" => "+90",
            ],
            [

                "title_en"     => "Ukraine",
                "title_fa"     => "اوکراین",
                "continent_id" => "479",
                "country_code" => "+380",
            ],
            [

                "title_en"     => "United Kingdom",
                "title_fa"     => "بریتانیا",
                "continent_id" => "479",
                "country_code" => "+44",
            ],
            [

                "title_en"     => "Vatican City",
                "title_fa"     => "واتیکان",
                "continent_id" => "479",
                "country_code" => "+39",
            ],
        ];

        $european_countries = array_map(function ($key) {
            $key['type'] = "country";

            return $key;
        }, $european_countries);


        return $european_countries;
    }



    /**
     * Returns the North American countries list which are bound to the North America continents
     *
     * @return array
     */
    protected function northAmericanCountries()
    {

        $countries = [

            [

                "title_en"     => "Antigua and Barbuda",
                "title_fa"     => "آنتیگوا و باربودا",
                "continent_id" => "477",
                "country_code" => "+1268",
            ],
            [

                "title_en"     => "Bahamas",
                "title_fa"     => "باهاما",
                "continent_id" => "477",
                "country_code" => "+18093",
            ],
            [

                "title_en"     => "Barbados",
                "title_fa"     => "باربادوس",
                "continent_id" => "477",
                "country_code" => "+18094",
            ],
            [

                "title_en"     => "Belize",
                "title_fa"     => "بلیز",
                "continent_id" => "477",
                "country_code" => "+501",
            ],
            [

                "title_en"     => "Canada",
                "title_fa"     => "کانادا",
                "continent_id" => "477",
                "country_code" => "+1",
            ],
            [

                "title_en"     => "Costa Rica",
                "title_fa"     => "کاستاریکا",
                "continent_id" => "477",
                "country_code" => "+506",
            ],
            [

                "title_en"     => "Cuba",
                "title_fa"     => "کوبا",
                "continent_id" => "477",
                "country_code" => "+53",
            ],
            [

                "title_en"     => "Dominica",
                "title_fa"     => "دومینیکا",
                "continent_id" => "477",
                "country_code" => "+1767",
            ],
            [

                "title_en"     => "Dominican Republic",
                "title_fa"     => "دومینیکن",
                "continent_id" => "477",
                "country_code" => "+1809",
            ],
            [

                "title_en"     => "El Salvador",
                "title_fa"     => "السالوادور",
                "continent_id" => "477",
                "country_code" => "+503",
            ],
            [

                "title_en"     => "Grenada",
                "title_fa"     => "گرنادا",
                "continent_id" => "477",
                "country_code" => "+1473",
            ],
            [

                "title_en"     => "Guatemala",
                "title_fa"     => "گواتمالا",
                "continent_id" => "477",
                "country_code" => "+502",
            ],
            [

                "title_en"     => "Haiti",
                "title_fa"     => "هائیتی",
                "continent_id" => "477",
                "country_code" => "+509",
            ],
            [

                "title_en"     => "Honduras",
                "title_fa"     => "هندوراس",
                "continent_id" => "477",
                "country_code" => "+504",
            ],
            [

                "title_en"     => "Jamaica",
                "title_fa"     => "جامائیکا",
                "continent_id" => "477",
                "country_code" => "+18099",
            ],
            [

                "title_en"     => "Mexico",
                "title_fa"     => "مکزیک",
                "continent_id" => "477",
                "country_code" => "+52",
            ],
            [

                "title_en"     => "Nicaragua",
                "title_fa"     => "نیکاراگوئه",
                "continent_id" => "477",
                "country_code" => "+505",
            ],
            [

                "title_en"     => "Panama",
                "title_fa"     => "پاناما",
                "continent_id" => "477",
                "country_code" => "+507",
            ],
            [

                "title_en"     => "Saint Kitts and Nevis",
                "title_fa"     => "سنت کیتس و نویس",
                "continent_id" => "477",
                "country_code" => "+1869",
            ],
            [

                "title_en"     => "Saint Lucia",
                "title_fa"     => "سنت لوسیا",
                "continent_id" => "477",
                "country_code" => "+1758",
            ],
            [

                "title_en"     => "Saint Vincent and the Grenadines",
                "title_fa"     => "سنت وینسنت و گرنادین",
                "continent_id" => "477",
                "country_code" => "+1784",
            ],
            [

                "title_en"     => "Trinidad and Tobago",
                "title_fa"     => "ترینیداد و توباگو",
                "continent_id" => "477",
                "country_code" => "+1868",
            ],
            [

                "title_en"     => "United States of America (USA)",
                "title_fa"     => "ایالات متحده آمریکا",
                "continent_id" => "477",
                "country_code" => "+1",
            ],
        ];

        $countries = array_map(function ($key) {
            $key['type'] = "country";

            return $key;
        }, $countries);

        return $countries;
    }



    /**
     * Returns the lists of South America countries bound to their continent ID
     *
     * @return array
     */
    protected function southAmericanCountries()
    {

        $countries = [
            [

                "title_en"     => "Argentina",
                "title_fa"     => "آرژانتین",
                "continent_id" => "478",
                "country_code" => "+54",
            ],
            [

                "title_en"     => "Bolivia",
                "title_fa"     => "بولیوی",
                "continent_id" => "478",
                "country_code" => "+591",
            ],
            [

                "title_en"     => "Brazil",
                "title_fa"     => "برزیل",
                "continent_id" => "478",
                "country_code" => "+55",
            ],
            [

                "title_en"     => "Chile",
                "title_fa"     => "شیلی",
                "continent_id" => "478",
                "country_code" => "+56",
            ],
            [

                "title_en"     => "Colombia",
                "title_fa"     => "کلمبیا",
                "continent_id" => "478",
                "country_code" => "+57",
            ],
            [

                "title_en"     => "Ecuador",
                "title_fa"     => "اکوادور",
                "continent_id" => "478",
                "country_code" => "+593",
            ],

            [

                "title_en"     => "Guyana",
                "title_fa"     => "گویان",
                "continent_id" => "478",
                "country_code" => "+592",
            ],
            [

                "title_en"     => "Paraguay",
                "title_fa"     => "پاراگوئه",
                "continent_id" => "478",
                "country_code" => "+595",
            ],
            [

                "title_en"     => "Peru",
                "title_fa"     => "پرو",
                "continent_id" => "478",
                "country_code" => "+51",
            ],
            [

                "title_en"     => "Suriname",
                "title_fa"     => "سورینام",
                "continent_id" => "478",
                "country_code" => "+597",
            ],
            [

                "title_en"     => "Uruguay",
                "title_fa"     => "اروگوئه",
                "continent_id" => "478",
                "country_code" => "+598",
            ],
            [

                "title_en"     => "Venezuela",
                "title_fa"     => "ونزوئلا",
                "continent_id" => "478",
                "country_code" => "+58",
            ],
        ];

        $countries = array_map(function ($key) {
            $key['type'] = "country";

            return $key;
        }, $countries);

        return $countries;

    }



    /**
     * Returns provinces of Iran, the id for Iran states occupied from 1 - 31
     *
     * @return array
     */
    protected function iranStates()
    {
        $states = [
            [
                "id"           => 1,
                "deleted_at"   => null,
                "title_fa"     => "آذربایجان شرقی",
                "province_id"  => 0,
                "capital_id"   => 37,
                "latitude"     => "38.32",
                "longitude"    => "46.67",
                "continent_id" => "476",
            ],
            [
                "id"           => 2,
                "deleted_at"   => null,
                "title_fa"     => "آذربایجان غربی",
                "province_id"  => 0,
                "capital_id"   => 54,
                "latitude"     => "38.07",
                "longitude"    => "45.93",
                "continent_id" => "476",
            ],
            [
                "id"           => 3,
                "deleted_at"   => null,
                "title_fa"     => "اردبیل",
                "province_id"  => 0,
                "capital_id"   => 69,
                "latitude"     => "38.65",
                "longitude"    => "48.12",
                "continent_id" => "476",
            ],
            [
                "id"           => 4,
                "deleted_at"   => null,
                "title_fa"     => "اصفهان",
                "province_id"  => 0,
                "capital_id"   => 81,
                "latitude"     => "32.57",
                "longitude"    => "52.67",
                "continent_id" => "476",
            ],
            [
                "id"           => 5,
                "deleted_at"   => null,
                "title_fa"     => "البرز",
                "province_id"  => 0,
                "capital_id"   => 108,
                "latitude"     => "36.02",
                "longitude"    => "50.87",
                "continent_id" => "476",
            ],
            [
                "id"           => 6,
                "deleted_at"   => null,
                "title_fa"     => "ایلام",
                "province_id"  => 0,
                "capital_id"   => 111,
                "latitude"     => "32.99",
                "longitude"    => "46.92",
                "continent_id" => "476",
            ],
            [
                "id"           => 7,
                "deleted_at"   => null,
                "title_fa"     => "بوشهر",
                "province_id"  => 0,
                "capital_id"   => 120,
                "latitude"     => "28.51",
                "longitude"    => "51.39",
                "continent_id" => "476",
            ],
            [
                "id"           => 8,
                "deleted_at"   => null,
                "title_fa"     => "تهران",
                "province_id"  => 0,
                "capital_id"   => 135,
                "latitude"     => "35.55",
                "longitude"    => "51.79",
                "continent_id" => "476",
            ],
            [
                "id"           => 9,
                "deleted_at"   => null,
                "title_fa"     => "چهار محال و بختیاری",
                "province_id"  => 0,
                "capital_id"   => 150,
                "latitude"     => "31.89",
                "longitude"    => "50.43",
                "continent_id" => "476",
            ],
            [
                "id"           => 10,
                "deleted_at"   => null,
                "title_fa"     => "خراسان جنوبی",
                "province_id"  => 0,
                "capital_id"   => 156,
                "latitude"     => "32.81",
                "longitude"    => "58.33",
                "continent_id" => "476",
            ],
            [
                "id"           => 11,
                "deleted_at"   => null,
                "title_fa"     => "خراسان رضوی",
                "province_id"  => 0,
                "capital_id"   => 191,
                "latitude"     => "35.91",
                "longitude"    => "58.96",
                "continent_id" => "476",
            ],
            [
                "id"           => 12,
                "deleted_at"   => null,
                "title_fa"     => "خراسان شمالی",
                "province_id"  => 0,
                "capital_id"   => 195,
                "latitude"     => "37.57",
                "longitude"    => "57.37",
                "continent_id" => "476",
            ],
            [
                "id"           => 13,
                "deleted_at"   => null,
                "title_fa"     => "خوزستان",
                "province_id"  => 0,
                "capital_id"   => 207,
                "latitude"     => "31.27",
                "longitude"    => "49.07",
                "continent_id" => "476",
            ],
            [
                "id"           => 14,
                "deleted_at"   => null,
                "title_fa"     => "زنجان",
                "province_id"  => 0,
                "capital_id"   => 233,
                "latitude"     => "36.58",
                "longitude"    => "48.31",
                "continent_id" => "476",
            ],
            [
                "id"           => 15,
                "deleted_at"   => null,
                "title_fa"     => "سمنان",
                "province_id"  => 0,
                "capital_id"   => 239,
                "latitude"     => "35.89",
                "longitude"    => "54.58",
                "continent_id" => "476",
            ],
            [
                "id"           => 16,
                "deleted_at"   => null,
                "title_fa"     => "سیستان و بلوچستان",
                "province_id"  => 0,
                "capital_id"   => 249,
                "latitude"     => "28.21",
                "longitude"    => "61.42",
                "continent_id" => "476",
            ],
            [
                "id"           => 17,
                "deleted_at"   => null,
                "title_fa"     => "فارس",
                "province_id"  => 0,
                "capital_id"   => 278,
                "latitude"     => "29.13",
                "longitude"    => "53.22",
                "continent_id" => "476",
            ],
            [
                "id"           => 18,
                "deleted_at"   => null,
                "title_fa"     => "قزوین",
                "province_id"  => 0,
                "capital_id"   => 297,
                "latitude"     => "36.22",
                "longitude"    => "49.79",
                "continent_id" => "476",
            ],
            [
                "id"           => 19,
                "deleted_at"   => null,
                "title_fa"     => "قم",
                "province_id"  => 0,
                "capital_id"   => 298,
                "latitude"     => "34.71",
                "longitude"    => "51.07",
                "continent_id" => "476",
            ],
            [
                "id"           => 20,
                "deleted_at"   => null,
                "title_fa"     => "کردستان",
                "province_id"  => 0,
                "capital_id"   => 305,
                "latitude"     => "35.73",
                "longitude"    => "46.89",
                "continent_id" => "476",
            ],
            [
                "id"           => 21,
                "deleted_at"   => null,
                "title_fa"     => "کرمان",
                "province_id"  => 0,
                "capital_id"   => 327,
                "latitude"     => "29.09",
                "longitude"    => "57.11",
                "continent_id" => "476",
            ],
            [
                "id"           => 22,
                "deleted_at"   => null,
                "title_fa"     => "کرمانشاه",
                "province_id"  => 0,
                "capital_id"   => 342,
                "latitude"     => "34.52",
                "longitude"    => "46.79",
                "continent_id" => "476",
            ],
            [
                "id"           => 23,
                "deleted_at"   => null,
                "title_fa"     => "کهگیلویه و بویراحمد",
                "province_id"  => 0,
                "capital_id"   => 474,
                "latitude"     => "30.48",
                "longitude"    => "50.84",
                "continent_id" => "476",
            ],
            [
                "id"           => 24,
                "deleted_at"   => null,
                "title_fa"     => "گلستان",
                "province_id"  => 0,
                "capital_id"   => 363,
                "latitude"     => "37.45",
                "longitude"    => "55.21",
                "continent_id" => "476",
            ],
            [
                "id"           => 25,
                "deleted_at"   => null,
                "title_fa"     => "گیلان",
                "province_id"  => 0,
                "capital_id"   => 372,
                "latitude"     => "37.51",
                "longitude"    => "49.59",
                "continent_id" => "476",
            ],
            [
                "id"           => 26,
                "deleted_at"   => null,
                "title_fa"     => "لرستان",
                "province_id"  => 0,
                "capital_id"   => 388,
                "latitude"     => "33.52",
                "longitude"    => "48.41",
                "continent_id" => "476",
            ],
            [
                "id"           => 27,
                "deleted_at"   => null,
                "title_fa"     => "مازندران",
                "province_id"  => 0,
                "capital_id"   => 403,
                "latitude"     => "36.45",
                "longitude"    => "52.32",
                "continent_id" => "476",
            ],
            [
                "id"           => 28,
                "deleted_at"   => null,
                "title_fa"     => "مرکزی",
                "province_id"  => 0,
                "capital_id"   => 418,
                "latitude"     => "34.46",
                "longitude"    => "49.99",
                "continent_id" => "476",
            ],
            [
                "id"           => 29,
                "deleted_at"   => null,
                "title_fa"     => "هرمزگان",
                "province_id"  => 0,
                "capital_id"   => 432,
                "latitude"     => "26.99",
                "longitude"    => "56.42",
                "continent_id" => "476",
            ],
            [
                "id"           => 30,
                "deleted_at"   => null,
                "title_fa"     => "همدان",
                "province_id"  => 0,
                "capital_id"   => 450,
                "latitude"     => "34.91",
                "longitude"    => "48.64",
                "continent_id" => "476",
            ],
            [
                "id"           => 31,
                "deleted_at"   => null,
                "title_fa"     => "یزد",
                "province_id"  => 0,
                "capital_id"   => 460,
                "latitude"     => "31.48",
                "longitude"    => "54.86",
                "continent_id" => "476",
            ],
        ];

        $states = array_map(function ($key) {
            $key['country_id'] = '495';
            $key['type']       = "province";
            $key['language']   = "fa";
            $key['currency']   = "IRR";

            return $key;
        }, $states);

        return $states;
    }



    /**
     * Returns cities of Iran, the id field for iran cities occupied from 32 - 474
     *
     * @return array
     */
    protected function iranCities()
    {
        //PASTE IMPORTED ARRAY HERE:
        $cities = [
            [
                "id"          => 32,
                "deleted_at"  => null,
                "title_fa"    => "آذرشهر",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.7661781311035",
                "longitude"   => "45.976448059082",
            ],
            [
                "id"          => 33,
                "deleted_at"  => null,
                "title_fa"    => "اسکو",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.917781829834",
                "longitude"   => "46.1244697570801",
            ],
            [
                "id"          => 34,
                "deleted_at"  => null,
                "title_fa"    => "اهر",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "38.4745330810547",
                "longitude"   => "47.0709838867188",
            ],
            [
                "id"          => 35,
                "deleted_at"  => null,
                "title_fa"    => "بستان آباد",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.8369941711426",
                "longitude"   => "46.83096313256",
            ],
            [
                "id"          => 36,
                "deleted_at"  => null,
                "title_fa"    => "بناب",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.345588684082",
                "longitude"   => "46.06620025633",
            ],
            [
                "id"          => 37,
                "deleted_at"  => null,
                "title_fa"    => "تبریز",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "38.0792922973633",
                "longitude"   => "46.2891502380371",
            ],
            [
                "id"          => 38,
                "deleted_at"  => null,
                "title_fa"    => "جلفا",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "38.93248620605",
                "longitude"   => "45.6388702392578",
            ],
            [
                "id"          => 39,
                "deleted_at"  => null,
                "title_fa"    => "چاراویماق",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => 37.214626,
                "longitude"   => 47.062367,
            ],
            [
                "id"          => 40,
                "deleted_at"  => null,
                "title_fa"    => "خدا آفرین",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => 39.140522,
                "longitude"   => 46.961846,
            ],
            [
                "id"          => 41,
                "deleted_at"  => null,
                "title_fa"    => "سراب",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.9409980773926",
                "longitude"   => "47.5353317260742",
            ],
            [
                "id"          => 42,
                "deleted_at"  => null,
                "title_fa"    => "شبستر",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "38.1805000305176",
                "longitude"   => "45.7013931274414",
            ],
            [
                "id"          => 43,
                "deleted_at"  => null,
                "title_fa"    => "عجب شیر",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.31003723145",
                "longitude"   => "45.894832611084",
            ],
            [
                "id"          => 44,
                "deleted_at"  => null,
                "title_fa"    => "کلیبر",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "38.8648490905762",
                "longitude"   => "47.0407829284668",
            ],
            [
                "id"          => 45,
                "deleted_at"  => null,
                "title_fa"    => "مراغه",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.3860359191895",
                "longitude"   => "46.2336044311523",
            ],
            [
                "id"          => 46,
                "deleted_at"  => null,
                "title_fa"    => "مرند",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "38.4319381713867",
                "longitude"   => "45.772045135498",
            ],
            [
                "id"          => 47,
                "deleted_at"  => null,
                "title_fa"    => "ملکان",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.1425323486328",
                "longitude"   => "46.1003761291504",
            ],
            [
                "id"          => 48,
                "deleted_at"  => null,
                "title_fa"    => "میانه",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.4207077026367",
                "longitude"   => "47.7163505554199",
            ],
            [
                "id"          => 49,
                "deleted_at"  => null,
                "title_fa"    => "ورزقان",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "38.5087051391602",
                "longitude"   => "46.6503448486328",
            ],
            [
                "id"          => 50,
                "deleted_at"  => null,
                "title_fa"    => "هریس",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "38.2496223449707",
                "longitude"   => "47.1171188354492",
            ],
            [
                "id"          => 51,
                "deleted_at"  => null,
                "title_fa"    => "هشترود",
                "province_id" => 1,
                "capital_id"  => 0,
                "latitude"    => "37.470775604248",
                "longitude"   => "47.0596694946289",
            ],
            [
                "id"          => 52,
                "deleted_at"  => null,
                "title_fa"    => "ارومیه",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "37.5395393371582",
                "longitude"   => "45.0576515197754",
            ],
            [
                "id"          => 53,
                "deleted_at"  => null,
                "title_fa"    => "اشنویه",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "37.040210723877",
                "longitude"   => "45.1000442504883",
            ],
            [
                "id"          => 54,
                "deleted_at"  => null,
                "title_fa"    => "بوکان",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "36.5079879760742",
                "longitude"   => "46.2066612243652",
            ],
            [
                "id"          => 55,
                "deleted_at"  => null,
                "title_fa"    => "پلدشت",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "39.34507995605",
                "longitude"   => "45.0683708190918",
            ],
            [
                "id"          => 56,
                "deleted_at"  => null,
                "title_fa"    => "پیرانشهر",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "36.6939392089844",
                "longitude"   => "45.1411933898926",
            ],
            [
                "id"          => 57,
                "deleted_at"  => null,
                "title_fa"    => "تکاب",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "36.4042205810547",
                "longitude"   => "47.1101608276367",
            ],
            [
                "id"          => 58,
                "deleted_at"  => null,
                "title_fa"    => "چالدران",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => 39.065095,
                "longitude"   => 44.384366,
            ],
            [
                "id"          => 59,
                "deleted_at"  => null,
                "title_fa"    => "چایپاره",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => 38.890143,
                "longitude"   => 45.027938,
            ],
            [
                "id"          => 60,
                "deleted_at"  => null,
                "title_fa"    => "خوی",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "38.5202941894531",
                "longitude"   => "44.9546546936035",
            ],
            [
                "id"          => 61,
                "deleted_at"  => null,
                "title_fa"    => "سر دشت",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => 36.158749,
                "longitude"   => 45.2532,
            ],
            [
                "id"          => 62,
                "deleted_at"  => null,
                "title_fa"    => "سلماس",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "38.1987380981445",
                "longitude"   => "44.7660293579102",
            ],
            [
                "id"          => 63,
                "deleted_at"  => null,
                "title_fa"    => "شاهین دژ",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "36.67921435391",
                "longitude"   => "46.566463470459",
            ],
            [
                "id"          => 64,
                "deleted_at"  => null,
                "title_fa"    => "شوط",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "39.2181243896484",
                "longitude"   => "44.7711219787598",
            ],
            [
                "id"          => 65,
                "deleted_at"  => null,
                "title_fa"    => "ماکو",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "39.29215240452",
                "longitude"   => "44.4924354553223",
            ],
            [
                "id"          => 66,
                "deleted_at"  => null,
                "title_fa"    => "مهاباد",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "36.7702217102051",
                "longitude"   => "45.7284126281738",
            ],
            [
                "id"          => 67,
                "deleted_at"  => null,
                "title_fa"    => "میاندوآب",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "36.9649620056152",
                "longitude"   => "46.1059494018555",
            ],
            [
                "id"          => 68,
                "deleted_at"  => null,
                "title_fa"    => "نقده",
                "province_id" => 2,
                "capital_id"  => 0,
                "latitude"    => "36.9533843994141",
                "longitude"   => "45.3889045715332",
            ],
            [
                "id"          => 69,
                "deleted_at"  => null,
                "title_fa"    => "اردبیل",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => "38.2497444152832",
                "longitude"   => "48.2942848205566",
            ],
            [
                "id"          => 70,
                "deleted_at"  => null,
                "title_fa"    => "بیله سوار",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => "39.3760795593262",
                "longitude"   => "48.3427085876465",
            ],
            [
                "id"          => 71,
                "deleted_at"  => null,
                "title_fa"    => "پارس آباد",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => "39.6457939147949",
                "longitude"   => "47.90995025633",
            ],
            [
                "id"          => 72,
                "deleted_at"  => null,
                "title_fa"    => "خلخال",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => "37.6207504272461",
                "longitude"   => "48.5273666381836",
            ],
            [
                "id"          => 73,
                "deleted_at"  => null,
                "title_fa"    => "سرعین",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => "38.1376686096191",
                "longitude"   => "48.0762329101563",
            ],
            [
                "id"          => 74,
                "deleted_at"  => null,
                "title_fa"    => "کوثر",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => 38.228806,
                "longitude"   => 48.295745,
            ],
            [
                "id"          => 75,
                "deleted_at"  => null,
                "title_fa"    => "گرمی",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => "39.0121879577637",
                "longitude"   => "48.0836029052734",
            ],
            [
                "id"          => 76,
                "deleted_at"  => null,
                "title_fa"    => "مشگین شهر",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => "38.3971862792969",
                "longitude"   => "47.6725807189941",
            ],
            [
                "id"          => 77,
                "deleted_at"  => null,
                "title_fa"    => "نمین",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => "38.4236488342285",
                "longitude"   => "48.4808197021484",
            ],
            [
                "id"          => 78,
                "deleted_at"  => null,
                "title_fa"    => "نیر",
                "province_id" => 3,
                "capital_id"  => 0,
                "latitude"    => 38.033317,
                "longitude"   => 48.009911,
            ],
            [
                "id"          => 79,
                "deleted_at"  => null,
                "title_fa"    => "آران و بیدگل",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "34.0581970214844",
                "longitude"   => "51.4824867248535",
            ],
            [
                "id"          => 80,
                "deleted_at"  => null,
                "title_fa"    => "اردستان",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "33.3565788269043",
                "longitude"   => "52.3781852722168",
            ],
            [
                "id"          => 81,
                "deleted_at"  => null,
                "title_fa"    => "اصفهان",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "32.57763671875",
                "longitude"   => "51.6590538024902",
            ],
            [
                "id"          => 82,
                "deleted_at"  => null,
                "title_fa"    => "برخوار",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => 32.816129,
                "longitude"   => 51.718081,
            ],
            [
                "id"          => 83,
                "deleted_at"  => null,
                "title_fa"    => "بوئین میاندشت",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => 33.083303,
                "longitude"   => 50.159436,
            ],
            [
                "id"          => 84,
                "deleted_at"  => null,
                "title_fa"    => "تیران و کرون",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => 32.866656,
                "longitude"   => 50.851228,
            ],
            [
                "id"          => 85,
                "deleted_at"  => null,
                "title_fa"    => "چادگان",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "32.771556854248",
                "longitude"   => "50.6268577575684",
            ],
            [
                "id"          => 86,
                "deleted_at"  => null,
                "title_fa"    => "خمینی شهر",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "32.6833305358887",
                "longitude"   => "51.5335960388184",
            ],
            [
                "id"          => 87,
                "deleted_at"  => null,
                "title_fa"    => "خوانسار",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "33.2142295837402",
                "longitude"   => "50.3188705444336",
            ],
            [
                "id"          => 88,
                "deleted_at"  => null,
                "title_fa"    => "خور و بیابانک",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => 33.761529,
                "longitude"   => 54.877194,
            ],
            [
                "id"          => 89,
                "deleted_at"  => null,
                "title_fa"    => "دهاقان",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "31.9331302642822",
                "longitude"   => "51.6541786193848",
            ],
            [
                "id"          => 90,
                "deleted_at"  => null,
                "title_fa"    => "سمیرم",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "31.4145526885986",
                "longitude"   => "51.5718688964844",
            ],
            [
                "id"          => 91,
                "deleted_at"  => null,
                "title_fa"    => "شاهین شهر و میمه",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => 33.060166,
                "longitude"   => 51.503047,
            ],
            [
                "id"          => 92,
                "deleted_at"  => null,
                "title_fa"    => "شهرضا",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "31.97665977403",
                "longitude"   => "51.8494262695313",
            ],
            [
                "id"          => 93,
                "deleted_at"  => null,
                "title_fa"    => "فریدن",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => 33.033447,
                "longitude"   => 50.297513,
            ],
            [
                "id"          => 94,
                "deleted_at"  => null,
                "title_fa"    => "فریدونشهر",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "32.9399871826172",
                "longitude"   => "50.1393852233887",
            ],
            [
                "id"          => 95,
                "deleted_at"  => null,
                "title_fa"    => "فلاورجان",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "32.556266784668",
                "longitude"   => "51.506290435791",
            ],
            [
                "id"          => 96,
                "deleted_at"  => null,
                "title_fa"    => "کاشان",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "33.9833946228027",
                "longitude"   => "51.4320831298828",
            ],
            [
                "id"          => 97,
                "deleted_at"  => null,
                "title_fa"    => "گلپایگان",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "33.4509506225586",
                "longitude"   => "50.2833633422852",
            ],
            [
                "id"          => 98,
                "deleted_at"  => null,
                "title_fa"    => "لنجان",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => 32.440422,
                "longitude"   => 51.280041,
            ],
            [
                "id"          => 99,
                "deleted_at"  => null,
                "title_fa"    => "مبارکه",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "32.3417739868164",
                "longitude"   => "51.5006828308106",
            ],
            [
                "id"          => 100,
                "deleted_at"  => null,
                "title_fa"    => "نائین",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "32.8604469299316",
                "longitude"   => "53.0956153869629",
            ],
            [
                "id"          => 101,
                "deleted_at"  => null,
                "title_fa"    => "نجف آباد",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "32.631534576416",
                "longitude"   => "51.3505897521973",
            ],
            [
                "id"          => 102,
                "deleted_at"  => null,
                "title_fa"    => "نطنز",
                "province_id" => 4,
                "capital_id"  => 0,
                "latitude"    => "33.5046806335449",
                "longitude"   => "51.9190711975098",
            ],
            [
                "id"          => 104,
                "deleted_at"  => null,
                "title_fa"    => "اشتهارد",
                "province_id" => 5,
                "capital_id"  => 0,
                "latitude"    => "35.7245903015137",
                "longitude"   => "50.36128981934",
            ],
            [
                "id"          => 105,
                "deleted_at"  => null,
                "title_fa"    => "ساوجبلاغ",
                "province_id" => 5,
                "capital_id"  => 0,
                "latitude"    => 35.859074,
                "longitude"   => 50.68948,
            ],
            [
                "id"          => 106,
                "deleted_at"  => null,
                "title_fa"    => "طالقان",
                "province_id" => 5,
                "capital_id"  => 0,
                "latitude"    => "36.1729965209961",
                "longitude"   => "50.7684898376465",
            ],
            [
                "id"          => 107,
                "deleted_at"  => null,
                "title_fa"    => "فردیس",
                "province_id" => 5,
                "capital_id"  => 0,
                "latitude"    => 35.732556,
                "longitude"   => 50.963707,
            ],
            [
                "id"          => 108,
                "deleted_at"  => null,
                "title_fa"    => "کرج",
                "province_id" => 5,
                "capital_id"  => 0,
                "latitude"    => "35.7247200012207",
                "longitude"   => "50.952766418457",
            ],
            [
                "id"          => 109,
                "deleted_at"  => null,
                "title_fa"    => "نظر آباد",
                "province_id" => 5,
                "capital_id"  => 0,
                "latitude"    => "35.9519500732422",
                "longitude"   => "50.6045341491699",
            ],
            [
                "id"          => 110,
                "deleted_at"  => null,
                "title_fa"    => "آبدانان",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => "32.988353729248",
                "longitude"   => "47.4240951538086",
            ],
            [
                "id"          => 111,
                "deleted_at"  => null,
                "title_fa"    => "ایلام",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => "33.5750541687012",
                "longitude"   => "46.4164161682129",
            ],
            [
                "id"          => 112,
                "deleted_at"  => null,
                "title_fa"    => "ایوان",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => "33.8293533325195",
                "longitude"   => "46.3061294555664",
            ],
            [
                "id"          => 113,
                "deleted_at"  => null,
                "title_fa"    => "بدره",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => "33.3071708679199",
                "longitude"   => "47.038330078125",
            ],
            [
                "id"          => 114,
                "deleted_at"  => null,
                "title_fa"    => "چرداول",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => 33.774291,
                "longitude"   => 46.710108,
            ],
            [
                "id"          => 115,
                "deleted_at"  => null,
                "title_fa"    => "دره شهر",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => "33.149486541748",
                "longitude"   => "47.3816604614258",
            ],
            [
                "id"          => 116,
                "deleted_at"  => null,
                "title_fa"    => "دهلران",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => "32.6902008056641",
                "longitude"   => "47.2708549499512",
            ],
            [
                "id"          => 117,
                "deleted_at"  => null,
                "title_fa"    => "سیروان",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => 33.732205,
                "longitude"   => 46.520876,
            ],
            [
                "id"          => 118,
                "deleted_at"  => null,
                "title_fa"    => "ملکشاهی",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => 33.513105,
                "longitude"   => 46.484447,
            ],
            [
                "id"          => 119,
                "deleted_at"  => null,
                "title_fa"    => "مهران",
                "province_id" => 6,
                "capital_id"  => 0,
                "latitude"    => "33.1220283508301",
                "longitude"   => "46.1728897094727",
            ],
            [
                "id"          => 120,
                "deleted_at"  => null,
                "title_fa"    => "بوشهر",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => "28.9214267730713",
                "longitude"   => "50.8376693725586",
            ],
            [
                "id"          => 121,
                "deleted_at"  => null,
                "title_fa"    => "تنگستان",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => 28.983851,
                "longitude"   => 50.833041,
            ],
            [
                "id"          => 122,
                "deleted_at"  => null,
                "title_fa"    => "جم",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => "27.8243522644043",
                "longitude"   => "52.340950012207",
            ],
            [
                "id"          => 123,
                "deleted_at"  => null,
                "title_fa"    => "دشتستان",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => 29.269879,
                "longitude"   => 51.212211,
            ],
            [
                "id"          => 124,
                "deleted_at"  => null,
                "title_fa"    => "دشتی",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => 29.286586,
                "longitude"   => 50.95989,
            ],
            [
                "id"          => 125,
                "deleted_at"  => null,
                "title_fa"    => "دیر",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => 27.840666,
                "longitude"   => 51.937553,
            ],
            [
                "id"          => 126,
                "deleted_at"  => null,
                "title_fa"    => "دیلم",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => 30.056439,
                "longitude"   => 50.161621,
            ],
            [
                "id"          => 127,
                "deleted_at"  => null,
                "title_fa"    => "عسلویه",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => "27.17614135742",
                "longitude"   => "52.6081085205078",
            ],
            [
                "id"          => 128,
                "deleted_at"  => null,
                "title_fa"    => "کنگان",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => 27.841081,
                "longitude"   => 52.067634,
            ],
            [
                "id"          => 129,
                "deleted_at"  => null,
                "title_fa"    => "گناوه",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => 29.586095,
                "longitude"   => 50.506168,
            ],
            [
                "id"          => 130,
                "deleted_at"  => null,
                "title_fa"    => "اسلامشهر",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.5010452270508",
                "longitude"   => "51.22553905273",
            ],
            [
                "id"          => 131,
                "deleted_at"  => null,
                "title_fa"    => "بهارستان",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "32.4865112304687",
                "longitude"   => "51.7789115905762",
            ],
            [
                "id"          => 132,
                "deleted_at"  => null,
                "title_fa"    => "پاکدشت",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.4743118286133",
                "longitude"   => "51.6757011413574",
            ],
            [
                "id"          => 133,
                "deleted_at"  => null,
                "title_fa"    => "پردیس",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.74233172852",
                "longitude"   => "51.8214073181152",
            ],
            [
                "id"          => 134,
                "deleted_at"  => null,
                "title_fa"    => "پیشوا",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.3055534362793",
                "longitude"   => "51.7224388122559",
            ],
            [
                "id"          => 135,
                "deleted_at"  => null,
                "title_fa"    => "تهران",
                "title_en"    => "tehran",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.7029075622559",
                "longitude"   => "51.3497581481934",
            ],
            [
                "id"          => 136,
                "deleted_at"  => null,
                "title_fa"    => "دماوند",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.6939544677734",
                "longitude"   => "52.0472183227539",
            ],
            [
                "id"          => 137,
                "deleted_at"  => null,
                "title_fa"    => "رباط کریم",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.4832000732422",
                "longitude"   => "51.0799140930176",
            ],
            [
                "id"          => 138,
                "deleted_at"  => null,
                "title_fa"    => "ری",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.6031913757324",
                "longitude"   => "51.4387092590332",
            ],
            [
                "id"          => 139,
                "deleted_at"  => null,
                "title_fa"    => "شمیرانات",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => 35.711676,
                "longitude"   => 51.375949,
            ],
            [
                "id"          => 140,
                "deleted_at"  => null,
                "title_fa"    => "شهریار",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.6330146789551",
                "longitude"   => "51.0597038269043",
            ],
            [
                "id"          => 141,
                "deleted_at"  => null,
                "title_fa"    => "فیروز کوه",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.7545585632324",
                "longitude"   => "52.7738723754883",
            ],
            [
                "id"          => 142,
                "deleted_at"  => null,
                "title_fa"    => "قدس",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.7124824523926",
                "longitude"   => "51.1128921508789",
            ],
            [
                "id"          => 143,
                "deleted_at"  => null,
                "title_fa"    => "قرچک",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.4157943725586",
                "longitude"   => "51.5866737365723",
            ],
            [
                "id"          => 144,
                "deleted_at"  => null,
                "title_fa"    => "ملارد",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.6547012329102",
                "longitude"   => "50.979175567627",
            ],
            [
                "id"          => 145,
                "deleted_at"  => null,
                "title_fa"    => "ورامین",
                "province_id" => 8,
                "capital_id"  => 0,
                "latitude"    => "35.3293952941895",
                "longitude"   => "51.6346855163574",
            ],
            [
                "id"          => 146,
                "deleted_at"  => null,
                "title_fa"    => "اردل",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => "31.9978656768799",
                "longitude"   => "50.6614532470703",
            ],
            [
                "id"          => 147,
                "deleted_at"  => null,
                "title_fa"    => "بروجن",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => "31.9667949676514",
                "longitude"   => "51.2894248962402",
            ],
            [
                "id"          => 148,
                "deleted_at"  => null,
                "title_fa"    => "بن",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => "32.542781829834",
                "longitude"   => "50.746208190918",
            ],
            [
                "id"          => 149,
                "deleted_at"  => null,
                "title_fa"    => "سامان",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => "32.4515762329102",
                "longitude"   => "50.910457611084",
            ],
            [
                "id"          => 150,
                "deleted_at"  => null,
                "title_fa"    => "شهر کرد",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => "32.3161811828613",
                "longitude"   => "50.8582038879395",
            ],
            [
                "id"          => 151,
                "deleted_at"  => null,
                "title_fa"    => "فارسان",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => "32.2572975158691",
                "longitude"   => "50.5656776428223",
            ],
            [
                "id"          => 152,
                "deleted_at"  => null,
                "title_fa"    => "کوهرنگ",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => 32.447363,
                "longitude"   => 50.119561,
            ],
            [
                "id"          => 153,
                "deleted_at"  => null,
                "title_fa"    => "کیار",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => 32.045532,
                "longitude"   => 50.819256,
            ],
            [
                "id"          => 154,
                "deleted_at"  => null,
                "title_fa"    => "لردگان",
                "province_id" => 9,
                "capital_id"  => 0,
                "latitude"    => "31.5108184814453",
                "longitude"   => "50.8300895690918",
            ],
            [
                "id"          => 155,
                "deleted_at"  => null,
                "title_fa"    => "بشرویه",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => "33.8528137207031",
                "longitude"   => "57.4224433898926",
            ],
            [
                "id"          => 156,
                "deleted_at"  => null,
                "title_fa"    => "بیرجند",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => "32.85693359375",
                "longitude"   => "59.2195472717285",
            ],
            [
                "id"          => 157,
                "deleted_at"  => null,
                "title_fa"    => "خوسف",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => "32.7791709899902",
                "longitude"   => "58.8858642578125",
            ],
            [
                "id"          => 158,
                "deleted_at"  => null,
                "title_fa"    => "درمیان",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => 32.98848,
                "longitude"   => 60.080563,
            ],
            [
                "id"          => 159,
                "deleted_at"  => null,
                "title_fa"    => "زیرکوه",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => 33.612799,
                "longitude"   => 59.998301,
            ],
            [
                "id"          => 160,
                "deleted_at"  => null,
                "title_fa"    => "سرایان",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => "33.8603744506836",
                "longitude"   => "58.5223197937012",
            ],
            [
                "id"          => 161,
                "deleted_at"  => null,
                "title_fa"    => "سربیشه",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => "32.576358795166",
                "longitude"   => "59.7983474731445",
            ],
            [
                "id"          => 162,
                "deleted_at"  => null,
                "title_fa"    => "طبس",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => "33.5751876831055",
                "longitude"   => "56.9353332519531",
            ],
            [
                "id"          => 163,
                "deleted_at"  => null,
                "title_fa"    => "فردوس",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => "34.0180778503418",
                "longitude"   => "58.1723861694336",
            ],
            [
                "id"          => 164,
                "deleted_at"  => null,
                "title_fa"    => "قائنات",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => 33.7958,
                "longitude"   => 59.436138,
            ],
            [
                "id"          => 165,
                "deleted_at"  => null,
                "title_fa"    => "نهبندان",
                "province_id" => 10,
                "capital_id"  => 0,
                "latitude"    => "31.5407867431641",
                "longitude"   => "60.0378074645996",
            ],
            [
                "id"          => 166,
                "deleted_at"  => null,
                "title_fa"    => "باخرز",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "34.9832916259766",
                "longitude"   => "60.3187561035156",
            ],
            [
                "id"          => 167,
                "deleted_at"  => null,
                "title_fa"    => "بجستان",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "34.5154876708984",
                "longitude"   => "58.1818618774414",
            ],
            [
                "id"          => 168,
                "deleted_at"  => null,
                "title_fa"    => "بردسکن",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "35.2602806091309",
                "longitude"   => "57.9720497131348",
            ],
            [
                "id"          => 169,
                "deleted_at"  => null,
                "title_fa"    => "بینالود",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => 35.976513,
                "longitude"   => 59.333201,
            ],
            [
                "id"          => 170,
                "deleted_at"  => null,
                "title_fa"    => "تایباد",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "34.7398376464844",
                "longitude"   => "60.77713775633",
            ],
            [
                "id"          => 171,
                "deleted_at"  => null,
                "title_fa"    => "تربت جام",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "35.2416458129883",
                "longitude"   => "60.6216163635254",
            ],
            [
                "id"          => 172,
                "deleted_at"  => null,
                "title_fa"    => "تربت حیدریه",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "35.2784576416016",
                "longitude"   => "59.213020324707",
            ],
            [
                "id"          => 173,
                "deleted_at"  => null,
                "title_fa"    => "جغتای",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.6396522521973",
                "longitude"   => "57.077205657959",
            ],
            [
                "id"          => 174,
                "deleted_at"  => null,
                "title_fa"    => "جوین",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => 36.70873,
                "longitude"   => 57.410668,
            ],
            [
                "id"          => 175,
                "deleted_at"  => null,
                "title_fa"    => "چناران",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.6422805786133",
                "longitude"   => "59.1208381652832",
            ],
            [
                "id"          => 176,
                "deleted_at"  => null,
                "title_fa"    => "خلیل آباد",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "35.244987487793",
                "longitude"   => "58.2851638793945",
            ],
            [
                "id"          => 177,
                "deleted_at"  => null,
                "title_fa"    => "خواف",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "34.5628662109375",
                "longitude"   => "60.1442947387695",
            ],
            [
                "id"          => 178,
                "deleted_at"  => null,
                "title_fa"    => "خوشاب",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => 36.745765,
                "longitude"   => 58.116947,
            ],
            [
                "id"          => 179,
                "deleted_at"  => null,
                "title_fa"    => "داورزن",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.3512573242187",
                "longitude"   => "56.8780403137207",
            ],
            [
                "id"          => 180,
                "deleted_at"  => null,
                "title_fa"    => "درگز",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "37.4411739502",
                "longitude"   => "59.105712890625",
            ],
            [
                "id"          => 181,
                "deleted_at"  => null,
                "title_fa"    => "رشتخوار",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "34.9750671386719",
                "longitude"   => "59.623046875",
            ],
            [
                "id"          => 182,
                "deleted_at"  => null,
                "title_fa"    => "زاوه",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => 35.275982,
                "longitude"   => 59.467685,
            ],
            [
                "id"          => 183,
                "deleted_at"  => null,
                "title_fa"    => "سبزوار",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.2092132568359",
                "longitude"   => "57.6823196411133",
            ],
            [
                "id"          => 184,
                "deleted_at"  => null,
                "title_fa"    => "سرخس",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.548656463623",
                "longitude"   => "61.1486015319824",
            ],
            [
                "id"          => 185,
                "deleted_at"  => null,
                "title_fa"    => "فریمان",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "35.7040328979492",
                "longitude"   => "59.8482780456543",
            ],
            [
                "id"          => 186,
                "deleted_at"  => null,
                "title_fa"    => "فیروزه",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.2856063842773",
                "longitude"   => "58.5890197753906",
            ],
            [
                "id"          => 187,
                "deleted_at"  => null,
                "title_fa"    => "قوچان",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "37.102367401123",
                "longitude"   => "58.510871887207",
            ],
            [
                "id"          => 188,
                "deleted_at"  => null,
                "title_fa"    => "کاشمر",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "35.2427597045898",
                "longitude"   => "58.4598808288574",
            ],
            [
                "id"          => 189,
                "deleted_at"  => null,
                "title_fa"    => "کلات",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.9945602416992",
                "longitude"   => "59.7498817443848",
            ],
            [
                "id"          => 190,
                "deleted_at"  => null,
                "title_fa"    => "گناباد",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "34.351749420166",
                "longitude"   => "58.6857109069824",
            ],
            [
                "id"          => 191,
                "deleted_at"  => null,
                "title_fa"    => "مشهد",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.310432434082",
                "longitude"   => "59.5756721496582",
            ],
            [
                "id"          => 192,
                "deleted_at"  => null,
                "title_fa"    => "مه ولات",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => 35.026931,
                "longitude"   => 58.789495,
            ],
            [
                "id"          => 193,
                "deleted_at"  => null,
                "title_fa"    => "نیشابور",
                "province_id" => 11,
                "capital_id"  => 0,
                "latitude"    => "36.2079277038574",
                "longitude"   => "58.7940292358398",
            ],
            [
                "id"          => 194,
                "deleted_at"  => null,
                "title_fa"    => "اسفراین",
                "province_id" => 12,
                "capital_id"  => 0,
                "latitude"    => "37.0726661682129",
                "longitude"   => "57.5096626281738",
            ],
            [
                "id"          => 195,
                "deleted_at"  => null,
                "title_fa"    => "بجنورد",
                "province_id" => 12,
                "capital_id"  => 0,
                "latitude"    => "37.4467887878418",
                "longitude"   => "57.3274574279785",
            ],
            [
                "id"          => 196,
                "deleted_at"  => null,
                "title_fa"    => "جاجرم",
                "province_id" => 12,
                "capital_id"  => 0,
                "latitude"    => "36.9556427001953",
                "longitude"   => "56.3577766418457",
            ],
            [
                "id"          => 197,
                "deleted_at"  => null,
                "title_fa"    => "راز و جرگلان",
                "province_id" => 12,
                "capital_id"  => 0,
                "latitude"    => 37.935564,
                "longitude"   => 57.103758,
            ],
            [
                "id"          => 198,
                "deleted_at"  => null,
                "title_fa"    => "شیروان",
                "province_id" => 12,
                "capital_id"  => 0,
                "latitude"    => "37.4015159606934",
                "longitude"   => "57.9241676330566",
            ],
            [
                "id"          => 199,
                "deleted_at"  => null,
                "title_fa"    => "فاروج",
                "province_id" => 12,
                "capital_id"  => 0,
                "latitude"    => "37.22369382563",
                "longitude"   => "58.2189064025879",
            ],
            [
                "id"          => 200,
                "deleted_at"  => null,
                "title_fa"    => "گرمه",
                "province_id" => 12,
                "capital_id"  => 0,
                "latitude"    => "36.9785194396973",
                "longitude"   => "56.30154037159",
            ],
            [
                "id"          => 201,
                "deleted_at"  => null,
                "title_fa"    => "مانه و سملقان",
                "province_id" => 12,
                "capital_id"  => 0,
                "latitude"    => 37.720756,
                "longitude"   => 56.472534,
            ],
            [
                "id"          => 202,
                "deleted_at"  => null,
                "title_fa"    => "آبادان",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.3560085296631",
                "longitude"   => "48.2800521850586",
            ],
            [
                "id"          => 203,
                "deleted_at"  => null,
                "title_fa"    => "آغاجاری",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.6997203826904",
                "longitude"   => "49.8297691345215",
            ],
            [
                "id"          => 204,
                "deleted_at"  => null,
                "title_fa"    => "امیدیه",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.7556076049805",
                "longitude"   => "49.7122497558594",
            ],
            [
                "id"          => 205,
                "deleted_at"  => null,
                "title_fa"    => "اندیکا",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => 32.207042,
                "longitude"   => 49.443697,
            ],
            [
                "id"          => 206,
                "deleted_at"  => null,
                "title_fa"    => "اندیمشک",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "32.4246444702148",
                "longitude"   => "48.3731002807617",
            ],
            [
                "id"          => 207,
                "deleted_at"  => null,
                "title_fa"    => "اهواز",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "31.2420139312744",
                "longitude"   => "48.671272277832",
            ],
            [
                "id"          => 208,
                "deleted_at"  => null,
                "title_fa"    => "ایذه",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "31.8306846618652",
                "longitude"   => "49.8649368286133",
            ],
            [
                "id"          => 209,
                "deleted_at"  => null,
                "title_fa"    => "باغ ملک",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "31.5133056640625",
                "longitude"   => "49.890495300293",
            ],
            [
                "id"          => 210,
                "deleted_at"  => null,
                "title_fa"    => "باوی",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => 31.346467,
                "longitude"   => 48.687203,
            ],
            [
                "id"          => 211,
                "deleted_at"  => null,
                "title_fa"    => "بندر ماهشهر",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.4694690704346",
                "longitude"   => "49.1800079345703",
            ],
            [
                "id"          => 212,
                "deleted_at"  => null,
                "title_fa"    => "بهبهان",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.596263885498",
                "longitude"   => "50.2416076660156",
            ],
            [
                "id"          => 213,
                "deleted_at"  => null,
                "title_fa"    => "حمیدیه",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "31.4816207885742",
                "longitude"   => "48.4323997497559",
            ],
            [
                "id"          => 214,
                "deleted_at"  => null,
                "title_fa"    => "خرمشهر",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.4448184967041",
                "longitude"   => "48.1787910461426",
            ],
            [
                "id"          => 215,
                "deleted_at"  => null,
                "title_fa"    => "دزفول",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "32.3788948059082",
                "longitude"   => "48.4193000793457",
            ],
            [
                "id"          => 216,
                "deleted_at"  => null,
                "title_fa"    => "دشت آزادگان",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => 31.494736,
                "longitude"   => 47.958526,
            ],
            [
                "id"          => 217,
                "deleted_at"  => null,
                "title_fa"    => "رامشیر",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.8927555084229",
                "longitude"   => "49.4088287353516",
            ],
            [
                "id"          => 218,
                "deleted_at"  => null,
                "title_fa"    => "رامهرمز",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "31.2592163085937",
                "longitude"   => "49.6053123474121",
            ],
            [
                "id"          => 219,
                "deleted_at"  => null,
                "title_fa"    => "شادگان",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.6412620544434",
                "longitude"   => "48.6635360717773",
            ],
            [
                "id"          => 220,
                "deleted_at"  => null,
                "title_fa"    => "شوش",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "32.20674513051",
                "longitude"   => "48.2574272155762",
            ],
            [
                "id"          => 221,
                "deleted_at"  => null,
                "title_fa"    => "شوشتر",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "32.0546417236328",
                "longitude"   => "48.834716796875",
            ],
            [
                "id"          => 222,
                "deleted_at"  => null,
                "title_fa"    => "کارون",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => 31.382,
                "longitude"   => 49.125718,
            ],
            [
                "id"          => 223,
                "deleted_at"  => null,
                "title_fa"    => "گتوند",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "32.2472152709961",
                "longitude"   => "48.8178253173828",
            ],
            [
                "id"          => 224,
                "deleted_at"  => null,
                "title_fa"    => "لالی",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "32.3298187255859",
                "longitude"   => "49.0929832458496",
            ],
            [
                "id"          => 225,
                "deleted_at"  => null,
                "title_fa"    => "مسجد سلیمان",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "31.9646625518799",
                "longitude"   => "49.2863388061523",
            ],
            [
                "id"          => 226,
                "deleted_at"  => null,
                "title_fa"    => "هفتگل",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "31.4456787109375",
                "longitude"   => "49.5331382751465",
            ],
            [
                "id"          => 227,
                "deleted_at"  => null,
                "title_fa"    => "هندیجان",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "30.2236862182617",
                "longitude"   => "49.7113990783691",
            ],
            [
                "id"          => 228,
                "deleted_at"  => null,
                "title_fa"    => "هویزه",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => "31.4606819152832",
                "longitude"   => "48.0774879455566",
            ],
            [
                "id"          => 229,
                "deleted_at"  => null,
                "title_fa"    => "ابهر",
                "province_id" => 14,
                "capital_id"  => 0,
                "latitude"    => "36.1361312866211",
                "longitude"   => "49.2245445251465",
            ],
            [
                "id"          => 230,
                "deleted_at"  => null,
                "title_fa"    => "ایجرود",
                "province_id" => 14,
                "capital_id"  => 0,
                "latitude"    => 36.423626,
                "longitude"   => 48.266915,
            ],
            [
                "id"          => 231,
                "deleted_at"  => null,
                "title_fa"    => "خدابنده",
                "province_id" => 14,
                "capital_id"  => 0,
                "latitude"    => 36.120563,
                "longitude"   => 48.594331,
            ],
            [
                "id"          => 232,
                "deleted_at"  => null,
                "title_fa"    => "خرمدره",
                "province_id" => 14,
                "capital_id"  => 0,
                "latitude"    => "36.2114562988281",
                "longitude"   => "49.1953887939453",
            ],
            [
                "id"          => 233,
                "deleted_at"  => null,
                "title_fa"    => "زنجان",
                "province_id" => 14,
                "capital_id"  => 0,
                "latitude"    => "36.6795539855957",
                "longitude"   => "48.4929962158203",
            ],
            [
                "id"          => 234,
                "deleted_at"  => null,
                "title_fa"    => "سلطانیه",
                "province_id" => 14,
                "capital_id"  => 0,
                "latitude"    => "36.4336318969727",
                "longitude"   => "48.7955055236816",
            ],
            [
                "id"          => 235,
                "deleted_at"  => null,
                "title_fa"    => "طارم",
                "province_id" => 14,
                "capital_id"  => 0,
                "latitude"    => 36.678457,
                "longitude"   => 48.492708,
            ],
            [
                "id"          => 236,
                "deleted_at"  => null,
                "title_fa"    => "ماهنشان",
                "province_id" => 14,
                "capital_id"  => 0,
                "latitude"    => "36.7435836791992",
                "longitude"   => "47.6706466674805",
            ],
            [
                "id"          => 237,
                "deleted_at"  => null,
                "title_fa"    => "آرادان",
                "province_id" => 15,
                "capital_id"  => 0,
                "latitude"    => "35.2516479492188",
                "longitude"   => "52.4975395202637",
            ],
            [
                "id"          => 238,
                "deleted_at"  => null,
                "title_fa"    => "دامغان",
                "province_id" => 15,
                "capital_id"  => 0,
                "latitude"    => "36.1651992797852",
                "longitude"   => "54.344841003418",
            ],
            [
                "id"          => 239,
                "deleted_at"  => null,
                "title_fa"    => "سمنان",
                "province_id" => 15,
                "capital_id"  => 0,
                "latitude"    => "35.5771141052246",
                "longitude"   => "53.3819274902344",
            ],
            [
                "id"          => 240,
                "deleted_at"  => null,
                "title_fa"    => "شاهرود",
                "province_id" => 15,
                "capital_id"  => 0,
                "latitude"    => "36.4120864868164",
                "longitude"   => "54.9724617004395",
            ],
            [
                "id"          => 241,
                "deleted_at"  => null,
                "title_fa"    => "گرمسار",
                "province_id" => 15,
                "capital_id"  => 0,
                "latitude"    => "35.2178230285645",
                "longitude"   => "52.333625793457",
            ],
            [
                "id"          => 242,
                "deleted_at"  => null,
                "title_fa"    => "مهدی شهر",
                "province_id" => 15,
                "capital_id"  => 0,
                "latitude"    => "35.699649810791",
                "longitude"   => "53.3458709716797",
            ],
            [
                "id"          => 243,
                "deleted_at"  => null,
                "title_fa"    => "میامی",
                "province_id" => 15,
                "capital_id"  => 0,
                "latitude"    => "36.4093246459961",
                "longitude"   => "55.6516532897949",
            ],
            [
                "id"          => 244,
                "deleted_at"  => null,
                "title_fa"    => "ایرانشهر",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "27.2041645050049",
                "longitude"   => "60.6751289367676",
            ],
            [
                "id"          => 245,
                "deleted_at"  => null,
                "title_fa"    => "چاه بهار",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "25.2945194244385",
                "longitude"   => "60.63012634277",
            ],
            [
                "id"          => 246,
                "deleted_at"  => null,
                "title_fa"    => "خاش",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "28.209436416626",
                "longitude"   => "61.2028617858887",
            ],
            [
                "id"          => 247,
                "deleted_at"  => null,
                "title_fa"    => "دلگان",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => 27.557169,
                "longitude"   => 59.4601,
            ],
            [
                "id"          => 248,
                "deleted_at"  => null,
                "title_fa"    => "زابل",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "31.0088672637939",
                "longitude"   => "61.4938087463379",
            ],
            [
                "id"          => 249,
                "deleted_at"  => null,
                "title_fa"    => "زاهدان",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "29.4821357727051",
                "longitude"   => "60.85205078125",
            ],
            [
                "id"          => 250,
                "deleted_at"  => null,
                "title_fa"    => "زهک",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "30.8931617736816",
                "longitude"   => "61.6829261779785",
            ],
            [
                "id"          => 251,
                "deleted_at"  => null,
                "title_fa"    => "سراوان",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "27.3613433837891",
                "longitude"   => "62.3330726623535",
            ],
            [
                "id"          => 252,
                "deleted_at"  => null,
                "title_fa"    => "سرباز",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "26.6332359313965",
                "longitude"   => "61.2580604553223",
            ],
            [
                "id"          => 253,
                "deleted_at"  => null,
                "title_fa"    => "سیب سوران",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => 27.534243,
                "longitude"   => 62.013245,
            ],
            [
                "id"          => 254,
                "deleted_at"  => null,
                "title_fa"    => "فنوج",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "26.5757274627686",
                "longitude"   => "59.6449851989746",
            ],
            [
                "id"          => 255,
                "deleted_at"  => null,
                "title_fa"    => "قصرقند",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "26.2130393981934",
                "longitude"   => "60.7416763305664",
            ],
            [
                "id"          => 256,
                "deleted_at"  => null,
                "title_fa"    => "کنارک",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "25.3595199584961",
                "longitude"   => "60.3969802856445",
            ],
            [
                "id"          => 257,
                "deleted_at"  => null,
                "title_fa"    => "مهرستان",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => 27.128694,
                "longitude"   => 61.673683,
            ],
            [
                "id"          => 258,
                "deleted_at"  => null,
                "title_fa"    => "میرجاوه",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "29.0156440734863",
                "longitude"   => "61.4495468139648",
            ],
            [
                "id"          => 259,
                "deleted_at"  => null,
                "title_fa"    => "نیک شهر",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => "26.2345523834229",
                "longitude"   => "60.2268600463867",
            ],
            [
                "id"          => 260,
                "deleted_at"  => null,
                "title_fa"    => "نیمروز",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => 31.116513,
                "longitude"   => 61.411214,
            ],
            [
                "id"          => 261,
                "deleted_at"  => null,
                "title_fa"    => "هامون",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => 30.833516,
                "longitude"   => 61.16641,
            ],
            [
                "id"          => 262,
                "deleted_at"  => null,
                "title_fa"    => "هیرمند",
                "province_id" => 16,
                "capital_id"  => 0,
                "latitude"    => 30.999207,
                "longitude"   => 61.499856,
            ],
            [
                "id"          => 263,
                "deleted_at"  => null,
                "title_fa"    => "آباده",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "31.1429824829102",
                "longitude"   => "52.6501159667969",
            ],
            [
                "id"          => 264,
                "deleted_at"  => null,
                "title_fa"    => "ارسنجان",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.9098110198975",
                "longitude"   => "53.3006973266602",
            ],
            [
                "id"          => 265,
                "deleted_at"  => null,
                "title_fa"    => "استهبان",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.1260662078857",
                "longitude"   => "54.0446281433106",
            ],
            [
                "id"          => 266,
                "deleted_at"  => null,
                "title_fa"    => "اقلید",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "30.9019203186035",
                "longitude"   => "52.7052612304688",
            ],
            [
                "id"          => 267,
                "deleted_at"  => null,
                "title_fa"    => "بوانات",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "30.4609355926514",
                "longitude"   => "53.6389656066895",
            ],
            [
                "id"          => 268,
                "deleted_at"  => null,
                "title_fa"    => "پاسارگاد",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 30.193853,
                "longitude"   => 53.167603,
            ],
            [
                "id"          => 269,
                "deleted_at"  => null,
                "title_fa"    => "جهرم",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "28.4949188232422",
                "longitude"   => "53.5668869018555",
            ],
            [
                "id"          => 270,
                "deleted_at"  => null,
                "title_fa"    => "خرامه",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.493049621582",
                "longitude"   => "53.3100318908691",
            ],
            [
                "id"          => 271,
                "deleted_at"  => null,
                "title_fa"    => "خرم بید",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 30.58827,
                "longitude"   => 53.147389,
            ],
            [
                "id"          => 272,
                "deleted_at"  => null,
                "title_fa"    => "خنج",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "27.8923320770264",
                "longitude"   => "53.429615020752",
            ],
            [
                "id"          => 273,
                "deleted_at"  => null,
                "title_fa"    => "داراب",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "28.7542610168457",
                "longitude"   => "54.5471229553223",
            ],
            [
                "id"          => 274,
                "deleted_at"  => null,
                "title_fa"    => "رستم",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 30.249117,
                "longitude"   => 51.523033,
            ],
            [
                "id"          => 275,
                "deleted_at"  => null,
                "title_fa"    => "زرین دشت",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 28.358961,
                "longitude"   => 54.424639,
            ],
            [
                "id"          => 276,
                "deleted_at"  => null,
                "title_fa"    => "سپیدان",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 30.241899,
                "longitude"   => 51.99448,
            ],
            [
                "id"          => 277,
                "deleted_at"  => null,
                "title_fa"    => "سروستان",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.2630271911621",
                "longitude"   => "53.2238731384277",
            ],
            [
                "id"          => 278,
                "deleted_at"  => null,
                "title_fa"    => "شیراز",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.5568904876709",
                "longitude"   => "52.5291213989258",
            ],
            [
                "id"          => 279,
                "deleted_at"  => null,
                "title_fa"    => "فراشبند",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "28.8588905334473",
                "longitude"   => "52.09375",
            ],
            [
                "id"          => 280,
                "deleted_at"  => null,
                "title_fa"    => "فسا",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "28.9197254180908",
                "longitude"   => "53.6376914978027",
            ],
            [
                "id"          => 281,
                "deleted_at"  => null,
                "title_fa"    => "فیروز آباد",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 28.851727,
                "longitude"   => 52.561927,
            ],
            [
                "id"          => 282,
                "deleted_at"  => null,
                "title_fa"    => "قیروکارزین",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 28.417172,
                "longitude"   => 52.937673,
            ],
            [
                "id"          => 283,
                "deleted_at"  => null,
                "title_fa"    => "کازرون",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.6037464141846",
                "longitude"   => "51.651798248291",
            ],
            [
                "id"          => 284,
                "deleted_at"  => null,
                "title_fa"    => "کوار",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.1960849761963",
                "longitude"   => "52.6867179870605",
            ],
            [
                "id"          => 285,
                "deleted_at"  => null,
                "title_fa"    => "گراش",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "27.667142868042",
                "longitude"   => "54.1450347900391",
            ],
            [
                "id"          => 286,
                "deleted_at"  => null,
                "title_fa"    => "لارستان",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 27.672956,
                "longitude"   => 54.340582,
            ],
            [
                "id"          => 287,
                "deleted_at"  => null,
                "title_fa"    => "لامرد",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "27.3299674987793",
                "longitude"   => "53.1879196166992",
            ],
            [
                "id"          => 288,
                "deleted_at"  => null,
                "title_fa"    => "مرودشت",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.8595104217529",
                "longitude"   => "52.8102722167969",
            ],
            [
                "id"          => 289,
                "deleted_at"  => null,
                "title_fa"    => "ممسنی",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => 30.116459,
                "longitude"   => 51.537682,
            ],
            [
                "id"          => 290,
                "deleted_at"  => null,
                "title_fa"    => "مهر",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "27.5504589080811",
                "longitude"   => "52.8838500976562",
            ],
            [
                "id"          => 291,
                "deleted_at"  => null,
                "title_fa"    => "نی ریز",
                "province_id" => 17,
                "capital_id"  => 0,
                "latitude"    => "29.1979217529297",
                "longitude"   => "54.3226547241211",
            ],
            [
                "id"          => 292,
                "deleted_at"  => null,
                "title_fa"    => "آبیک",
                "province_id" => 18,
                "capital_id"  => 0,
                "latitude"    => "36.0398902893066",
                "longitude"   => "50.5296974182129",
            ],
            [
                "id"          => 293,
                "deleted_at"  => null,
                "title_fa"    => "آوج",
                "province_id" => 18,
                "capital_id"  => 0,
                "latitude"    => "35.5797805786133",
                "longitude"   => "49.22183990452",
            ],
            [
                "id"          => 294,
                "deleted_at"  => null,
                "title_fa"    => "البرز",
                "province_id" => 18,
                "capital_id"  => 0,
                "latitude"    => 36.285333,
                "longitude"   => 49.962177,
            ],
            [
                "id"          => 295,
                "deleted_at"  => null,
                "title_fa"    => "بوئین زهرا",
                "province_id" => 18,
                "capital_id"  => 0,
                "latitude"    => "35.757152557373",
                "longitude"   => "50.0619697570801",
            ],
            [
                "id"          => 296,
                "deleted_at"  => null,
                "title_fa"    => "تاکستان",
                "province_id" => 18,
                "capital_id"  => 0,
                "latitude"    => "36.071418762207",
                "longitude"   => "49.696159362793",
            ],
            [
                "id"          => 297,
                "deleted_at"  => null,
                "title_fa"    => "قزوین",
                "province_id" => 18,
                "capital_id"  => 0,
                "latitude"    => "36.2817459106445",
                "longitude"   => "50.0019683837891",
            ],
            [
                "id"          => 298,
                "deleted_at"  => null,
                "title_fa"    => "قم",
                "province_id" => 19,
                "capital_id"  => 0,
                "latitude"    => "34.5939483642578",
                "longitude"   => "50.8742904663086",
            ],
            [
                "id"          => 299,
                "deleted_at"  => null,
                "title_fa"    => "بانه",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "35.9957313537598",
                "longitude"   => "45.888614654541",
            ],
            [
                "id"          => 300,
                "deleted_at"  => null,
                "title_fa"    => "بیجار",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "35.8828620910645",
                "longitude"   => "47.6182594299316",
            ],
            [
                "id"          => 301,
                "deleted_at"  => null,
                "title_fa"    => "دهگلان",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "35.2783355712891",
                "longitude"   => "47.4189033508301",
            ],
            [
                "id"          => 302,
                "deleted_at"  => null,
                "title_fa"    => "دیواندره",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "35.9124908447266",
                "longitude"   => "47.0249061584473",
            ],
            [
                "id"          => 303,
                "deleted_at"  => null,
                "title_fa"    => "سروآباد",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "35.3117980957031",
                "longitude"   => "46.3669891357422",
            ],
            [
                "id"          => 304,
                "deleted_at"  => null,
                "title_fa"    => "سقز",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "36.2441177368164",
                "longitude"   => "46.2729225158691",
            ],
            [
                "id"          => 305,
                "deleted_at"  => null,
                "title_fa"    => "سنندج",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "35.2403144836426",
                "longitude"   => "47.0064086914063",
            ],
            [
                "id"          => 306,
                "deleted_at"  => null,
                "title_fa"    => "قروه",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "35.1636009216309",
                "longitude"   => "47.8100433349609",
            ],
            [
                "id"          => 307,
                "deleted_at"  => null,
                "title_fa"    => "کامیاران",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "34.7971687316895",
                "longitude"   => "46.9394645690918",
            ],
            [
                "id"          => 308,
                "deleted_at"  => null,
                "title_fa"    => "مریوان",
                "province_id" => 20,
                "capital_id"  => 0,
                "latitude"    => "35.5178718566895",
                "longitude"   => "46.1809692382812",
            ],
            [
                "id"          => 309,
                "deleted_at"  => null,
                "title_fa"    => "ارزوئیه",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "28.4579296112061",
                "longitude"   => "56.363525390625",
            ],
            [
                "id"          => 310,
                "deleted_at"  => null,
                "title_fa"    => "انار",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "30.8725490570068",
                "longitude"   => "55.2716293334961",
            ],
            [
                "id"          => 311,
                "deleted_at"  => null,
                "title_fa"    => "بافت",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "29.2321758270264",
                "longitude"   => "56.5969924926758",
            ],
            [
                "id"          => 312,
                "deleted_at"  => null,
                "title_fa"    => "بردسیر",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "29.9241008758545",
                "longitude"   => "56.5787696838379",
            ],
            [
                "id"          => 313,
                "deleted_at"  => null,
                "title_fa"    => "بم",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "29.067798614502",
                "longitude"   => "58.3486175537109",
            ],
            [
                "id"          => 314,
                "deleted_at"  => null,
                "title_fa"    => "جیرفت",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "28.6803932189941",
                "longitude"   => "57.7419738769531",
            ],
            [
                "id"          => 315,
                "deleted_at"  => null,
                "title_fa"    => "رابر",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "29.289909362793",
                "longitude"   => "56.912956237793",
            ],
            [
                "id"          => 316,
                "deleted_at"  => null,
                "title_fa"    => "راور",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "31.2422618865967",
                "longitude"   => "56.7984237670899",
            ],
            [
                "id"          => 317,
                "deleted_at"  => null,
                "title_fa"    => "رفسنجان",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "30.3752765655518",
                "longitude"   => "55.9876480102539",
            ],
            [
                "id"          => 318,
                "deleted_at"  => null,
                "title_fa"    => "رودبار جنوب",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => 36.283672,
                "longitude"   => 49.960805,
            ],
            [
                "id"          => 319,
                "deleted_at"  => null,
                "title_fa"    => "ریگان",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => 28.650107,
                "longitude"   => 59.019371,
            ],
            [
                "id"          => 320,
                "deleted_at"  => null,
                "title_fa"    => "زرند",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "30.8117275238037",
                "longitude"   => "56.551872253418",
            ],
            [
                "id"          => 321,
                "deleted_at"  => null,
                "title_fa"    => "سیرجان",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "29.4376163482666",
                "longitude"   => "55.6749076843262",
            ],
            [
                "id"          => 322,
                "deleted_at"  => null,
                "title_fa"    => "شهر بابک",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "30.1183261871338",
                "longitude"   => "55.1207885742187",
            ],
            [
                "id"          => 323,
                "deleted_at"  => null,
                "title_fa"    => "عنبر آباد",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "28.49180755615",
                "longitude"   => "57.8425254821777",
            ],
            [
                "id"          => 324,
                "deleted_at"  => null,
                "title_fa"    => "فاریاب",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "28.0970840454102",
                "longitude"   => "57.2282791137695",
            ],
            [
                "id"          => 325,
                "deleted_at"  => null,
                "title_fa"    => "فهرج",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "28.94435516357",
                "longitude"   => "58.8851127624512",
            ],
            [
                "id"          => 326,
                "deleted_at"  => null,
                "title_fa"    => "قلعه گنج",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "27.5163536071777",
                "longitude"   => "57.8829689025879",
            ],
            [
                "id"          => 327,
                "deleted_at"  => null,
                "title_fa"    => "کرمان",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "30.2814025878906",
                "longitude"   => "57.0641822814941",
            ],
            [
                "id"          => 328,
                "deleted_at"  => null,
                "title_fa"    => "کوهبنان",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "31.4131984710693",
                "longitude"   => "56.2793350219727",
            ],
            [
                "id"          => 329,
                "deleted_at"  => null,
                "title_fa"    => "کهنوج",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "27.9224548339844",
                "longitude"   => "57.6970748901367",
            ],
            [
                "id"          => 330,
                "deleted_at"  => null,
                "title_fa"    => "منوجان",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "27.4036674499512",
                "longitude"   => "57.4967575073242",
            ],
            [
                "id"          => 331,
                "deleted_at"  => null,
                "title_fa"    => "نرماشیر",
                "province_id" => 21,
                "capital_id"  => 0,
                "latitude"    => "28.9515285491943",
                "longitude"   => "58.699405670166",
            ],
            [
                "id"          => 332,
                "deleted_at"  => null,
                "title_fa"    => "اسلام آباد غرب",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.1096153259277",
                "longitude"   => "46.52056882563",
            ],
            [
                "id"          => 333,
                "deleted_at"  => null,
                "title_fa"    => "پاوه",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "35.0266914367676",
                "longitude"   => "46.36696621586",
            ],
            [
                "id"          => 334,
                "deleted_at"  => null,
                "title_fa"    => "ثلاث باباجانی",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => 34.739985,
                "longitude"   => 46.153706,
            ],
            [
                "id"          => 335,
                "deleted_at"  => null,
                "title_fa"    => "جوانرود",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.8061637878418",
                "longitude"   => "46.4921913146973",
            ],
            [
                "id"          => 336,
                "deleted_at"  => null,
                "title_fa"    => "دالاهو",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => 46.153706,
                "longitude"   => 46.237347,
            ],
            [
                "id"          => 337,
                "deleted_at"  => null,
                "title_fa"    => "روانسر",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.716178894043",
                "longitude"   => "46.6560707092285",
            ],
            [
                "id"          => 338,
                "deleted_at"  => null,
                "title_fa"    => "سر پل ذهاب",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.4486808776855",
                "longitude"   => "45.8630256652832",
            ],
            [
                "id"          => 339,
                "deleted_at"  => null,
                "title_fa"    => "سنقر",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.7627067565918",
                "longitude"   => "47.5996322631836",
            ],
            [
                "id"          => 340,
                "deleted_at"  => null,
                "title_fa"    => "صحنه",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.15172729492",
                "longitude"   => "47.6852188110352",
            ],
            [
                "id"          => 341,
                "deleted_at"  => null,
                "title_fa"    => "قصر شیرین",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.5075302124023",
                "longitude"   => "45.5892906188965",
            ],
            [
                "id"          => 342,
                "deleted_at"  => null,
                "title_fa"    => "کرمانشاه",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.314094543457",
                "longitude"   => "47.0971412658691",
            ],
            [
                "id"          => 343,
                "deleted_at"  => null,
                "title_fa"    => "کنگاور",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.5016670227051",
                "longitude"   => "47.9620208740234",
            ],
            [
                "id"          => 344,
                "deleted_at"  => null,
                "title_fa"    => "گیلانغرب",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.1403198242187",
                "longitude"   => "45.92265405273",
            ],
            [
                "id"          => 345,
                "deleted_at"  => null,
                "title_fa"    => "هرسین",
                "province_id" => 22,
                "capital_id"  => 0,
                "latitude"    => "34.2700042724609",
                "longitude"   => "47.5803756713867",
            ],
            [
                "id"          => 346,
                "deleted_at"  => null,
                "title_fa"    => "باشت",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => "30.3621273040771",
                "longitude"   => "51.1563262939453",
            ],
            [
                "id"          => 347,
                "deleted_at"  => null,
                "title_fa"    => "بویر احمد",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => 30.740576,
                "longitude"   => 50.815156,
            ],
            [
                "id"          => 348,
                "deleted_at"  => null,
                "title_fa"    => "بهمئی",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => 31.018313,
                "longitude"   => 50.01734,
            ],
            [
                "id"          => 349,
                "deleted_at"  => null,
                "title_fa"    => "چرام",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => "30.7554721832275",
                "longitude"   => "50.7468414306641",
            ],
            [
                "id"          => 350,
                "deleted_at"  => null,
                "title_fa"    => "دنا",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => 30.968467,
                "longitude"   => 51.417909,
            ],
            [
                "id"          => 351,
                "deleted_at"  => null,
                "title_fa"    => "کهگیلویه",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => 30.975046,
                "longitude"   => 50.51934,
            ],
            [
                "id"          => 352,
                "deleted_at"  => null,
                "title_fa"    => "گچساران",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => 30.365574,
                "longitude"   => 50.795297,
            ],
            [
                "id"          => 353,
                "deleted_at"  => null,
                "title_fa"    => "لنده",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => "30.9826679229736",
                "longitude"   => "50.4196891784668",
            ],
            [
                "id"          => 354,
                "deleted_at"  => null,
                "title_fa"    => "آزاد شهر",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "37.0866317749023",
                "longitude"   => "55.1694793701172",
            ],
            [
                "id"          => 355,
                "deleted_at"  => null,
                "title_fa"    => "آق قلا",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "37.0095405578613",
                "longitude"   => "54.45674513051",
            ],
            [
                "id"          => 356,
                "deleted_at"  => null,
                "title_fa"    => "بندر گز",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "36.7540588378906",
                "longitude"   => "53.9507141113281",
            ],
            [
                "id"          => 357,
                "deleted_at"  => null,
                "title_fa"    => "ترکمن",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "36.9030113220215",
                "longitude"   => "54.0750198364258",
            ],
            [
                "id"          => 358,
                "deleted_at"  => null,
                "title_fa"    => "رامیان",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "37.0184516906738",
                "longitude"   => "55.1420783996582",
            ],
            [
                "id"          => 359,
                "deleted_at"  => null,
                "title_fa"    => "علی آباد",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "36.9124031066895",
                "longitude"   => "54.8577003479004",
            ],
            [
                "id"          => 360,
                "deleted_at"  => null,
                "title_fa"    => "کردکوی",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "36.7945251464844",
                "longitude"   => "54.1099166870117",
            ],
            [
                "id"          => 361,
                "deleted_at"  => null,
                "title_fa"    => "کلاله",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "37.3811225891113",
                "longitude"   => "55.4916152954102",
            ],
            [
                "id"          => 362,
                "deleted_at"  => null,
                "title_fa"    => "گالیکش",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "37.2704048156738",
                "longitude"   => "55.4310722351074",
            ],
            [
                "id"          => 363,
                "deleted_at"  => null,
                "title_fa"    => "گرگان",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "36.8451995849609",
                "longitude"   => "54.4287986755371",
            ],
            [
                "id"          => 364,
                "deleted_at"  => null,
                "title_fa"    => "گمیشان",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => 37.071135,
                "longitude"   => 54.075505,
            ],
            [
                "id"          => 365,
                "deleted_at"  => null,
                "title_fa"    => "گنبد کاووس",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "37.24141784668",
                "longitude"   => "55.1757392883301",
            ],
            [
                "id"          => 366,
                "deleted_at"  => null,
                "title_fa"    => "مراوه تپه",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "37.9047088623047",
                "longitude"   => "55.961727142334",
            ],
            [
                "id"          => 367,
                "deleted_at"  => null,
                "title_fa"    => "مینودشت",
                "province_id" => 24,
                "capital_id"  => 0,
                "latitude"    => "37.2296600341797",
                "longitude"   => "55.3750877380371",
            ],
            [
                "id"          => 368,
                "deleted_at"  => null,
                "title_fa"    => "آستارا",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "38.3871803283691",
                "longitude"   => "48.8692474365234",
            ],
            [
                "id"          => 369,
                "deleted_at"  => null,
                "title_fa"    => "آستانه اشرفیه",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.2635917663574",
                "longitude"   => "49.9449081420898",
            ],
            [
                "id"          => 370,
                "deleted_at"  => null,
                "title_fa"    => "املش",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.0872116088867",
                "longitude"   => "50.1910285949707",
            ],
            [
                "id"          => 371,
                "deleted_at"  => null,
                "title_fa"    => "بندر انزلی",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.4667053222656",
                "longitude"   => "49.4626998901367",
            ],
            [
                "id"          => 372,
                "deleted_at"  => null,
                "title_fa"    => "رشت",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.2841453552246",
                "longitude"   => "49.5904083251953",
            ],
            [
                "id"          => 373,
                "deleted_at"  => null,
                "title_fa"    => "رضوانشهر",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => 37.560213,
                "longitude"   => 49.151651,
            ],
            [
                "id"          => 374,
                "deleted_at"  => null,
                "title_fa"    => "رودبار",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => 36.816894,
                "longitude"   => 49.431698,
            ],
            [
                "id"          => 375,
                "deleted_at"  => null,
                "title_fa"    => "رودسر",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.1326484680176",
                "longitude"   => "50.3002548217773",
            ],
            [
                "id"          => 376,
                "deleted_at"  => null,
                "title_fa"    => "سیاهکل",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.1510925292969",
                "longitude"   => "49.872371673584",
            ],
            [
                "id"          => 377,
                "deleted_at"  => null,
                "title_fa"    => "شفت",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.1638145446777",
                "longitude"   => "49.4030914306641",
            ],
            [
                "id"          => 378,
                "deleted_at"  => null,
                "title_fa"    => "صومعه سرا",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.3028335571289",
                "longitude"   => "49.3201217651367",
            ],
            [
                "id"          => 379,
                "deleted_at"  => null,
                "title_fa"    => "تالش",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => 37.801928,
                "longitude"   => 48.90834,
            ],
            [
                "id"          => 380,
                "deleted_at"  => null,
                "title_fa"    => "فومن",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.225700378418",
                "longitude"   => "49.3110008239746",
            ],
            [
                "id"          => 381,
                "deleted_at"  => null,
                "title_fa"    => "لاهیجان",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.202392578125",
                "longitude"   => "50.0108184814453",
            ],
            [
                "id"          => 382,
                "deleted_at"  => null,
                "title_fa"    => "لنگرود",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.1956748962402",
                "longitude"   => "50.1474266052246",
            ],
            [
                "id"          => 383,
                "deleted_at"  => null,
                "title_fa"    => "ماسال",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "37.3655014038086",
                "longitude"   => "49.1317672729492",
            ],
            [
                "id"          => 384,
                "deleted_at"  => null,
                "title_fa"    => "ازنا",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => "33.4573287963867",
                "longitude"   => "49.4542121887207",
            ],
            [
                "id"          => 385,
                "deleted_at"  => null,
                "title_fa"    => "الیگودرز",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => "33.40154642715",
                "longitude"   => "49.6931686401367",
            ],
            [
                "id"          => 386,
                "deleted_at"  => null,
                "title_fa"    => "بروجرد",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => "33.8982925415039",
                "longitude"   => "48.7546806335449",
            ],
            [
                "id"          => 387,
                "deleted_at"  => null,
                "title_fa"    => "پلدختر",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => "33.1529273986816",
                "longitude"   => "47.7143173217773",
            ],
            [
                "id"          => 388,
                "deleted_at"  => null,
                "title_fa"    => "خرم آباد",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => 33.462161,
                "longitude"   => 48.354585,
            ],
            [
                "id"          => 389,
                "deleted_at"  => null,
                "title_fa"    => "دلفان",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => 34.068394,
                "longitude"   => 47.977189,
            ],
            [
                "id"          => 390,
                "deleted_at"  => null,
                "title_fa"    => "دورود",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => "33.4942016601562",
                "longitude"   => "49.0568084716797",
            ],
            [
                "id"          => 391,
                "deleted_at"  => null,
                "title_fa"    => "دوره",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => 33.566458,
                "longitude"   => 48.018693,
            ],
            [
                "id"          => 392,
                "deleted_at"  => null,
                "title_fa"    => "رومشکان",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => 33.281683,
                "longitude"   => 47.519526,
            ],
            [
                "id"          => 393,
                "deleted_at"  => null,
                "title_fa"    => "سلسله",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => 33.864935,
                "longitude"   => 48.268172,
            ],
            [
                "id"          => 394,
                "deleted_at"  => null,
                "title_fa"    => "کوهدشت",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => "33.5341529846191",
                "longitude"   => "47.6084632873535",
            ],
            [
                "id"          => 395,
                "deleted_at"  => null,
                "title_fa"    => "آمل",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.34551391602",
                "longitude"   => "52.3558349609375",
            ],
            [
                "id"          => 396,
                "deleted_at"  => null,
                "title_fa"    => "بابل",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.5211944580078",
                "longitude"   => "52.6759300231934",
            ],
            [
                "id"          => 397,
                "deleted_at"  => null,
                "title_fa"    => "بابلسر",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.6989364624023",
                "longitude"   => "52.6493377685547",
            ],
            [
                "id"          => 398,
                "deleted_at"  => null,
                "title_fa"    => "بهشهر",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.6955413818359",
                "longitude"   => "53.5346412658691",
            ],
            [
                "id"          => 399,
                "deleted_at"  => null,
                "title_fa"    => "تنکابن",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.8151397705078",
                "longitude"   => "50.8743629455566",
            ],
            [
                "id"          => 400,
                "deleted_at"  => null,
                "title_fa"    => "جویبار",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.6410064697266",
                "longitude"   => "52.8998260498047",
            ],
            [
                "id"          => 401,
                "deleted_at"  => null,
                "title_fa"    => "چالوس",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.6539878845215",
                "longitude"   => "51.4244689941406",
            ],
            [
                "id"          => 402,
                "deleted_at"  => null,
                "title_fa"    => "رامسر",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.9159889221191",
                "longitude"   => "50.6623344421387",
            ],
            [
                "id"          => 403,
                "deleted_at"  => null,
                "title_fa"    => "ساری",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.5668830871582",
                "longitude"   => "53.0600166320801",
            ],
            [
                "id"          => 404,
                "deleted_at"  => null,
                "title_fa"    => "سواد کوه",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => 36.4351,
                "longitude"   => 52.86624,
            ],
            [
                "id"          => 405,
                "deleted_at"  => null,
                "title_fa"    => "سوادکوه شمالی",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => 36.324519,
                "longitude"   => 52.828734,
            ],
            [
                "id"          => 406,
                "deleted_at"  => null,
                "title_fa"    => "سیمرغ",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => 36.563246,
                "longitude"   => 52.705774,
            ],
            [
                "id"          => 407,
                "deleted_at"  => null,
                "title_fa"    => "عباس آباد",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.7212333679199",
                "longitude"   => "51.1159706115723",
            ],
            [
                "id"          => 408,
                "deleted_at"  => null,
                "title_fa"    => "فریدونکنار",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.682804107666",
                "longitude"   => "52.5166854858398",
            ],
            [
                "id"          => 409,
                "deleted_at"  => null,
                "title_fa"    => "قائم شهر",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.4643516540527",
                "longitude"   => "52.8650817871094",
            ],
            [
                "id"          => 410,
                "deleted_at"  => null,
                "title_fa"    => "کلاردشت",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.4936943054199",
                "longitude"   => "51.1449546813965",
            ],
            [
                "id"          => 411,
                "deleted_at"  => null,
                "title_fa"    => "گلوگاه",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.7251358032227",
                "longitude"   => "53.8110504150391",
            ],
            [
                "id"          => 412,
                "deleted_at"  => null,
                "title_fa"    => "محمود آباد",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => 36.62958,
                "longitude"   => 52.262964,
            ],
            [
                "id"          => 413,
                "deleted_at"  => null,
                "title_fa"    => "میاندورود",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => 36.591952,
                "longitude"   => 53.213688,
            ],
            [
                "id"          => 414,
                "deleted_at"  => null,
                "title_fa"    => "نکا",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.6518745422363",
                "longitude"   => "53.29363661133",
            ],
            [
                "id"          => 415,
                "deleted_at"  => null,
                "title_fa"    => "نور",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.5730743408203",
                "longitude"   => "52.0158805847168",
            ],
            [
                "id"          => 416,
                "deleted_at"  => null,
                "title_fa"    => "نوشهر",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.6470832824707",
                "longitude"   => "51.4998435974121",
            ],
            [
                "id"          => 417,
                "deleted_at"  => null,
                "title_fa"    => "آشتیان",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "34.5235900878906",
                "longitude"   => "50.0057945251465",
            ],
            [
                "id"          => 418,
                "deleted_at"  => null,
                "title_fa"    => "اراک",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "34.093448638916",
                "longitude"   => "49.7220993041992",
            ],
            [
                "id"          => 419,
                "deleted_at"  => null,
                "title_fa"    => "تفرش",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "34.6850204467773",
                "longitude"   => "50.0226287841797",
            ],
            [
                "id"          => 420,
                "deleted_at"  => null,
                "title_fa"    => "خمین",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "33.6410751342773",
                "longitude"   => "50.0803070068359",
            ],
            [
                "id"          => 421,
                "deleted_at"  => null,
                "title_fa"    => "خنداب",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "34.3834495544434",
                "longitude"   => "49.1889419555664",
            ],
            [
                "id"          => 422,
                "deleted_at"  => null,
                "title_fa"    => "دلیجان",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "33.9903564453125",
                "longitude"   => "50.6816558837891",
            ],
            [
                "id"          => 423,
                "deleted_at"  => null,
                "title_fa"    => "زرندیه",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => 34.093823,
                "longitude"   => 49.704936,
            ],
            [
                "id"          => 424,
                "deleted_at"  => null,
                "title_fa"    => "ساوه",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "35.025333404541",
                "longitude"   => "50.3649215698242",
            ],
            [
                "id"          => 425,
                "deleted_at"  => null,
                "title_fa"    => "شازند",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "33.9337005615234",
                "longitude"   => "49.4108772277832",
            ],
            [
                "id"          => 426,
                "deleted_at"  => null,
                "title_fa"    => "فراهان",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => 34.510018,
                "longitude"   => 49.684296,
            ],
            [
                "id"          => 427,
                "deleted_at"  => null,
                "title_fa"    => "کمیجان",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "34.719123840332",
                "longitude"   => "49.3223342895508",
            ],
            [
                "id"          => 428,
                "deleted_at"  => null,
                "title_fa"    => "محلات",
                "province_id" => 28,
                "capital_id"  => 0,
                "latitude"    => "33.9083824157715",
                "longitude"   => "50.4541435241699",
            ],
            [
                "id"          => 429,
                "deleted_at"  => null,
                "title_fa"    => "ابوموسی",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "25.8834629058838",
                "longitude"   => "55.0298538208008",
            ],
            [
                "id"          => 430,
                "deleted_at"  => null,
                "title_fa"    => "بستک",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "27.1946144104004",
                "longitude"   => "54.3667945861816",
            ],
            [
                "id"          => 431,
                "deleted_at"  => null,
                "title_fa"    => "بشاگرد",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => 26.45649,
                "longitude"   => 57.89885,
            ],
            [
                "id"          => 432,
                "deleted_at"  => null,
                "title_fa"    => "بندرعباس",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "27.1926517486572",
                "longitude"   => "56.2914657592773",
            ],
            [
                "id"          => 433,
                "deleted_at"  => null,
                "title_fa"    => "بندرلنگه",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "26.51330352783",
                "longitude"   => "54.8889236450195",
            ],
            [
                "id"          => 434,
                "deleted_at"  => null,
                "title_fa"    => "پارسیان",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "27.2039394378662",
                "longitude"   => "53.042724609375",
            ],
            [
                "id"          => 435,
                "deleted_at"  => null,
                "title_fa"    => "جاسک",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => 25.656094,
                "longitude"   => 57.790642,
            ],
            [
                "id"          => 436,
                "deleted_at"  => null,
                "title_fa"    => "حاجی آباد",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => 28.311329,
                "longitude"   => 55.908651,
            ],
            [
                "id"          => 437,
                "deleted_at"  => null,
                "title_fa"    => "خمیر",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "26.9512062072754",
                "longitude"   => "55.5879020690918",
            ],
            [
                "id"          => 438,
                "deleted_at"  => null,
                "title_fa"    => "رودان",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => 27.484551,
                "longitude"   => 57.263134,
            ],
            [
                "id"          => 439,
                "deleted_at"  => null,
                "title_fa"    => "سیریک",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "26.521110534668",
                "longitude"   => "57.1092872619629",
            ],
            [
                "id"          => 440,
                "deleted_at"  => null,
                "title_fa"    => "قشم",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "26.9489421844482",
                "longitude"   => "56.2728805541992",
            ],
            [
                "id"          => 441,
                "deleted_at"  => null,
                "title_fa"    => "میناب",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "27.0975875854492",
                "longitude"   => "57.0741500854492",
            ],
            [
                "id"          => 442,
                "deleted_at"  => null,
                "title_fa"    => "اسد آباد",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "34.7853584289551",
                "longitude"   => "48.1216621398926",
            ],
            [
                "id"          => 443,
                "deleted_at"  => null,
                "title_fa"    => "بهار",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "34.8907051086426",
                "longitude"   => "48.4408836364746",
            ],
            [
                "id"          => 444,
                "deleted_at"  => null,
                "title_fa"    => "تویسرکان",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "34.5490417480469",
                "longitude"   => "48.4481163024902",
            ],
            [
                "id"          => 445,
                "deleted_at"  => null,
                "title_fa"    => "رزن",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "35.39064881836",
                "longitude"   => "49.0351142883301",
            ],
            [
                "id"          => 446,
                "deleted_at"  => null,
                "title_fa"    => "فامنین",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "35.1153755187988",
                "longitude"   => "48.9722671508789",
            ],
            [
                "id"          => 447,
                "deleted_at"  => null,
                "title_fa"    => "کبودرآهنگ",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "35.2092437744141",
                "longitude"   => "48.7248687744141",
            ],
            [
                "id"          => 448,
                "deleted_at"  => null,
                "title_fa"    => "ملایر",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "34.2973175048828",
                "longitude"   => "48.8165473937988",
            ],
            [
                "id"          => 449,
                "deleted_at"  => null,
                "title_fa"    => "نهاوند",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "34.1682090759277",
                "longitude"   => "48.3755073547363",
            ],
            [
                "id"          => 450,
                "deleted_at"  => null,
                "title_fa"    => "همدان",
                "province_id" => 30,
                "capital_id"  => 0,
                "latitude"    => "34.7918128967285",
                "longitude"   => "48.5261459350586",
            ],
            [
                "id"          => 451,
                "deleted_at"  => null,
                "title_fa"    => "ابرکوه",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => "31.1302242279053",
                "longitude"   => "53.2794494628906",
            ],
            [
                "id"          => 452,
                "deleted_at"  => null,
                "title_fa"    => "اردکان",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => 32.303882,
                "longitude"   => 54.007371,
            ],
            [
                "id"          => 453,
                "deleted_at"  => null,
                "title_fa"    => "بافق",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => "31.6040916442871",
                "longitude"   => "55.3963813781738",
            ],
            [
                "id"          => 454,
                "deleted_at"  => null,
                "title_fa"    => "بهاباد",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => "31.8679790496826",
                "longitude"   => "56.0264892578125",
            ],
            [
                "id"          => 455,
                "deleted_at"  => null,
                "title_fa"    => "تفت",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => "31.7426567077637",
                "longitude"   => "54.2077140808105",
            ],
            [
                "id"          => 456,
                "deleted_at"  => null,
                "title_fa"    => "خاتم",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => 31.879912,
                "longitude"   => 54.358162,
            ],
            [
                "id"          => 457,
                "deleted_at"  => null,
                "title_fa"    => "صدوق",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => 32.102526,
                "longitude"   => 53.503176,
            ],
            [
                "id"          => 458,
                "deleted_at"  => null,
                "title_fa"    => "مهریز",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => "31.5574188232422",
                "longitude"   => "54.437816619873",
            ],
            [
                "id"          => 459,
                "deleted_at"  => null,
                "title_fa"    => "میبد",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => "32.2422523498535",
                "longitude"   => "54.0181427001953",
            ],
            [
                "id"          => 460,
                "deleted_at"  => null,
                "title_fa"    => "یزد",
                "province_id" => 31,
                "capital_id"  => 0,
                "latitude"    => "31.8835220336914",
                "longitude"   => "54.33401733398",
            ],
            [
                "id"          => 461,
                "deleted_at"  => null,
                "title_fa"    => "زیرآب",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.1796417236328",
                "longitude"   => "52.9746856689453",
            ],
            [
                "id"          => 462,
                "deleted_at"  => null,
                "title_fa"    => "نورآباد",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => 34.066546,
                "longitude"   => 47.975128,
            ],
            [
                "id"          => 463,
                "deleted_at"  => null,
                "title_fa"    => "الشتر",
                "province_id" => 26,
                "capital_id"  => 0,
                "latitude"    => "33.8614082336426",
                "longitude"   => "48.259765625",
            ],
            [
                "id"          => 464,
                "deleted_at"  => null,
                "title_fa"    => "امیرکلا",
                "province_id" => 27,
                "capital_id"  => 0,
                "latitude"    => "36.5987815856934",
                "longitude"   => "52.6627388000488",
            ],
            [
                "id"          => 465,
                "deleted_at"  => null,
                "title_fa"    => "الوند",
                "province_id" => 18,
                "capital_id"  => 0,
                "latitude"    => "36.1703414916992",
                "longitude"   => "50.0741539001465",
            ],
            [
                "id"          => 466,
                "deleted_at"  => null,
                "title_fa"    => "رستم آباد",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "36.8840713500977",
                "longitude"   => "49.4915733337402",
            ],
            [
                "id"          => 467,
                "deleted_at"  => null,
                "title_fa"    => "منجیل",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => "36.7412986755371",
                "longitude"   => "49.4185409545898",
            ],
            [
                "id"          => 468,
                "deleted_at"  => null,
                "title_fa"    => "طوالش",
                "province_id" => 25,
                "capital_id"  => 0,
                "latitude"    => 37.003191,
                "longitude"   => 49.780083,
            ],
            [
                "id"          => 469,
                "deleted_at"  => null,
                "title_fa"    => "برازجان",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => "29.2707118988037",
                "longitude"   => "51.2167091369629",
            ],
            [
                "id"          => 470,
                "deleted_at"  => null,
                "title_fa"    => "خورموج",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => "28.6271820068359",
                "longitude"   => "51.3825225830078",
            ],
            [
                "id"          => 471,
                "deleted_at"  => null,
                "title_fa"    => "اهرم",
                "province_id" => 7,
                "capital_id"  => 0,
                "latitude"    => "28.8842239379883",
                "longitude"   => "51.278694152832",
            ],
            [
                "id"          => 472,
                "deleted_at"  => null,
                "title_fa"    => "ماهشهر",
                "province_id" => 13,
                "capital_id"  => 0,
                "latitude"    => 30.559331,
                "longitude"   => 49.180844,
            ],
            [
                "id"          => 473,
                "deleted_at"  => null,
                "title_fa"    => "کیش",
                "province_id" => 29,
                "capital_id"  => 0,
                "latitude"    => "26.5334243774414",
                "longitude"   => "53.9738464355469",
            ],
            [
                "id"          => 474,
                "deleted_at"  => null,
                "title_fa"    => "یاسوج",
                "province_id" => 23,
                "capital_id"  => 0,
                "latitude"    => "30.6567630767822",
                "longitude"   => "51.5824241638184",
            ],
        ];

        $cities = array_map(function ($key) {
            $key['country_id']   = '495';
            $key['continent_id'] = '476';
            $key['type']         = "city";
            $key['language']     = "fa";
            $key['currency']     = "IRR";

            return $key;
        }, $cities);

        return $cities;
    }



    /**
     * Returns neighbourhoods of Tehran
     *
     * @return array
     */
    protected function tehranNeighbourhoods()
    {
        //PASTE IMPORTED ARRAY HERE:
        $neighbourhoods = [
            [
                "title_fa" => "منطقه ۱ - اتوبان امام علی",
            ],
            [
                "title_fa" => "منطقه ۱ - اتوبان صدر",
            ],
            [
                "title_fa" => "منطقه ۱ - اراج",
            ],
            [
                "title_fa" => "منطقه ۱ - ازگل",
            ],
            [
                "title_fa" => "منطقه ۱ - اقدسیه",
            ],
            [
                "title_fa" => "منطقه ۱ - الهیه",
            ],
            [
                "title_fa" => "منطقه ۱ - امام‌زاده قاسم (ع)",
            ],
            [
                "title_fa" => "منطقه ۱ - اندرزگو",
            ],
            [
                "title_fa" => "منطقه ۱ - اوین",
            ],
            [
                "title_fa" => "منطقه ۱ - باغ فردوس",
            ],
            [
                "title_fa" => "منطقه ۱ - بلوار ارتش",
            ],
            [
                "title_fa" => "منطقه ۱ - پارک‌وی",
            ],
            [
                "title_fa" => "منطقه ۱ - تجریش",
            ],
            [
                "title_fa" => "منطقه ۱ - جماران",
            ],
            [
                "title_fa" => "منطقه ۱ - جمشیدیه",
            ],
            [
                "title_fa" => "منطقه ۱ - چیذر",
            ],
            [
                "title_fa" => "منطقه ۱ - حصار بوعلی",
            ],
            [
                "title_fa" => "منطقه ۱ - حکمت",
            ],
            [
                "title_fa" => "منطقه ۱ - دارآباد",
            ],
            [
                "title_fa" => "منطقه ۱ - دربند",
            ],
            [
                "title_fa" => "منطقه ۱ - درکه",
            ],
            [
                "title_fa" => "منطقه ۱ - دزاشیب",
            ],
            [
                "title_fa" => "منطقه ۱ - دیباجی",
            ],
            [
                "title_fa" => "منطقه ۱ - رستم‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱ - زعفرانیه",
            ],
            [
                "title_fa" => "منطقه ۱ - سعدآباد",
            ],
            [
                "title_fa" => "منطقه ۱ - سوهانک",
            ],
            [
                "title_fa" => "منطقه ۱ - شهرک دانشگاه",
            ],
            [
                "title_fa" => "منطقه ۱ - شهرک نفت",
            ],
            [
                "title_fa" => "منطقه ۱ - شهید محلاتی",
            ],
            [
                "title_fa" => "منطقه ۱ - صاحبقرانیه",
            ],
            [
                "title_fa" => "منطقه ۱ - فرشته",
            ],
            [
                "title_fa" => "منطقه ۱ - فرمانیه",
            ],
            [
                "title_fa" => "منطقه ۱ - قیطریه",
            ],
            [
                "title_fa" => "منطقه ۱ - کاشانک",
            ],
            [
                "title_fa" => "منطقه ۱ - کامرانیه",
            ],
            [
                "title_fa" => "منطقه ۱ - گلابدره",
            ],
            [
                "title_fa" => "منطقه ۱ - محمودیه",
            ],
            [
                "title_fa" => "منطقه ۱ - مقدس اردبیلی",
            ],
            [
                "title_fa" => "منطقه ۱ - مینی‌سیتی",
            ],
            [
                "title_fa" => "منطقه ۱ - نوبنیاد",
            ],
            [
                "title_fa" => "منطقه ۱ - نیاوران",
            ],
            [
                "title_fa" => "منطقه ۱ - ولنجک",
            ],
            [
                "title_fa" => "منطقه ۱ - ولیعصر",
            ],
            [
                "title_fa" => "منطقه ۲ - اتوبان حکیم",
            ],
            [
                "title_fa" => "منطقه ۲ - اتوبان شیخ فضل‌اله نوری",
            ],
            [
                "title_fa" => "منطقه ۲ - اتوبان محمدعلی جناح",
            ],
            [
                "title_fa" => "منطقه ۲ - اتوبان نیایش",
            ],
            [
                "title_fa" => "منطقه ۲ - اتوبان یادگار امام",
            ],
            [
                "title_fa" => "منطقه ۲ - ایوانک",
            ],
            [
                "title_fa" => "منطقه ۲ - آزادی",
            ],
            [
                "title_fa" => "منطقه ۲ - آسمان‌ها",
            ],
            [
                "title_fa" => "منطقه ۲ - برق آلستوم",
            ],
            [
                "title_fa" => "منطقه ۲ - بوعلی",
            ],
            [
                "title_fa" => "منطقه ۲ - بهبودی",
            ],
            [
                "title_fa" => "منطقه ۲ - پردیسان",
            ],
            [
                "title_fa" => "منطقه ۲ - پرواز",
            ],
            [
                "title_fa" => "منطقه ۲ - پونک",
            ],
            [
                "title_fa" => "منطقه ۲ - توحید",
            ],
            [
                "title_fa" => "منطقه ۲ - تهران‌ویلا",
            ],
            [
                "title_fa" => "منطقه ۲ - تیموری",
            ],
            [
                "title_fa" => "منطقه ۲ - جلال آل‌احمد",
            ],
            [
                "title_fa" => "منطقه ۲ - خوش شمالی",
            ],
            [
                "title_fa" => "منطقه ۲ - درختی",
            ],
            [
                "title_fa" => "منطقه ۲ - دریا",
            ],
            [
                "title_fa" => "منطقه ۲ - زنجان",
            ],
            [
                "title_fa" => "منطقه ۲ - ستارخان",
            ],
            [
                "title_fa" => "منطقه ۲ - سعادت‌آباد",
            ],
            [
                "title_fa" => "منطقه ۲ - شادمان",
            ],
            [
                "title_fa" => "منطقه ۲ - شادمهر",
            ],
            [
                "title_fa" => "منطقه ۲ - شهرآرا",
            ],
            [
                "title_fa" => "منطقه ۲ - شهرک آزمایش",
            ],
            [
                "title_fa" => "منطقه ۲ - شهرک ژاندارمری",
            ],
            [
                "title_fa" => "منطقه ۲ - شهرک غرب",
            ],
            [
                "title_fa" => "منطقه ۲ - شهرک قدس",
            ],
            [
                "title_fa" => "منطقه ۲ - شهید چوب‌تراش",
            ],
            [
                "title_fa" => "منطقه ۲ - شهید خرم‌رودی",
            ],
            [
                "title_fa" => "منطقه ۲ - صادقیه",
            ],
            [
                "title_fa" => "منطقه ۲ - صادقیه شمالی شهرک هما",
            ],
            [
                "title_fa" => "منطقه ۲ - طرشت",
            ],
            [
                "title_fa" => "منطقه ۲ - فرحزاد",
            ],
            [
                "title_fa" => "منطقه ۲ - کوهسار",
            ],
            [
                "title_fa" => "منطقه ۲ - کوی نصر",
            ],
            [
                "title_fa" => "منطقه ۲ - گیشا",
            ],
            [
                "title_fa" => "منطقه ۲ - مترو شریف",
            ],
            [
                "title_fa" => "منطقه ۲ - مخابرات",
            ],
            [
                "title_fa" => "منطقه ۲ - مدیریت",
            ],
            [
                "title_fa" => "منطقه ۲ - مرزداران",
            ],
            [
                "title_fa" => "منطقه ۲ - همایونشهر",
            ],
            [
                "title_fa" => "منطقه ۳ - اختیاریه",
            ],
            [
                "title_fa" => "منطقه ۳ - امانیه",
            ],
            [
                "title_fa" => "منطقه ۳ - آرارات",
            ],
            [
                "title_fa" => "منطقه ۳ - پاسداران",
            ],
            [
                "title_fa" => "منطقه ۳ - جردن",
            ],
            [
                "title_fa" => "منطقه ۳ - جلفا",
            ],
            [
                "title_fa" => "منطقه ۳ - خواجه عبداله",
            ],
            [
                "title_fa" => "منطقه ۳ - داودیه",
            ],
            [
                "title_fa" => "منطقه ۳ - درب دوم",
            ],
            [
                "title_fa" => "منطقه ۳ - دروس",
            ],
            [
                "title_fa" => "منطقه ۳ - دولت (کلاهدوز)",
            ],
            [
                "title_fa" => "منطقه ۳ - رستم‌آباد و اختیاریه",
            ],
            [
                "title_fa" => "منطقه ۳ - زرگنده",
            ],
            [
                "title_fa" => "منطقه ۳ - سیدخندان",
            ],
            [
                "title_fa" => "منطقه ۳ - شیخ بهایی",
            ],
            [
                "title_fa" => "منطقه ۳ - شیراز",
            ],
            [
                "title_fa" => "منطقه ۳ - ظفر",
            ],
            [
                "title_fa" => "منطقه ۳ - قبا",
            ],
            [
                "title_fa" => "منطقه ۳ - قلهک",
            ],
            [
                "title_fa" => "منطقه ۳ - کاوسیه",
            ],
            [
                "title_fa" => "منطقه ۳ - ملاصدرا",
            ],
            [
                "title_fa" => "منطقه ۳ - میدان کتابی",
            ],
            [
                "title_fa" => "منطقه ۳ - میرداماد",
            ],
            [
                "title_fa" => "منطقه ۳ - ولیعصر(بین پارک‌وی و نیایش)",
            ],
            [
                "title_fa" => "منطقه ۳ - ونک",
            ],
            [
                "title_fa" => "منطقه ۴ - اتوبان بابایی",
            ],
            [
                "title_fa" => "منطقه ۴ - اتوبان باقری",
            ],
            [
                "title_fa" => "منطقه ۴ - اتوبان صیاد شیرازی",
            ],
            [
                "title_fa" => "منطقه ۴ - اوقاف",
            ],
            [
                "title_fa" => "منطقه ۴ - بنی هاشم",
            ],
            [
                "title_fa" => "منطقه ۴ - پاسداران و ضرابخانه",
            ],
            [
                "title_fa" => "منطقه ۴ - پلیس",
            ],
            [
                "title_fa" => "منطقه ۴ - تهرانپارس شرقی",
            ],
            [
                "title_fa" => "منطقه ۴ - تهرانپارس غربی",
            ],
            [
                "title_fa" => "منطقه ۴ - جوادیه",
            ],
            [
                "title_fa" => "منطقه ۴ - حسین‌آباد و مبارک‌آباد",
            ],
            [
                "title_fa" => "منطقه ۴ - حکیمیه",
            ],
            [
                "title_fa" => "منطقه ۴ - خاک‌سفید",
            ],
            [
                "title_fa" => "منطقه ۴ - دلاوران",
            ],
            [
                "title_fa" => "منطقه ۴ - رسالت",
            ],
            [
                "title_fa" => "منطقه ۴ - سراج",
            ],
            [
                "title_fa" => "منطقه ۴ - شمس‌آباد",
            ],
            [
                "title_fa" => "منطقه ۴ - شمیران نو",
            ],
            [
                "title_fa" => "منطقه ۴ - شهدا",
            ],
            [
                "title_fa" => "منطقه ۴ - شیان و لویزان",
            ],
            [
                "title_fa" => "منطقه ۴ - صیاد شیرازی",
            ],
            [
                "title_fa" => "منطقه ۴ - علم و صنعت",
            ],
            [
                "title_fa" => "منطقه ۴ - فرجام",
            ],
            [
                "title_fa" => "منطقه ۴ - قاسم‌آباد و ده نارمک",
            ],
            [
                "title_fa" => "منطقه ۴ - قنات کوثر",
            ],
            [
                "title_fa" => "منطقه ۴ - کاظم‌آباد",
            ],
            [
                "title_fa" => "منطقه ۴ - کوهسار",
            ],
            [
                "title_fa" => "منطقه ۴ - کوهک",
            ],
            [
                "title_fa" => "منطقه ۴ - لویزان",
            ],
            [
                "title_fa" => "منطقه ۴ - مجیدآباد",
            ],
            [
                "title_fa" => "منطقه ۴ - مجیدیه و شمس‌آباد",
            ],
            [
                "title_fa" => "منطقه ۴ - مهران",
            ],
            [
                "title_fa" => "منطقه ۴ - میدان ملت",
            ],
            [
                "title_fa" => "منطقه ۴ - نارمک",
            ],
            [
                "title_fa" => "منطقه ۴ - هروی",
            ],
            [
                "title_fa" => "منطقه ۴ - هنگام",
            ],
            [
                "title_fa" => "منطقه ۵ - اباذر",
            ],
            [
                "title_fa" => "منطقه ۵ - ارم",
            ],
            [
                "title_fa" => "منطقه ۵ - اشرفی اصفهانی",
            ],
            [
                "title_fa" => "منطقه ۵ - اکباتان",
            ],
            [
                "title_fa" => "منطقه ۵ - المهدی",
            ],
            [
                "title_fa" => "منطقه ۵ - اندیشه",
            ],
            [
                "title_fa" => "منطقه ۵ - ایران زمین شمالی",
            ],
            [
                "title_fa" => "منطقه ۵ - آپادانا",
            ],
            [
                "title_fa" => "منطقه ۵ - آیت‌الله کاشانی",
            ],
            [
                "title_fa" => "منطقه ۵ - باغ فیض",
            ],
            [
                "title_fa" => "منطقه ۵ - بلوار تعاون",
            ],
            [
                "title_fa" => "منطقه ۵ - بلوار فردوس",
            ],
            [
                "title_fa" => "منطقه ۵ - بولیوار",
            ],
            [
                "title_fa" => "منطقه ۵ - بهاران",
            ],
            [
                "title_fa" => "منطقه ۵ - بیمه",
            ],
            [
                "title_fa" => "منطقه ۵ - پرواز",
            ],
            [
                "title_fa" => "منطقه ۵ - پونک",
            ],
            [
                "title_fa" => "منطقه ۵ - پونک جنوبی",
            ],
            [
                "title_fa" => "منطقه ۵ - پونک شمالی",
            ],
            [
                "title_fa" => "منطقه ۵ - پیامبر",
            ],
            [
                "title_fa" => "منطقه ۵ - جنت‌آباد",
            ],
            [
                "title_fa" => "منطقه ۵ - جنت‌آباد جنوبی",
            ],
            [
                "title_fa" => "منطقه ۵ - جنت‌آباد شمالی",
            ],
            [
                "title_fa" => "منطقه ۵ - جنت‌آباد مرکزی",
            ],
            [
                "title_fa" => "منطقه ۵ - حصارک",
            ],
            [
                "title_fa" => "منطقه ۵ - سازمان آب",
            ],
            [
                "title_fa" => "منطقه ۵ - سازمان برنامه",
            ],
            [
                "title_fa" => "منطقه ۵ - سازمان برنامه جنوبی",
            ],
            [
                "title_fa" => "منطقه ۵ - سازمان برنامه شمالی",
            ],
            [
                "title_fa" => "منطقه ۵ - ستاری",
            ],
            [
                "title_fa" => "منطقه ۵ - سردار جنگل",
            ],
            [
                "title_fa" => "منطقه ۵ - سولقان",
            ],
            [
                "title_fa" => "منطقه ۵ - شاهین",
            ],
            [
                "title_fa" => "منطقه ۵ - شهر زیبا",
            ],
            [
                "title_fa" => "منطقه ۵ - شهران",
            ],
            [
                "title_fa" => "منطقه ۵ - شهران جنوبی",
            ],
            [
                "title_fa" => "منطقه ۵ - شهران شمالی",
            ],
            [
                "title_fa" => "منطقه ۵ - شهرک اکباتان",
            ],
            [
                "title_fa" => "منطقه ۵ - شهرک نفت",
            ],
            [
                "title_fa" => "منطقه ۵ - شهید مهدی باکری",
            ],
            [
                "title_fa" => "منطقه ۵ - فردوس",
            ],
            [
                "title_fa" => "منطقه ۵ - کن",
            ],
            [
                "title_fa" => "منطقه ۵ - کوهسار",
            ],
            [
                "title_fa" => "منطقه ۵ - مرادآباد",
            ],
            [
                "title_fa" => "منطقه ۵ - مهران",
            ],
            [
                "title_fa" => "منطقه ۶ - ۱۶ آذر",
            ],
            [
                "title_fa" => "منطقه ۶ - اتوبان همت",
            ],
            [
                "title_fa" => "منطقه ۶ - اسکندری",
            ],
            [
                "title_fa" => "منطقه ۶ - امیرآباد",
            ],
            [
                "title_fa" => "منطقه ۶ - ایرانشهر",
            ],
            [
                "title_fa" => "منطقه ۶ - آرژانتین",
            ],
            [
                "title_fa" => "منطقه ۶ - بلوار کشاورز",
            ],
            [
                "title_fa" => "منطقه ۶ - بهجت‌آباد",
            ],
            [
                "title_fa" => "منطقه ۶ - پارک لاله",
            ],
            [
                "title_fa" => "منطقه ۶ - توانیر",
            ],
            [
                "title_fa" => "منطقه ۶ - جمال‌زاده",
            ],
            [
                "title_fa" => "منطقه ۶ - جنت",
            ],
            [
                "title_fa" => "منطقه ۶ - جهاد",
            ],
            [
                "title_fa" => "منطقه ۶ - حافظ",
            ],
            [
                "title_fa" => "منطقه ۶ - زرتشت",
            ],
            [
                "title_fa" => "منطقه ۶ - ساعی",
            ],
            [
                "title_fa" => "منطقه ۶ - سنایی",
            ],
            [
                "title_fa" => "منطقه ۶ - سیندخت",
            ],
            [
                "title_fa" => "منطقه ۶ - شیراز جنوبی",
            ],
            [
                "title_fa" => "منطقه ۶ - طالقانی",
            ],
            [
                "title_fa" => "منطقه ۶ - عباس‌آباد",
            ],
            [
                "title_fa" => "منطقه ۶ - فاطمی",
            ],
            [
                "title_fa" => "منطقه ۶ - فلسطین",
            ],
            [
                "title_fa" => "منطقه ۶ - قزل قلعه",
            ],
            [
                "title_fa" => "منطقه ۶ - کارگر شمالی",
            ],
            [
                "title_fa" => "منطقه ۶ - کردستان",
            ],
            [
                "title_fa" => "منطقه ۶ - کریم خان",
            ],
            [
                "title_fa" => "منطقه ۶ - کشاورز غربی",
            ],
            [
                "title_fa" => "منطقه ۶ - گاندی",
            ],
            [
                "title_fa" => "منطقه ۶ - گل‌ها",
            ],
            [
                "title_fa" => "منطقه ۶ - میدان انقلاب اسلامی",
            ],
            [
                "title_fa" => "منطقه ۶ - میدان ولیعصر",
            ],
            [
                "title_fa" => "منطقه ۶ - نجات اللهی",
            ],
            [
                "title_fa" => "منطقه ۶ - نصرت",
            ],
            [
                "title_fa" => "منطقه ۶ - وزراء",
            ],
            [
                "title_fa" => "منطقه ۶ - یوسف‌آباد",
            ],
            [
                "title_fa" => "منطقه ۷ - ارامنه الف",
            ],
            [
                "title_fa" => "منطقه ۷ - ارامنه ب",
            ],
            [
                "title_fa" => "منطقه ۷ - امام حسین",
            ],
            [
                "title_fa" => "منطقه ۷ - امجدیه خاقانی",
            ],
            [
                "title_fa" => "منطقه ۷ - اندیشه",
            ],
            [
                "title_fa" => "منطقه ۷ - انقلاب",
            ],
            [
                "title_fa" => "منطقه ۷ - آپادانا",
            ],
            [
                "title_fa" => "منطقه ۷ - بهار",
            ],
            [
                "title_fa" => "منطقه ۷ - حشمتیه",
            ],
            [
                "title_fa" => "منطقه ۷ - خواجه نصیر و حقوقی",
            ],
            [
                "title_fa" => "منطقه ۷ - خواجه نظام",
            ],
            [
                "title_fa" => "منطقه ۷ - خواجه نظام شرقی",
            ],
            [
                "title_fa" => "منطقه ۷ - خواجه نظام غربی",
            ],
            [
                "title_fa" => "منطقه ۷ - دبستان",
            ],
            [
                "title_fa" => "منطقه ۷ - دهقان",
            ],
            [
                "title_fa" => "منطقه ۷ - سرباز",
            ],
            [
                "title_fa" => "منطقه ۷ - سهروردی",
            ],
            [
                "title_fa" => "منطقه ۷ - سهروردی باغ صبا",
            ],
            [
                "title_fa" => "منطقه ۷ - شارق الف",
            ],
            [
                "title_fa" => "منطقه ۷ - شارق ب",
            ],
            [
                "title_fa" => "منطقه ۷ - شریعتی",
            ],
            [
                "title_fa" => "منطقه ۷ - شهید قندی",
            ],
            [
                "title_fa" => "منطقه ۷ - شهید مدنی",
            ],
            [
                "title_fa" => "منطقه ۷ - شیخ صفی",
            ],
            [
                "title_fa" => "منطقه ۷ - عباس‌آباد",
            ],
            [
                "title_fa" => "منطقه ۷ - قصر",
            ],
            [
                "title_fa" => "منطقه ۷ - کاج",
            ],
            [
                "title_fa" => "منطقه ۷ - گرگان",
            ],
            [
                "title_fa" => "منطقه ۷ - مدنی",
            ],
            [
                "title_fa" => "منطقه ۷ - مرودشت",
            ],
            [
                "title_fa" => "منطقه ۷ - مطهری",
            ],
            [
                "title_fa" => "منطقه ۷ - مفتح جنوبی",
            ],
            [
                "title_fa" => "منطقه ۷ - نظام آباد",
            ],
            [
                "title_fa" => "منطقه ۷ - نیلوفر",
            ],
            [
                "title_fa" => "منطقه ۷ - هفت تیر",
            ],
            [
                "title_fa" => "منطقه ۸ - تسلیحات",
            ],
            [
                "title_fa" => "منطقه ۸ - تهرانپارس",
            ],
            [
                "title_fa" => "منطقه ۸ - جشنواره",
            ],
            [
                "title_fa" => "منطقه ۸ - دردشت",
            ],
            [
                "title_fa" => "منطقه ۸ - زرکش",
            ],
            [
                "title_fa" => "منطقه ۸ - سبلان",
            ],
            [
                "title_fa" => "منطقه ۸ - فدک",
            ],
            [
                "title_fa" => "منطقه ۸ - کرمان",
            ],
            [
                "title_fa" => "منطقه ۸ - لشگر شرقی",
            ],
            [
                "title_fa" => "منطقه ۸ - لشگر غربی",
            ],
            [
                "title_fa" => "منطقه ۸ - مجیدیه",
            ],
            [
                "title_fa" => "منطقه ۸ - مدائن",
            ],
            [
                "title_fa" => "منطقه ۸ - نارمک",
            ],
            [
                "title_fa" => "منطقه ۸ - وحیدیه",
            ],
            [
                "title_fa" => "منطقه ۸ - هفت حوض",
            ],
            [
                "title_fa" => "منطقه ۹ - استادمعین",
            ],
            [
                "title_fa" => "منطقه ۹ - امام‌زاده عبداله",
            ],
            [
                "title_fa" => "منطقه ۹ - دکتر هوشیار",
            ],
            [
                "title_fa" => "منطقه ۹ - سرآسیاب مهرآباد",
            ],
            [
                "title_fa" => "منطقه ۹ - سی متری جی",
            ],
            [
                "title_fa" => "منطقه ۹ - شمشیری",
            ],
            [
                "title_fa" => "منطقه ۹ - شهید دستغیب",
            ],
            [
                "title_fa" => "منطقه ۹ - صنعتی",
            ],
            [
                "title_fa" => "منطقه ۹ - طوس",
            ],
            [
                "title_fa" => "منطقه ۹ - فتح",
            ],
            [
                "title_fa" => "منطقه ۹ - مهرآباد",
            ],
            [
                "title_fa" => "منطقه ۹ - مهرآباد جنوبی",
            ],
            [
                "title_fa" => "منطقه ۹ - مهرآبادجنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - امام خمینی (ره)",
            ],
            [
                "title_fa" => "منطقه ۱۰ - آذربایجان",
            ],
            [
                "title_fa" => "منطقه ۱۰ - آزادی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - بریانک",
            ],
            [
                "title_fa" => "منطقه ۱۰ - جیحون",
            ],
            [
                "title_fa" => "منطقه ۱۰ - حسام‌الدین",
            ],
            [
                "title_fa" => "منطقه ۱۰ - خوش",
            ],
            [
                "title_fa" => "منطقه ۱۰ - دامپزشکی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - رودکی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - زنجان جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - سلسبیل جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - سلسبیل شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - سلیمانی تیموری",
            ],
            [
                "title_fa" => "منطقه ۱۰ - سینا",
            ],
            [
                "title_fa" => "منطقه ۱۰ - شبیری جی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - قصرالدشت",
            ],
            [
                "title_fa" => "منطقه ۱۰ - کارون",
            ],
            [
                "title_fa" => "منطقه ۱۰ - کارون جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - کارون شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - کمیل",
            ],
            [
                "title_fa" => "منطقه ۱۰ - مالک اشتر",
            ],
            [
                "title_fa" => "منطقه ۱۰ - نواب",
            ],
            [
                "title_fa" => "منطقه ۱۰ - هاشمی",
            ],
            [
                "title_fa" => "منطقه ۱۰ - هفت چنار",
            ],
            [
                "title_fa" => "منطقه ۱۱ - ابوسعید",
            ],
            [
                "title_fa" => "منطقه ۱۱ - اسکندری",
            ],
            [
                "title_fa" => "منطقه ۱۱ - اسکندری جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۱ - امیریه (فرهنگ)",
            ],
            [
                "title_fa" => "منطقه ۱۱ - انبار نفت",
            ],
            [
                "title_fa" => "منطقه ۱۱ - انقلاب",
            ],
            [
                "title_fa" => "منطقه ۱۱ - آگاهی",
            ],
            [
                "title_fa" => "منطقه ۱۱ - پاستور",
            ],
            [
                "title_fa" => "منطقه ۱۱ - جمال‌زاده",
            ],
            [
                "title_fa" => "منطقه ۱۱ - جمهوری",
            ],
            [
                "title_fa" => "منطقه ۱۱ - حر",
            ],
            [
                "title_fa" => "منطقه ۱۱ - حسن‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱۱ - حشمت الدوله",
            ],
            [
                "title_fa" => "منطقه ۱۱ - دخانیات",
            ],
            [
                "title_fa" => "منطقه ۱۱ - راه‌آهن",
            ],
            [
                "title_fa" => "منطقه ۱۱ - شیخ هادی",
            ],
            [
                "title_fa" => "منطقه ۱۱ - عباسی",
            ],
            [
                "title_fa" => "منطقه ۱۱ - فروزش",
            ],
            [
                "title_fa" => "منطقه ۱۱ - قلمستان",
            ],
            [
                "title_fa" => "منطقه ۱۱ - کارگر جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۱ - کاشان",
            ],
            [
                "title_fa" => "منطقه ۱۱ - گمرک",
            ],
            [
                "title_fa" => "منطقه ۱۱ - مخصوص",
            ],
            [
                "title_fa" => "منطقه ۱۱ - منیریه",
            ],
            [
                "title_fa" => "منطقه ۱۱ - وحدت اسلامی",
            ],
            [
                "title_fa" => "منطقه ۱۱ - ولیعصر",
            ],
            [
                "title_fa" => "منطقه ۱۱ - هلال احمر",
            ],
            [
                "title_fa" => "منطقه ۱۲ - امام‌زاده یحیی",
            ],
            [
                "title_fa" => "منطقه ۱۲ - امین حضور",
            ],
            [
                "title_fa" => "منطقه ۱۲ - ایران",
            ],
            [
                "title_fa" => "منطقه ۱۲ - آبشار",
            ],
            [
                "title_fa" => "منطقه ۱۲ - بازار",
            ],
            [
                "title_fa" => "منطقه ۱۲ - بهارستان",
            ],
            [
                "title_fa" => "منطقه ۱۲ - پامنار",
            ],
            [
                "title_fa" => "منطقه ۱۲ - پانزده خرداد",
            ],
            [
                "title_fa" => "منطقه ۱۲ - پیچ شمیران",
            ],
            [
                "title_fa" => "منطقه ۱۲ - تختی",
            ],
            [
                "title_fa" => "منطقه ۱۲ - خراسان",
            ],
            [
                "title_fa" => "منطقه ۱۲ - دروازه شمیران",
            ],
            [
                "title_fa" => "منطقه ۱۲ - ری",
            ],
            [
                "title_fa" => "منطقه ۱۲ - سعدی",
            ],
            [
                "title_fa" => "منطقه ۱۲ - سنگلج",
            ],
            [
                "title_fa" => "منطقه ۱۲ - فردوسی",
            ],
            [
                "title_fa" => "منطقه ۱۲ - قیام",
            ],
            [
                "title_fa" => "منطقه ۱۲ - کوثر",
            ],
            [
                "title_fa" => "منطقه ۱۲ - لاله زارنو",
            ],
            [
                "title_fa" => "منطقه ۱۲ - مولوی",
            ],
            [
                "title_fa" => "منطقه ۱۲ - میدان قیام",
            ],
            [
                "title_fa" => "منطقه ۱۲ - هرندی",
            ],
            [
                "title_fa" => "منطقه ۱۳ - اشراقی",
            ],
            [
                "title_fa" => "منطقه ۱۳ - امامت",
            ],
            [
                "title_fa" => "منطقه ۱۳ - آشتیانی",
            ],
            [
                "title_fa" => "منطقه ۱۳ - پیروزی",
            ],
            [
                "title_fa" => "منطقه ۱۳ - تهران نو",
            ],
            [
                "title_fa" => "منطقه ۱۳ - حافظیه",
            ],
            [
                "title_fa" => "منطقه ۱۳ - دماوند",
            ],
            [
                "title_fa" => "منطقه ۱۳ - دهقان",
            ],
            [
                "title_fa" => "منطقه ۱۳ - زاهد گیلانی",
            ],
            [
                "title_fa" => "منطقه ۱۳ - زینبیه",
            ],
            [
                "title_fa" => "منطقه ۱۳ - سرخه حصار",
            ],
            [
                "title_fa" => "منطقه ۱۳ - شورا",
            ],
            [
                "title_fa" => "منطقه ۱۳ - شهید اسدی",
            ],
            [
                "title_fa" => "منطقه ۱۳ - صفا",
            ],
            [
                "title_fa" => "منطقه ۱۳ - نیروی هوایی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - ابوذر",
            ],
            [
                "title_fa" => "منطقه ۱۴ - اتوبان محلاتی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - افراسیابی شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - اندرزگو",
            ],
            [
                "title_fa" => "منطقه ۱۴ - آهنگ",
            ],
            [
                "title_fa" => "منطقه ۱۴ - آهنگ شرقی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - آهنگران",
            ],
            [
                "title_fa" => "منطقه ۱۴ - بروجردی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - پاسدار گمنام",
            ],
            [
                "title_fa" => "منطقه ۱۴ - پرستار",
            ],
            [
                "title_fa" => "منطقه ۱۴ - تاکسیرانی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - جابری",
            ],
            [
                "title_fa" => "منطقه ۱۴ - چهارصد دستگاه",
            ],
            [
                "title_fa" => "منطقه ۱۴ - خاوران",
            ],
            [
                "title_fa" => "منطقه ۱۴ - دژکام",
            ],
            [
                "title_fa" => "منطقه ۱۴ - دولاب",
            ],
            [
                "title_fa" => "منطقه ۱۴ - سر آسیب دولاب",
            ],
            [
                "title_fa" => "منطقه ۱۴ - سیزده آبان",
            ],
            [
                "title_fa" => "منطقه ۱۴ - شاهین",
            ],
            [
                "title_fa" => "منطقه ۱۴ - شکوفه",
            ],
            [
                "title_fa" => "منطقه ۱۴ - شکیب",
            ],
            [
                "title_fa" => "منطقه ۱۴ - شهرابی (قیام)",
            ],
            [
                "title_fa" => "منطقه ۱۴ - شهید محلاتی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - شیوا",
            ],
            [
                "title_fa" => "منطقه ۱۴ - صد دستگاه",
            ],
            [
                "title_fa" => "منطقه ۱۴ - فرزانه",
            ],
            [
                "title_fa" => "منطقه ۱۴ - فلاح",
            ],
            [
                "title_fa" => "منطقه ۱۴ - قصر فیروزه",
            ],
            [
                "title_fa" => "منطقه ۱۴ - مینای جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - مینای شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۴ - نبرد",
            ],
            [
                "title_fa" => "منطقه ۱۴ - نبی اکرم (ص)",
            ],
            [
                "title_fa" => "منطقه ۱۴ - نیکنام",
            ],
            [
                "title_fa" => "منطقه ۱۴ - هفده شهریور",
            ],
            [
                "title_fa" => "منطقه ۱۵ - ابوذر",
            ],
            [
                "title_fa" => "منطقه ۱۵ - اتابک",
            ],
            [
                "title_fa" => "منطقه ۱۵ - اتوبان بعثت",
            ],
            [
                "title_fa" => "منطقه ۱۵ - افسریه",
            ],
            [
                "title_fa" => "منطقه ۱۵ - افسریه جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۵ - افسریه شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۵ - آهنگ",
            ],
            [
                "title_fa" => "منطقه ۱۵ - بیسیم",
            ],
            [
                "title_fa" => "منطقه ۱۵ - خاوران",
            ],
            [
                "title_fa" => "منطقه ۱۵ - خاورشهر",
            ],
            [
                "title_fa" => "منطقه ۱۵ - رضویه",
            ],
            [
                "title_fa" => "منطقه ۱۵ - شوش",
            ],
            [
                "title_fa" => "منطقه ۱۵ - شهید بروجردی",
            ],
            [
                "title_fa" => "منطقه ۱۵ - طیب",
            ],
            [
                "title_fa" => "منطقه ۱۵ - قیامدشت",
            ],
            [
                "title_fa" => "منطقه ۱۵ - کیانشهر جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۵ - کیانشهر شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۵ - مسعودیه",
            ],
            [
                "title_fa" => "منطقه ۱۵ - مشیریه",
            ],
            [
                "title_fa" => "منطقه ۱۵ - مطهری",
            ],
            [
                "title_fa" => "منطقه ۱۵ - مظاهری",
            ],
            [
                "title_fa" => "منطقه ۱۵ - مینابی",
            ],
            [
                "title_fa" => "منطقه ۱۵ - والفجر",
            ],
            [
                "title_fa" => "منطقه ۱۵ - هاشم‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱۶ - باغ آذری",
            ],
            [
                "title_fa" => "منطقه ۱۶ - تختی",
            ],
            [
                "title_fa" => "منطقه ۱۶ - جوادیه",
            ],
            [
                "title_fa" => "منطقه ۱۶ - چهارصد دستگاه",
            ],
            [
                "title_fa" => "منطقه ۱۶ - خزانه",
            ],
            [
                "title_fa" => "منطقه ۱۶ - راه‌آهن",
            ],
            [
                "title_fa" => "منطقه ۱۶ - رجایی",
            ],
            [
                "title_fa" => "منطقه ۱۶ - شهرک بعثت",
            ],
            [
                "title_fa" => "منطقه ۱۶ - علی‌آباد جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۶ - علی‌آباد شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۶ - نازی‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱۶ - هلال احمر",
            ],
            [
                "title_fa" => "منطقه ۱۶ - یاخچی‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱۷ - ابوذر",
            ],
            [
                "title_fa" => "منطقه ۱۷ - ابوذر شرقی",
            ],
            [
                "title_fa" => "منطقه ۱۷ - ابوذر غربی",
            ],
            [
                "title_fa" => "منطقه ۱۷ - امام‌زاده حسن (ع)",
            ],
            [
                "title_fa" => "منطقه ۱۷ - آذری",
            ],
            [
                "title_fa" => "منطقه ۱۷ - باغ خزانه",
            ],
            [
                "title_fa" => "منطقه ۱۷ - بلورسازی",
            ],
            [
                "title_fa" => "منطقه ۱۷ - جلیلی",
            ],
            [
                "title_fa" => "منطقه ۱۷ - زمزم",
            ],
            [
                "title_fa" => "منطقه ۱۷ - زهتابی",
            ],
            [
                "title_fa" => "منطقه ۱۷ - سجاد",
            ],
            [
                "title_fa" => "منطقه ۱۷ - قزوین",
            ],
            [
                "title_fa" => "منطقه ۱۷ - قلعه‌مرغی",
            ],
            [
                "title_fa" => "منطقه ۱۷ - گلچین",
            ],
            [
                "title_fa" => "منطقه ۱۷ - مقدم",
            ],
            [
                "title_fa" => "منطقه ۱۷ - میدان بهاران",
            ],
            [
                "title_fa" => "منطقه ۱۷ - وصفنارد",
            ],
            [
                "title_fa" => "منطقه ۱۷ - یافت‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱۸ - اتوبان آزادگان",
            ],
            [
                "title_fa" => "منطقه ۱۸ - امام خمینی (ره)",
            ],
            [
                "title_fa" => "منطقه ۱۸ - بهداشت",
            ],
            [
                "title_fa" => "منطقه ۱۸ - تولیدارو",
            ],
            [
                "title_fa" => "منطقه ۱۸ - خلیج فارس",
            ],
            [
                "title_fa" => "منطقه ۱۸ - خلیج فارس جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۸ - خلیج فارس شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۸ - رجائی",
            ],
            [
                "title_fa" => "منطقه ۱۸ - سعیدآباد",
            ],
            [
                "title_fa" => "منطقه ۱۸ - شادآباد",
            ],
            [
                "title_fa" => "منطقه ۱۸ - شمس‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱۸ - شهرک صاحب الزمان",
            ],
            [
                "title_fa" => "منطقه ۱۸ - شهرک ولیعصر",
            ],
            [
                "title_fa" => "منطقه ۱۸ - صاحب الزمان",
            ],
            [
                "title_fa" => "منطقه ۱۸ - صادقیه",
            ],
            [
                "title_fa" => "منطقه ۱۸ - فردوس",
            ],
            [
                "title_fa" => "منطقه ۱۸ - ولیعصر جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۸ - ولیعصر شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۸ - هفده شهریور",
            ],
            [
                "title_fa" => "منطقه ۱۸ - یافت‌آباد جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۸ - یافت‌آباد شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۹ - اسفندیاری و بستان",
            ],
            [
                "title_fa" => "منطقه ۱۹ - اسماعیل‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱۹ - بهمنیار",
            ],
            [
                "title_fa" => "منطقه ۱۹ - خانی‌آباد نو",
            ],
            [
                "title_fa" => "منطقه ۱۹ - خانی‌آباد نو جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۹ - خانی‌آباد نو شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۹ - دولت‌خواه",
            ],
            [
                "title_fa" => "منطقه ۱۹ - رسالت",
            ],
            [
                "title_fa" => "منطقه ۱۹ - شریعتی جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۹ - شریعتی شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۹ - شکوفه جنوبی",
            ],
            [
                "title_fa" => "منطقه ۱۹ - شکوفه شمالی",
            ],
            [
                "title_fa" => "منطقه ۱۹ - شهید کاظمی",
            ],
            [
                "title_fa" => "منطقه ۱۹ - عبدل‌آباد",
            ],
            [
                "title_fa" => "منطقه ۱۹ - نعمت‌آباد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - ۱۳ آبان",
            ],
            [
                "title_fa" => "منطقه ۲۰ - استخر",
            ],
            [
                "title_fa" => "منطقه ۲۰ - اقدسیه",
            ],
            [
                "title_fa" => "منطقه ۲۰ - امین‌آباد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - بهشتی",
            ],
            [
                "title_fa" => "منطقه ۲۰ - تقی‌آباد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - جوانمرد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - حمزه‌آباد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - دولت‌آباد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - دیلمان",
            ],
            [
                "title_fa" => "منطقه ۲۰ - سرتخت",
            ],
            [
                "title_fa" => "منطقه ۲۰ - شهادت",
            ],
            [
                "title_fa" => "منطقه ۲۰ - صفائیه",
            ],
            [
                "title_fa" => "منطقه ۲۰ - ظهیرآباد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - عباس‌آباد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - علائین",
            ],
            [
                "title_fa" => "منطقه ۲۰ - غیوری",
            ],
            [
                "title_fa" => "منطقه ۲۰ - فیروزآبادی",
            ],
            [
                "title_fa" => "منطقه ۲۰ - کهریزک",
            ],
            [
                "title_fa" => "منطقه ۲۰ - منصوریه",
            ],
            [
                "title_fa" => "منطقه ۲۰ - نظامی",
            ],
            [
                "title_fa" => "منطقه ۲۰ - نفرآباد",
            ],
            [
                "title_fa" => "منطقه ۲۰ - ولی‌آباد",
            ],
            [
                "title_fa" => "منطقه ۲۱ - اتوبان تهران کرج",
            ],
            [
                "title_fa" => "منطقه ۲۱ - باشگاه نفت",
            ],
            [
                "title_fa" => "منطقه ۲۱ - بزرگراه فتح",
            ],
            [
                "title_fa" => "منطقه ۲۱ - تهرانسر",
            ],
            [
                "title_fa" => "منطقه ۲۱ - تهرانسر شرقی",
            ],
            [
                "title_fa" => "منطقه ۲۱ - تهرانسر شمالی",
            ],
            [
                "title_fa" => "منطقه ۲۱ - تهرانسر غربی",
            ],
            [
                "title_fa" => "منطقه ۲۱ - تهرانسر مرکزی",
            ],
            [
                "title_fa" => "منطقه ۲۱ - چیتگر جنوبی",
            ],
            [
                "title_fa" => "منطقه ۲۱ - چیتگر شمالی",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک ۲۲ بهمن",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک استقلال",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک آزادی",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک پاسداران",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک دانشگاه",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک دانشگاه شریف",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک دریا",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک شهرداری",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک غزالی",
            ],
            [
                "title_fa" => "منطقه ۲۱ - شهرک فرهنگیان",
            ],
            [
                "title_fa" => "منطقه ۲۱ - وردآورد",
            ],
            [
                "title_fa" => "منطقه ۲۱ - ویلاشهر",
            ],
            [
                "title_fa" => "منطقه ۲۲ - امید",
            ],
            [
                "title_fa" => "منطقه ۲۲ - آزادشهر",
            ],
            [
                "title_fa" => "منطقه ۲۲ - پیکان‌شهر",
            ],
            [
                "title_fa" => "منطقه ۲۲ - دریاچه چیتگر",
            ],
            [
                "title_fa" => "منطقه ۲۲ - دژبان",
            ],
            [
                "title_fa" => "منطقه ۲۲ - دهکده المپیک",
            ],
            [
                "title_fa" => "منطقه ۲۲ - زیبادشت بالا",
            ],
            [
                "title_fa" => "منطقه ۲۲ - زیبادشت پائین",
            ],
            [
                "title_fa" => "منطقه ۲۲ - شریف",
            ],
            [
                "title_fa" => "منطقه ۲۲ - شهرک راه‌آهن",
            ],
            [
                "title_fa" => "منطقه ۲۲ - شهرک گلستان",
            ],
            [
                "title_fa" => "منطقه ۲۲ - شهید باقری",
            ],
            [
                "title_fa" => "منطقه ۲۲ - گلستان شرقی",
            ],
            [
                "title_fa" => "منطقه ۲۲ - گلستان غربی",
            ],
        ];

        $neighbourhoods = array_map(function ($key) {
            $key['type']         = "neighbourhood";
            $key['continent_id'] = '476';
            $key['country_id']   = '495';
            $key['province_id']  = '8';
            $key['city_id']      = '135';
            $key['language']     = "fa";
            $key['currency']     = "IRR";

            return $key;
        }, $neighbourhoods);

        return $neighbourhoods;
    }





}
