<?php

namespace Rhgksrua\Ioc;

class Ioc
{
    /**
     * Contains closures to instantiate.
     */
    protected static $registry = array();

    /**
     * Register closure.
     *
     * This is where all the injections are kept.
     *
     * @param string $name The name of object
     * @param Closure $resolve Function that contains everything to instantiate.
     */
    public static function register($name, \Closure $resolve)
    {
        static::$registry[$name] = $resolve;
    }

    /**
     * Resolves required object.
     *
     * @param string $name The name of object
     * 
     * @return instance Registered object
     *
     * @throw Exception when requested name does not exist
     */
    public static function resolve($name)
    {
        if (static::registered($name))
        {
            $name = static::$registry[$name];
            return $name();
        }

        throw new Exception('Nothing registered with that name.');
    }

    /**
     * Returns true if object is in the container
     *
     * @param string $name The name of object
     *
     * @return bool name exists or it does not
     */
    public static function registered($name)
    {
        return array_key_exists($name, static::$registry);
    }
}

