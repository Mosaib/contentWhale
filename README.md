# Content Whale Backend Setup

## Links
- **YouTube Demo:** [Watch here](https://youtu.be/0diMBjWT4FY)  
- **Live Demo:** [View live site](https://content-whale-ten.vercel.app/)  
- **Frontend Repository:** [Frontend GitHub](https://github.com/Mosaib/content-whale)
- 
## Prerequisites

Make sure the following are installed and running:

- **MySQL** (or your preferred database)
- **Apache / XAMPP / Laravel Valet** (web server)
- **PHP & Composer**

---

## Steps to Run Backend

1. Make sure **MySQL** and **Apache** are running.

2. Navigate to your backend project directory:

```bash
cd contentWhale

3. Start the Laravel server:
php artisan serve

4. Run migrations to create database tables:
php artisan migrate

5. Seed the database with sample data:
php artisan db:seed --class=TestimonialSeeder
