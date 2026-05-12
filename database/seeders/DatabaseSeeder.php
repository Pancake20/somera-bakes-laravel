<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Testimonial;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@somerabakes.com'],
            [
                'name' => 'Soméra Admin',
                'password' => Hash::make('SomeraSecure2026!')
            ]
        );
 
        // Default Settings
        $settings = [
            'site_title' => 'Soméra Bakes — Artisanal Bakery',
            'whatsapp_number' => '6285924950713',
            'whatsapp_message_en' => 'Hello Soméra Bakes, I want to order',
            'whatsapp_message_id' => 'Halo Soméra Bakes, saya ingin pesan',
            'hero_title_en' => 'Let Soméra handle your sweet cravings.',
            'hero_title_id' => 'Biar Soméra manjakan lidah manismu.',
            'hero_desc_en' => 'Artisanal baking adapted to your sophisticated palate. Handcrafted daily with premium stoneground grains, wild-fermented yeast, and a whole lot of love.',
            'hero_desc_id' => 'Panggangan artisanal yang disesuaikan dengan selera tinggi Anda. Dibuat langsung setiap hari dengan biji-bijian giling premium, ragi fermentasi liar, dan penuh cinta.',
            'footer_text_en' => 'Elevating the everyday with exquisite baking creations. A symphony of flavor in every bite.',
            'footer_text_id' => 'Meningkatkan hari-hari biasa dengan kreasi panggangan yang istimewa. Simfoni rasa di setiap gigitan.'
        ];
 
        foreach ($settings as $key => $val) {
            Setting::updateOrCreate(['key' => $key], ['value' => $val]);
        }

        // Seed Products
        $products = [
            [
                'title_en' => 'Choco Peanut Cookies',
                'title_id' => 'Kue Kacang Cokelat',
                'price' => 'Rp 35.000',
                'description_en' => 'Melt-in-your-mouth peanut cookies infused with luxury dark chocolate chips. Perfectly crunchy.',
                'description_id' => 'Kue kacang lumer di mulut yang dipadukan dengan kepingan cokelat hitam mewah. Sangat renyah.',
                'image' => 'assets/f599ca1e-0a32-4701-971e-5fd30516d1a4.jpg',
                'is_bestseller' => true,
                'sort_order' => 1
            ],
            [
                'title_en' => 'Signature Nastar',
                'title_id' => 'Nastar Khas',
                'price' => 'Rp 65.000',
                'description_en' => 'Butter heaven! Our nastar melts completely on the tongue. Premium pineapple jam inside.',
                'description_id' => 'Surga mentega! Nastar kami meleleh sepenuhnya di lidah. Selai nanas premium di dalam.',
                'image' => 'assets/b5a2e8fc-e388-48ba-819c-dec1ec4b97d8.jpg',
                'is_bestseller' => true,
                'sort_order' => 2
            ],
            [
                'title_en' => 'Floss Roll Bread',
                'title_id' => 'Roti Gulung Abon',
                'price' => 'Rp 25.000',
                'description_en' => 'Our Floss Roll Bread (Roti Abon) is a symphony of sweet, savory, and rich textures coated with rich savory floss.',
                'description_id' => 'Roti Gulung Abon kami adalah simfoni tekstur manis, gurih, dan kaya yang dilapisi dengan abon gurih.',
                'image' => 'assets/830a875e-3b60-42df-a54d-e1f84b83b733.jpg',
                'is_bestseller' => true,
                'sort_order' => 3
            ],
            [
                'title_en' => 'Sweet Jam Bread',
                'title_id' => 'Roti Selai Manis',
                'price' => 'Rp 15.000',
                'description_en' => 'Traditional sweet dough buns, golden-glazed and packed with housemade organic strawberry jam.',
                'description_id' => 'Roti adonan manis tradisional, berlapis kilau keemasan dan diisi dengan selai stroberi organik buatan sendiri.',
                'image' => 'assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg',
                'is_bestseller' => true,
                'sort_order' => 4
            ],
            [
                'title_en' => 'Lidah Kucing Cookies',
                'title_id' => 'Kue Lidah Kucing',
                'price' => 'Rp 45.000',
                'description_en' => 'Crisp, buttery, and paper-thin traditional cat-tongue cookies. Elegantly sweet.',
                'description_id' => 'Kue lidah kucing tradisional yang renyah, gurih mentega, dan setipis kertas. Manis elegan.',
                'image' => 'assets/4ae608d6-4c25-4165-96ee-c4c586505d77.jpg',
                'is_bestseller' => false,
                'sort_order' => 5
            ],
            [
                'title_en' => 'Spicy Mayo Sausage Bread',
                'title_id' => 'Roti Sosis Mayo Pedas',
                'price' => 'Rp 18.000',
                'description_en' => 'Soft artisanal bun topped with premium sausage, spicy mayo brush, and dried parsley.',
                'description_id' => 'Roti artisanal lembut dengan sosis premium, sapuan mayones pedas, dan peterseli kering.',
                'image' => 'assets/efd0b102-80cd-40d2-b042-089777059904.jpg',
                'is_bestseller' => false,
                'sort_order' => 6
            ]
        ];

        foreach ($products as $p) {
            Product::updateOrCreate(['title_en' => $p['title_en']], $p);
        }

        // Seed Testimonials
        $testimonials = [
            [
                'name' => 'Clara K.',
                'text_en' => '"The Sourdough and Choco cookies are absolute masterworks of flavor. The crust is perfectly crackled!"',
                'text_id' => '"Sourdough dan kukis Choco mereka benar-benar mahakarya rasa. Kulit luarnya sangat renyah sempurna!"',
                'image' => 'assets/f599ca1e-0a32-4701-971e-5fd30516d1a4.jpg'
            ],
            [
                'name' => 'Natalie A.',
                'text_en' => '"Butter heaven! Their Nastar melts completely on the tongue. It\'s a luxury taste in every bite."',
                'text_id' => '"Surga mentega! Nastar mereka meleleh sepenuhnya di lidah. Rasa mewah di setiap gigitan."',
                'image' => 'assets/a2c89631-e663-46fe-84e2-09670bb583a7.jpg'
            ],
            [
                'name' => 'Marcus B.',
                'text_en' => '"Hands down the best artisanal bakery in town. The Floss Roll Bread is completely legendary."',
                'text_id' => '"Tanpa diragukan lagi, toko roti artisanal terbaik di kota. Roti Gulung Abon mereka benar-benar legendaris."',
                'image' => 'assets/830a875e-3b60-42df-a54d-e1f84b83b733.jpg'
            ]
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['name' => $t['name']], $t);
        }
    }
}

