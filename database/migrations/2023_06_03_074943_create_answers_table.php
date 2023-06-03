<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();

            // Menulis nama kolom dan tipe data yang digunakan
            $table->foreignId('question_id') // Membuat kolom sekaligus relasi tabel
                ->references('id')->on('questions')
                ->cascadeOnUpdate()->restrictOnDelete();
                
            $table->string('username', 150);
            $table->text('content')->nullable();
            
            // Membuar relasi tabel
            $table->foreign('username')->references('username')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
