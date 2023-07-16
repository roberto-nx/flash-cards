<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->unsignedBigInteger('deck_id');
            $table->string('card1');
            $table->string('card2');
            $table->string('card3');
            $table->string('card4');
            $table->string('card5');
            $table->string('card6');
            $table->string('card7');
            $table->string('card8');
            $table->string('card9');
            $table->string('card10');
            $table->string('card11');
            $table->string('card12');
            $table->string('card13');
            $table->string('card14');
            $table->string('card15');
            $table->string('card16');
            $table->string('card17');
            $table->string('card18');
            $table->string('card19');
            $table->string('card20');
            $table->string('card21');
            $table->string('card22');
            $table->string('card23');
            $table->string('card24');
            $table->string('card25');
            $table->string('card26');
            $table->string('card27');
            $table->string('card28');
            $table->string('card29');
            $table->string('card30');
            $table->string('card31');
            $table->string('card32');
            $table->string('card33');
            $table->string('card34');
            $table->string('card35');
            $table->string('card36');
            $table->string('card37');
            $table->string('card38');
            $table->string('card39');
            $table->string('card40');
            $table->string('card41');
            $table->string('card42');
            $table->string('card43');
            $table->string('card44');
            $table->string('card45');
            $table->string('card46');
            $table->string('card47');
            $table->string('card48');
            $table->string('card49');
            $table->string('card50');
            $table->foreign('deck_id')->references('id')->on('deck');

        });
    }
       
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
