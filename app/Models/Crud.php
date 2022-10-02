<?php
namespace App\Models;
use Illuminate\support\facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Crud extends Model
{
    public function konuekle($title,$contents)
    {
    DB::insert('insert into konular(title,contents) values (?,?)',[$title,$contents]);
    }
    public function kisiekle($name,$mail,$password)
    {
        DB::insert('insert into users(name,email,password) values (?,?,?)',[$name,$mail,$password]);
    }
     public function sorgu($mail)
    {
        $posts=DB::select('select * from users where email=? ',[$mail]);
        return $posts;
     }
}
