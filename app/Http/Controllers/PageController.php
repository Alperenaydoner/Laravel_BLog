<?php

namespace App\Http\Controllers;
use App\Models\Konular;
use App\Models\Crud;
use Illuminate\Http\Request;
session_start();
class PageController extends Controller
{
  public function read()
  {
    $user=$_SESSION['mail'];
    $pages=Konular::query()->get();
    return view('welcome',compact('pages','user'));
  }
  public function login()
  {
    return view('login');
  }
  public function giris()
  {
    $crud=new Crud();
    if (isset($_POST['kayıt'])) {
   
    $crud->kisiekle($_POST['name'],$_POST['mail'],$_POST['sifre']);
    return view('login');}
    elseif(isset($_POST['giris'])){
      $crud->sorgu($_POST['mail']);
      if($crud)
      {
        $_SESSION['mail']=$_POST['mail'];
        return $this->read();
      }
  
    }
  }
  
  public function konu()
  {
    return view('konuekle');
  }
  public function konuekle()
  {
    $crud=new Crud();
    $crud->konuekle($_POST['konu'],$_POST['metin']);
    return $this->read();
  }
  
}
