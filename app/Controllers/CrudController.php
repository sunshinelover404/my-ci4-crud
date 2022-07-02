<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CrudModel;

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
            return redirect()->route('/');   

       
    }

     
    public function Update($id)
    {
       
        //dd($id);
        $crudsmodel=new CrudModel();
         $user = $crudsmodel->find($id);
        $data=array('name'=>$user['name'],'fname'=>$user['fname'],'age'=>$user['age'],'depart'=>$user['depart'],'id'=>$id);
      // echo $data['name'];
        return view('crud/update',$data);
    }

   public function PostUPdate()
   {
    $crudsmodel=new CrudModel();
    $id=$this->request->getPost('id');
    //dd($id);
    $data = array(  
        'table_name'=>'cruds' ,
        'id'=>$this->request->getPost('id'),
        'name'=>$this->request->getPost('name'),
        'fname'=>$this->request->getPost('fname'),
        'age'=>$this->request->getPost('age'),
        'depart'=>$this->request->getPost('depart')
       
        ); 
        $crudsmodel->update($id,$data);
        return redirect()->route('/');
   }

   
    public function Delete($id)
    {
     $crudsmodel=new CrudModel();

     $crudsmodel->delete($id);
     return redirect()->route('/');
            
    }

    



    
}