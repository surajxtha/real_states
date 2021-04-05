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
            $table->string('city');
            $table->string('location_area')->nullable();
            $table->string('landmark')->nullable();
            $table->string('iframe');
            $table->string('total_area');
            $table->foreignId('measurement_area_id')->constrained()->onDelete('cascade');
            $table->string('built_up_area');
            $table->string('road_access_width');
            $table->foreignId('property_facing_id')->constrained()->onDelete('cascade');
            $table->foreignId('road_type_id')->constrained()->onDelete('cascade');
            $table->string('built_year');
            $table->foreignId('month_id')->constrained()->onDelete('cascade');
            $table->foreignId('furnishing_id')->constrained()->onDelete('cascade');
            $table->string('kitchen_count')->nullable();
            $table->string('dining_room_count')->nullable();
            $table->string('bed_room_count')->nullable();
            $table->string('bath_room_count')->nullable();
            $table->string('hall_count')->nullable();
            $table->string('total_floor_count')->nullable();
            $table->string('parking');
            $table->foreignId('amenity_id')->constrained()->onDelete('cascade');
            $table->foreignId('ownership_type_id')->constrained()->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('price');
            $table->foreignId('price_on_id')->constrained()->onDelete('cascade');
            $table->boolean('status')->constrained()->default(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
