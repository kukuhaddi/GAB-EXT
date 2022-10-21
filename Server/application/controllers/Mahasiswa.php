<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//panggil libraries server
require APPPATH."libraries/Server.php"

class Mahasiswa extends Server {
    //service get 
    function service_get()
    {
        //panggil fungsi "Mmahasiswa"
        $this->load->model("Mmahasiswa","mdl",TRUE);

        //ammbil parameter
        $hasil = $this->mdl->get_data();

        //memberikan respon
        $this->response(array("mahasiswa" => $hasil), 200);
    }

        //service post
        function service_post()
    {
         //panggil fungsi "Mmahasiswa"
        $this->load->model("Mmahasiswa","mdl",TRUE);
        //ambil nilai parameter2
        $data = array{
        "npm"=> $this->post("npm"),
        "nama"=> $this->post("nama"),
        "telepon"=> $this->post("telepon"),
        "jurusan"=> $this->post("jurusan"),
        };
        //panggil method "simpan data"
        $hasil = $this->mdl->simpan_data(["npm"],$data["nama"],$data["telepon"],$data["jurusan"]),base64_encode($data["npm"]);

        //jika data mahasiswa tidak ditemukan
        if($hasil == 0)
        {

        }
        //jika data mahasiswa ditemukan
        else
        {

        }

    }

    //service put
    function service_put()
    {

    }
}
