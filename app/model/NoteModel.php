<?php

namespace app\model;

class NoteModel
{
    public $notemodel;

    public function __construct()
    {
        $db = new DBConnect();
        $this->notemodel = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from note";
        $stmt = $this->notemodel->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $sql="delete from note where id = $id";
        $this->notemodel->query($sql);
    }

    public function getById($id)
    {
        $sql = "select * from note where id = $id";
        $stmt = $this->notemodel->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function createNote($data)
    {
        $sql = "insert into note (title, content, type_id) values (?,?,?)";
        $stmt = $this->notemodel->prepare($sql);
        $stmt->bindParam(1,$data["title"]);
        $stmt->bindParam(2,$data["content"]);
        $stmt->bindParam(3,$data["type_id"]);
        $stmt->execute();
    }

    public function updeteNote($data,$id)
    {
        $sql ="update note set title = ?, content = ?, type_id = ? where id = ?";
        $stmt = $this->notemodel->prepare($sql);
        $stmt->bindParam(1,$data["title"]);
        $stmt->bindParam(2,$data["content"]);
        $stmt->bindParam(3,$data["type_id"]);
        $stmt->bindParam(4,$id);
        $stmt->execute();
    }
}