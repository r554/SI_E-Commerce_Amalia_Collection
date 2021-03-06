<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rajaongkir extends CI_Controller
{
    // API KEY Rajaongkir
    private $api_key = '6356ff54380f47268e5f615572f2b134';

    // Function untuk mengambil data provinsi dari API Raja ongkir
    public function provinsi()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: $this->api_key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            //echo $response;
            $array_response = json_decode($response, true);
            // echo '<pre>';
            // print_r($array_response['rajaongkir']['results']);
            // echo '</pre>';

            $data_provinsi = $array_response['rajaongkir']['results'];
            echo "<option value=''>-- Pilih Provinsi -- </option>";
            foreach ($data_provinsi as $key => $value) {
                echo "<option value'" . $value['province_id'] . "' id_provinsi='" . $value['province_id'] . "' nama_provinsi='" . $value['province'] . "' >" . $value['province'] . "</option>";
            }
        }
    }


    // Function untuk mengambil data Kabupaten dari API Raja ongkir
    public function kota()
    {
        $id_provinsi_terpilih = $this->input->post('id_provinsi');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=" . $id_provinsi_terpilih,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: $this->api_key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $array_response = json_decode($response, true);
            $data_kota = $array_response['rajaongkir']['results'];
            echo "<option value=''>-- Pilih Kota/Kabupaten -- </option>";
            foreach ($data_kota as $key => $value) {
                echo "<option value='" . $value['city_id'] . "' id_kota='" . $value['city_id'] . "' nama_kota='" . $value['city_name'] . "'>" . $value['city_name'] . "</option>";
            }
        }
    }

    // Function untuk mengambil data Expedisi
    public function expedisi()
    {
        echo '<option> -- Pilih Expedisi -- </option>';
        echo '<option value="jne"> JNE </option>';
        echo '<option value="tiki"> TIKI </option>';
        echo '<option value="pos"> POS Indonesia </option>';
    }

    // Function untuk mengambil data Paket Layanan Expedisi dari API Raja ongkir
    public function paket()
    {
        $id_kota_asal = "160";
        $expedisi = $this->input->post('expedisi');
        $id_kota = $this->input->post('id_kota');
        $berat = $this->input->post('berat');



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=160&destination=" . $id_kota . "&weight=" . $berat . "&courier=" . $expedisi,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: $this->api_key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            //echo $response;
            $array_response = json_decode($response, true);
            echo '<pre>';
            print_r($array_response['rajaongkir']['results'][0]['costs']);
            echo '</pre>';
            $data_paket = $array_response['rajaongkir']['results'][0]['costs'];
            echo "<option value=''> -- Pilih Paket --</option>";
            foreach ($data_paket as $key => $value) {
                echo "<option value='" . $value['service'] . "' ongkir='" . $value['cost'][0]['value'] . "' jenis_layanan='" . $value['service'] . "'>";
                echo $value['service'] . " |RP. " . $value['cost'][0]['value'] . " | " . $value['cost'][0]['etd'] . " Hari";
                echo "</option>";
            }
        }
    }
}
