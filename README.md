# laravel-tall-blog-1753489850446

A complete Laravel 11 TALL stack application with Filament admin panel.

## Stack

- **T**ailwind CSS - Utility-first CSS framework
- **A**lpine.js - Lightweight JavaScript framework  
- **L**aravel 11 - PHP web application framework
- **L**ivewire 3 - Dynamic Laravel components

## Additional Features

- Filament 3 - Beautiful admin panel
- Authentication with Laravel Breeze
- Example Models (User, Post, Category)
- Database migrations for mysql
- PSR-12 coding standards

## Installation

1. Install dependencies:
```bash
composer install
npm install
```

2. Copy environment file:
```bash
cp .env.example .env
```

3. Generate application key:
```bash
php artisan key:generate
```

4. Configure your database in `.env`

5. Run migrations:
```bash
php artisan migrate
```

6. Build assets:
```bash
npm run dev
```

7. Start the development server:
```bash
php artisan serve
```

## Admin Panel

Access the Filament admin panel at `/admin` after creating an admin user:

```bash
php artisan make:filament-user
```

## File Structure

- `app/Models/` - Eloquent models
- `app/Http/Controllers/` - HTTP controllers  
- `app/Livewire/` - Livewire components
- `app/Filament/Resources/` - Filament admin resources
- `resources/views/` - Blade templates
- `database/migrations/` - Database migrations
- `routes/` - Route definitions

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
