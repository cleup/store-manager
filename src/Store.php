<?php

namespace Cleup\Components\StoreManager;

use Cleup\Helpers\Arr;

class Store
{

    /**
     * Main data storage
     * 
     * @var array
     */
    protected static array $store = array();

    /**
     * Make a change to the Store
     * 
     * @param string|int $key
     * @param mixed $value 
     * @return void
     */
    public static function set($key, $value = '')
    {
        Arr::set($key, $value, static::$store);
    }

    /**
     * Insert a value at the end of the element array
     * 
     * @param string|int $key
     * @param mixed $value 
     * @return void
     */
    public static function push($key, $value = '')
    {
        Arr::push($key, $value, static::$store);
    }

    /**
     * Insert a value at the beginning of the element array
     * 
     * @param string|int $key
     * @param mixed $value 
     * @return void
     */
    public static function unshift($key, $value = '')
    {
        Arr::unshift($key, $value, static::$store);
    }

    /**
     * Replaces the primary value with the secondary value
     * 
     * @param string|int $key
     * @param mixed $value
     * @return void
     */
    public static function replace($key, $value = '')
    {
        Arr::replace($key, $value, static::$store);
    }

    /**
     * Get the store value
     * 
     * @param string|int $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        return Arr::get($key, static::$store, $default);
    }

    /**
     * Check if this value is available in the store.
     * 
     * @param string|int $key
     * @return bool
     */
    public static function has($key)
    {
        return Arr::has($key, static::$store);
    }

    /**
     * Delete a value from the data store
     * 
     * @param string|int $key
     * @return void
     */
    public static function delete($key)
    {
        Arr::delete($key, static::$store);
    }
}
