<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chats = config('chats');

        foreach($chats as $i=>$chat){
            foreach($chat as $message){
                $new_message = new Message();
                $new_message->text = $message['text'];
                $new_message->date = $message['date'];
                $new_message->contact_id = $message['contact_id'];
                $new_message->chat_id = $i+1;
                $new_message->save();
            }
        }
    }
}
