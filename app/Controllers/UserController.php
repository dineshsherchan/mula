<?php
namespace App\Controllers;
use App\Models\users;
class UserController extends BaseController{
    public function index(){
        echo view('templates/header');
        echo view('pages/index');
        echo view('templates/footer');
        return '';
    }
    public function getUsers(){
        $request = service('request');
        $postData = $request ->getPost();

        $response['token'] = crsf_hash();

        $data = array();
        if(isset($postData['search'])){
            $search = $postData['search'];

            //Fetch Records
            $users = new UserModel();
            $userslist = $users->select('id,name,email')
            ->like('id, $search')
            ->orderBY('id')
            ->findAll(6);
            ->like('name, $search')
            ->orderBY('name')
            ->findAll(6);
            ->like('email, $search')
            ->orderBY('email')
            ->findAll(6);
            foreach ($userslist as $user){
                $data[] = array(
                    "value" =>$user['id']
                    "value" =>$user['name']
                    "value" =>$user['email']
                );
            }
        }
        $response['data'] = $data;
        return $this->response->setJSON($response);
    }

}