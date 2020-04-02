<?php
 class Kalender extends CI_Controller{
     
     public function index($tahun = NULL, $bulan = NULL){

         $kalender = array(
             'star_day' => 'monday',
             'show_next_prev' => TRUE,
             'next_pre_url' => base_url(). "index.php/kalender/index",
             'month_type' => 'short',
             'day_type' => 'short'
         );

         $this->load->library('calendar', $kalender);

         $data['kalender'] = $this->calendar->generate($tahun, $bulan);
         $this->load->view('kalender_view', $data);

     }
 }