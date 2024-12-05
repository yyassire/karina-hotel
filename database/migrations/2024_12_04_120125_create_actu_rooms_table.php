<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActuRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actu_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->nullable();

            $table->string('name'); // e.g., Deluxe Suite, Standard Room
            $table->string('name_en')->nullable(); //done

            $table->text('description')->nullable();
            $table->text('description_en')->nullable(); //done

            $table->integer('capacity')->default(1); // Number of people the room can accommodate in total :done
            $table->decimal('price_per_night', 10, 2); // Price per night :done
            $table->enum('type', ['single', 'double', 'suite', 'family', 'deluxe', 'forest'])->nullable(); // Type of room :done
            $table->boolean('is_available')->default(true);
            $table->integer('floor')->nullable();
            $table->json('amenities')->nullable(); // e.g., Wi-Fi, AC, TV ?done
            $table->string('featured_image')->nullable();
            $table->json('images')->nullable(); // 
            $table->string('view')->nullable(); // e.g., Sea View, Garden View
            $table->decimal('size', 8, 2)->nullable(); // Size in square meters:done
            // $table->boolean('is_smoking_allowed')->default(false);
            // $table->boolean('has_accessibility_features')->default(false); // For disabled access
            $table->timestamps();
            $table->softDeletes(); // For tracking if the room is removed but not permanently deleted
            $table->json('various_rooms_numb')->nullable(); // number of rooms each room contian:done
            $table->json('various_bath_numb')->nullable(); // number of bath each room contian :done
            // add number of starts
            $table->integer('stars')->default(5);
            $table->boolean('preferred_room')->default(false)->nullable(); //done
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actu_rooms');
    }
}
