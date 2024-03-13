# HolidayPlans

HolidayPlans is a Laravel API project that allows users to create, update, view (by ID), and delete holiday plans. It utilizes Laravel Passport for authentication, allowing users to generate a bearer token to access the CRUD operations securely.

## Getting Started

### Clone the Repository

```bash
git clone https://github.com/yourusername/holidayplans.git
```

### Running

After setting the .env, composer install, generate key, run migrations. Run 'php artisan serve' and you're able to test the routes.

### Generating Passport Client

```bash
php artisan passport:client
```

With 'client_id' and 'client_secret', you can generate the token that grant access to the routes (Remeber setting up your enviroments variables. ex: base_url).

## Postman Routes

Link to postman routes: https://www.postman.com/pedroemanuel42/workspace/holiday-plans/request/33510103-0f139e85-56dc-4041-88b8-8d84531923c9?tab=body

## Generating Token

After setting your enviroments variables, you can use the post route:

![image](https://github.com/pedroemanuel42/HolidayPlans/assets/99288851/f29371ed-82f4-4994-9d21-80386e25e8fb)

Then, you can use the other runes setting the 'access_token' into your enviroments variables as 'bearer_token'. Link to the video below.

https://www.youtube.com/watch?v=M_eQZcD_0ws







