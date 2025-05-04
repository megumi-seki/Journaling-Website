<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained("users");
            $table->boolean("public_mode")->default(0);
            $table->boolean("screen_mode")->default(0);
            $table->foreignId("color_unit_id")->constrained("color_units")->nullabe();
            $table->foreignId("font_size_id")->constrained("font_sizes")->nullable();
            $table->foreignId("font_style_id")->constrained("font_styles")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
