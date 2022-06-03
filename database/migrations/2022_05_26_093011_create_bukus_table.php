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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id('ISBN');
            $table->string('BJudul');
            $table->integer('BTahunTerbit');
            $table->integer('BHalaman');
            $table->integer('BBerat');
            $table->integer('BStok');
            $table->integer('BHarga');
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
        Schema::dropIfExists('bukus');
    }
};



// -- PROCEDURE
// CREATE OR REPLACE PROCEDURE MyProcedure()
// language plpgsql 
// AS $$
// BEGIN
// 	SELECT * FROM actor 
// 	UPDATE actor
// 	SET last_name = 'hai';
// END $$;

// call MyProcedure();

// -- FUNCTION
// CREATE OR REPLACE FUNCTION MyFunction() (city varchar2)
// return varchar2

// SELECT SUM(amount) FROM payment 
// WHERE payment_date BETWEEN '2007-02-15' AND '2007-02-19'  ;

// CREATE OR REPLACE FUNCTION TotalPayment(date_start date, date_finish date)
// returns date AS $total$
// declare 
// total date;
// begin
// SELECT SUM(amount) into total from customer
// join payment using(customer_id) WHERE payment_date BETWEEN date_start AND date_finish;
// return total;
// end;
// $total$ language plpgsql;

// select customer_id from customer 

// SELECT TotalPayment('2007-02-15', '2007-02-19');

// SELECT payment_date FROM payment;

// SELECT SUM(amount) from customer
// join payment using(customer_id) WHERE customer_id=5;

// DROP FUNCTION totalpayment(date,date);




// SELECT customer_id, first_name, last_name, SUM(amount) from customer
// join payment using(customer_id) GROUP BY customer_id ORDER BY customer_id;


	
// -- EXECT MyProcedure;

// -- , STATUS_PEMBAYARAN varchar2, status varchar2, TANGGAL_CHECKIN date, TANGGAL_CHECKOUT date, harga_per_malam decimal