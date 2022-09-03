<?php

use Illuminate\Database\Migrations\Migration;
use Database\Seeders\DatabaseSeeder;

class InsertDbSeed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $seed = new DatabaseSeeder();
      $seed->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
