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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('template_id')->constrained('card_templates')->onDelete('cascade');
            $table->string('title'); // e.g., "John & Jane's Wedding"
            $table->string('event_type')->default('wedding'); // wedding, birthday, etc.
            $table->date('event_date');
            $table->string('venue')->nullable();
            $table->text('event_description')->nullable();
            $table->json('custom_data'); // User's customized template data
            $table->string('status')->default('draft'); // draft, published, completed
            $table->boolean('is_public')->default(false);
            $table->string('slug')->unique(); // For public sharing
            $table->decimal('total_amount', 8, 2)->default(0.00);
            $table->string('payment_status')->default('pending'); // pending, paid, failed
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
