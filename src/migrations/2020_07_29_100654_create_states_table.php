<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('states')) {
            Schema::create('states', function (Blueprint $table) {
                $table->id();
                $table->string('ip');
                $table->string('visit');
                $table->integer('id_post');
                $table->timestamps();
            });
        }else{
            if (!Schema::hasColumn('states', 'visit')) {
                Schema::table('states', function (Blueprint $table) {
                    $table->string('visit');
                });
            }
            if (!Schema::hasColumn('states', 'ip')) {
                Schema::table('states', function (Blueprint $table) {
                    $table->string('ip');
                });
            }
            if (!Schema::hasColumn('states', 'id_post')) {
                Schema::table('states', function (Blueprint $table) {
                    $table->string('id_post');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
