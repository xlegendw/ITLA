<?php

class core_persona{

     static function guardar($persona){
         $CI =& get_instance();

         $CI->db->insert('persona',$persona);

    }

    static function listado(){
        $CI =& get_instance();
        $rs = $CI->db->get('persona')->result();
        return $rs;
    }

    static function borrar($cedula){
        $CI =& get_instance();
        $sql = "delete from persona where cedula=?";
        $CI->db->query($sql,$cedula);
    }

    static function personac($cedula){
        $CI =& get_instance();
        $CI->db->where('cedula',$cedula);
        $rs = $CI->db->get('persona')->result();
        return $rs;
    }
}