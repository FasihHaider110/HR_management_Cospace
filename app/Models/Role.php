<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    use HasFactory;
    protected $connection = 'mysql'; //'sqlsrv';
    protected $table = 'mydb.role'; //'harsecure.dbo.EventsRegistration';
    protected $primaryKey = 'role_id'; //'eventid';

    public static function AddRole($data){
        
        DB::connection('mysql')->table('role')->insert($data);
      return  redirect(route('index'));
    }
}
