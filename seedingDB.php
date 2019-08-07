How to seed data...
	php artisan make:factory PersonFactory
	then add data to the factory.....
		user App\Person;
		'name'=> $faker->name,
		'body'=> $faker->body
	php artisan make:seeder PersonTableSeeder
		user App\Person;
		factory(Person::class,50)->create();
	Add following Code to the Databaseseeder.php
		$this->call(PersonsTableSeeder::class);
	
	Then run the following commands........
		composer dump-autoload
		php artisan db:seed
-----------------------------------------------------------

