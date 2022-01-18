<?php
namespace App\DTO;

class Discount
{
    private $type;
    private $value;
    private $priority;

    /**
     * @param $type
     * @param $value
     * @param $priority
     */
    public function __construct($type, $value, $priority)
    {
        $this->type = $type;
        $this->value = $value;
        $this->priority = $priority;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }
}