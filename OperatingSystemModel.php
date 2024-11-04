<?php

class OperatingSystemModel
{
    private string $name;
    private string $type;
    private string $minRequirements;
    private string $memory;

    public function __construct($name, $type, $minRequirements, $memory)
    {
        $this->name = $name;
        $this->type = $type;
        $this->minRequirements = $minRequirements;
        $this->memory = $memory;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getMinRequirements()
    {
        return $this->minRequirements;
    }

    public function getMemory()
    {
        return $this->memory;
    }

    public function displayInfo()
    {
        return "
        <tr>
        <td>$this->name</td>
        <td>$this->type</td>
        <td>$this->minRequirements</td>
        <td>$this->memory</td>
        </tr>
        ";
    }
}