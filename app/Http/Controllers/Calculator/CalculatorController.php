<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //fitness
    public function FitnessCalculator(){
        return view('FrontEnd.calculator.fitness');
    }
    private function calculateBodyFatPercentage($gender, $weight, $waist, $hip, $forearm, $wrist){
        // Perform the body fat percentage calculation based on gender
        // You can use various formulas based on the gender, such as the YMCA formula for men and the Jackson/Pollock formula for women.
        // Here is an example using the YMCA formula for men
        if ($gender == 'male') {
            $leanBodyMass = (0.407 * $weight) + (0.267 * $hip) - (19.2 * log10($waist - $forearm + $wrist)) - 9.45;
            $bodyFatPercentage = ($weight - $leanBodyMass) / $weight * 100;
        } else {
            // Here is an example using the Jackson/Pollock formula for women
            $b = log10($waist + $hip - $forearm);
            $a = 1.097 - (0.00046971 * $b) + (0.00000056 * $b * $b) - (0.00012828 * $b * $age);
            $leanBodyMass = $weight * $a;
            $bodyFatPercentage = ($weight - $leanBodyMass) / $weight * 100;
        }

        return $bodyFatPercentage;
    }
    public function FitnessCalculatorCalcu(Request $request){
        $weight = $request->input('weight');
        $waist = $request->input('waist');
        $hip = $request->input('hip');
        $neck = $request->input('neck');
        $sex = $request->input('sex');
        $age = $request->input('age');

        // Perform the body fat percentage calculation
        $bodyFatPercentage = calculateBodyFatPercentage($weight, $waist, $hip, $neck, $sex, $age);

        // Return the result as a JSON response
        return response()->json(['body_fat_percentage' => $bodyFatPercentage]);
    }


    //pregnency

    public function PregnancyCalculator(){
        return view('FrontEnd.calculator.pregnency');
    }

    //others
    public function OthersCalculator(){
        return view('FrontEnd.calculator.others');
    }

    //bmical
    public function BMICaltulator(){
        return view('FrontEnd.calculator.bmi');
    }
}
