<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Project Laravel
Dit is mijn schoolproject voor Backend Web.

## Installatie

**1. Clone de repository**
```
git clone https://github.com/F0RD-P1N3S15/Project1-Laravel-09-01-2026.git
```

**2. Installeer Composer**
```
composer install
```

**3. Installeer NPM**
```
npm install
```

**4. .env-file**
```
cp .env.example .env 
php artisan key:generate
```

**5. Database migration & seeding**
```
php artisan migrate:fresh --seed
```

**6. Start the app**
```
npm run build
php artisan serve
```
*-> http://127.0.0.1:8000*

## De database seeder maakt automatisch deze informatie aan

**1. Admin account**

*Naam:* Admin

*Email:* admin@ehb.be

*Passwoord:* Password!321


**2. User account**

*Naam:* User1

*Email:* user1@ehb.be

*Passwoord:* Password!321

*---*

*Naam:* User2

*Email:* user2@ehb.be

*Passwoord:* Password!321


**3. FAQs**

*Titel:* Question1

*Info:* Answer, and information.

*Categorie:* category1

*---*

*Titel:* Question2

*Info:* Answer, and information.

*Categorie:* category2


**4. Categories**

*Titel:* category1

*---*

*Titel:* category2


**5. Contact forms**

*Titel:* Special Request

*Email:* user1@ehb.be

*Info:* information...

*Als de admin dit beantwoordt heeft:* The admin answer

*---*

*Titel:* Special Question

*Email:* user2@ehb.be

*Info:* information...

*Als de admin dit beantwoordt heeft:* The admin answer

*---*

*Titel:* Special Statement

*Email:* user1@ehb.be

*Info:* information...

*Als de admin dit beantwoordt heeft:* (geen)


**6. News**

*Titel:* (most-likely) Fake News!

*Info:* The amazing and shocking information...

*Img:* (geen)



## Extra features
Naast de minimumvereiste functionaliteiten, zijn er nog een paar extras.

**1.** Admins zien een overzicht van alle ingevulde contactformulieren in een admin-panel en kunnen via dit panel antwoorden op de berichten

**2.** Zoekbalk for users

**3.** Zoekbalk for faqs (heeft ook individuele pagina als u op een faq klikt)

**4.** Zoekbalk for news (heeft ook individuele pagina als u op een nieuwtje klikt)

**5.** De contact pagina toont de ingestuurde forms afhankelijk van de mail van de ingelogde user (een user kan alleen hun forms zien). Daarbij staat ook het antwoord van de admin als die ingevuld is. Een guest gaat hun forms niet kunnen zien tenzij die een account met de gegeven mail maakt.

## Bronvermelding (niet in volgorde van gebruik)

**1.** Ik kreeg ondersteuning van een medestudent genaamd Liam Stammeleer.

**2.** De laravel docs.

**3.** https://laravel.com/docs/13.x/controllers

**4.** File URLs: https://laravel.com/docs/13.x/filesystem#main-content

**5.** https://www.youtube.com/watch?v=cDEVWbz2PpQ

**6.** https://laravel.com/docs/10.x/starter-kits

**7.** https://filamentphp.com/docs/4.x/introduction/installation

**8.** https://www.w3schools.com/html/html_form_input_types.asp

**9.** https://www.w3schools.com/cssref/css3_pr_justify-content.php

**10.** https://www.w3schools.com/php/php_operators.asp

**11.** https://laravel.com/docs/13.x/requests#main-content

**12.** https://laravel.com/docs/13.x/eloquent#mass-assignment

**13.** https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax

**----------------------------------------------------------------------**

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
