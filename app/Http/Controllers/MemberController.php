<?php
/*
 * JP Notes: Laravrl calls objects routes. Hence in order to create this CRUD controller you need to run
 * php artisan make:controller MemberController --resource | Note the --resource part. This creates the CRUD page layout. Also remember to
 * name this controller the singular of your object type (According to AC).
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member; //JP Notes: Need to include this so that Controller can read date from Model

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //This index function is used to retrieve multiple objects to 1 page
    {
        $members = Member::all(); //This allows you to retrieve all of the members on the Member model, i.e. all members from the db.
        //The object $members now contains the data. The index.blade.php file will display the object data
        /*echo'<pre>';
        print_r($members); //This test code shows you all question objects being retrieved from the database
        echo'</pre>';*/
        $data = array(); //create a data array
        $data['member'] = $members; //Add the $members array of objects to the data array with a key of 'member'
        return view('members/index', $data);//Now load up a view named index in the members folder and pass the data array
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //['member'] is the array key name and referenced in {!! Form::model($member,
        // ['action' => 'MemberController@store']) !!} in the create.blade.php file. = $member is the new empty model object
        // that was created when specifying = new Member (just below)
        $member = new Member;
        $data = array();
        $data['member'] = $member;
        return view('members.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //The $request variable will store all the form data when we submit the form
    {
        $member = new Member; //Create new object of core object type. Now set the members data from the form data
        $member->name = $request->name; //Set the members table columns values (through the Model : $member->name) by using the form data : $request->name.
        $member->surname = $request->surname;
        $member->id_number = $request->id_number;
        $member->mobile_number = $request->mobile_number;
        $member->email = $request->email;
        $member->date_of_birth = $request->date_of_birth;

        //create a new object (member) in the database using the save() function calling it on the model object
        if(!$member->save()){
            $errors = $member->getErrors();// retrieve errors. getErrors() provided by Esensi and contains all the error messages
            /*
             * This is test code to see what prints out
             * echo'<pre>';
             * print_r($errors);
             * echo'</pre>';
             */
            return redirect()//redirect back to the create page and pass along the errors
                ->action('MemberController@create')// note that the redirect syntax is a bit different than return view()
                ->with('errors', $errors)//this is to pass the errors. 'errors' = key and $errors = error messages
                ->withInput();
    }
    //successful creation
        return redirect()
            ->action('MemberController@index')
            ->with('message', '<div class="alert alert-success">Member Created Successfully!</div>');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();
        $member = Member::find($id); //Capital Member refers to the Model name. So this is saying: Member Model, talk to the db and find the member object with $id.
        $data['member'] = $member; //The view (show.blade.php) file looks at the 'member' key
        return view('members/show', $data); //JP Notes: The 2nd argument ($data) passed into the view, allows the controller to pass data to the views >> show page.

        /*$member = Member::find($id);
        return view('members.show', array('member' => $member));*///JP Notes: A better way than the above
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', ['member' => $member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->name = $request->name;
        $member->surname = $request->surname;
        $member->id_number = $request->id_number;
        $member->mobile_number = $request->mobile_number;
        $member->email = $request->email;
        $member->date_of_birth = $request->date_of_birth;

        if (!$member->save()) {
            $errors = $member->getErrors();

            return redirect()
                ->action('MemberController@edit', $member->id)
                ->with('errors', $member->getErrors())
                ->withInput();
        }
        return redirect()
            ->action('MemberController@index')
            ->with('message', '<div class="alert alert-success">Member Edited Successfully!</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
