<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'M.A Empreendimentos Imobiliários';
        $data['description'] = 'Tradição. Segurança. Qualidade. Estas são as marcas da M.A Empreendimentos Imobiliários';
        $data['keywords'] = 'Empreendimentos, Imobiliários, M.A, Munir Abbud, Alto Padrão, Cidade Jardim';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
