<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

/*
* This creates a heroes table with some defined columns.
* Run this migration by running 'php artisan migrate'
*
* Which database does it write to? Good question. You can tell 
* Laravel which database (and credentials) to use in your .env file
*
* You will need to manually create your database
*/

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('weapon');
        });

        // Create some heroes!
        DB::table('heroes')->insert(
            array(
                array('name'        => 'Captain America', 
                      'description' => 'Vowing to serve his country any way he could, young Steve Rogers took the super soldier serum to become America\'s one-man army. Fighting for the red, white and blue for over 60 years, Captain America is the living, breathing symbol of freedom and liberty.',
                      'weapon'      => 'Invulnerable shield',
                      'created_at'  => date('Y-m-d H:i:s', time())),
                array('name'        => 'Thor', 
                      'description' => 'As the Norse God of thunder and lightning, Thor wields one of the greatest weapons ever made, the enchanted hammer Mjolnir. While others have described Thor as an over-muscled, oafish imbecile, he\'s quite smart and compassionate. He\'s self-assured, and he would never, ever stop fighting for a worthwhile cause.',
                      'weapon'      => 'Enchanted hammer Mjolnir',
                      'created_at'  => date('Y-m-d H:i:s', time())),
                array('name'        => 'Hulk', 
                      'description' => 'Caught in a gamma bomb explosion while trying to save the life of a teenager, Dr. Bruce Banner was transformed into the incredibly powerful creature called the Hulk. An all too often misunderstood hero, the angrier the Hulk gets, the stronger the Hulk gets.',
                      'weapon'      => 'Extreme strength',
                      'created_at'  => date('Y-m-d H:i:s', time()))
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('heroes');
    }
}
