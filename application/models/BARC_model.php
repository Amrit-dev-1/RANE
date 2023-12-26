<?php
class BARC_model extends CI_Model {
    public function insertData($data) {
             

         
    
            if ($this->db->insert('barc_submit', $data)) {
                echo "Data inserted successfully!";
            } else {
                echo "Insertion failed: " . $this->db->error(); 
            }
            

        }
    }

