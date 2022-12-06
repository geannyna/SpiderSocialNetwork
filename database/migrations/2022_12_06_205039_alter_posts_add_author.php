<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creamos el campo id que va ha relacionarse con la tabla user(user_id)
        Schema::table('posts', function(Blueprint $table){
            $table->foreignId('user_id')
                  ->after('img')
                  ->default(1)
                  ->nullable(true)
                  ->constrained('users')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('posts',function(Blueprint $table){
            $table->dropColumn('user_id');
        });
    }
};
