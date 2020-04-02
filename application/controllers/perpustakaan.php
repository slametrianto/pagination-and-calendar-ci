<?php

class Perpustakaan extends CI_Controller{

    public function index(){

        $config['base_url'] = site_url('perpustakaan/index');
        $config['total_rows'] = $this->db->count_all('tb_buku');
        $config['per_page'] = 5;
        $config['url_segment'] = 3;

        $choice  = $config['total_rows'] / $config['per_page'];

        $config["num_links"] = floor($choice);

       

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        


        $data['data'] = $this->perpustakaan_model->get_data($config["per_page"], $data['page'])->result();
        
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('pustaka', $data);
    }
}