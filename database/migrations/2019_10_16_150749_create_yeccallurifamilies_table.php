<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYeccallurifamiliesTable extends Migration
{
    public function up()
    {
        Schema::create('yeccallurifamilies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('position');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('yeccallurifamilies');
    }
}
