<?php

use Illuminate\Database\Seeder;

class CompanyPersonTableSeeder extends Seeder
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
        $company = DB::table('companies')->where('name', $json[$i]['company']['name'])->first();
        $id = $company->id;
        DB::table('company_person')->insert([
          'person_id' => $i+1,
          'company_id' => $id,
        ]);
      }
    }
}
