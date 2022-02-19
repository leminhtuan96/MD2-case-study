<?php

namespace app\controller;

use app\model\NoteModel;

class NoteController
{
    public $notecontroller;

    public function __construct()
    {
        $this->notecontroller = new NoteModel();
    }

    public function showAllNote()
    {
        $notes = $this->notecontroller->getAll();
        include "app/view/list.php";
    }

    public function delete()
    {
        $this->notecontroller->delete($_GET["id"]);
        header("location:index.php?page=note-list");
    }

    public function getById()
    {
        $note = $this->notecontroller->getById($_GET["id"]);
        include "app/view/detail.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            include "app/view/create.php";
        }else{
            $this->notecontroller->createNote($_POST);
            header("location:index.php?page=note-list");
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $note = $this->notecontroller->getById($_GET["id"]);
            include "app/view/update.php";
        }else{
            $this->notecontroller->updeteNote($_POST,$_REQUEST["id"]);
            header("location:index.php?page=note-list");
        }
    }
}