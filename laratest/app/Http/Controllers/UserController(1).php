<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public $users = [
        ['id' => 1, 'name' => 'Samiul', 'email' => 'samiul02@gmail.com'],
        ['id' => 2, 'name' => 'Mumu', 'email' => 'mumu02@gmail.com'],
        ['id' => 3, 'name' => 'Siam', 'email' => 'siam@gmail.com'],
    ];

    public function index(){
        return view('user.list')->with('userList', $this->users);
    }

    public function details($id){
        $users = $this->users;
        $user = '';
        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.details')->with('user', $user);
    }

    public function create(){
        return view('user.create');
    }

    public function insert(Request $req){
        $users = $this->users;
        $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
        array_push($users, $user);
        return view('user.list')->with('userList', $users);
    }
     
    // public function insert(Request $req)
    // {
    //     $users = $this->getUserList();
    //     $user = ['id'=>$req->id, 'name'=>$req->uname, 'email'=>$req->email];
    //     array_push($users,$user);
    //     return view('user.list')->with('userList', $users);
    // }

    public function edit($id){
        //find user by id from user list $user
        $users = $this->users;
        $user = '';
        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id){
        //craete new user array & add to list
        $users = $this->users;
        for($i = 0; $i < count($users) ; $i++){
            if($this->users[$i]['id'] == $id){
                $this->users[$i]['name'] = $req -> name;
                $this->users[$i]['email'] = $req -> email;
                break;
            }
        }
        //new userList

        return view('user.list')->with('userList', $this->users);
    }

    public function delete( $id){
        //confirm window
        //find user by id $user
        $users = $this->users;
        $user = '';
        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }

        return view('user.delete')->with('user', $user);
    }

    public function destroy($id){
        //remove user form list
        //create new list & display
        $users = $this->users;
        for($i = 0; $i < count($users) ; $i++){
            if($this->users[$i]['id'] == $id){
                unset($this->users[$i]);
                break;
            }
        }

        return view('user.list')->with('userList', $users);
    }


    
}