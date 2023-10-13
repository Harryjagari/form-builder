<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormFieldsTable extends Migration
{
    public function up()
    {
        Schema::create('form_fields', function (Blueprint $table) {
            $table->id(); // Auto-incremental ID
            $table->foreignId('form_id')->constrained('forms')->onDelete('cascade'); // Form ID (foreign key)
            $table->string('type'); // Field type (e.g., text, textarea, select)
            $table->string('label'); // Field label
            $table->text('options')->nullable(); // Additional options for select fields
            $table->integer('position'); // Field position within the form
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_fields');
    }
}
