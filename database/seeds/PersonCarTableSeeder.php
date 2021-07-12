<?php

use Illuminate\Database\Seeder;

class PersonCarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = file_get_contents("/var/www/taskApp/AppTask/public/users.txt");
      $json = json_decode($data, true);

      for ($i=0; $i<count($json); $i++){

        if ($json[$i]['car'] == 'NULL'){
          $car = DB::table('cars')->where('name', 'NULL')->first();
          $id = $car->id;
          DB::table('car_person')->insert([
            'person_id' => $i+1,
            'car_id' => $id,
          ]);
        }
        else{
          $car = DB::table('cars')->where('name', $json[$i]['car'])->first();
          $id = $car->id;
          DB::table('car_person')->insert([
            'person_id' => $i+1,
            'car_id' => $id,
          ]);
        }
      }
    }
}
