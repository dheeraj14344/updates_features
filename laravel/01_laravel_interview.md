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
   In Laravel, both `Route::get()` and `Route::resource()` are used to define routes, but they serve **different purposes** and are used in different scenarios.

✅ `Route::get()`

* Defines a **single route** that responds to an HTTP GET request.
* Used when you want to define a specific route manually.

```php
Route::get('/users', [UserController::class, 'index']);
```

This defines a GET route for `/users` that uses the `index` method of `UserController`.


✅ `Route::resource()`

* Automatically creates **multiple routes** for a controller based on RESTful conventions.
* Useful when you need to implement **CRUD operations** (Create, Read, Update, Delete).

#### 🔧 Example:

```php
Route::resource('users', UserController::class);
```

This one line creates **7 routes**:

| HTTP Verb | URI                | Action  | Controller Method        |
| --------- | ------------------ | ------- | ------------------------ |
| GET       | /users             | index   | `UserController@index`   |
| GET       | /users/create      | create  | `UserController@create`  |
| POST      | /users             | store   | `UserController@store`   |
| GET       | /users/{user}      | show    | `UserController@show`    |
| GET       | /users/{user}/edit | edit    | `UserController@edit`    |
| PUT/PATCH | /users/{user}      | update  | `UserController@update`  |
| DELETE    | /users/{user}      | destroy | `UserController@destroy` |


| Situation                                            | Use                                  |
| ---------------------------------------------------- | ------------------------------------ |
| You need only one or two routes                      | `Route::get()`, `Route::post()` etc. |
| You are building full CRUD for a resource            | `Route::resource()`                  |
| You want more control or custom naming               | Use individual route methods         |
| You need API-specific routes without `create`/`edit` | Use `Route::apiResource()`           |


You can customize or limit `Route::resource()` like:

```php
Route::resource('users', UserController::class)->only(['index', 'show']);
```

or

```php
Route::resource('users', UserController::class)->except(['edit', 'create']);
```
---

3. How do you create a `route group` with `middleware`?
   In Laravel, you can create a **route group with middleware** using the `Route::middleware()` method. This allows you to apply the same middleware to **multiple routes** — keeping your code clean and DRY.

---

### ✅ Syntax:

```php
Route::middleware(['middleware_name'])->group(function () {
    // Your routes here
});
```

---

### 🧑‍💻 Example with `auth` Middleware:

```php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/settings', [SettingsController::class, 'index']);
});
```

---

✅ Route Group with `prefix`, `namespace`, or `name` (optional but useful):

```php
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    //
});
```

* URL will be like: `/admin/dashboard`
* Named route: `admin.dashboard`

---

4. What are `named routes` and why are they useful?
✅ What Are Named Routes in Laravel?

**Named routes** in Laravel are routes that have been assigned a unique name. This name can be used to **generate URLs or redirects** instead of hardcoding paths.


You define it using the `->name()` method:

```php
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
```

| Benefit               | Explanation                                                                                    |
| --------------------- | ---------------------------------------------------------------------------------------------- |
| ✅ **URL Generation**  | Easily generate URLs using route names, not hardcoded paths.                                   |
| ✅ **Redirects**       | Redirect users using route names.                                                              |
| ✅ **Maintainability** | If the URL changes, only the route definition needs to be updated — not every place it's used. |
| ✅ **Cleaner Code**    | Makes your views and controllers easier to read and manage.                                    |

```blade
<a href="{{ route('profile') }}">View Profile</a>
```

```php
return redirect()->route('profile');

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

route('user.show', ['id' => 10]);
// Output: http://yourapp.com/user/10
```

---

### 📌 Summary

| Feature         | Named Route Example               |
| --------------- | --------------------------------- |
| Define          | `->name('profile')`               |
| Generate URL    | `route('profile')`                |
| Redirect        | `redirect()->route('profile')`    |
| With Parameters | `route('user.show', ['id' => 1])` |

---
  
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



