<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertUserOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::transaction(function() {
            $id = 1;
            DB::table('users')
                ->where('id', '=', $id)
                ->update(['name' => 'João Vitor Felipe Ribeiro', 'email' => 'jvitorfr@outlook.com']);

            DB::table('owner')
                ->insert(['name' => 'jvitorfr', 'user_id' => $id]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
