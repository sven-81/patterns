<?php

declare(strict_types=1);

$pdo = new PDO('mysql:host=localhost;dbname=eav_example', 'root', '');

function createEntity($name)
{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO entities (name) VALUES (:name)");
    $stmt->execute(['name' => $name]);

    return $pdo->lastInsertId();
}

function createAttribute($name)
{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO attributes (name) VALUES (:name)");
    $stmt->execute(['name' => $name]);

    return $pdo->lastInsertId();
}

function setValue($entityId, $attributeId, $value)
{
    global $pdo;
    $stmt = $pdo->prepare(
        "INSERT INTO values (entity_id, attribute_id, value) VALUES (:entity_id, :attribute_id, :value)"
    );
    $stmt->execute(['entity_id' => $entityId, 'attribute_id' => $attributeId, 'value' => $value]);
}

function getEntityAttributes($entityId)
{
    global $pdo;
    $stmt = $pdo->prepare(
        "
        SELECT a.name AS attribute, v.value 
        FROM values v
        JOIN attributes a ON v.attribute_id = a.id
        WHERE v.entity_id = :entity_id
    "
    );
    $stmt->execute(['entity_id' => $entityId]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$productId = createEntity("Laptop");
$priceAttributeId = createAttribute("Price");
$colorAttributeId = createAttribute("Color");
$weightAttributeId = createAttribute("Weight");

setValue($productId, $priceAttributeId, "1000 USD");
setValue($productId, $colorAttributeId, "Silver");
setValue($productId, $weightAttributeId, "2.5 kg");

$attributes = getEntityAttributes($productId);

echo "Product Attributes:\n";
foreach ($attributes as $attribute) {
    echo $attribute['attribute'] . ": " . $attribute['value'] . "\n";
}

