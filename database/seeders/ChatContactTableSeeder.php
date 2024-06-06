<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 9; $i++){
            $contact = Contact::where('id', '1')->first();
            $chat_id = Chat::where('id', $i)->first()->id;


            $contact->chats()->attach($chat_id);
        }

        for($i = 1; $i < 9; $i++){
            $contact = Contact::where('id', $i+1)->first();
            $chat_id = Chat::where('id', $i)->first()->id;


            $contact->chats()->attach($chat_id);
        }
    }
}
