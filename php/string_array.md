### 🔹 **Array and strings**

1. Find duplicate in an array single or multiple
    
    ```
    Array
    (
        [0] => 2
        [1] => 3
        [2] => 1
    )
    ```
    
    ### ✅ **Solution:**
    ```php
    function findDuplicate($array){
        $seen = [];
        $duplicates = [];
    
        foreach ($array as $value) {
            if (isset($seen[$value])) {
                $duplicates[$value] = true;
            }else {
                $seen[$value] = true;
            }
        }
        return array_keys($duplicates);
    
    }

    print_r(findDuplicate([1, 2, 3, 4, 2, 5, 3, 6, 1]));
    ```
---

2. Find the missing number from 1 to N
    
    ```
    Missing number: 3
    ```
    
    ### ✅ **Solution:**
    ```php
    function findMissingNumber($arr, $n){
        $expectedSum = $n * ($n + 1) / 2;
        $actualSum = array_sum($arr);
    
        return $expectedSum - $actualSum;
    }

    $arr = [1, 2, 4, 5]; // n = 5
    echo "Missing number: " . findMissingNumber($arr, 5);
    ```
---

3. Reverse a string without using built-in functions
    
    ```
    reeta: ateer
    ```
    
    ### ✅ **Solution:**
    ```php
    function reverseString($str){
        $reversed = "";
        $length = 0;
    
        // Count characters without using strlen
        while (isset($str[$length])) {
            $length++;
        }
    
        // Reverse manually
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
    
        return $reversed;
    }

    echo reverseString("reeta");
    ```
---

3. Reverse a string without using built-in functions
    
    ```
    malayalam is a palindrome
    ```
    
    ### ✅ **Solution:**
    ```php
    function isPalindrome($str) {
        $len = strlen($str);
    
        for ($i = 0; $i < $len / 2; $i++) {
            if ($str[$i] !== $str[$len - 1 - $i]) {
                return false;
            }
        }
    
        return true;
    }

    $input = "malayalam";
    echo isPalindrome($input) ? "$input is a palindrome" : "$input is not a palindrome";
    ```
---

```
$num = 14579;
$sum = 0;
$rem = 0;
for ($i = 0; $i <= strlen($num); $i++) {
    $rem = $num % 10;
    $sum = $sum + $rem;
    $num = $num / 10;
}
echo "The sum of the $num : $sum";


for ($i = 0; $i <= 100; $i++) {
    $num = 0;
    for ($j = 2; $j <= $i / 2; $j++) {
        if ($i % $j == 0) {
            $num++;
            break;
        }
    }
    if ($num == 0) {
        echo $i . ", ";
    }
}

$n = 5;
$fact = 1;
for ($i = $n; $i >= 1; $i--) {
    $fact = $fact * $i;
}
echo "The Factorial of $n is : $fact";


$number = 407;
$sum = 0;
$a = $number;
while ($a != 0) {
    $rem = $a % 10;
    $sum = $sum + ($rem * $rem * $rem);
    $a = $a / 10;
}
if ($number == $sum) {
    echo "Yes $number an Armstrong Number";
} else {
    echo "$number is not an Armstrong Number";
}

$f1 = 0;
$f2 = 1;
echo $f1 . ", " . $f2 . ", ";
for ($i = 0; $i <= 10; $i++) {
    $f3 = $f1 + $f2;
    echo $f3 . ", ";
    $f1 = $f2;
    $f2 = $f3;
}


// 1. Find duplicate in an array single or multiple
function findDuplicate($array)
{
    $seen = [];
    $duplicates = [];

    foreach ($array as $value) {
        if (isset($seen[$value])) {
            $duplicates[$value] = true;
        }else {
            $seen[$value] = true;
        }
    }
    return array_keys($duplicates);

}
print_r(findDuplicate([1, 2, 3, 4, 2, 5, 3, 6, 1]));

function findMissingNumber($arr, $n){
    $expectedSum = $n * ($n + 1) / 2;
    $actualSum = array_sum($arr);

    return $expectedSum - $actualSum;
}

$arr = [1, 2, 4, 5]; // n = 5
echo "Missing number: " . findMissingNumber($arr, 5);


// Reverse a string without using built-in functions
function reverseString($str){
    // if ($str === "" || strlen($str) === 1) {
    //     return $str;
    // }

    // return substr($str, -1) . reverseString(substr($str, 0, -1));

    $reversed = "";
    $length = 0;

    // Count characters without using strlen
    while (isset($str[$length])) {
        $length++;
    }

    // Reverse manually
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}

echo reverseString("reeta");

function isPalindrome($str) {
    $len = strlen($str);

    for ($i = 0; $i < $len / 2; $i++) {
        if ($str[$i] !== $str[$len - 1 - $i]) {
            return false;
        }
    }

    return true;
}
$input = "malayalam";
echo isPalindrome($input) ? "$input is a palindrome" : "$input is not a palindrome";


// 1. Remove duplicates from a string.
function removeDuplicates($str) {
    $result = '';
    $seen = [];

    // Loop through each character
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        // If character is not already seen, add it to result
        if (!isset($seen[$char])) {
            $seen[$char] = true;
            $result .= $char;
        }
    }

    return $result;
}

// Example usage
$input = "programming";
$output = removeDuplicates($input);
echo "Original String: $input\n";
echo "Without Duplicates: $output";


// 2. Implement string compression (e.g., "aaabb" → "a3b2").

function compressString($str) {
    $compressed = '';
    $length = strlen($str);

    if ($length === 0) return $compressed;

    $count = 1;
    for ($i = 1; $i < $length; $i++) {
        if ($str[$i] === $str[$i - 1]) {
            $count++;
        } else {
            $compressed .= $str[$i - 1] . $count;
            $count = 1;
        }
    }

    // Add the last character and its count
    $compressed .= $str[$length - 1] . $count;

    return $compressed;
}

// Example usage
$input = "aaabbcc";
$output = compressString($input);

echo "Original String: $input\n";
echo "Compressed String: $output";

// 3. Reverse words in a sentence (e.g., "I am here" → "here am I").
function reverseWords($sentence) {
    // Split the sentence into words
    $words = explode(' ', $sentence);

    // Reverse the array of words
    $reversed = array_reverse($words);

    // Join them back into a string
    return implode(' ', $reversed);
}

// Example usage
$input = "I am here";
$output = reverseWords($input);

echo "Original Sentence: $input\n";
echo "Reversed Words: $output";

// 4. Check if two strings are anagrams
function areAnagrams($str1, $str2) {
    // Remove spaces and convert to lowercase
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    // If lengths don't match, not anagrams
    if (strlen($str1) !== strlen($str2)) {
        return false;
    }

    // Convert strings to arrays, sort them, and compare
    $arr1 = str_split($str1);
    $arr2 = str_split($str2);

    sort($arr1);
    sort($arr2);

    return $arr1 === $arr2;
}

// Example usage
$str1 = "listen";
$str2 = "silent";

if (areAnagrams($str1, $str2)) {
    echo "\"$str1\" and \"$str2\" are anagrams.";
} else {
    echo "\"$str1\" and \"$str2\" are not anagrams.";
}


// 5. Merge two sorted arrays without using built-in functions
function mergeSortedArrays($arr1, $arr2) {
    $merged = [];
    $i = $j = 0;

    // Compare elements from both arrays and merge
    while ($i < count($arr1) && $j < count($arr2)) {
        if ($arr1[$i] <= $arr2[$j]) {
            $merged[] = $arr1[$i];
            $i++;
        } else {
            $merged[] = $arr2[$j];
            $j++;
        }
    }

    // Add remaining elements from arr1 (if any)
    while ($i < count($arr1)) {
        $merged[] = $arr1[$i];
        $i++;
    }

    // Add remaining elements from arr2 (if any)
    while ($j < count($arr2)) {
        $merged[] = $arr2[$j];
        $j++;
    }

    return $merged;
}
$arr1 = [1, 3, 5, 7];
$arr2 = [2, 4, 6, 8];

$result = mergeSortedArrays($arr1, $arr2);

// Print merged array
echo "Merged Array: ";
foreach ($result as $val) {
    echo $val . " ";
}



// 6. Detect if an array contains duplicates.
function hasDuplicates($arr) {
    $seen = [];

    foreach ($arr as $value) {
        if (isset($seen[$value])) {
            return true; // Duplicate found
        }
        $seen[$value] = true;
    }

    return false; // No duplicates
}

// Example usage
$input = [1, 2, 3, 4, 2];

if (hasDuplicates($input)) {
    echo "Array contains duplicates.";
} else {
    echo "Array does not contain duplicates.";
}



```
