<?php


use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
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
        if ($json[$i]['car'] == '') $car = "NULL";
        else $car = $json[$i]['car'];

        DB::table('people')->insert([
            'name' => $json[$i]['name'],
            'email' => $json[$i]['email'],
            'address_id' => $i+1,
            'salary' => $json[$i]['salary'],
        ]);
      }
    }
}
