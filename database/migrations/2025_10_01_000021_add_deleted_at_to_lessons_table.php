<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToLessonsTable extends Migration
{
    // public function up()
    // {
    //     Schema::table('lessons', function (Blueprint $table) {
    //         $table->softDeletes()->after('updated_at');
    //     });
    // }

    // public function down()
    // {
    //     Schema::table('lessons', function (Blueprint $table) {
    //         $table->dropSoftDeletes();
    //     });
    // }
}