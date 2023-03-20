<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tax_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->nullable()->comment('姓名');
            $table->string('phone')->nullable()->comment('电话');;
            $table->decimal('money', 12)->nullable()->comment('年收入');;
            $table->tinyInteger('tax_type')->nullable()->comment('税种');
            $table->tinyInteger('industry')->nullable()->comment('行业');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_records');
    }
};
