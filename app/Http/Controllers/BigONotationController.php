<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BigONotationController extends Controller
{
    /**
     * Retrieves the first element of the given array in constant time.
     *
     * @return mixed The first element of the array.
     */
    public function constantTimeComplexity() {
        $arr = [1,2,3,4,5];
        return $arr[0];
    }


    /**
     * Finds the index of the target element in the given array using binary search.
     *
     * @param array $arr The array to search in.
     * @param int $target The target element to find.
     * @return int The index of the target element if found, -1 otherwise.
     */
    public function logarithmicTimeComplexity() {
        $arr = [1,2,3,4,5,6];
        $target = 2;
        $low = 0;
        $high = count($arr) - 1;
        while ($low <= $high) {
            echo "low $low.'-'.high $high ";
            $mid = floor(($low + $high) / 2);
            $guess = $arr[$mid];
            echo "<br>mid $mid guess $guess<br>";
            if ($guess == $target) {
                return $mid;
            }
            if ($guess > $target) {
                $high = $mid - 1;
                echo "high $high <br>";
            } else {
                $low = $mid + 1;
                echo "low $low <br>";
            }
        }
    
        return -1; // Not found

    }


    /**
     * Calculates the square root of each element in the input array.
     *
     * @param array $inputArray An array of integers.
     * @return array An array of floats containing the square roots of the input array elements.
     */
    public function squareRootOfN() {
            $n = 25;
            for ($i = 1;     $i++) {
                echo $i;
            }
            
            $inputArray = [4, 9, 16, 25];

            $result = [];
            foreach ($inputArray as $element) {
                $result[] = sqrt($element);
            }
            return $result;
    }


    /**
     * Generate the function comment for the given function body.
     *
     * @throws Some_Exception_Class description of exception
     * @return Some_Return_Value
     */
    public function linearTimeComplexity() {
            // $n = 5;
            // for ($i = 0; $i<$n; $i++) {
            //     echo $i;
            // }
            $arr = [1,2,3,4,5];
            $sum = 0;
            foreach ($arr as $element) {
                $sum += $element;
            }
            return $sum;
    }


    /**
     * A function that demonstrates quadratic time complexity.
     *
     * This function has a nested for loop that iterates over a range of numbers.
     * The outer loop iterates from 0 to $n-1, and the inner loop iterates from 0 to $n-1 as well.
     * As a result, the total number of iterations is $n * ($n-1), which gives a quadratic time complexity of O(n^2).
     *
     * @throws No exceptions are thrown by this function.
     * @return void This function does not return any value.
     */
    public function quadraticTimeComplexity() {
            $n = 5;
            for ($i = 0; $i<$n; $i++) {
                for ($z = 0; $z<$n-1; $z++) {
                    echo "$z<br>";
                }
                echo "$i<br>";
            }
    }
}
