<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Http;

class mycontroller extends Controller
{

    function insert(Request $req)
    {
        $name = $req->post('Name');
        $Id = $req->post('ID');
        $reg = $req->post('Regi');  
        $email = $req->post('Email');
        $batch = $req->post('Batch');


        $stu = new student();
        $stu->Name = $name;
        $stu->ID = $Id;
        $stu->Regi = $reg;
        $stu->Email = $email;
        $stu->Batch = $batch;
        $stu->save();

       return redirect('/infos');

        return $req->input();
    }
    function readdata(){
       $data = student::all();
        return view('infos',['information'=> $data]);


    }
}
