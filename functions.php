<?php

// Creating an array
$array = [1, 2, 3, 4, 5];

// array_replace: Replaces elements from passed arrays into the original array
$array_replace_result = array_replace($array, [6, 7, 8]);
print_r($array_replace_result);

// array_reverse: Reverses the order of elements in an array
$array_reverse_result = array_reverse($array);
print_r($array_reverse_result);


// array_search: Searches the array for a given value and returns the corresponding key if successful
$array_search_result = array_search(9, $array);
echo "Key of value 3: $array_search_result\n";

// array_shift: Shifts the first element of the array off and returns it
$shifted_element = array_shift($array);
echo "Shifted element: $shifted_element\n";
print_r($array);

// array_slice: Extracts a slice of the array
$sliced_array = array_slice($array, 1, 2);
print_r($sliced_array);

// array_splice: Removes a portion of the array and replaces it with something else
array_splice($array, 1, 2, [10, 11]);
print_r($array);

// array_sum: Calculates the sum of values in an array
$array_sum_result = array_sum($array);
echo "Sum of array: $array_sum_result\n";

// array_unique: Removes duplicate values from an array
$array = array_unique($array);
print_r ($array);

// array_unshift: Prepend one or more elements to the beginning of an array
array_unshift($array, 2);
print_r($array);

// array_values: Returns all the values of an array
$values = array_values($array);
print_r($values);

?>
