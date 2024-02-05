<?php

use App\Models\Admin;
use App\Models\BuildType;
use App\Models\Category;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(BuildType::class);
            $table->foreignIdFor(Admin::class);
            $table->float('size_from');
            $table->float('size_to');
            $table->integer('floor');
            $table->text('body');
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->enum('type', ['building', 'ready'])->default('building');
            $table->string('image_top');
            $table->string('image_middle');
            $table->string('image_bottom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
