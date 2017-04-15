<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'phone' => $faker->phone,
        'gender' => 1,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// Temp User
$factory->define(App\TmpUser::class,function (Faker\Generator $faker){
	return [
		'phone' => $faker->randomNumber(9),
		'dev_id' => $faker->randomNumber(8),
		'code' => $faker->randomNumber(4),
		'last_name' => $faker->randomNumber(4),
		'first_name' => $faker->randomNumber(4),
		'email' => $faker->randomNumber(4),
		'dev_token' => $faker->randomNumber(4),
		'end_time' => date(strtotime("now+1hour")),

	];

});


// Real User
$factory->define(App\AppUser::class,function (Faker\Generator $faker){
	return [
		'first_name' => $faker->name,
		'last_name' => $faker->name,
		'email' => $faker->safeEmail,
		'phone' => $faker->randomNumber(9),
		'dev_id' => $faker->randomNumber(8),
		'dev_token' => $faker->randomNumber(8),

	];

});


// Customer User
$factory->define(App\Customer::class,function (Faker\Generator $faker){
	return [
		'name' => $faker->name,
	];

});

// Driver User
$factory->define(App\Driver::class,function (Faker\Generator $faker){
	return [
		'driver_licence_no' => $faker->name,
		'driver_licence_expire_date' => $faker->name,
		'image' => $faker->name,
	];

});

// Order Factory

$factory->define(App\Order::class,function (Faker\Generator $faker){
	return [
		'place_from_name' => $faker->name,
		'place_to_name' => $faker->name,
		'place_from_lat' => $faker->name,
		'place_from_lng' => $faker->name,
		'place_to_lat' => $faker->name,
		'place_to_lng' => $faker->name,
		// 'place_to_lng' => $faker->name,
		'distance_m' => $faker->randomNumber(2),
		'distance_k' => $faker->name,
		'price_total' => 120,
		'price_distance_k_first' => 3,
		'price_first' => 30,
		'price_galon' => 5000,
		'steps' => 5000,
		'st'=>'Created',
		'order_type_id'=>function(){
			return factory(\App\OrderType::class)->create()->id;
		},
		'transportation_id'=>function(){
			return factory(\App\Transportation::class)->create()->id;
		},
	];

});


// Order Type
$factory->define(App\OrderType::class,function (Faker\Generator $faker){
	return [
		'name'=>$faker->name
	];

});


// Transportation

$factory->define(App\Transportation::class,function (Faker\Generator $faker){
	return [
		'name'=>'taxi'
	];

});

// Setting Panel

$factory->define(App\Setting::class,function (Faker\Generator $faker){
	return [
		'name'=>'price 1 km',
		'name_id'=>'price_one_km',
		'value'=>'30',
		'type'=>'integer'
	];

});