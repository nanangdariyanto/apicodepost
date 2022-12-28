<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed'); 

error_reporting(0);

class Api extends CI_Controller{
 
            function __construct(){
            parent::__construct();
            $this->load->model('M_login');
            $this->load->model('M_data');

            }

            function index()
            {
            header('Content-Type: application/json');
            echo json_encode(
            array(
            'status'    => false,
            'message'    => 'where are you going'
            )
            );


            }

            function area($q)
            {
                $areas = $this->M_data->data_area($q)->result();

                $no = 1;
                foreach ($areas as $area) {
                       
                    $detail = array();
                    $detail['no'] = strval($no++);
                    $detail['province_name'] = $area->province_name;
                    $detail['city_name'] = $area->city_name;
                    $detail['district_name'] = $area->district_name;
                    $detail['subdistrict_name'] = $area->subdistrict_name;
                    $detail['zip_code'] = $area->zip_code;
                    $response['data'][] = $detail;

                 }
               
             header('Content-Type: application/json');
             $json = json_encode($response, true);
             echo $json;

            }

            
}