<?php

class kategori extends Controller
{

    public function cari()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Jual Beli Sapi Situbondo | SAPIKU';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_panen'] = $this->model('Barang_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Jual Beli Sapi Situbondo | SAPIKU';
            $data['hasil_panen'] = $this->model('Barang_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function simental()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Jual Beli Sapi Situbondo | SAPIKU';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_panen'] = $this->model('Barang_model')->getSimental();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Jual Beli Sapi Situbondo | SAPIKU';
            $data['hasil_panen'] = $this->model('Barang_model')->getSimental();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function limosin()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Jual Beli Sapi Situbondo | SAPIKU';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_panen'] = $this->model('Barang_model')->getLimosin();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Jual Beli Sapi Situbondo | SAPIKU';
            $data['hasil_panen'] = $this->model('Barang_model')->getLimosin();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function madura()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Jual Beli Sapi Situbondo | SAPIKU';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_panen'] = $this->model('Barang_model')->getMadura();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Jual Beli Sapi Situbondo | SAPIKU';
            $data['hasil_panen'] = $this->model('Barang_model')->getMadura();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }
}
