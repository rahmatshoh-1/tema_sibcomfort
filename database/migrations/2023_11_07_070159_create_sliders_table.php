<?php

use App\Models\Admin;
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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('mobile_image');
            $table->text('body')->nullable();
            $table->string('link')->nullable();
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->enum('page', [
                'home',
                'posts',
                'post.single',
                'partners',
                'production',
                'ready.project',
                'projects',
                'ipoteka',
                'project.single',
                'contacts',
                'frame.house',
                'molded.house',
                'brus',
                'module',
                'manual.cutting',
                'lumber'
            ]);
            $table->foreignIdFor(Admin::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
