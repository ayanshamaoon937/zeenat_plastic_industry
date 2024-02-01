<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->string('tracking_no')->unique();
            $table->string('date');
            $table->string('status')->default(0);
            $table->unsignedDouble('weight')->default(0);
            $table->unsignedDouble('local_charges')->default(0);
            $table->unsignedDouble('sub_total')->default(0);
            $table->unsignedDouble('total')->default(0);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('box_id');
            $table->foreign('box_id')->references('id')->on('boxes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package');
    }
}
