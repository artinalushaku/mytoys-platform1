<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('sub_category');
            $table->timestamps();
        });

        // Insert categories and subcategories
        $categories = [
            'Age 1-2' => [
                'Lodra per djem',
                'Lodra per vajza',
                'Lodra te buta',
            ],
            'Age 3-5' => [
                'Lodra per djem',
                'Lodra per vajza',
                'Lodra te buta',
            ],
            'Age 6-8' => [
                'Lodra per djem',
                'Lodra per vajza',
                'Lodra te buta',
            ],
            'Age 9-11' => [
                'Lodra per djem',
                'Lodra per vajza',
                'Lodra te buta',
            ],
            'Age 12+' => [
                'Lodra per djem',
                'Lodra per vajza',
                'Lodra te buta',
            ],
        ];

        foreach ($categories as $category => $subcategories) {
            foreach ($subcategories as $subcategory) {
                DB::table('toys')->insert([
                    'name' => $subcategory, // Assuming subcategory name is same as category name
                    'category' => $category,
                    'sub_category' => $subcategory,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toys');
    }
}
