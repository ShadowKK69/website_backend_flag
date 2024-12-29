<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id('id');
            $table->year('year');
            $table->string('license_plate', 20)->unique();
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->string('version', 50);
            $table->string('submodel', 50);
            $table->string('color', 20);
            $table->string('vehicle_logo');
            $table->unsignedTinyInteger('doors');
            $table->string('engine_power', 20);
            $table->enum('traction', ['FWD', 'RWD', 'AWD', '4WD']);
            $table->enum('gearbox', ['Manual', 'Semi-Automatic', 'Automatic'])->default('Manual');
            $table->enum('fuel', ['Petrol', 'Diesel', 'Electric', 'Hybrid', 'Gasoline', 'Plugin-Hybrid']);
            $table->enum('color_type', ['Solid', 'Metallic', 'Matte', 'Pearl']);
            $table->enum('vehicle_class', ['Class 1', 'Class 2', 'Class 3', 'Class 4']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            Schema::dropIfExists('vehicles');
        });
    }
};
