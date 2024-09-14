
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key (id) column
            $table->string('name'); // Creates a VARCHAR(255) column for name
            $table->string('email'); // Creates a VARCHAR(255) column for email
            $table->string('password'); // Creates a VARCHAR(255) column for password
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP')); // Creates a timestamp for created_at with current timestamp default
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')); // Creates a timestamp for updated_at with current timestamp default on update
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
