<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nguoi_choi_id');
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
            $table->integer('so_cau');
            $table->string('diem');
            $table->string('ngay_gio');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luot_choi');
    }
}
