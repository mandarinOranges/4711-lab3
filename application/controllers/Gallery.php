<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author jason
 */
class Gallery extends Application{
    public function index()
    {
     //   $this->load->view('gallery');
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }
}
