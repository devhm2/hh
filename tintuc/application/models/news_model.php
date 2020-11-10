<?php

class News_model extends CI_Model {

    function getnews($id) { //$id là idbaiviet trong bảng news_baiviet

        $this->db->where('idbaiviet', $id);
        $query = $this->db->get('news_baiviet');
        return $query->row_array();
    }

    function getnewsfromloaitin($id) { //$id là idloaitin trong bảng news_loaitin
        
        $this->db->where('idloaitin', $id);
        //'idloaitin' cua bang news_baiviet = $id cua danh muc trong bang news_loaitin
        $query = $this->db->get('news_baiviet');
        return $query->result_array();
    }

    function lienquan($id) { //$id là idbaiviet trong bảng news_baiviet
        //  $sql="select * from news_baiviet where idloaitin='$idloaitin' and idbaiviet!='$id')";

        $idloaitin = $this->getloaitin($id);
        //$idloaitin nam trong bang news_loaitin

        $sql = "select * from news_baiviet where idloaitin='$idloaitin' and idbaiviet!='$id'";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    function getloaitin($id) {
       
        $this->db->where('idbaiviet', $id);
        $query = $this->db->get('news_baiviet')->row_array();
        return $query['idloaitin'];
    }

    function tincapnhat() {
        $sql = "select * from news_baiviet order by idbaiviet desc limit 8";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function tinmoi() {
        $sql = "select * from news_baiviet order by idbaiviet desc limit 8";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function menu() {
        $sql = "select * from news_loaitin order by thutu desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function loaitin() {
        $this->db->where('trangthai', 'Hiển thị');
        $query = $this->db->get('news_loaitin');
        return $query->result_array();
    }

    function newsloaitin($idloaitin) {
        $sql = "select * from news_baiviet 
	where idloaitin=$idloaitin order by idbaiviet desc limit 5 ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    //admin
    function lietkeloaitin() {
        $sql = "select * from news_loaitin order by thutu desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function getloaitinfromid($id) {
        $this->db->where('idloaitin', $id);
        $query = $this->db->get('news_loaitin');
        return $query->row_array();
    }

    function lietkebaiviet() {
        $sql = "select idbaiviet,tenbaiviet,anhminhhoa,tomtat,noidung,news_loaitin.tenloaitin,news_baiviet.trangthai,news_baiviet.thutu
	 from news_baiviet,news_loaitin where news_loaitin.idloaitin=news_baiviet.idloaitin  order by thutu desc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function themloaitin($tenloaitin, $trangthai, $thutu) {
        $sql = "insert into news_loaitin(tenloaitin,trangthai,thutu) values('$tenloaitin','$trangthai','$thutu')";
        $query = $this->db->query($sql);
    }

    function sualoaitin($tenloaitin, $trangthai, $thutu, $id) {
        $sql = "update news_loaitin set tenloaitin='$tenloaitin',trangthai='$trangthai',thutu='$thutu' 
		where idloaitin=$id";
        $query = $this->db->query($sql);
    }

    function xoaloaitin($id) {
        $sql = "delete from news_loaitin where idloaitin='$id'";
        $query = $this->db->query($sql);
    }

    function thembaiviet($tenbaiviet, $dich, $tomtat, $noidung, $loaitin, $trangthai, $thutu) {
        $sql = "insert into news_baiviet(tenbaiviet,anhminhhoa,tomtat,noidung,idloaitin,trangthai,thutu)
		values('$tenbaiviet','$dich','$tomtat','$noidung','$loaitin','$trangthai','$thutu')";
        $query = $this->db->query($sql);
    }

    function suabaiviet($tenbaiviet, $dich, $tomtat, $noidung, $loaitin, $trangthai, $thutu, $id) {

        $sql = "update news_baiviet set tenbaiviet='$tenbaiviet',anhminhhoa='$dich',tomtat='$tomtat',noidung='$noidung',idloaitin='$loaitin',trangthai='$trangthai',thutu='$thutu'
		where idbaiviet='$id'";
        $query = $this->db->query($sql);
    }

    function xoabaiviet($id) {
        $sql = "delete from news_baiviet where idbaiviet='$id'";
        $query = $this->db->query($sql);
    }

}
