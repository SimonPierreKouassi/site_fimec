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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            // Lien avec l'actualité
            $table->foreignId('actualite_id')->constrained('actualites')->onDelete('cascade');
            // Informations du visiteur
            $table->string('nom');
            $table->string('email');
            $table->text('message');
            $table->boolean('is_approved')->default(false); // Utile pour éviter le spam
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
