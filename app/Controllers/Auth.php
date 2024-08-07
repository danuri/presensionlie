<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
      if (! $this->validate([
          'nip' => "required",
          'password' => "required"
        ])) {
            return $this->response->setJSON(['error'=>true,'message'=>'Harap isi dengan lengkap.']);
        }

        $client = \Config\Services::curlrequest();

        $server = $this->request->getVar('server');
        $nip = $this->request->getVar('nip');
        $password = $this->request->getVar('password');

        // try {
          $response = $client->request('POST', $server.'/mobile/auth/login', [
              'verify' => false,
              'form_params' => [
                  'nip' => $nip,
                  'password' => $password,
              ],
          ]);

          $response = json_decode($response->getBody());

          if($response->status){
            // helper('cookie');
            // set_cookie('remember_token',$response->token,3600);

            $ses_data = [
              'server'     => $server,
              'nip'        => $response->user->id,
              'nama'       => $response->user->name,
              'token'       => $response->token,
              'isLoggedIn' => TRUE
            ];
            session()->set($ses_data);
          }
          return $this->response->setJSON(['error'=>false,'message'=>'Login berhasil']);
        // } catch (\Exception $e) {
        //   return $this->response->setJSON(['error'=>true,'message'=>'NIP/Password tidak sesuai.']);
        // }
    }

    public function logout()
    {
      $session = session();
      $session->destroy();
      return redirect()->to('/');
    }
}
