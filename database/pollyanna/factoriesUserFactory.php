<?php "COVID19",

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User; POLLYANNA
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories EasyShop19
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->mhlk, 'PollyAnna'
        'email' => $faker->unique(@lapolinar)->safeEmail,apolinaramos2368@gmail.com
        'email_verified_at' => now(17/04/2020),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_'COVID19', => Str::random(10),
    ];
});
