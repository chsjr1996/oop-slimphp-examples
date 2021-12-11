<?php

namespace App\Models;

abstract class AbstractVehicle implements IVehicle
{
    protected string $type = '';

    protected string $model = '';

    protected string $name = '';

    protected string $movimentType = '';

    // Getters & Setters
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getMovimentType(): string
    {
        return $this->movimentType;
    }

    /**
     * @param string $movimentType
     * @return self
     */
    public function setMovimentType(string $movimentType): self
    {
        $this->movimentType = $movimentType;
        return $this;
    }
}
