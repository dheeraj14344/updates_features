# interview

---------------------------------------------------------------------------

Here is a **comprehensive list of machine round interview questions** that cover all key areas typically asked in coding assessments, especially for **backend, full-stack, and web developers (like Laravel/PHP)**.

---

## ✅ 1. **Array & String Questions**

* Find the **duplicate** number in an array.
    ### 🌟 **Sample Output (for input `5`):**
    
    ```
    Array
    (
        [0] => 2
        [1] => 3
        [2] => 1
    )
    ```
    ### ✅ **PHP Code:**
    
    ```
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

    ```
    ---
* Find the **missing number** from 1 to N.
* Rotate an array to the right/left by K steps.
* Merge two sorted arrays without using built-in functions.
* Return the product of all elements except itself (no division).
* Check if two strings are **anagrams**.
* Find the **longest common prefix** in a list of strings.
* Reverse words in a sentence (e.g., `"I am here"` → `"here am I"`).
* Implement **string compression** (e.g., `"aaabb"` → `"a3b2"`).
* Remove duplicates from a string.

---

## ✅ 2. **Searching & Sorting**

* Implement **binary search** on a sorted array.
* Sort an array using **merge sort** or **quick sort**.
* Find the **Kth largest element** in an array.
* Implement **counting sort** or **bucket sort**.
* Find the **frequency of each element** in an array.

---

## ✅ 3. **Hashing / Maps / Sets**

* Find the **first non-repeating character** in a string.
* Detect if an array contains **duplicates**.
* Group words that are **anagrams** together.
* Find the **longest substring without repeating characters**.

---

## ✅ 4. **Mathematical & Logical Questions**

* Check if a number is **prime**.
* Find the **factorial** of a number (with and without recursion).
* Implement **fibonacci** sequence (iterative and recursive).
* Check if a number is a **palindrome**.
* Count the number of **set bits** in an integer.
* Reverse digits of an integer.

---

## ✅ 5. **Recursion & Backtracking**

* Solve **Tower of Hanoi**.
* Generate all **subsets** of an array.
* Solve **N-Queens** problem.
* Find all **permutations** of a string or array.
* **Maze path finding** problem (can you reach the end).

---

## ✅ 6. **Linked List (Basic)**

* Reverse a linked list.
* Detect a **cycle** in a linked list.
* Find the **middle element** of a linked list.
* Merge two **sorted linked lists**.
* Remove nth node from the end.

---

## ✅ 7. **Stacks and Queues**

* Implement a **stack using arrays or two queues**.
* Check for **balanced parentheses** using a stack.
* Implement a **queue using two stacks**.
* Evaluate a **postfix expression**.

---

## ✅ 8. **Database / SQL (If applicable)**

* Write a query to get **2nd highest salary**.
* Find **duplicate records** in a table.
* Perform **JOINs** between multiple tables.
* Use **GROUP BY, HAVING, COUNT, AVG** functions.
* Update values using **JOIN** with another table.

---

## ✅ 9. **OOP & PHP (Backend Specific)**

* Explain and implement **inheritance**, **polymorphism**, **abstraction**, **encapsulation**.
* Difference between `abstract class` and `interface`.
* Write a **singleton class** in PHP.
* How to handle **exceptions** in PHP.
* Write a class for a **shopping cart** or **blog post** system.

---

## ✅ 10. **Web & Laravel-Specific Logic (if asked)**

* Upload and validate file/image using PHP.
* Calculate percentage from marks (High School, Intermediate, Graduation).
* Create a **multi-step form** using session.
* Build a **REST API** using Laravel.
* Use Laravel relationships: `hasOne`, `hasMany`, `belongsTo`, `manyToMany`.

---

## ✅ 11. **Bonus – Logic and Puzzles**

* Classic **FizzBuzz** problem.
* Find the **number of trailing zeroes** in factorial of a number.
* Implement your own `strstr()`, `strlen()` or `strpos()` function.
* Solve a logic-based puzzle like:

  > “You have 8 balls, one is heavier. Find the odd one using the minimum number of weighings.”

---

## 🔍 Tips to Crack the Machine Round

* **Start with easy questions** and manage your time.
* **Dry run your code** before submitting.
* Don’t forget edge cases like: empty array, null values, negative numbers, repeated elements.
* Focus on **readability**, not just clever code.
* If you're allowed, include **comments** and **sample test cases**.

---

# Interview Answers
---

### ✅ Example Machine Round Question:

**Problem:**
Write a program that takes an array of integers and returns a new array such that each element at index `i` of the new array is the product of all the numbers in the original array except the one at `i`.

> **Input:** `[1, 2, 3, 4, 5]`
> **Output:** `[120, 60, 40, 30, 24]`

---

Here's the **PHP solution** for the **Webkul machine round pattern questions** you referenced. This code handles **pattern printing** as described in the examples.

---

## 🧩 **Pattern 1: Dynamic Pattern Printing (Odd Input)**

```php
<?php
$n = (int)readline("Enter an odd number >= 3: ");
if ($n < 3 || $n % 2 == 0) {
    exit("Invalid input. Please enter an odd number >= 3.\n");
}

// Top inverted pyramid using '@'
for ($i = 0; $i < $n; $i += 2) {
    echo str_repeat(" ", $i);
    echo str_repeat("@", $n - $i);
    echo "\n";
}

// Lower rectangle of '*'
for ($i = 0; $i < $n; $i++) {
    if ($i == 0) {
        echo str_repeat("*", $n) . "\n";
    } else {
        echo "*" . str_repeat(" ", $n - 2) . "*\n";
    }
}
```

---

## 🧩 **Pattern 2: Diamond‑like Star Pattern with Centered @‑Block**

```php
<?php
$n = (int)readline("Enter an odd number >= 3: ");
if ($n < 3 || $n % 2 == 0) {
    exit("Invalid input. Only odd numbers >= 3 are allowed.\n");
}

// Top triangle of '*'
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("*", $i) . str_repeat(" ", 2 * ($n - $i));
    echo str_repeat("*", $i) . "\n";
}

// Centered '@' block
for ($i = 0; $i < $n; $i++) {
    echo str_repeat(" ", $n) . str_repeat("@", $n) . "\n";
}

// Lower inverted triangle
for ($i = $n; $i >= 1; $i--) {
    echo str_repeat(" ", $n) . str_repeat("*", $i) . "\n";
}
```

---

## 🧩 **Pattern 3: Combined Triangle & Center Block Pattern**

```php
<?php
$n = (int)readline("Enter an odd number >= 3: ");
if ($n < 3 || $n % 2 == 0) {
    exit("Invalid input. Only odd numbers >= 3 are allowed.\n");
}

// Top triangle with '@'
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat(" ", $n - $i);
    echo str_repeat("@", 2 * $i - 1);
    echo "\n";
}

// Bottom part: mirrored star triangles
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("*", $i);
    echo str_repeat(" ", 2 * ($n - $i));
    echo str_repeat("*", $i) . "\n";
}
```

---

## 🧩 **Pattern 4: Even‑Input “Simple” Asterisk Pattern**

```php
<?php
$n = (int)readline("Enter an even number >= 2: ");
if ($n < 2 || $n % 2 != 0) {
    exit("Invalid input. Only even numbers >= 2 are allowed.\n");
}

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "*";
    }
    echo "\n";
}
```

---

## ✅ Key PHP Functions Used:

* `str_repeat()` – for printing characters/spaces.
* `readline()` – to take terminal input.
* `exit()` – to reject invalid input early.

---


### 💡 Thinking Process:

1. You cannot use division (interviewer may ask this).
2. Use prefix and suffix products.
3. Time complexity should ideally be **O(n)**.

---

### ✅ Code in PHP (You can adapt this to other languages if needed)

```php
function productArray($nums) {
    $n = count($nums);
    $left = array_fill(0, $n, 1);
    $right = array_fill(0, $n, 1);
    $result = array_fill(0, $n, 1);

    // Fill left products
    for ($i = 1; $i < $n; $i++) {
        $left[$i] = $nums[$i - 1] * $left[$i - 1];
    }

    // Fill right products
    for ($i = $n - 2; $i >= 0; $i--) {
        $right[$i] = $nums[$i + 1] * $right[$i + 1];
    }

    // Multiply left and right
    for ($i = 0; $i < $n; $i++) {
        $result[$i] = $left[$i] * $right[$i];
    }

    return $result;
}

// Example usage:
print_r(productArray([1, 2, 3, 4, 5]));
```

---

### 🧠 Tips to Crack the Machine Round:

1. **Read the problem carefully.**

   * Clarify edge cases: empty array, single element, zeros.

2. **Choose a familiar language.**

   * Don't pick a fancy one unless you're confident.

3. **Optimize before you code.**

   * Think: Brute force vs efficient method.

4. **Write clean code.**

   * Use good variable names.
   * Add basic comments.

5. **Test your code.**

   * Always test edge cases like `[0, 2, 3]`, `[1]`, or negative numbers.

---

### 👀 Other Common Topics in Machine Rounds:

* String manipulations (anagrams, palindrome, reverse words).
* Arrays (missing number, duplicates, max subarray).
* Sorting and searching.
* Hash maps, sets.
* Recursion (factorial, Fibonacci, backtracking basics).

---
