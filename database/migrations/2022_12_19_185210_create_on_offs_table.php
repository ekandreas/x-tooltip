<?php

use App\Models\OnOff;
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
        Schema::create('on_offs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('on')->default(0)->nullable();
            $table->timestamps();
        });

        OnOff::create([
            'name' => 'test 1',
            'on' => false,
        ]);

        OnOff::create([
            'name' => 'test 2',
            'on' => true,
        ]);

        OnOff::create([
            'name' => 'test 3',
            'on' => false,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('on_offs');
    }
};
