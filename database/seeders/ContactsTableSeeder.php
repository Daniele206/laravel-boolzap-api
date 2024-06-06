<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = config('contacts');

        foreach($contacts as $contact){
            $new_contact = new Contact();
            $new_contact->name = $contact['name'];
            $new_contact->img = $contact['img'];
            $new_contact->save();
        }
    }
}
