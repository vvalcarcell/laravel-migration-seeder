<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->char('package_name', 200);
            $table->char('destination', 200);
            $table->char('type', 200);
            $table->text('description');
            $table->double('price', 8, 2); 
            $table->unsignedTinyInteger('days_num');
            $table->char('departure_city', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->dropColumn('package_name');
            $table->dropColumn('destination');
            $table->dropColumn('type');
            $table->dropColumn('description');
            $table->dropColumn('price');
            $table->dropColumn('days_num');
            $table->dropColumn('departure_city');
        });
    }
}
