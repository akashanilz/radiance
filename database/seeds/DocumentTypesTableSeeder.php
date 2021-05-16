<?php

use Illuminate\Database\Seeder;
use App\Models\DocumentType;

class DocumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = ['Adhar card', 'PAN card', 'Passport', 'Light Bill'];

        foreach ($input as $value) {
            DocumentType::create(['name' => $value]);
        }
    }
}
