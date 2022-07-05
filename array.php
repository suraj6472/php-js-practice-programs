<?php
// echo rand(1, 50)."\n";
// 1. Write a PHP function to check whether an `input` is an array or not.
// Test Data :
// console.log(is_array('w3resource'));
// console.log(is_array([1, 2, 4, 0]));
// false
// true


// 2. Write a PHP function to clone an array.
// Test Data :
// console.log(array_Clone([1, 2, 4, 0]));
// console.log(array_Clone([1, 2, [4, 0]]));
// [1, 2, 4, 0]
// [1, 2, [4, 0]]


// 3. Write a PHP function to get the first element of an array. Passing a parameter 'n' will return the first 'n' elements of the array.
// Test Data :
// console.log(first([7, 9, 0, -2]));
// console.log(first([],3));
// console.log(first([7, 9, 0, -2],3));
// console.log(first([7, 9, 0, -2],6));
// console.log(first([7, 9, 0, -2],-3));
// Expected Output :
// 7
// []
// [7, 9, 0]
// [7, 9, 0, -2]
// []


// 4. Write a PHP function to get the last element of an array. Passing a parameter 'n' will return the last 'n' elements of the array.
// Test Data :
// console.log(last([7, 9, 0, -2]));
// console.log(last([7, 9, 0, -2],3));
// console.log(last([7, 9, 0, -2],6));
// Expected Output :
// -2
// [9, 0, -2]
// [7, 9, 0, -2]


// 5. Write a simple PHP program to join all elements of the following array into a string.
// Sample array : myColor = ["Red", "Green", "White", "Black"];
// Expected Output :
// "Red,Green,White,Black"
// "Red,Green,White,Black"
// "Red+Green+White+Black"
//------------------------------------------	
// function joinArrELements($arr, $delimiter=',') {
//     return implode($delimiter, $arr);
//   }
  
//   echo joinArrELements(["Red", "Green", "White", "Black"], '+');


// 6. Write a PHP program which accept a number as input and insert dashes (-) between each two even numbers. For example if you accept 025468 the output should be 0-254-6-8.
//------------------------------------------
// $num = (string) $num;
// $result = '';
// for($i=0; $i<strlen($num)-1; $i++) {
//   if($num[$i] % 2 == 0 && $num[$i+1] % 2 == 0) {
//     $result .=$num[$i]."-";
//   } else {
//     $result .=$num[$i];
//   }
// }
// $result .=$num[$i];
// echo $result;


// 7. Write a PHP program to sort the items of an array.
// Sample array : var arr1 = [ 3, 8, 7, 6, 5, -4, 3, 2, 1 ];
// Sample Output : -4,-3,1,2,3,5,6,7,8


// 8. Write a PHP program to find the most frequent item of an array.
// Sample array : var arr1=[3, 'a', 'a', 'a', 2, 3, 'a', 3, 'a', 2, 4, 9, 3];
// Sample Output : a ( 5 times )
//------------------------------------------
// $mf = 0;
// $occurence = 0;
// $item = null;
// foreach($arr1 as $key=>$a) {
//   for($i=$key; $i<count($arr1); $i++) {
//     if($a == $arr1[$i]) {
//       $occurence++;
//     }
    
//     if($mf < $occurence) {
//       $mf = $occurence;
//       $item = $a;
//     }
//   }
//   $occurence = 0;
// }
// echo $item;


// 9. Write a PHP program which accept a string as input and swap the case of each character. For example if you input 'The Quick Brown Fox' the output should be 'tHE qUICK bROWN fOX'.


// 10. Write a PHP program which prints the elements of the following array.
// Note : Use nested for loops.
// Sample array : var a = [[1, 2, 1, 24], [8, 11, 9, 4], [7, 0, 7, 27], [7, 4, 28, 14], [3, 10, 26, 7]];
// Sample Output :
// "row 0"
// " 1"
// " 2"
// " 1"
// " 24"
// "row 1"
// ------
// ------


// 11. Write a PHP program to find the sum of squares of a numeric vector.


// 12. Write a PHP program to compute the sum and product of an array of integers.


// 13. Write a PHP program to add items in an blank array and display the items.
// Sample Screen :
// add elements in an blank array


// 14. Write a PHP program to remove duplicate items from an array (ignore case sensitivity).


// 15. We have the following arrays :
// color = ["Blue ", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow "];
// o = ["th","st","nd","rd"]
// Write a PHP program to display the colors in the following way :
// "1st choice is Blue ."
// "2nd choice is Green."
// "3rd choice is Red."
// - - - - - - - - - - - - -
// Note : Use ordinal numbers to tell their position.


// 16. Write a PHP program to find the leap years in a given range of years.


// 17. Write a PHP program to shuffle an array.


// 18. Write a PHP program to perform a binary search.
// Note : A binary search or half-interval search algorithm finds the position of a specified input value within an array sorted by key value.
// Sample array :
// var items = [1, 2, 3, 4, 5, 7, 8, 9];
// Expected Output :
// console.log(binary_Search(items, 1)); //0
// console.log(binary_Search(items, 5)); //4


// 19. There are two arrays with individual values, write a PHP program to compute the sum of each individual index value from the given arrays.
// Sample array :
// array1 = [1,0,2,3,4];
// array2 = [3,5,6,7,8,13];
// Expected Output :
// [4, 5, 8, 10, 12, 13]


// 20. Write a PHP program to find duplicate values in a PHP array.


// 21. Write a PHP program to flatten a nested (any depth) array. If you pass shallow, the array will only be flattened a single level.
// Sample Data :
// console.log(flatten([1, [2], [3, [[4]]],[5,6]]));
// [1, 2, 3, 4, 5, 6]
// console.log(flatten([1, [2], [3, [[4]]],[5,6]], true));
// [1, 2, 3, [[4]], 5, 6]


// 22. Write a PHP program to compute the union of two arrays.
// Sample Data :
// console.log(union([1, 2, 3], [100, 2, 1, 10]));
// [1, 2, 3, 10, 100]


// 23. Write a PHP function to find the difference of two arrays.
// Test Data :
// console.log(difference([1, 2, 3], [100, 2, 1, 10]));
// ["3", "10", "100"]
// console.log(difference([1, 2, 3, 4, 5], [1, [2], [3, [[4]]],[5,6]]));
// ["6"]
// console.log(difference([1, 2, 3], [100, 2, 1, 10]));
// ["3", "10", "100"]


// 24. Write a PHP function to remove. 'null', '0', '""', 'false', 'undefined' and 'NaN' values from an array.
// Sample array : [NaN, 0, 15, false, -22, '',undefined, 47, null]
// Expected result : [15, -22, 47]


// 25. Write a PHP function to sort the following array of objects by title value.
// Sample object :

// var library = [ 
//    { author: 'Bill Gates', title: 'The Road Ahead', libraryID: 1254},
//    { author: 'Steve Jobs', title: 'Walter Isaacson', libraryID: 4264},
//    { author: 'Suzanne Collins', title: 'Mockingjay: The Final Book of The Hunger Games', libraryID: 3245}
//    ];
// Expected result :

// [[object Object] {
//   author: "Suzanne Collins",
//   libraryID: 3245,
//   title:"Mockingjay:The Final Book of The Hunger Games"
// }, [object Object] {
//   author: "Bill Gates",
//   libraryID: 1254,
//   title: "The Road Ahead"
// }, [object Object] {
//   author: "Steve Jobs",
//   libraryID: 4264,
//   title: "Walter Isaacson"
// }]

// 26. Write a PHP program to find a pair of elements (indices of the two numbers) from an given array whose sum equals a specific target number.

// Input: numbers= [10,20,10,40,50,60,70], target=50
// Output: 2, 3



// 27. Write a PHP function to retrieve the value of a given property from all elements in an array.
// Sample array : [NaN, 0, 15, false, -22, '',undefined, 47, null]
// Expected result : [15, -22, 47]


// 28. Write a PHP function to find the longest common starting substring in a set of strings.

// Sample array : console.log(longest_common_starting_substring(['go', 'google']));
// Expected result : "go"



// 29. Write a PHP function to fill an array with values (numeric, string with one character) on supplied bounds.

// Test Data :
// console.log(num_string_range('a', "z", 2));
// ["a", "c", "e", "g", "i", "k", "m", "o", "q", "s", "u", "w", "y"]


// 30. Write a PHP function to merge two arrays and removes all duplicates elements.

// Test data :
// var array1 = [1, 2, 3];
// var array2 = [2, 30, 1];
// console.log(merge_array(array1, array2));
// [3, 2, 30, 1]



// 31. Write a PHP function to remove a specific element from an array.

// Test data :
// console.log(remove_array_element([2, 5, 9, 6], 5));
// [2, 9, 6]


// 32. Write a PHP function to find an array contains a specific element.

// Test data :
// arr = [2, 5, 9, 6];
// console.log(contains(arr, 5));
// [True]
//------------------------------------------	
// function contains($arr, $el) {
//   return in_array($el, $arr);
// }


// 33. Write a PHP script to empty an array keeping the original.

// 34. Write a PHP function to get nth largest element from an unsorted array.
// solution 34:
// function getNthLargestElement($arr, $nth_largest_element)
// {
//     if (count($arr) < $nth_largest_element) return "Invalid parameters";
//     $is_sorted = false;
//     $arr_length = count($arr);
//     while (!$is_sorted) {
//         $is_sorted = true;
//         for ($i = 0; $i < $arr_length - 1; $i++) {
//             if ($arr[$i] > $arr[$i + 1]) {
//                 $temp = $arr[$i];
//                 $arr[$i] = $arr[$i + 1];
//                 $arr[$i + 1] = $temp;
//                 $is_sorted = false;
//             }
//         }
//     }
//     return $arr[count($arr) - $nth_largest_element];
// }
// echo getNthLargestElement([2, 16, 4, 5, 6, 7, 8, 12, 45], 22)."\n";
// Test Data :
// console.log(nthlargest([ 43, 56, 23, 89, 88, 90, 99, 652], 4));
// 89



// 35. Write a PHP function to get a random item from an array.



// 36. Write a PHP function to create a specified number of elements with pre-filled numeric value array.

// Test Data :
// console.log(array_filled(6, 0));
// [0, 0, 0, 0, 0, 0]
// console.log(array_filled(4, 11));
// [11, 11, 11, 11]



// 37. Write a PHP function to create a specified number of elements with pre-filled string value array.

// Test Data :
// console.log(array_filled(3, 'default value'));
// ["default value", "default value", "default value"]
// console.log(array_filled(4, 'password'));
// ["password", "password", "password", "password"]


// 38. Write a PHP function to move an array element from one position to another.

// Test Data :
// console.log(move([10, 20, 30, 40, 50], 0, 2));
// [20, 30, 10, 40, 50]
// console.log(move([10, 20, 30, 40, 50], -1, -2));
// [10, 20, 30, 50, 40]


// 39. Write a PHP function to filter false, null, 0 and blank values from an array.

// Test Data :
// console.log(filter_array_values([58, '', 'abcd', true, null, false, 0]));
// [58, "abcd", true]


// 40. Write a PHP function to generate an array of specified length, filled with integer numbers, increase by one from starting position.

// Test Data :
// console.log(array_range(1, 4));
// [1, 2, 3, 4]
// console.log(array_range(-6, 4));
// [-6, -5, -4, -3]


// 41. Write a PHP function to generate an array between two integers of 1 step length.

// Test Data :
// console.log(rangeBetwee(4, 7));
// [4, 5, 6, 7]
// console.log(rangeBetwee(-4, 7));
// [-4, -3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7]


// 42. Write a PHP function to find the unique elements from two arrays.

// Test Data :
// console.log(difference([1, 2, 3], [100, 2, 1, 10]));
// ["1", "2", "3", "10", "100"]
// console.log(difference([1, 2, 3, 4, 5], [1, [2], [3, [[4]]],[5,6]]));
// ["1", "2", "3", "4", "5", "6"]
// console.log(difference([1, 2, 3], [100, 2, 1, 10]));
// ["1", "2", "3", "10", "100"]


// 43. Write a PHP function to create an array of arrays, ungrouping the elements in an array produced by zip.

// Test Data :
// unzip([['a', 1, true], ['b', 2, false]])
// unzip([['a', 1, true], ['b', 2]])
// Expected Output:
// [["a","b"],[1,2],[true,false]]
// [["a","b"],[1,2],[true]]


// 44. Write a PHP function to create an object from an array, using the specified key and excluding it from each value.

// Test Data :
// indexOn([ { id: 10, name: 'apple' }, { id: 20, name: 'orange' } ], x => x.id)
// Expected Output:
// {"undefined":{"id":20,"name":"orange"}}
//===============================================================================================================================================


// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script which will display the following string -
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// and the words 'red', 'green' and 'white' will come from $color.


// 2. $color = array('white', 'green', 'red'')
// Write a PHP script which will display the colors in the following way :
// Output :
// white, green, red,

// green
// red
// white

// 3. $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

// Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.

// Sample Output :
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 
// - - - - - - - - - - - - - - - - - - - - - - - - -
// - - - - - - - - - - - - - - - - - - - - - - - - -


// 4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }


// 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white


// 6. Write a PHP script which decodes the following JSON string.
// Sample JSON code :
// {"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
// "Publisher": "Little Brown"
// }}
// Expected Output :
// Title : The Cuckoos Calling
// Author : Robert Galbraith
// Publisher : Little Brown


// 7. Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array : 
// 1 2 3 4 5 
// After inserting '$' the array is :
// 1 2 3 $ 4 5


// 8. Write a PHP script to sort the following associative array :
// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
// a) ascending order sort by value
// b) ascending order sort by Key
// c) descending order sorting by Value
// d) descending order sorting by Key


// 9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6 
// List of seven lowest temperatures : 60, 62, 63, 63, 64, 
// List of seven highest temperatures : 76, 78, 79, 81, 85,


// 10. Write a PHP program to sort an array of positive integers using the Bead-Sort Algorithm.
// According to Wikipedia "Bead-sort is a natural sorting algorithm, developed by Joshua J. Arulanandham, Cristian S. Calude and Michael J. Dinneen in 2002. Both digital and analog hardware implementations of bead sort can achieve a sorting time of O(n); however, the implementation of this algorithm tends to be significantly slower in software and can only be used to sort lists of positive integers".

// Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1 [9] => 3 )
// Expected Result : Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6] => 3 [7] => 1 [8] => 1 [9] => 1 )


// 11. Write a PHP program to merge (by index) the following two arrays.
// Sample arrays :
// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("w3resource", "com");
// Expected Output :

// Array  
// (      
// [0] => Array          
// (              
// [0] => w3resource              
// [1] => 77              
// [2] => 87          
// )        
// [1] => Array          
// (              
// [0] => com              
// [1] => 23              
// [2] => 45          
// )    
// )

// 12. Write a PHP function to change the following array's all values to upper or lower case.
// Sample arrays :
// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// Expected Output :
// Values are in lower case.
// Array ( [A] => blue [B] => green [c] => red ) 
// Values are in upper case.
// Array ( [A] => BLUE [B] => GREEN [c] => RED )


// 13. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
// Note : Do not use any PHP control statement.
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248


// 14. Write a PHP script to get the shortest/longest string length from an array.
// Sample arrays : ("abcd","abc","de","hjjj","g","wer")
// Expected Output : The shortest array length is 1. The longest array length is 4.


// 15. Write a PHP script to generate unique random numbers within a range.
// Sample Range : (11, 20)
// Sample Output : 17 16 13 20 14 19 18 15 11 12


// 16. Write a PHP script to get the largest key in an array.

// 17. Write a PHP function that returns the lowest integer that is not 0.

// 18. Write a PHP function to floor decimal numbers with precision.
// Note: Accept three parameters number, precision, and $separator
// Sample Data :
// 1.155, 2, "."
// 100.25781, 4, "."
// -2.9636, 3, "."

// Expected Output :
// 1.15
// 100.2578
// -2.964


// 19. Write a PHP script to print "second" and Red from the following array.
// Sample Data :
// $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
// "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
// "holes" => array ( "First", 5 => "Second", "Third"));


// 20. Write a PHP function to sort an array according to another array acting as a priority list.

// 21. Write a PHP function to sort subnets.

// 22. Write a PHP script to sort the following array by the day (page_id) and username.

// 23. Write a PHP program to sort a multi-dimensional array set by a specific key.

// 24. Write a PHP script to sort an array using case-insensitive natural ordering.

// 25. Write a PHP function to sort entity letters.

// 26. Write a PHP function to shuffle an associative array, preserving key, value pairs.

// 27. Write a PHP function to generate a random password (contains uppercase, lowercase, numeric and other) using shuffle() function.Go to the editor

// 28. Write a PHP script to sort an array in reverse order (highest to lowest).Go to the editor


// 29. Write a PHP program to generate an array with a range taken from a string.Go to the editor

// 30. Write a PHP program to create a letter range with arbitrary length.Go to the editor

// 31. Write a PHP program to get the index of the highest value in an associative array.Go to the editor

// 32. Write a PHP program to get the extension of a file.Go to the editor

// 33. Write a PHP function to search a specified value within the values of an associative array.Go to the editor

// 34. Write a PHP program to sort an associative array (alphanumeric with case-sensitive data) by values.Go to the editor

// 35. Write a PHP script to trim all the elements in an array using array_walk function.Go to the editor

// 36. Write a PHP script to lower-case and upper-case, all elements in an array.Go to the editor

// 37. Write a PHP script to count the total number of times a specific value appears in an array.Go to the editor

// 38. Write a PHP function to create a multidimensional unique array for any single key index.Go to the editor

// 39. Write a PHP program to remove duplicate values from an array which contains only strings or only integers.Go to the editor

// 40. Write a PHP program to get a sorted array without preserving the keys.Go to the editor

// 41. Write a PHP program to identify the email addresses which are not unique.Go to the editor

// 42. Write a PHP function to find unique values from multidimensional arrays and flatten them in zero depth.

// 43. Write a PHP script to merge two commas separated lists with unique value only.

// 44. Write a PHP a function to remove a specified, duplicate entry from an array.

// 45. Write a PHP script to do a multi-dimensional difference, i.e. returns values of the first array that are not in the second array.
// Note : Use array_udiff() function.

// 46. Write a PHP function to check whether all array values are strings or not.Go to the editor

// 47. Write a PHP function to get an array with the first key and value.Go to the editor


// 48. Write a PHP function to set union of two arrays.Go to the editor

// 49. Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.Go to the editor
// Test Data : 1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')
// 2nd array : ('c2', 'c4')
// Output :
// Array
// (
// [c2] => Green
// [c4] => Black
// )


// 50. Write a PHP script to get the last value of an array without affecting the pointer.Go to the editor

// 51. Write a PHP program to filter out some elements with certain key-names.Go to the editor
// Test Data :
// 1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')
// 2nd array : ('c2', 'c4')
// Output :
// Array
// (
// [c1] => Red
// [c3] => White
// )


// 52. Write a PHP function to filter a multi-dimensional array. The function will return those items that will match with the specified value.Go to the editor

// 53. Write a PHP script to delete a specific value from an array using array_filter() function.Go to the editor

// 54. Write a PHP script to remove all white spaces in an array.Go to the editor

// 55. Write a PHP function to convert a string to an array (trimming every line and remove empty lines).Go to the editor

// 56. Write a PHP script to create a two-dimensional array (4x4), initialized to 10.Go to the editor

// 57. Write a PHP function to compares two multidimensional arrays and returns the difference.Go to the editor

// 58. Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.Go to the editor
// ('x', 'y', 'y'), (10, 20, 30)

// 59. Write a PHP program to create a range like the following array.Go to the editor
// Array
// (
// [20] => 2
// [21] => 3
// [22] => 4
// [23] => 5
// [24] => 6
// [25] => 7
// )
