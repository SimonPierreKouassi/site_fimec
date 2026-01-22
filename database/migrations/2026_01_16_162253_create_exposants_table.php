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
        Schema::create('exposants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenoms');
            $table->string('email');
            $table->string('telephone');
            $table->string('nom_entreprise');
            $table->string('type_structure');
            $table->string('secteur_activite');
            $table->string('url_site_web')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exposants');
    }
};
