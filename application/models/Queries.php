<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Author: Martin Njuguna
 *  Date: 24 July 2018
 */
class Queries extends CI_Model {

  public function _construct(){
    parent::__construct;
  }

  public function get_products(){
    return $this->db->get('product')->result_array();
  }

  public function get_employees(){
    return $this->db->get('employees')->result_array();
  }

  public function add_employee($data){
    //enforce sql securities
    return $this->db->insert('employees', $data);
  }







}
?>
