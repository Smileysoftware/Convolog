<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTableAndModifyConversationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create companies
        Schema::create('companies', function( Blueprint $table){

            $table->increments( 'id' );

            $table->string( 'name' )->unique();

            $table->timestamps();

        });

        //change company in conversations table to company_id
        Schema::table('conversations', function( Blueprint $table ){

            $table->dropColumn( 'company' );
            $table->integer( 'company_id' )->after( 'user_id' );

        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'companies' );

        Schema::table('conversations', function( Blueprint $table){

            $table->dropColumn( 'company_id' );
            $table->string( 'company' )->after( 'slug' );


        });
	}

}
