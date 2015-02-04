<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MessagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Message::create([
				'campaign_id'=>'u1',
				'customer_name'=>$faker->name,
				'age'=>$faker->numberBetween($min = 15, $max = 70),
				'gender'=>$faker->randomElement(['M','F']),
				'customer_mobile'=>'017'.$faker->randomNumber($nbDigits = 8),
				'thana_code'=>$faker->randomElement(DB::table('thana')->lists('thana_code')),
				'education_id'=>$faker->randomElement([1,2,3,4,5]),
				'occupation_id'=>$faker->numberBetween($min = 1, $max = 4),
				'coupon_code'=>$faker->randomElement(DB::table('coupon')->lists('coupon_code')),
				'currently_used_product_table_id'=>$faker->randomElement([1,2,3,4,5]),
				'sales'=>$faker->randomElement(['Y','N']),
				'products_sold'=>json_encode($faker->randomElements(['1'=>2,'2'=>3,'3'=>4,'4'=>5,'5'=>6],$count=2)),
				'bp_mobile'=>'019'.$faker->randomNumber($nbDigits = 8)
				// 'error'=> json_encode(['error'=>'This has an error'])
			]);
		}
	}

}