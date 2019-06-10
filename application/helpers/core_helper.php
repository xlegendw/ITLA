<?php

class core_vehiculo{

     static function guardar($vehiculo){
        $CI =& get_instance();
        if(isset($vehiculo['id']) && $vehiculo['id'] > 0){
            $CI->db->where('id', $vehiculo['id']);
            $CI->db->update('vehiculo', $vehiculo);
        }else{
            $CI->db->insert('vehiculo',$vehiculo);
        }

    }

    static function guardarv($vehiculo){
        $CI =& get_instance();
        $CI->db->insert('ventas',$vehiculo);
   }

    static function guardarc($cliente){

        $CI =& get_instance();
        if(isset($cliente['id']) && $cliente['id'] > 0){
            $CI->db->where('id', $cliente['id']);
            $CI->db->update('cliente', $cliente);
        }else{
            $CI->db->insert('cliente',$cliente);
        }

   }



    static function listado(){
        $CI =& get_instance();
        $rs = $CI->db->get('vehiculo')->result();
        return $rs;
    }

    static function listadov(){
        $CI =& get_instance();
        $rs = $CI->db->get('ventas')->result();
        return $rs;
    }

    static function listadoc(){
        $CI =& get_instance();
        $rs = $CI->db->get('cliente')->result();
        return $rs;
    }

    static function sold($id){
        $CI =& get_instance();
        $sql = "delete from vehiculo where id=?";
        $CI->db->query($sql,$id);
    }


    static function vehiculo_id($id){
        $CI =& get_instance();
        $CI->db->where('id',$id);
        $rs = $CI->db->get('vehiculo')->result();
        return $rs;
    }

    static function cliente_id($id){
        $CI =& get_instance();
        $CI->db->where('id',$id);
        $rs = $CI->db->get('cliente')->result();
        return $rs;
    }
}