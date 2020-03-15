<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Soft Delete
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    use SoftDeletes;
    //ini berisi default nya yaitu Students.. jika tidak sesuai maka bisa di tulis yang sesuai keingingan.
    //agar bisa mengisi data base fillable
    protected $fillable= ['nama', 'nrp', 'email', 'jurusan'];
    
    //bisa menggunakan guardable untuk cara lain
}
