CREATE DATABASE rule_engine_db;

USE rule_engine_db;

CREATE TABLE rules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rule_text TEXT NOT NULL
);

-- Insert an example rule
INSERT INTO rules (rule_text) VALUES ('age > 30 AND salary > 50000');
