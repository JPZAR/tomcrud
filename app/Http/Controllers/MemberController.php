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
    public function index()
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
