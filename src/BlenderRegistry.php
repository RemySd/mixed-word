<?php

namespace RemySd;

use RemySd\Type\BlenderInterface;
use Exception;
use RemySd\Type\BlenderReverse;

class BlenderRegistry
{
    private array $blenders = [];

    private static ?BlenderRegistry $instance = null;

    public static function getInstance(): BlenderRegistry
    {
        if (self::$instance === null) {
            self::$instance = new BlenderRegistry();
        }

        return self::$instance;
    }

    public function __construct()
    {
        $this->blenders[BlenderReverse::getName()] = new BlenderReverse();
    }

    /**
     * @param string $name
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
     * @param BlenderInterface $value
     *
     * @return $this
     * @throws Exception
     */
    public function set(string $name, BlenderInterface $value): self
    {
        if (array_key_exists($name, $this->blenders)) {
            throw new Exception('Blender already exist');
        }

        $this->blenders[$name] = $value;

        return $this;
    }
}
