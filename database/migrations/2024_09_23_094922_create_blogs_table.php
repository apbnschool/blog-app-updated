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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->comment('form category table');
            $table->string('blog_title')->unique();
            $table->string('slug')->unique();
            $table->string('author');
            $table->date('custom_date');
            $table->text('description');
            $table->text('image');
            $table->tinyInteger('status')->default(0)
                ->comment('0 == Pending, 1 == Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
