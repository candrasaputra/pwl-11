<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_m extends CI_Model {

    
    public function cari($id_kelas)
    {
        return $this->db->where('id_kelas', $id_kelas)
                        ->limit(1)
                        ->get($this->db_tabel)
                        ->row();
    }  
}
/* End of file kelas_model.php */
/* Location: ./application/models/kelas_model.php */