<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->mediumText('description');
            $table->foreignId('purpose_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('state_id')->constrained()->onDelete('cascade');
            $table->foreignId('district_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->foreignId('location_area_id')->constrained()->onDelete('cascade');
            $table->string('landmark');
            $table->string('iframe');
            $table->string('total_area');
            $table->foreignId('measurement_area_id')->constrained()->onDelete('cascade');
            $table->string('built_up_area');
            $table->string('road_access_width');
            $table->foreignId('road_access_id')->constrained()->onDelete('cascade');
            $table->foreignId('property_facing_id')->constrained()->onDelete('cascade');
            $table->foreignId('road_type_id')->constrained()->onDelete('cascade');
            $table->string('built_year');
            $table->string('calender_type');
            $table->foreignId('month_id')->constrained()->onDelete('cascade');
            $table->foreignId('furnishing_id')->constrained()->onDelete('cascade');
            $table->string('kitchen');
            $table->string('dining_room');
            $table->string('bed_room');
            $table->string('bath_room');
            $table->string('hall');
            $table->string('total_floor');
            $table->string('parking');
            $table->foreignId('amenity_id')->constrained()->onDelete('cascade');
            $table->foreignId('ownership_type_id')->constrained()->onDelete('cascade');
            $table->binary('media');
            $table->string('price');
            $table->string('currency');
            $table->foreignId('price_on_id')->constrained()->onDelete('cascade');
            $table->boolean('status_id')->default(false);
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
        Schema::dropIfExists('properties');
    }
}
