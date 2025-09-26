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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('guest_type')->default('guest'); // guest, family, vip, etc.
            $table->integer('plus_ones')->default(0);
            $table->string('invitation_status')->default('pending'); // pending, sent, delivered, failed
            $table->string('rsvp_status')->default('pending'); // pending, attending, not_attending, maybe
            $table->text('rsvp_message')->nullable();
            $table->string('dietary_requirements')->nullable();
            $table->timestamp('invitation_sent_at')->nullable();
            $table->timestamp('rsvp_received_at')->nullable();
            $table->string('invitation_token')->unique()->nullable(); // For tracking clicks
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
