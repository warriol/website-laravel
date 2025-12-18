# Website Laravel

A modern Laravel-based website project, migrated from a custom PHP application (https://github.com/warriol/website).

This project provides a complete Laravel 10 setup with authentication, database migrations, Blade views, routing, and static asset management.

## Features

- ✅ Laravel 10 Framework
- ✅ User Authentication System (Login, Register, Dashboard)
- ✅ Blade Templating Engine with Layouts
- ✅ Routing Configuration (Web & API)
- ✅ Database Migrations (Users, Posts, Categories)
- ✅ Eloquent ORM Models with Relationships
- ✅ Modern Asset Pipeline (Vite)
- ✅ Responsive CSS Styling
- ✅ Contact Form with Validation
- ✅ Flash Messages Support

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL/PostgreSQL/SQLite
- Node.js & NPM (for asset compilation)

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/warriol/website-laravel.git
cd website-laravel
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install JavaScript dependencies

```bash
npm install
```

### 4. Environment Configuration

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Generate an application key:

```bash
php artisan key:generate
```

### 5. Database Configuration

Edit your `.env` file and configure your database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

For SQLite (simpler for development):

```env
DB_CONNECTION=sqlite
# DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD can be commented out
```

If using SQLite, create the database file:

```bash
touch database/database.sqlite
```

### 6. Run Migrations

Create the database tables:

```bash
php artisan migrate
```

### 7. Compile Assets

Build the CSS and JavaScript assets:

```bash
npm run build
```

For development with hot reload:

```bash
npm run dev
```

### 8. Start the Development Server

```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

## Project Structure

```
website-laravel/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/           # Authentication controllers
│   │       ├── HomeController.php
│   │       ├── AboutController.php
│   │       └── ContactController.php
│   └── Models/
│       ├── User.php
│       ├── Post.php
│       └── Category.php
├── database/
│   └── migrations/             # Database migration files
├── public/                     # Public assets (compiled CSS/JS)
├── resources/
│   ├── css/
│   │   └── app.css            # Main stylesheet
│   ├── js/
│   │   └── app.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php  # Main layout
│       ├── auth/              # Authentication views
│       ├── home.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
├── routes/
│   ├── web.php                # Web routes
│   └── api.php                # API routes
└── storage/                   # Logs, cache, uploads
```

## Available Routes

### Public Routes
- `GET /` - Home page
- `GET /about` - About page
- `GET /contact` - Contact page
- `POST /contact` - Submit contact form

### Authentication Routes
- `GET /login` - Login form
- `POST /login` - Process login
- `GET /register` - Registration form
- `POST /register` - Process registration
- `POST /logout` - Logout

### Protected Routes (Requires Authentication)
- `GET /dashboard` - User dashboard

## Database Models

### User
Default Laravel user model with authentication support.

### Post
Blog post model with the following fields:
- title, slug, excerpt, content
- user_id (author), category_id
- status (draft/published)
- published_at timestamp

### Category
Category model for organizing posts:
- name, slug, description

## Authentication System

The project includes a custom authentication system with:
- User registration with validation
- Login with remember me functionality
- Protected dashboard area
- Logout functionality
- Session management

## Asset Management

The project uses Vite for asset compilation. Assets are located in:
- `resources/css/app.css` - Main stylesheet
- `resources/js/app.js` - Main JavaScript file

To compile assets:
```bash
npm run build        # Production build
npm run dev          # Development build with watch
```

## Customization

### Adding New Routes
Edit `routes/web.php`:

```php
Route::get('/your-route', [YourController::class, 'method'])->name('route.name');
```

### Creating New Controllers
```bash
php artisan make:controller YourController
```

### Creating New Models
```bash
php artisan make:model YourModel -m  # -m creates migration
```

### Creating New Migrations
```bash
php artisan make:migration create_your_table
```

### Creating New Views
Create Blade files in `resources/views/` with `.blade.php` extension.

## Testing

Run the test suite:

```bash
php artisan test
```

## Production Deployment

### 1. Optimize the application

```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build
```

### 2. Set proper permissions

```bash
chmod -R 755 storage bootstrap/cache
```

### 3. Configure your web server

Point your web server document root to the `public` directory.

#### Nginx Configuration Example:
```nginx
server {
    listen 80;
    server_name your-domain.com;
    root /path/to/website-laravel/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### 4. Environment Configuration

Ensure `.env` is properly configured for production:
- Set `APP_ENV=production`
- Set `APP_DEBUG=false`
- Use a strong `APP_KEY`
- Configure proper database credentials
- Set up mail driver for contact forms

## Security Considerations

- Always keep Laravel and dependencies updated
- Use HTTPS in production
- Protect `.env` file (never commit to version control)
- Enable CSRF protection (enabled by default)
- Use strong passwords
- Implement rate limiting for authentication

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the MIT license.

## Support

For issues and questions, please open an issue in the GitHub repository.

## Credits

- Original custom PHP website: https://github.com/warriol/website
- Laravel Framework: https://laravel.com
- Built by: warriol
