<?php

namespace App\Services\Storage;


use App\Services\Storage\Contracts\StorageInterface;
use Countable;

class SessionStorage implements StorageInterface, Countable
{

    private $bucket;

    public function __construct($bucket = 'default')
    {
        $this->bucket = $bucket;
    }

    public function count()
    {
        return count($this->all());
    }

    public function set($index, $value)
    {
        session()->put($this->bucket . '.' . $index, $value);
    }

    public function get($index)
    {
        return session()->get($this->bucket . '.' . $index);
    }


    public function all()
    {
        return session()->get($this->bucket);
    }

    public function exist($index)
    {
        return session()->has($this->bucket . '.' . $index);
    }

    public function unset($index)
    {
        session()->forget($this->bucket . '.' . $index);
    }

    public function clear()
    {
        session()->forget($this->bucket);
    }
}
