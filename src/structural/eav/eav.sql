CREATE TABLE entities
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE attributes
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE values
(
    entity_id    INT,
    attribute_id INT,
    value        VARCHAR(255),
    FOREIGN KEY (entity_id) REFERENCES entities (id),
    FOREIGN KEY (attribute_id) REFERENCES attributes (id)
);
