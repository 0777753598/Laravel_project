<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDAOController extends Controller
{

	public function getUsers(){

		
	}
	public static function registerUser($request){

        DB::insert('insert into users (firstName,lastName) values (?,?)',[$request['fname'],$request['lname']]);
// TODO  name is
	}

	public static  function userLogin($request){

       $user =  DB::select('select username,password from userLogin where userName = ? and password = ? ',[$request['username'],$request['password']]);





       if (empty($user)){

           $error = 'Invalide username or password!!';


           return  view('login',compact('error'));

       }
       else {

           $id = DB::select('select customerId from customer,userLogin where userLogin.username = customer.Email and userLogin.username = ?',[$request['username']]);

           session()->put(['user'=>$request['username'],'customerId'=>$id[0]->customerTd]);


                 return redirect()->route('dashboard');

       }
	}

}
    
