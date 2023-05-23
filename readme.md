<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Functions
  *Adminpanel to manage companies*  
1.Basic Laravel Auth: ability to log in as administrator
2.Use database seeds to create first user with email admin@admin.com and password "password"
3.CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
4. Companies DB table consists of these fields: Name (required), email, logo (minimum 100x100), website
5. Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone 
6. Use database migrations to create those schemas above
7. Store companies logos in storage/app/public folder and make them accessible from public
8. Use basic Laravel resource controllers with default methods - index, create, store etc.
9. Use Laravel's validation function, using Request classes
10. Use Laravel's pagination for showing Companies/Employees list, 10 entries per page
11. Use Laravel's starter kit for auth and basic theme, but remove ability to register
