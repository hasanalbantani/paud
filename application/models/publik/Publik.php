<?php 
     
     defined('BASEPATH') OR exit('No direct script access allowed');
     
     class Publik extends CI_Model {
     
          private $table = 'menu';

          public function getMenu()
          {
               $this->db->select('*');
               $this->db->from($this->table);
               $this->db->where('status = 0');
               
               $result = $this->db->get();
               return $result->result();
          }

          public function getParent($id)
          {
               return $this->db->get_where($this->table, [
                    'id_menu' => $id
               ])->row();
          }

          public function getConfig()
          {
               $this->db->select('*');
               $this->db->from('config');
               
               $result = $this->db->get();
               return $result->result();
          }
     
     }
     
     /* End of file Publik.php */
     
?>