<?php

class Cliente extends Model
{
    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM clientes");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO clientes (dni, nombre, email, telefono) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['dni'], $data['nombre'], $data['email'], $data['telefono']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE clientes SET dni = ?, nombre = ?, email = ?, telefono = ? WHERE id = ?");
        return $stmt->execute([$data['dni'], $data['nombre'], $data['email'], $data['telefono'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM clientes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}