<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
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
        DB::table('companies')->replace([
          'name' => $json[$i]['company']['name'],
        ]);
      }
    }
}
