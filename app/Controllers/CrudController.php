<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CrudController extends BaseController
{
    public function index()
    {
         $db = db_connect();
        // dd($db);
        $query = $db->table('cruds')->get();
        $data=$query->getResult();
        return view('crud/create',['record'=>$data]);
    }
    

    public function Create(){
        $db = db_connect();
        // dd($db);
        $data = array(   
            'name'=>$this->request->getPost('name'),
            'fname'=>$this->request->getPost('fname'),
            'age'=>$this->request->getPost('age'),
            'depart'=>$this->request->getPost('depart')
        
            ); 
         
            $db->table('cruds')->insert($data);
            return $this->index();

       
    }


    public function Update($id)
    {
        //dd($id);
        $db = db_connect();
        $result = $this->db->get_where(‘cruds’, [‘id’ => $id])->result();
        $record['data']=$result;
        dd($result);
       return view('crud/update',$data);
    }


    public function Delete($id)
    {
  

    }




    
}