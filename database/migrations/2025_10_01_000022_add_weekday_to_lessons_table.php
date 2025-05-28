<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeekdayToLessonsTable extends Migration
{
    // public function up()
    // {
    //     Schema::table('lessons', function (Blueprint $table) {
    //         $table->foreignId('weekday_id')->nullable()->constrained('weekday')->onDelete('set null')->after('id');
    //     });
    // }

    // public function down()
    // {
    //     Schema::table('lessons', function (Blueprint $table) {
    //         $table->dropForeign(['weekday_id']);
    //         $table->dropColumn('weekday_id');
    //     });
    // }
}