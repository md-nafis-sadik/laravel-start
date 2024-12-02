<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// In your migration file (e.g., 2024_12_02_123456_create_employees_table.php)
public function up()
{
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('position');
        $table->decimal('salary', 10, 2);
        $table->string('image')->nullable(); // Image column
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('employees');
}
};
