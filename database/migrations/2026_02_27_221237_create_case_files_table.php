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
    Schema::create('case_files', function (Blueprint $table) {
        $table->id();

        $table->string('case_title');
        $table->string('case_type');

        $table->foreignId('client_id')
            ->constrained('clients')
            ->cascadeOnDelete();

        $table->foreignId('lawyer_id')
            ->constrained('users')
            ->restrictOnDelete();

        $table->enum('status', ['open', 'in_progress', 'closed'])->default('open');

        $table->text('description')->nullable();

        $table->timestamps();

        $table->index(['status', 'lawyer_id']);
        $table->index('client_id');
    });
}
};
