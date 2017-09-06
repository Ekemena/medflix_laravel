<?php

namespace App\Http\Controllers;

use App\ContactFormModel;
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
            return ContactForm::orderBy('id', 'asc')->get();
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
        $contactform = new ContactForm;
        $contactform->name = $request->input('name');
        $contactform->email = $request->input('email');
        $contactform->course = $request->input('course');
        $contactform->message = $request->input('message');
        $contactform->save();
        return 'ContactForm record successfully created with id ' . $contactform->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return ContactForm::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $contactform = ContactForm::find($id);

        $contactform->name = $request->input('name');
        $contactform->email = $request->input('email');
        $contactform->course = $request->input('course');
        $contactform->message = $request->input('message');
        $contactform->save();

        return "Sucess updating user #" . $contactform->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $contactform = ContactForm::find($request->input('id'));

        $contactform->delete();

        return "ContactForm record successfully deleted #" . $request->input('id');
    }

}
