<?php

class Gallery
{

    private $images = [];
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getImages($desc = false, $limit = 999)
    {
        $order = $desc ? "DESC" : "ASC";

        $stmt = $this->pdo->query(
            "SELECT name, note, uploaded"
            . " FROM image"
            . " ORDER BY uploaded"
            . " " . $order
            . " limit " . $limit);
        foreach ($stmt as $row) {
            $this->images[] = new Image($row['name'], $row['note'], $row['uploaded']);
        }

        return $this->images;
    }

    public function addImage($name, $note = "")
    {
        $name = $this->pdo->quote($name);
        // `note` seem not useful in the context... insert empty string anyway.
        $this->pdo->exec("INSERT INTO image (uploaded, name, note) VALUES (now(), $name, '')");
    }
}