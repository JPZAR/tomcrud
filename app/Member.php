<?php
/*
 * JP Notes: Run the following >> php artisan make:model Member >> to create the Model class.
 * Next step would be to add the Model to the MemberController like so >> use App\Member; right at the top
 * with the other use statements
 */

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Esensi\Model\Model;

class Member extends Model
{
    protected $rules = [ //protected keyword is so that the array can't be changed
        'name' => 'required|alpha|min:2|max:255',
        'surname' => 'required|alpha|min:2|max:255',
        'id_number' => 'required|unique:members,id_number|digits:13',
        'mobile_number' => 'required|digits:10',
        'email' => 'required|email',
        'date_of_birth' => 'date_format:Y-m-d|before:today',
    ];
}
