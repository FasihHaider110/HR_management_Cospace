<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;
    protected $connection = 'mysql'; //'sqlsrv';
    protected $table = 'mydb.user'; //'harsecure.dbo.EventsRegistration';
    protected $primaryKey = 'user_id'; //'eventid';

    public static function AddUser($data){
        
        DB::connection('mysql')->table('user')->insert($data);
      return  redirect(route('index'));
    }
}
