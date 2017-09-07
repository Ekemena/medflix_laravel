 <?php

namespace App\Http\Controllers;


use App\ContactformModel;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contactform extends Controller
{
    //
      /**
     * Display a listing of the resource.
     *
     * @return Response
     */
     public function index($id = null) {
        if ($id == null) {
            return Contacts::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $contactform = new Contacts;
        $contactform->name = $request->input('firstname');
        $contactform->name = $request->input('lastname');
        $contactform->email = $request->input('email');
        $contactform->course = $request->input('course');
        $contactform->message = $request->input('message');
        $contactform->save();
        return 'Contacts record successfully created with id ' . $contactform->id;
    }

}
