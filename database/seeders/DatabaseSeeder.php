    <?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Setting;

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
    }
}
