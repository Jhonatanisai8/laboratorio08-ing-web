<?php

class Material extends Model

{
    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM materiales");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($codigo)
    {
        $stmt = $this->db->prepare("SELECT * FROM materiales where codigo  = ?");
        $stmt->execute([$_GET["codigo"]]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO materiales (nombre, precio,cantidad) VALUES (?, ?,?)");
        return $stmt->execute([$data['nombre'], $data['precio'], $data['cantidad']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE materiales SET nombre = ?, precio = ?, cantidad = ? WHERE codigo = ?");
        return $stmt->execute([$data['nombre'], $data['precio'], $data['cantidad'], $id]);
    }

    public function delete($codigo)
    {
        $stmt = $this->db->prepare("DELETE FROM materiales WHERE codigo = ?");
        return $stmt->execute([$codigo]);
    }
}