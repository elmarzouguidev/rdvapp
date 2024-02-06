<?php

use App\Models\City;
use App\Models\Type;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(City::class)->index()->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Type::class)->index()->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->string('phone', 20)->nullable()->unique();
            $table->string('age', 10)->nullable();
            $table->longText('address')->nullable();
            $table->date('book_date');
            $table->time('book_time');
            $table->json('options')->nullable();
            $table->increments('book_number')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
