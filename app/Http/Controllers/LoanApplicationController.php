<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanApplication;
use Illuminate\Validation\ValidationException;

class LoanApplicationController extends Controller
{
    public function store(Request $request)
    {
        try {
          
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'loan_amount' => 'required|numeric|min:0',
                'loan_category' => 'required|in:car_loan,bike_loan,home_loan,mudra_loan,vehicle_loan,personal_loan,credit_loan,msme_loan,other',
                'address' => 'required|string',
                'loan_description' => 'nullable|string',
            ]);

           
            $loanApplication = LoanApplication::create($validatedData);

          
            return response()->json([
                'status' => 'success',
                'code' => 200,
                'message' => 'Loan application submitted successfully',
                'data' => $loanApplication,
            ], 200);

        } catch (ValidationException $e) {
         
            return response()->json([
                'status' => 'error',
                'code' => 422,
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);

        } catch (\Exception $e) {
        
            return response()->json([
                'status' => 'error',
                'code' => 500,
                'message' => 'An error occurred while submitting the loan application',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
