
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    private $table = 'siswa';
    

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'nama',  //samakan dengan atribute name pada tags input
                'label' => 'nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tgl_lhr',
                'label' => 'tgl_lhr',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'agama',
                'label' => 'agama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'gender',
                'label' => 'gender',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'ststus',
                'label' => 'ststus',
                'rules' => 'trim|required'
            ],
        
        ];
    }

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_siswa" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where Id_siswa='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_siswa", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by Id_siswa desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
                $config['upload_path']          = './img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
               

                $this->upload->initialize($config);
			    $this->upload->do_upload('foto');
			    $data = $this->upload->data();
		        // print_r($data);

		// $foto = $_FILES['foto'];
		// print_r($foto)
        
        $data = array(
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
            "tgl_lhr" => $this->input->post('tgl_lhr'),
            "agama" => $this->input->post('agama'),
            "gender" => $this->input->post('gender'),
            "ststus" => $this->input->post('ststus'),
            "foto" => $data['file_name']
        );
        
        return $this->db->insert($this->table, $data);
        $this->load->view('siswa/list/');
        
    }

    //edit data mahasiswa
    public function update()
    {
         $config['upload_path']          = './img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
               

                $this->upload->initialize($config);
                $this->upload->do_upload('foto');
                $data = $this->upload->data();

        $data = array(
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
            "tgl_lhr" => $this->input->post('tgl_lhr'),
            "agama" => $this->input->post('agama'),
            "gender" => $this->input->post('gender'),
            "ststus" => $this->input->post('ststus'),
            "foto" => $data['file_name']
        );

        return $this->db->update($this->table, $data, array('id_siswa' => $this->input->post('id_siswa')));
        $this->load->view('siswa/list');
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_siswa" => $id));
    }
}