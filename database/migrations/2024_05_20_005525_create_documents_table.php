<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type'); // 'cours' ou 'examen'
            $table->string('file_path');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('documents');
    }
    
};
