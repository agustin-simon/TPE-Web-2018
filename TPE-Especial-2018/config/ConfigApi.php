<?php


class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#GET'=> 'ComentariosApiController#GetComentarios',
      'comentario#POST'=> 'ComentariosApiController#InsertComentario',
      'comentario#DELETE'=> 'ComentariosApiController#DeleteComentarios',  
    ];

}

 ?>
