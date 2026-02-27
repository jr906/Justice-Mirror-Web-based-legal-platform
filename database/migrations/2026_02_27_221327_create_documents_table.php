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
    Schema::create('documents', function (Blueprint $table) {
        $table->id();

        $table->foreignId('case_file_id')
            ->constrained('case_files')
            ->cascadeOnDelete();

        $table->foreignId('uploaded_by')
            ->constrained('users')
            ->restrictOnDelete();

        $table->string('file_name');
        $table->string('file_path');
        $table->string('mime_type')->nullable();

        $table->timestamps();

        $table->index('case_file_id');
    });
}

};
