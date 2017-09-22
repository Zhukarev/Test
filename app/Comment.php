<?php
include_once 'Db.php';

/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 17.09.2017
 * Time: 14:29
 */
class Comment
{
    /*
        внесение данных таблицу 'comment'
        */
    public function insertComent($author, $coment, $image)
    {
        $pdo = Db::getInstance()->get_pdo();
        $sql = "INSERT INTO comment
          SET
          `coment` = '{$coment}',
          `author` = '{$author}',
          `image` = '{$image}'";

        $rs = $pdo->query($sql);
        return $rs;
    }

    /*
    выбор данных в таблицы 'comment'
    */
    public function getComment()
    {

        $pdo = Db::getInstance()->get_pdo();

        $sql = "SELECT * FROM comment";

        $rs = $pdo->prepare($sql);
        $rs->execute();
        return $rs->fetchall(PDO::FETCH_ASSOC);
    }

    /*
     выбор существующих названий рисунков
     */

    public function getImage(){
        $pdo = Db::getInstance()->get_pdo();
        $sql = "SELECT `image` FROM comment";
        $rs = $pdo->prepare($sql);
        $rs->execute();
        return $rs->fetchall(PDO::FETCH_ASSOC);
    }
}