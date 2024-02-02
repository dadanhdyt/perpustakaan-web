<?php

use App\Models\Buku;
use App\Models\User;
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
        Schema::create('UlasanBuku', function (Blueprint $table) {
            $table->id("UlasanID");
            $table->foreignIdFor(Buku::class);
            $table->foreignIdFor(User::class);
            $table->text('Ulasan');
            $table->integer('Rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('UlasanBuku');
    }
};
