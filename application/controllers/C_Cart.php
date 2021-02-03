<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Cart extends CI_Controller {

	public function __construct(){
	    parent::__construct();
		$this->load->model('M_Shopping');
		$this->load->model('M_Customer');
	}

	public function insertCart($id)
	{
		$barang = $this->M_Shopping->find($id);

		$data = array(
			'id'        => $barang->id,
			'qty'       => 1,
			'price'     => $barang->harga_barang,
			'name'      => $barang->nama_barang,
            'berat'     => $barang->berat_barang
            // 'gambar'    => $barang->gambar_barang
        );
        
	
		$this->cart->insert($data);
		redirect('C_Shopping');
	}

	public function detailCart()
	{
		$this->load->library('template');
    	$this->template->display('v_cart');
	}

	public function clearCart()
	{
		$this->cart->destroy();
		redirect('C_Shopping');
	}
}
