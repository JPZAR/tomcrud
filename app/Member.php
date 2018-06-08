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
        'name' => 'required|regex:/^[a-zA-Z ]+$/|min:2|max:255',
        'surname' => 'required|regex:/^[a-zA-Z ]+$/|min:2|max:255',
        'id_number' => 'required|unique:members,id_number|digits:13',
        'mobile_number' => 'required|digits:10',
        'email' => 'required|email',
        'date_of_birth' => 'date_format:Y-m-d|before:today|nullable',
        'language_id' => 'required'
    ];

    //define relationship between Member and Language model here. Name of the relationship is language()
    //So we're saying a member object has a language
    //we connect the 2 models through $this. So $this references the object member... and then belongsTo
    //of the related model ('Language') i.e. the member object has a language
    public function language() {
        return $this->belongsTo('App\Language');//('Language') = name of the Language Model
    }
    //The Member model is now connected to the Language model and aware that it can have a language attached
    //to it. Now I can access language using e.g. $member->language

    public function interests()
    {
        return $this->belongsToMany('App\Interest', 'interests_members');
    }
}
