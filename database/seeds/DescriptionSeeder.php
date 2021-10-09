<?php

use App\Models\Description;
use Illuminate\Database\Seeder;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = new Description();
        $description->name = 'partner';
        $description->detail = 'empty';
        $description->save();

        $description = new Description();
        $description->name = 'ecosystem';
        $description->detail = 'empty';
        $description->save();

        $description = new Description();
        $description->name = 'contact';
        $description->detail = 'empty';
        $description->save();

        $description = new Description();
        $description->name = 'about';
        $description->detail = 'empty';
        $description->save();

    }
}
