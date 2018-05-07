<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historics', function (Blueprint $table) {
            $table->increments('id');
            //data e horário de atualização de registro
            $table->timestamps();
            $table->integer('user_id')->usingned();
            $table->foreing('user_id')->references('id')->on('users')->onDelete('cascade'); //isso serve como chave estrangeira //onDelete - quando deletar um usuário automaticamente deleta na tabela de id 
            //tipo de transação, input, output ou transferência
            $table->enum('type', ['I','O','T']);
            //total da movimentação
            $table->double('amount', 10,2);
            $table->double('total_before', 10,2);
            $table->double('total_after', 10,2);
            //só é necessário quando a op for transação
            $table->integer('user_id_transaction')->nullable();
            //data da transação
            $table->date('date');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historics');
    }
}
