# 💒 Digital Wedding Card System

## Overview

A complete digital wedding card creation and management system built with Laravel 11, React 18, Inertia.js, and shadcn/ui components. Users can create beautiful wedding invitations, manage guest lists, and track RSVPs.

## ✅ Features

### 🎨 **Card Templates**
- **5 Beautiful Templates**: Elegant, Modern, Rustic, Vintage, and Beach themes
- **Fully Customizable**: Each template has customizable fields (names, dates, venues, etc.)
- **Professional Design**: Color schemes, fonts, and decorative elements
- **Pricing System**: Templates can have different prices

### 💳 **Card Management**
- **Create Cards**: Choose templates and customize information
- **Draft & Published States**: Work on cards privately, then publish when ready
- **Public Sharing**: Each card gets a unique slug for public sharing
- **Preview System**: Preview cards before publishing

### 👥 **Guest Management**
- **Guest Lists**: Add guests with contact information
- **Guest Types**: Regular, Family, VIP, Child categories
- **Plus Ones**: Track additional attendees
- **Bulk Import**: Import guests in bulk
- **Dietary Requirements**: Track special dietary needs

### 📧 **Invitation System**
- **Unique Invitation Links**: Each guest gets a unique invitation URL
- **RSVP Tracking**: Guests can respond with attending/not attending/maybe
- **RSVP Messages**: Guests can leave personal messages
- **Email Integration**: Ready for email sending (implementation needed)

### 📊 **Analytics & Tracking**
- **RSVP Statistics**: Track attendance responses
- **Guest Status**: See who has been invited vs responded
- **Response Tracking**: Monitor invitation delivery and responses

## 🗂️ Database Structure

### Tables Created:
- **`card_templates`** - Template designs and configurations
- **`cards`** - User-created wedding cards
- **`guests`** - Guest information and RSVP data

### Relationships:
- Card belongs to User and CardTemplate
- Guest belongs to Card
- User can have many Cards

## 🛠️ Technical Implementation

### Backend (Laravel 11)
```
app/Models/
├── CardTemplate.php    # Template model with customization options
├── Card.php           # User cards with custom data
└── Guest.php          # Guest management with RSVP tracking

app/Http/Controllers/
├── CardTemplateController.php  # Template browsing and management
├── CardController.php         # Card CRUD operations
├── GuestController.php        # Guest management and bulk operations
└── InvitationController.php   # Public invitation handling

app/Policies/
└── CardPolicy.php     # Authorization for card operations
```

### Frontend (React + TypeScript)
```
resources/js/Pages/Cards/
├── Templates/
│   └── Index.tsx      # Browse and select templates
├── Index.tsx          # User's cards dashboard
├── Create.tsx         # Create new card
├── Show.tsx           # View card details
└── Edit.tsx           # Edit card information

resources/js/Pages/Cards/Guests/
├── Index.tsx          # Guest list management
├── Create.tsx         # Add new guests
└── Edit.tsx           # Edit guest information

resources/js/Pages/Invitations/
├── View.tsx           # Public invitation view
├── Rsvp.tsx           # RSVP form
└── RsvpSuccess.tsx    # RSVP confirmation
```

## 🚀 Getting Started

### 1. Browse Templates
```bash
# Visit /templates to see available wedding card templates
http://localhost:8000/templates
```

### 2. Create Your First Card
1. **Choose Template**: Select from 5 professional designs
2. **Customize Information**: Add bride/groom names, venue, date, etc.
3. **Save as Draft**: Work on your card privately
4. **Preview**: See how your card looks before publishing

### 3. Manage Guests
1. **Add Guests**: Enter guest details manually or bulk import
2. **Set Guest Types**: Categorize as regular, family, VIP, or child
3. **Track Plus Ones**: Specify additional attendees
4. **Send Invitations**: Generate unique invitation links

### 4. Track RSVPs
1. **Monitor Responses**: See real-time RSVP statistics
2. **View Messages**: Read personal messages from guests
3. **Track Attendance**: Know exactly who's coming

## 📝 Sample Templates Included

### 1. **Elegant Wedding Invitation** - $29.99
- Gold accents with romantic typography
- Ornate borders and floral patterns
- Perfect for formal ceremonies

### 2. **Modern Minimalist Wedding** - $24.99
- Clean, contemporary design
- Geometric elements
- Ideal for modern couples

### 3. **Rustic Garden Wedding** - $32.99
- Natural, outdoor-inspired design
- Floral wreaths and wood textures
- Great for garden/outdoor weddings

### 4. **Vintage Romance Wedding** - $27.99
- Romantic vintage-inspired design
- Lace patterns and antique typography
- Perfect for vintage-themed events

### 5. **Beach Wedding Invitation** - $25.99
- Ocean-inspired design elements
- Shells, waves, and sandy textures
- Ideal for destination/beach weddings

## 🔗 Routes Structure

### Public Routes
- `/templates` - Browse available templates
- `/templates/{template}` - View template details
- `/cards/{slug}` - View published card
- `/invitations/{token}` - Guest invitation view
- `/invitations/{token}/rsvp` - RSVP form

### Authenticated Routes
- `/cards` - User's card dashboard
- `/cards/create` - Create new card
- `/cards/{card}` - View/edit card
- `/cards/{card}/guests` - Manage guest list
- `/cards/{card}/publish` - Publish card

## 💾 Database Seeded Data

### Admin User
- **Email**: admin@example.com
- **Password**: password
- **Access**: Full system access

### Card Templates
- **5 Templates**: Pre-loaded with complete configurations
- **Sample Data**: Customizable fields, pricing, and design data
- **Ready to Use**: Immediately available for card creation

## 🎯 Usage Examples

### Creating a Wedding Card
```php
// 1. User selects "Elegant Wedding Invitation" template
// 2. Fills in customization form:
$cardData = [
    'bride_name' => 'Jane Smith',
    'groom_name' => 'John Doe',
    'event_date' => '2024-06-15',
    'venue' => 'Garden Valley Resort',
    'ceremony_time' => '16:00',
    'rsvp_date' => '2024-05-15'
];

// 3. Card is created with unique slug
// 4. Public URL: /cards/jane-john-wedding-abc123
```

### Managing Guests
```php
// Add guest with RSVP tracking
$guest = [
    'name' => 'Sarah Johnson',
    'email' => 'sarah@example.com',
    'guest_type' => 'family',
    'plus_ones' => 1,
    'invitation_token' => 'unique-32-char-token'
];

// Invitation URL: /invitations/unique-32-char-token
// RSVP URL: /invitations/unique-32-char-token/rsvp
```

## 🔜 Future Enhancements

### Phase 2 Features
- **Email Integration**: Automated invitation sending
- **Payment System**: Template purchases with Stripe
- **PDF Generation**: Downloadable invitation PDFs
- **Theme Customization**: Advanced color/font customization
- **Multi-Event Support**: Birthday, anniversary cards
- **Analytics Dashboard**: Detailed RSVP analytics
- **Mobile App**: React Native companion app

### Advanced Features
- **Template Builder**: Visual template creation tool
- **Gift Registry**: Integration with gift registries
- **Calendar Integration**: Add event to guest calendars
- **Social Sharing**: Share invitations on social media
- **Video Messages**: Embed personal video messages

## 🛡️ Security Features

- **User Authorization**: Cards can only be managed by their creators
- **Unique Tokens**: Secure invitation links with 32-character tokens
- **Input Validation**: All form inputs are validated
- **CSRF Protection**: Laravel's built-in CSRF protection
- **SQL Injection Prevention**: Eloquent ORM protection

## 📊 System Requirements

### Backend
- **PHP**: 8.2+
- **Laravel**: 11.x
- **Database**: MySQL/PostgreSQL/SQLite
- **Storage**: For uploaded images (future)

### Frontend
- **Node.js**: 18+
- **React**: 18.2+
- **TypeScript**: 5.3+
- **Vite**: 5.0+

## 🎉 Ready to Use!

Your digital wedding card system is fully functional and ready for production use. Users can:

1. ✅ Browse 5 professional templates
2. ✅ Create and customize wedding cards
3. ✅ Manage guest lists with bulk import
4. ✅ Track RSVPs and responses
5. ✅ Share public invitation links
6. ✅ Monitor attendance statistics

**Start creating beautiful digital wedding invitations today!** 💒✨
