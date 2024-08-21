# Cleup - Global Web Application Store
Allows you to manage data from anywhere in your web application.

#### Installation

Install the `cleup/store-manager` library using composer:

```
composer require cleup/store-manager
```

Based on the library [cleup/arr](https://github.com/cleup/arr) 

#### Usage

```php 
use Cleup\Components\StoreManager\Store;

# Set - Sets the value by overwriting all items
Store::set('key', 'value');
Store::set('user', [
    'name'  => 'Edward',
    'data' => [
        'age' => 21
    ],
    "tasks" => [
        "Read the book",
        "Go to a restaurant"
    ]
]);
Store::set('user.data.gender', 'male');
/*
[
   "key"  => "value",
   "user" => [
        "name" => "Edward",
        "data" => [
            "age" => 21,
            "gender" => "male",
            "tasks" => [
                0 => "Read the book",
                1 => "Go to a restaurant"
            ]
        ]
    ]
]
*/

# Replace - Replaces the old value with a new one, without overwriting the entire store array or its fragment
Store::replace('user.data', ['age' => 30]);
/*
...
  "data" => [
    "age" => 30,
    ...
...
*/

# Push - Adds a new element to the end of the store array
Store::push('user.data.tasks', 'Feeding the cat');
/*
...
    "tasks" => [
      0 => "Read the book",
      1 => "Go to a restaurant",
      2 => "Feeding the cat"
    ]
...
*/

# Unshift - Adds a new element to the beginning of the store array
Store::unshift('user.data.tasks', 'Watch a movie');
/*
...
    "tasks" => [
      0 => "Watch a movie",
      1 => "Read the book",
      2 => "Go to a restaurant",
      3 => "Feeding the cat"
    ]
...
*/

# Delete - Deletes a value from the store array
Store::delete('user.data.gender');
/*
...
  "data" => [
    "age" => 30,
    "tasks" => [
      0 => "Read the book",
      1 => "Go to a restaurant"
...
*/

# Get - Recursively get the value of the store array
Store::get('user.name'); // Edward
Store::get('user.data.tasks.0'); // Watch a movie
Store::get('user.data.tasks');
/*
[
    0 => "Watch a movie",
    1 => "Read the book",
    2 => "Go to a restaurant",
    3 => "Feeding the cat"
]
*/

# Has - Does the store's array contain the specified key
Store::has('user.data.tasks.1'); // true
Store::has('user.data.work'); // false
```
