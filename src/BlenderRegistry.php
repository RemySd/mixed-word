<?php

namespace MixedWord;

use MixedWord\BlenderInterface;
use Exception;

class BlenderRegistry
{
    const BLENDER_NAMESPACE = 'MixedWord\\Type\\';

    private $blenders = [];

    private static $instance = null;

    public static function getInstance(): BlenderRegistry
    {
        if (self::$instance === null) {
            self::$instance = new BlenderRegistry();
        }

        return self::$instance;
    }

    public function __construct()
    {
        $blenderClassList = array_diff(scandir(dirname(__FILE__) . '//Type' ), array('..', '.'));

        foreach($blenderClassList as $className) {
            $this->set(explode('.', $className)[0]);
        }
    }

    /**
     * @param string $name
     *
     * @return BlenderInterface
     * @throws Exception
     */
    public function get(string $name): BlenderInterface
    {
        if (!array_key_exists($name, $this->blenders)) {
            throw new Exception('Blender not found');
        }

        return $this->blenders[$name];
    }

    /**
     * @param string $name
     *
     * @return $this
     * @throws Exception
     */
    public function set(string $name): self
    {
        if (array_key_exists($name, $this->blenders)) {
            throw new Exception('Blender already exist');
        }

        $classname = self::BLENDER_NAMESPACE . $name;
        $blender = new $classname();

        $this->blenders[$name] = $blender;

        return $this;
    }
}
