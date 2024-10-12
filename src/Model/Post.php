<?php

namespace App\Model;

use App\Config\Database;
use PDO;

class Post extends Database
{

    public $slug;

    public function __construct()
    {
        $this->slug;
    }

    public function post()
    {
        $this->Conection();

        $q = "SELECT ( SELECT count(*) FROM likes INNER JOIN publicaciones on ID_POST = POST_ID WHERE   likes.TIPO_LIKE =0) as count_like, users.USERNAME, users.NOMBRE, users.APELLIDO, users.TOTEM,categorias.ID_CAT,categorias.CATEGORIA,publicaciones.COMMENTS_COUNT, publicaciones.ID_POST,publicaciones.LINK,publicaciones.TITULO_POST,publicaciones.CONTENIDO,publicaciones.IMG_PORTADA, DATE_FORMAT(DATE_POST, '%d-%m-%Y') AS DATE FROM publicaciones 
        INNER JOIN categorias on categorias.ID_CAT = publicaciones.FK_CAT INNER JOIN users on users.ID = publicaciones.FK_USER
        WHERE DISPONIBLE = 1 AND LINK = '$this->slug'";

        $stm =  $this->cnx->prepare($q);
        $stm->execute();

        return $stm->fetchAll();
    }
}
