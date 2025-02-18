<?php

declare(strict_types=1);

namespace patterns\structural\eav;

class EntityManager
{
    private array $entities = [];

    private array $attributes = [];

    private int $nextEntityId = 1;

    private int $nextAttributeId = 1;


    public function createEntity($name): Value
    {
        $entity = new Value($this->nextEntityId++, $name);
        $this->entities[$entity->getId()] = $entity;

        return $entity;
    }


    public function createAttribute($name): Attribute
    {
        $attribute = new Attribute($this->nextAttributeId++, $name);
        $this->attributes[$attribute->getId()] = $attribute;

        return $attribute;
    }


    public function setEntityValue($entity, $attribute, $value): void
    {
        $entity->setValue($attribute, $value);
    }


    public function getEntityAttributes(Value $value): array
    {
        return $value->getValues();
    }
}
