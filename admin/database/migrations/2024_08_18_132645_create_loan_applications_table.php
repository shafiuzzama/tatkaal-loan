<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->decimal('loan_amount', 10, 2);
            $table->enum('loan_category', [
                'car_loan', 'bike_loan', 'home_loan', 'mudra_loan',
                'vehicle_loan', 'personal_loan', 'credit_loan',
                'msme_loan', 'other'
            ]);
            $table->text('address');
            $table->text('loan_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_applications');
    }
}
