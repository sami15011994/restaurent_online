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
        Schema::create('ordres', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->string('phone');
			$table->string('date');
			$table->string('time');
			$table->integer('meal_id');
			$table->string('qty')->defualt(0);
			$table->text('address');
			$table->string('status')->default('المراجعة تتم');
			$table-> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordres');
    }
};
