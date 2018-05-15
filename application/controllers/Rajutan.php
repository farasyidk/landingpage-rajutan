<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rajutan extends CI_Controller {
  function __construct(){
      parent::__construct();
      $this->load->model('rajutan_model');
      $this->load->helper('url_helper');

  }


	public function index() {
    $this->rajutan_model->counter('data');
    $data['pengerjaan']=$this->rajutan_model->get_rajutan('pengerjaan');
    $data['about']=$this->rajutan_model->get_rajutan('about');
    $data['barang']=$this->rajutan_model->get_rajutan('barang');
    $data['kualitas']=$this->rajutan_model->get_rajutan('kualitas');
    $data['harga']=$this->rajutan_model->get_rajutan('harga');
    $data['testimoni']=$this->rajutan_model->get_testimoni();
    $this->load->view('frontend/rajutan',$data);
	}


  public function pagination($start=0) {
    $this->load->library('pagination');
    $jumlah_data = $this->rajutan_model->jum_batik();
    $config['base_url'] = base_url()."pagination";
    $config['per_page'] = 2;
    $config['total_rows'] = $jumlah_data;

    $config['first_link'] = ' << ';
    $config['last_link'] = ' >> ';
    $config['next_link'] = ' > ';
    $config['prev_link'] = ' < ';
    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] ="</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    $this->pagination->initialize($config);

    $output = array(
     'pagination_link'  => $this->pagination->create_links(),
     'data_produk'   => $this->rajutan_model->data($config["per_page"], $start)
    );
    echo json_encode($output);
  }

  public function create(){

    $this->load->helper('form');
    $this->load->library('form_validation');


    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('subject','subject','required');
    $this->form_validation->set_rules('pesan','text','required');


    if ($this->form_validation->run()=== FALSE) {
      $this->load->view('frontend/rajutan');
    }else {


      // $dat = array('upload_data' => $this->upload->data());
      $this->rajutan_model->set_rajutan();
      redirect('rajutan');

    }



    }





}
