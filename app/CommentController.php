<?php

include_once 'Comment.php';

class CommentController
{
    public $first;
    public $second;

    /*
    проверка загружаемого файла на соответствие типа
     */
    public function validateImg($img)
    {
        $file = mime_content_type($img);
        $arr = ['image/gif', 'image/jpeg', 'image/png'];
        if (in_array($file, $arr)) {
            return true;
        } else {
            return false;
        }
    }

    /*
     Переименование рисунков с одинаковыми именами
     */

    public function renameImg($img)
    {
        $date = time();

        $com = new Comment();
        $comment = $com->getImage();
        $key = array_search($img, array_column($comment, 'image'));
        if ($key) {
            $img = $date . $img;
            return $img;
        } else {
            return $img;
        }
    }

    /*
    внесение данных в БД
    */
    public function insert()
    {
        if (!$_POST['email']) {         //проверка на бота
            if (!isset($_FILES['image']['name']) || $_FILES['image']['name'] == NULL) {
                $image = 'Chrome_Owned_96x96[1].png';
            } elseif ($this->validateImg($_FILES['image']['tmp_name'])) {
                $fileName = $_FILES['image']['name'];
                $fileName = $this->renameImg($fileName);
                copy($_FILES['image']['tmp_name'], "../www/images/" . basename($fileName));
                $image = $fileName;
            } else {
                echo "<script> alert('Система следит за тобой - систему не обманешь! Загружаемый файл не соответствует одному из возможных форматов(gif, jpg, png)');</script>";
                $image = 'Chrome_Owned_96x96[1].png';
            }

            $comment = new Comment();
            $comment->insertComent(htmlspecialchars($_POST['author']), htmlspecialchars($_POST['coment']), $image);
        } else {
            echo "<script> alert('Сохранено, возможно');</script>";
        }
    }

    /*
    выбор данных в БД
    */
    public function index()
    {
        $db = new Comment();
        $comment = $db->getComment();
        include_once 'views/layout.php';
    }


}