<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conversation;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conversation::create([
            'title' => 'Conversation 1',
            'message' => 'This is the first conversation.',
        ]);

        Conversation::create([
            'title' => 'Conversation 2',
            'message' => 'This is the second conversation.',
        ]);

        // Ajoutez d'autres données de conversation au besoin
    }
}
