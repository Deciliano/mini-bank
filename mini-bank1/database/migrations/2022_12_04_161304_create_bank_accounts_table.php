<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('bassls');
            $table->integer('number_account');
            $table->timestamps();

            // cria a coluna 'user_id' dentro da tabela bank_accounts
            $table->foreignId('user_id')->references('id')->on('usuarios');

            
            // cria a coluna 'companie_id' dentro da tabela bank_accounts
            $table->foreignId('companie_id')->references('id')->on('companies');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
