<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
            $table->string('status', 20)->default('pending');
            $table->bigInteger('approved_by')->nullable();
            $table->string('role', 100)->nullable();
            $table->string('reject_reason', 1000)->nullable();
            $table->foreignId('lesson_id')->nullable()->constrained('lessons')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}