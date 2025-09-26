# Admin User Setup

## 📋 Admin User Details

An admin user has been created with the following credentials:

- **Email:** `admin@example.com`
- **Password:** `admin123`
- **Status:** Email verified
- **Name:** Administrator

## 🚀 Quick Start

1. **Access the application:**
   ```bash
   npm run dev        # Start frontend
   php artisan serve  # Start backend (in another terminal)
   ```

2. **Login as admin:**
   - Go to `/login`
   - Use email: `admin@example.com`
   - Use password: `admin123`

## 🔒 Security Recommendations

### ⚠️ **IMPORTANT: Change Default Password**

For security reasons, **immediately change the default password** after first login:

1. Login with default credentials
2. Go to Profile (`/profile`)
3. Update password in "Update Password" section
4. Use a strong, unique password

### 🔐 **Production Security**

For production environments:

1. **Change the default admin email** in the seeder before deployment
2. **Use environment variables** for admin credentials:
   ```php
   // In AdminUserSeeder.php
   'email' => env('ADMIN_EMAIL', 'admin@yourdomain.com'),
   'password' => Hash::make(env('ADMIN_PASSWORD', 'secure-random-password')),
   ```

3. **Add to .env file:**
   ```env
   ADMIN_EMAIL=your-admin@yourdomain.com
   ADMIN_PASSWORD=your-secure-password
   ```

## 🛠️ Seeder Commands

### Run Only Admin Seeder
```bash
php artisan db:seed --class=AdminUserSeeder
```

### Run All Seeders
```bash
php artisan db:seed
```

### Fresh Migration + Seeding
```bash
php artisan migrate:fresh --seed
```

## 📝 Additional Setup

### Adding More Admin Users
You can modify `database/seeders/AdminUserSeeder.php` to create multiple admin users:

```php
$admins = [
    [
        'name' => 'Super Admin',
        'email' => 'superadmin@example.com',
        'password' => Hash::make('secure-password-1'),
    ],
    [
        'name' => 'Admin User',
        'email' => 'admin@example.com', 
        'password' => Hash::make('secure-password-2'),
    ],
];

foreach ($admins as $admin) {
    if (!User::where('email', $admin['email'])->exists()) {
        User::create([
            ...$admin,
            'email_verified_at' => now(),
        ]);
    }
}
```

### Adding Admin Role System (Optional)
Consider adding a role system for better user management:

1. Create roles migration
2. Add role relationship to User model
3. Create admin middleware
4. Protect admin routes

## ✅ Verification

To verify the admin user was created correctly:

```bash
php artisan tinker
```

Then run:
```php
User::where('email', 'admin@example.com')->first();
```

This should return the admin user details.

---

**Note:** Remember to keep admin credentials secure and follow security best practices in production environments.
