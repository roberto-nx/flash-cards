<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\UserFactory ;
use App\Models\Deck;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deck>
 */
class DeckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
            return [
                'user_id' => User::factory(),
                 'title'=> fake()->text(),
                "description"=> fake()->text(),
                "card1"=> fake()->text(),
                "card2"=> fake()->text(),
                "card3"=> fake()->text(),
                "card4"=> fake()->text(),
                "card5"=> fake()->text(),
                "card6"=> fake()->text(),
                "card7"=> fake()->text(),
                "card8"=> fake()->text(),
                "card9"=> fake()->text(),
                "card10"=> fake()->text(),
                "card11"=> fake()->text(),
                "card12"=> fake()->text(),
                "card13"=> fake()->text(),
                "card14"=> fake()->text(),
                "card15"=> fake()->text(),
                "card16"=> fake()->text(),
                "card17"=> fake()->text(),
                "card18"=> fake()->text(),
                "card19"=> fake()->text(),
                "card20"=> fake()->text(),
                "card21"=> fake()->text(),
                "card22"=> fake()->text(),
                "card23"=> fake()->text(),
                "card24"=> fake()->text(),
                "card25"=> fake()->text(),
                "card26"=> fake()->text(),
                "card27"=> fake()->text(),
                "card28"=> fake()->text(),
                "card29"=> fake()->text(),
                "card30"=> fake()->text(),
                "card31"=> fake()->text(),
                "card32"=> fake()->text(),
                "card33"=> fake()->text(),
                "card34"=> fake()->text(),
                "card35"=> fake()->text(),
                "card36"=> fake()->text(),
                "card37"=> fake()->text(),
                "card38"=> fake()->text(),
                "card39"=> fake()->text(),
                "card40"=> fake()->text(),
                "card41"=> fake()->text(),
                "card42"=> fake()->text(),
                "card43"=> fake()->text(),
                "card44"=> fake()->text(),
                "card45"=> fake()->text(),
                "card46"=> fake()->text(),
                "card47"=> fake()->text(),
                "card48"=> fake()->text(),
                "card49"=> fake()->text(),
                "card50"=> fake()->text(),
    
            ];
        
    }
}
