<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    function add(Request $req){
        
        $work=new Task;
        $work->user_id=$req->id;
        $work->task=$req->t;
        if($req->s != NULL){
            $work->status=$req->s;
        }
        else{
            $work->status = 'Pending';
        }
       $obj= $work->save();
        if($obj==True){
            return ["Task_obj"=>$work,"status"=>1,"message"=>"Successfully Created a Task"];
        }  
        else{
            return ["status"=>0, "message"=>"error"];
        }     
                
    }
    function status(Request $r){
        $paras=Task::find($r->task_id);
        if($paras != NULL){
            $paras->status=$r->status;
            $o=$paras->save();
            if($o==True){
                return ["Task_obj"=>$paras,"status"=>1,"message"=>"Successfully Created a Task"];
            }  
            else{
                return ["status"=>0, "message"=>"error"];
            } 
        }
        else{
            return ["message"=>"Not Found"];
        }
    }
    
}
