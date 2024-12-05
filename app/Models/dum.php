use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('rooms', function (Blueprint $table) {
$table->id();
$table->string('room_number')->unique();
$table->string('name'); // e.g., Deluxe Suite, Standard Room
$table->text('description')->nullable();
$table->integer('capacity')->default(1); // Number of people the room can accommodate
$table->decimal('price_per_night', 10, 2); // Price per night
$table->enum('type', ['single', 'double', 'suite', 'family', 'deluxe'])->nullable();
$table->boolean('is_available')->default(true);
$table->integer('floor')->nullable();
$table->json('amenities')->nullable(); // e.g., Wi-Fi, AC, TV
$table->text('images')->nullable(); // URLs or paths to images
$table->string('view')->nullable(); // e.g., Sea View, Garden View
$table->decimal('size', 8, 2)->nullable(); // Size in square meters
$table->boolean('is_smoking_allowed')->default(false);
$table->boolean('has_accessibility_features')->default(false); // For disabled access
$table->timestamps();
$table->softDeletes(); // For tracking if the room is removed but not permanently deleted
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('rooms');
}
}