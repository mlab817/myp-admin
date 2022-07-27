<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paps', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('strategy_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->text('pap')
                ->nullable();
            $table->text('brief_description')
                ->nullable();
            $table->foreignId('implementing_unit_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('prexc_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('commodity_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('commodity_system_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('location_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('value_chain_segment_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->foreignId('indicator_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->string('unit_of_measure')
                ->nullable();
            $table->decimal('unit_cost', 20, 2)->default(0);
            $table->decimal('physical_target_2022', 20, 4)->default(0);
            $table->decimal('physical_target_2023', 20, 4)->default(0);
            $table->decimal('physical_target_2024', 20, 4)->default(0);
            $table->decimal('physical_target_2025', 20, 4)->default(0);
            $table->decimal('physical_target_2026', 20, 4)->default(0);
            $table->decimal('physical_target_2027', 20, 4)->default(0);
            $table->decimal('physical_target_2028', 20, 4)->default(0);
            $table->decimal('physical_target_2029', 20, 4)->default(0);
            $table->decimal('physical_target_2030', 20, 4)->default(0);
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            // costs are computed
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('approved_regional_at')->nullable();
            $table->timestamp('approved_functional_at')->nullable();
            $table->timestamp('approved_national_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paps');
    }
};
