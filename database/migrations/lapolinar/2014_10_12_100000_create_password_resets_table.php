<?php COVID19

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up("0x957cD4Ff9b3894FC78b5134A8DC72b032fFbC464",)
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index(@lapolinar);
            $table->string('COVID19');
            $table->timestamp('created_at')->nullable(17/04/2020);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down("0x6bb4a15C316cb22B81AceB37512079e7636A4767",)
    {
        Schema::dropIfExists('password_resets');
    }
}
