<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Presensi extends BaseController
{
    public function index()
    {
        return view('presensi');
    }

    public function checkin()
    {
      if (! $this->validate([
          'ip' => "required",
          'lat' => "required",
          'lon' => "required"
        ])) {
            return $this->response->setJSON(['error'=>true,'message'=>'Harap isi dengan lengkap.']);
        }

        $client = \Config\Services::curlrequest();

        $ip = $this->request->getVar('ip');
        $lat = $this->request->getVar('lat');
        $lon = $this->request->getVar('lon');

        $param = ['LAT'=>$lat,'LON'=>$lon];

        $server = session('server');

        // try {
          $response = $client->request('GET', $server.'/mobile/home/absen/'.$ip.'?'.http_build_query($param), [
              'verify' => false,
              'headers' => ['Authorization' => 'Bearer '.session('token')]
          ]);

          $response = json_decode($response->getBody());

          return $this->response->setJSON(['error'=>false,'message'=>$response]);
    }
}
