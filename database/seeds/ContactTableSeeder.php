<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contacts')->delete();
        $json = File::get("database/demo.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Contact::create(array(
                'id' => $obj->id,
                'isActive' => $obj->isActive,
                'age' => $obj->age,
                'eyeColor' => $obj->eyeColor,
                'name' => $obj->name,
                'gender' => $obj->gender,
                'company' => $obj->company,
                'email' => $obj->email,
                'phone' => $obj->phone,
                'address' => $obj->address,
            ));
        }
    }
}
