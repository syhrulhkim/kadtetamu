<?php

namespace Database\Seeders;

use App\Models\CardTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                'name' => 'Elegant Wedding Invitation',
                'description' => 'A beautiful and elegant wedding invitation template with gold accents and romantic typography.',
                'category' => 'wedding',
                'price' => 29.99,
                'preview_image' => '/images/templates/elegant-wedding.jpg',
                'template_data' => [
                    'layout' => 'elegant',
                    'color_scheme' => [
                        'primary' => '#D4AF37',
                        'secondary' => '#FFFFFF',
                        'accent' => '#8B4513'
                    ],
                    'fonts' => [
                        'heading' => 'Great Vibes',
                        'body' => 'Playfair Display'
                    ],
                    'elements' => [
                        'border_style' => 'ornate',
                        'background_pattern' => 'subtle_floral',
                        'decorative_elements' => ['flourish', 'divider']
                    ]
                ],
                'customizable_fields' => [
                    'bride_name' => ['label' => 'Bride\'s Name', 'type' => 'text', 'required' => true],
                    'groom_name' => ['label' => 'Groom\'s Name', 'type' => 'text', 'required' => true],
                    'event_date' => ['label' => 'Wedding Date', 'type' => 'date', 'required' => true],
                    'venue' => ['label' => 'Venue', 'type' => 'text', 'required' => true],
                    'ceremony_time' => ['label' => 'Ceremony Time', 'type' => 'time', 'required' => true],
                    'reception_venue' => ['label' => 'Reception Venue', 'type' => 'text', 'required' => false],
                    'dress_code' => ['label' => 'Dress Code', 'type' => 'text', 'required' => false],
                    'rsvp_date' => ['label' => 'RSVP By Date', 'type' => 'date', 'required' => true],
                    'special_message' => ['label' => 'Special Message', 'type' => 'textarea', 'required' => false]
                ],
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Modern Minimalist Wedding',
                'description' => 'Clean, modern design with minimalist typography perfect for contemporary couples.',
                'category' => 'wedding',
                'price' => 24.99,
                'preview_image' => '/images/templates/modern-minimalist.jpg',
                'template_data' => [
                    'layout' => 'minimalist',
                    'color_scheme' => [
                        'primary' => '#2C3E50',
                        'secondary' => '#FFFFFF',
                        'accent' => '#E74C3C'
                    ],
                    'fonts' => [
                        'heading' => 'Montserrat',
                        'body' => 'Open Sans'
                    ],
                    'elements' => [
                        'border_style' => 'simple',
                        'background_pattern' => 'none',
                        'decorative_elements' => ['geometric_shapes']
                    ]
                ],
                'customizable_fields' => [
                    'bride_name' => ['label' => 'Bride\'s Name', 'type' => 'text', 'required' => true],
                    'groom_name' => ['label' => 'Groom\'s Name', 'type' => 'text', 'required' => true],
                    'event_date' => ['label' => 'Wedding Date', 'type' => 'date', 'required' => true],
                    'venue' => ['label' => 'Venue', 'type' => 'text', 'required' => true],
                    'ceremony_time' => ['label' => 'Ceremony Time', 'type' => 'time', 'required' => true],
                    'website_url' => ['label' => 'Wedding Website', 'type' => 'url', 'required' => false],
                    'rsvp_date' => ['label' => 'RSVP By Date', 'type' => 'date', 'required' => true]
                ],
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Rustic Garden Wedding',
                'description' => 'Beautiful rustic design with floral elements perfect for outdoor and garden weddings.',
                'category' => 'wedding',
                'price' => 32.99,
                'preview_image' => '/images/templates/rustic-garden.jpg',
                'template_data' => [
                    'layout' => 'rustic',
                    'color_scheme' => [
                        'primary' => '#8FBC8F',
                        'secondary' => '#F5F5DC',
                        'accent' => '#CD853F'
                    ],
                    'fonts' => [
                        'heading' => 'Dancing Script',
                        'body' => 'Crimson Text'
                    ],
                    'elements' => [
                        'border_style' => 'rustic',
                        'background_pattern' => 'wood_texture',
                        'decorative_elements' => ['floral_wreaths', 'leaves', 'branches']
                    ]
                ],
                'customizable_fields' => [
                    'bride_name' => ['label' => 'Bride\'s Name', 'type' => 'text', 'required' => true],
                    'groom_name' => ['label' => 'Groom\'s Name', 'type' => 'text', 'required' => true],
                    'event_date' => ['label' => 'Wedding Date', 'type' => 'date', 'required' => true],
                    'venue' => ['label' => 'Venue', 'type' => 'text', 'required' => true],
                    'ceremony_time' => ['label' => 'Ceremony Time', 'type' => 'time', 'required' => true],
                    'outdoor_note' => ['label' => 'Outdoor Event Note', 'type' => 'text', 'required' => false],
                    'directions' => ['label' => 'Directions', 'type' => 'textarea', 'required' => false],
                    'rsvp_date' => ['label' => 'RSVP By Date', 'type' => 'date', 'required' => true]
                ],
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Vintage Romance Wedding',
                'description' => 'Romantic vintage-inspired design with lace patterns and antique typography.',
                'category' => 'wedding',
                'price' => 27.99,
                'preview_image' => '/images/templates/vintage-romance.jpg',
                'template_data' => [
                    'layout' => 'vintage',
                    'color_scheme' => [
                        'primary' => '#DDA0DD',
                        'secondary' => '#FFF8DC',
                        'accent' => '#8B008B'
                    ],
                    'fonts' => [
                        'heading' => 'Pinyon Script',
                        'body' => 'Libre Baskerville'
                    ],
                    'elements' => [
                        'border_style' => 'vintage_lace',
                        'background_pattern' => 'damask',
                        'decorative_elements' => ['vintage_frames', 'roses', 'ribbons']
                    ]
                ],
                'customizable_fields' => [
                    'bride_name' => ['label' => 'Bride\'s Name', 'type' => 'text', 'required' => true],
                    'groom_name' => ['label' => 'Groom\'s Name', 'type' => 'text', 'required' => true],
                    'event_date' => ['label' => 'Wedding Date', 'type' => 'date', 'required' => true],
                    'venue' => ['label' => 'Venue', 'type' => 'text', 'required' => true],
                    'ceremony_time' => ['label' => 'Ceremony Time', 'type' => 'time', 'required' => true],
                    'reception_time' => ['label' => 'Reception Time', 'type' => 'time', 'required' => false],
                    'love_quote' => ['label' => 'Love Quote', 'type' => 'textarea', 'required' => false],
                    'rsvp_date' => ['label' => 'RSVP By Date', 'type' => 'date', 'required' => true]
                ],
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Beach Wedding Invitation',
                'description' => 'Perfect for destination and beach weddings with ocean-inspired design elements.',
                'category' => 'wedding',
                'price' => 25.99,
                'preview_image' => '/images/templates/beach-wedding.jpg',
                'template_data' => [
                    'layout' => 'beach',
                    'color_scheme' => [
                        'primary' => '#4682B4',
                        'secondary' => '#F0F8FF',
                        'accent' => '#FF7F50'
                    ],
                    'fonts' => [
                        'heading' => 'Amatic SC',
                        'body' => 'Source Sans Pro'
                    ],
                    'elements' => [
                        'border_style' => 'wave',
                        'background_pattern' => 'sand_texture',
                        'decorative_elements' => ['shells', 'starfish', 'waves']
                    ]
                ],
                'customizable_fields' => [
                    'bride_name' => ['label' => 'Bride\'s Name', 'type' => 'text', 'required' => true],
                    'groom_name' => ['label' => 'Groom\'s Name', 'type' => 'text', 'required' => true],
                    'event_date' => ['label' => 'Wedding Date', 'type' => 'date', 'required' => true],
                    'venue' => ['label' => 'Beach/Venue', 'type' => 'text', 'required' => true],
                    'ceremony_time' => ['label' => 'Ceremony Time', 'type' => 'time', 'required' => true],
                    'destination' => ['label' => 'Destination/Location', 'type' => 'text', 'required' => true],
                    'dress_code' => ['label' => 'Beach Attire Note', 'type' => 'text', 'required' => false],
                    'rsvp_date' => ['label' => 'RSVP By Date', 'type' => 'date', 'required' => true]
                ],
                'is_active' => true,
                'sort_order' => 5,
            ]
        ];

        foreach ($templates as $template) {
            CardTemplate::firstOrCreate(
                ['name' => $template['name']],
                $template
            );
        }

        $this->command->info('Card templates seeded successfully!');
    }
}
