## ✅ **Laravel Technical Interview Questions (Categorized)**

### 🔹 **1. Routing & Controllers**

1. What are the differences between == and === in PHP? Can you provide a real example where this matters?

The `==` operator checks only for equality of value, while `===` checks for both value and data type.
```php
Example:
$a = 0;
$b = false;

if ($a == $b) {
    echo "Equal with =="; // This will execute
}

if ($a === $b) {
    echo "Equal with ==="; // This will NOT execute
}
```
-----
2. What’s the difference between `Route::get()` and `Route::resource()`?
3. How do you create a `route group` with `middleware`?
4. What are `named routes` and why are they useful?
5. How do you handle `404 or custom error pages` in Laravel?
   
---

### 🔹 **2. Eloquent & Relationships**
1. Explain all types of Eloquent relationships: `hasOne`, `hasMany`, `belongsTo`, `belongsToMany`, `morphMany`, etc.
2. How do you `eager load` relationships to avoid `N+1` problems?
3. What is the difference between `with()`, `load()`, and `lazy loading`?
4. What is the use of pivot tables in `many-to-many` relationships?
5. Explain `polymorphic relationships` with a real example.

---

### 🔹 **3. Request Validation & Forms**

1. What are `form requests` in Laravel and how are they used?
2. How do you define `custom error` messages in validation?
3. How would you validate a unique field except for the current model while updating?

---

### 🔹 **4. Middleware & Auth**

1. What is `middleware` in Laravel? How do you create and register it?
2. How does Laravel `authentication` work under the `hood`?
3. What is the difference between `auth:sanctum` and `auth:api` middleware?
4. How would you `restrict route access` based on `user roles`?

---

### 🔹 **5. API Development**

1. How do you create `RESTful APIs` in Laravel?
2. What are `API Resources`? How are they different from normal controllers?
3. How do you implement `token-based authentication` using Laravel `Sanctum` or `Passport`?
4. How would you test your `API using Postman`?
5. How would you handle `validation errors` in an API response?

---

### 🔹 **6. AJAX & Frontend Integration**

1. How do you submit a form using `AJAX` in Laravel?
2. How do you handle `CSRF` protection when using `jQuery AJAX`?
3. How do you return validation errors via AJAX?

---

### 🔹 **7. Artisan, Migrations & Seeders**

1. What are Artisan commands you frequently use?
2. How do you create and run migrations?
3. How do you seed the database with fake data using factories?
4. How would you write a custom Artisan command?

---

### 🔹 **8. PHP & OOP Concepts**

1. Explain `inheritance`, `interfaces`, and `traits` in PHP.
2. What is `dependency injection` and how does Laravel use it?
3. What are design patterns you have used (like `Repository, Singleton`, etc.)?
4. How is `abstract class` different from `interface` in PHP?

---

### 🔹 **9. Testing**

1. How do you write `feature and unit` tests in Laravel?
2. What’s the difference between `PHPUnit` and Laravel `Dusk`?
3. How do you test `validation` and `authorization` in your controllers?

---

### 🔹 **10. Real-Life Scenarios**

1. How do you optimize a slow Laravel application?
2. What would you do if an API call in production fails without error logs?
3. How do you deploy Laravel on a shared hosting vs a VPS?

---



