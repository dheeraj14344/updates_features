
# Answers
--------------------

### 🔹 **Pattern Printing**

1. Centered Pyramid Pattern (*)
    
    ```
        *    
       ***   
      *****  
     ******* 
    *********
    ```
    
    ### ✅ **Solution:**
    ```php
    function pyramid($n){
        for ($i=1; $i <= $n; $i++) { 
            echo str_repeat(" ", $n - $i);
            echo str_repeat("*", 2 * $i -1);
            echo PHP_EOL;
        }
    }
    
    pyramid(5);
    ```
    ---

2. Inverted Pyramid
    
    ```
    *********
     *******
      *****
       ***
        *
    ```
    
    ### ✅ **Solution:**
    ```php
    function reversePyramid($n){
      for ($i = $n; $i >= 1; $i--) { 
          echo str_repeat(" ", $n - $i);
          echo str_repeat("*", 2 * $i - 1);
          echo PHP_EOL;
      }
    }
    
    reversePyramid(5);
    ```
    ---

3. Diamond Pattern
    
    ```
        *
       ***
      *****
     *******
    *********
     *******
      *****
       ***
        *
    ```
    
    ### ✅ **Solution:**
    ```php
    function diamond($n){
        for ($i=1; $i <= $n; $i++) { 
            echo str_repeat(" ", $n - $i);
            echo str_repeat("*", 2 * $i - 1);
            echo PHP_EOL;
        }
    
        for ($i=$n - 1; $i >= 1; $i--) { 
            echo str_repeat(" ", $n - $i);
            echo str_repeat("*", 2 * $i - 1);
            echo PHP_EOL;
        }
    }
    
    diamond(5);
    ```
    ---

4. Symmetrical Number Pyramid
    
    ```
        1    
       121   
      12321  
     1234321 
    123454321
    ```
    
    ### ✅ **Solution:**
    ```php
    function symmetricalNumberPyramid($n){
        for ($i=1; $i <= $n; $i++) { 
            echo str_repeat(" ", $n - $i);
    
            for ($j=1; $j <= $i; $j++) { 
                echo $j;
            }
    
            for ($j=$i - 1; $j >= 1; $j--) { 
                echo $j;
            }
    
            echo PHP_EOL;
        }
    }
    
    symmetricalNumberPyramid(5);
    ```
    ---

5. Symmntric hellow diamond
    
    ```
        @
       @ @
      @   @
     @     @
    @       @
     @     @
      @   @
       @ @
        @
    ```
    
    ### ✅ **Solution:**
    ```php
    function symmetricalHollowDiamond($n) {
        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat(" ", $n - $i);
            echo "@";
            if ($i > 1) {
                echo str_repeat(" ", 2 * $i - 3) . "@";
            }
            echo PHP_EOL;
        }
    
        for ($i = $n - 1; $i >= 1; $i--) {
            echo str_repeat(" ", $n - $i);
            echo "@";
            if ($i > 1) {
                echo str_repeat(" ", 2 * $i - 3) . "@";
            }
            echo PHP_EOL;
        }
    }
    
    symmetricalHollowDiamond(5);
    ```
    ---

6. Half hollow diamond
    
    ```
        @
       @ @
      @   @
     @     @
    @@@@@@@@@
    ```
    
    ### ✅ **Solution:**
    ```php
    function halfHollowDiamond($n){
        for ($i=1; $i <= $n; $i++) { 
            // for ($i=$n; $i >= 1; $i--) { 
            echo str_repeat(" ", $n - $i);
            
            echo "@";
    
            if ($i > 1 && $n != $i) {
                echo str_repeat(" ", 2 * $i - 3) . "@";
            } elseif($n == $i) {
                echo str_repeat("@", 2 * $i - 3) . "@";
            }
    
            echo PHP_EOL;
        }
    }
    
    halfHollowDiamond(5);
    ```
    ---

7. Butterfly diamonds
    
    ```
    *        *
    **      **
    ***    ***
    ****  ****
    **********
    ****  ****
    ***    ***
    **      **
    *        *
    ```
    
    ### ✅ **Solution:**
    ```php
    function butterflyDiamond($n){
        for ($i=1; $i <= $n; $i++) { 
            echo str_repeat("*", $i);
    
            // Print the spaces
            echo str_repeat(" ", 2 * ($n - $i));
    
            echo str_repeat("*", $i);
    
            echo PHP_EOL;
        }
    
        // reverse 
        for ($j= $n - 1; $j >= 1; $j--) { 
            echo str_repeat("*", $j);
    
            // Print the spaces
            echo str_repeat(" ", 2 * ($n - $j));
    
            echo str_repeat("*", $j);
    
            echo PHP_EOL;
        }
    }
    
    butterflyDiamond(5);
    ```
    ---

8. Left-Aligned Triangle
    
    ```
    *
    **
    ***
    ****
    *****
    ```
    
    ### ✅ **Solution:**
    ```php
    function leftTriangle($n){
        for ($i=1; $i <= $n; $i++) { 
            echo str_repeat("*", $i);
            echo PHP_EOL;
        }
    }
    
    leftTriangle(5);
    ```
    ---

9. Right-Aligned Triangle
    
    ```
        *
       **
      ***
     ****
    *****
    ```
    
    ### ✅ **Solution:**
    ```php
    function rightTriangle($n){
        for ($i=1; $i <= $n; $i++) { 
            echo str_repeat(" ", $n - $i);
            echo str_repeat("*", $i);
            echo PHP_EOL;
        }
    }
    
    rightTriangle(5);
    ```
    ---

10. Inverted Left Triangle
    
    ```
    *****
    **** 
    ***
    **
    *
    ```
    
    ### ✅ **Solution:**
    ```php
    function invertedLeftTriangle($n){
        for ($i=$n; $i >= 1; $i--) { 
            echo str_repeat("*", $i);
            echo PHP_EOL;
        }
    }
    
    invertedLeftTriangle(5);

    ```
    ---

11. Inverted Right Triangle
    
    ```
    *****
     ****
      ***
       **
        *
    ```
    
    ### ✅ **Solution:**
    ```php
    function invertedRightTriangle($n){
        for ($i = $n; $i >= 1; $i--) { 
            echo str_repeat(" ", $n - $i);
            echo str_repeat("*", $i);
            echo PHP_EOL;
        }
    }
    invertedRightTriangle(5);

    ```
    ---
