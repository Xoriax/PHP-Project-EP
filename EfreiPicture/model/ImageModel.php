<?php

class ImageModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllImages()
    {
        $query = "SELECT * FROM images";
        $result = $this->db->conn->query($query);

        $images = [];
        while ($row = $result->fetch_assoc()) {
            $images[] = $row;
        }

        return $images;
    }

    public function getImageById($imageId)
    {
        $query = "SELECT * FROM images WHERE id = ?";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("i", $imageId);
        $stmt->execute();

        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function add($data)
    {
        $query = "INSERT INTO images (titre, description, prix, image) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bind_param("ssds", $data['title'], $data['description'], $data['price'], $data['imagePath']);

        return $stmt->execute();
    }

}

?>