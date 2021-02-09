<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->text('description');
            $table->string('type');
            $table->integer('quantite');
            $table->string('ville_pose');
            $table->string('pays');
            $table->string('commentaire');
            $table->date('livraison_prevue');
            $table->boolean('plan')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->timestamp('date_creation_commande');
            $table->String('priorite');
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')
                ->references('id')
                ->on('articles')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('etat_id');
            $table->foreign('etat_id')
                ->references('id')
                ->on('etats')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
