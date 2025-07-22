
## ✅ **PHP Interview Questions – Categorized**

---

### 🔹 **1. PHP Basics**

1. What is PHP and what are its key features?
2. What is the difference between `echo` and `print`?
3. What are `variables` and `constants` in PHP?
4. What are `data types` in PHP?
5. What are the different types of `operators` in PHP?

---

### 🔹 **2. Control Structures & Loops**

1. What are the different types of `loops` in PHP?
2. What is the difference between `for`, `foreach`, and `while` loops?
3. How does `break` and `continue` work in loops?

---

### 🔹 **3. Functions**

1. How do you define and call a function in PHP?
2. What is a variable scope in PHP?
3. What are default parameters in PHP functions?
4. What is a recursive function? Give an example.

---

### 🔹 **4. Arrays & Strings**

1. What are the different types of arrays in PHP?
2. How do you loop through an array in PHP?
3. What are some common string functions in PHP?
4. How can you sort an associative array by values or keys?

---

### 🔹 **5. Superglobals**

1. What is `$_GET` and `$_POST`?
2. What is `$_SESSION` and `$_COOKIE`?
3. What is `$_SERVER` and what information can you get from it?
4. What is `$_FILES` and how do you upload a file?

---

### 🔹 **6. Forms & User Input**

1. How do you handle form data in PHP?
2. How do you `validate` and `sanitize` user input?
3. What is `CSRF` and how can it be prevented in PHP?

---

### 🔹 **7. OOP in PHP**

1. What is `Object-Oriented Programming` in PHP?
2. What are `classes` and `objects`?
3. What is the difference between `public`, `private`, and `protected`?
4. What are `constructors` and `destructors`?
5. What is `inheritance`? What is method overriding?
6. What are `interfaces` and `abstract classes`?
7. What are `traits` and how are they used?

---

### 🔹 **8. Error Handling & Exceptions**

1. What are the types of errors in PHP?
2. What is the difference between `include` and `require`?
3. How do you handle exceptions using `try-catch`?
4. What is error reporting and how can you enable it?

---

### 🔹 **9. File Handling**

1. How do you read and write files in PHP?
2. What is the difference between `fopen`, `fread`, `fwrite`, and `fclose`?
3. How do you upload files using a form?

---

### 🔹 **10. Sessions & Cookies**

1. What is a `session` in PHP?
2. How do you start and destroy a session?
3. What is a cookie and how do you set/get it?
4. Difference between session and cookie?

---

### 🔹 **11. Database (MySQL + PDO)**

1. How do you connect PHP to MySQL?
2. What is the difference between `mysqli` and `PDO`?
3. What are prepared statements and why are they important?
4. How do you perform CRUD operations using PDO?

---

### 🔹 **12. Security**

1. How do you prevent SQL Injection?
2. What is Cross-Site Scripting (XSS) and how to avoid it?
3. How do you hash passwords in PHP?
4. What is `htmlspecialchars()` and `strip_tags()`?

---

### 🔹 **13. Advanced Topics**

1. What are magic methods in PHP?
2. What is output buffering in PHP?
3. What is Composer and how is it used?
4. What are namespaces in PHP?
5. How does garbage collection work in PHP?

---

### 🔹 **14. PHP 7 / 8 Features (if applicable)**

1. What are scalar type declarations?
2. What is the null coalescing operator `??`?
3. What is the spaceship operator `<=>`?
4. What are union types and named arguments (PHP 8)?

---
Absolutely! Here's a solid list of **PHP interview questions and answers**, curated for someone with **3 years of experience**, like you, targeting **CedCoss Technologies** or similar companies.

---

----
# ✅ **PHP Interview Questions & Answers (For 3 Years Experienced Developer)**

---

### 🔹 1. **What is the difference between `==` and `===` in PHP?**

**Answer:**

* `==` compares values (type juggling allowed).
* `===` compares both **value and type**.

```php
0 == false     // true
0 === false    // false
```

---

### 🔹 2. **What are the different types of errors in PHP?**

**Answer:**

* **Parse Error** (Syntax error)
* **Fatal Error** (Calling undefined function or class)
* **Warning** (Non-fatal; script continues)
* **Notice** (Non-critical like undefined index)

---

### 🔹 3. **What is the difference between `include`, `require`, `include_once`, and `require_once`?**

**Answer:**

* `include` → Warning on failure.
* `require` → Fatal error on failure.
* `_once` versions prevent multiple inclusions.

---

### 🔹 4. **What is a session in PHP?**

**Answer:**

* A session is a way to store data (like user login info) across multiple pages.

```php
session_start();
$_SESSION['user'] = 'Dheeraj';
```

---

### 🔹 5. **What is the difference between GET and POST?**

**Answer:**

| GET                       | POST                    |
| ------------------------- | ----------------------- |
| Appends data in URL       | Sends data in HTTP body |
| Limited data (URL length) | Unlimited data          |
| Not secure                | More secure             |
| Bookmarkable              | Not bookmarkable        |

---

### 🔹 6. **What is PDO in PHP and why is it better than `mysqli`?**

**Answer:**

* PDO (PHP Data Objects) is a database access layer that supports multiple databases.
* More secure (prepared statements prevent SQL injection).
* Easier to switch DB engines.

---

### 🔹 7. **How does PHP handle memory management?**

**Answer:**

* PHP automatically handles memory allocation and garbage collection.
* You can manually unset variables to free memory.

```php
unset($largeArray);
```

---

### 🔹 8. **What are magic methods in PHP? Name a few.**

**Answer:**
Magic methods start with `__`:

* `__construct()` – constructor
* `__destruct()` – destructor
* `__get()` / `__set()` – overloading
* `__call()` – called on inaccessible methods

---

### 🔹 9. **What is the difference between `public`, `private`, and `protected`?**

**Answer:**

* `public` – accessible everywhere.
* `private` – accessible only within the class.
* `protected` – accessible within class and child classes.

---

### 🔹 10. **What are Traits in PHP?**

**Answer:**

* Traits are used to share methods across multiple classes.
* Helps avoid multiple inheritance.

```php
trait Logger {
    public function log($msg) {
        echo $msg;
    }
}

class User {
    use Logger;
}
```

---

### 🔹 11. **What is the difference between abstract class and interface?**

| Feature    | Abstract Class               | Interface                    |
| ---------- | ---------------------------- | ---------------------------- |
| Methods    | Can have implemented methods | All methods must be abstract |
| Properties | Can have variables           | Only constants               |
| Multiple   | One abstract class           | Multiple interfaces          |

---

### 🔹 12. **How can you handle exceptions in PHP?**

**Answer:**
Using try-catch block:

```php
try {
    throw new Exception("Something went wrong");
} catch (Exception $e) {
    echo $e->getMessage();
}
```

---

### 🔹 13. **What is output buffering in PHP?**

**Answer:**
It controls when output is sent to the browser. Useful in header redirection.

```php
ob_start();
echo "Hello";
header("Location: login.php"); // Won’t error with ob_start
```

---

### 🔹 14. **What are superglobals in PHP?**

**Answer:**
Built-in variables available anywhere:

* `$_GET`, `$_POST`
* `$_SESSION`, `$_COOKIE`
* `$_SERVER`, `$_FILES`
* `$_REQUEST`, `$_ENV`

---

### 🔹 15. **How do you prevent SQL Injection in PHP?**

**Answer:**

* Use **PDO with prepared statements**.
* Never directly insert user input into queries.

```php
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
```

---


