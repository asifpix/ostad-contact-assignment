<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function index() {
        $contacts = Contact::all();
        return view( 'index', [
            'contacts' => $contacts,
        ] );
    }

    public function create() {
        return view( 'create' );
    }

    public function handleCreateFormSubmission( Request $request ) {

        Contact::create( [
            'name'    => $request->input( 'name' ),
            'email'   => $request->input( 'email' ),
            'phone'   => $request->input( 'phone' ),
            'address' => $request->input( 'address' ),
        ] );

        return redirect( route( 'contacts.index' ) )->with( [
            'success' => 'Contact Created Successfully',
        ] );
    }

    public function show( Request $request, $id ) {
        $contact = Contact::find( $id );
        return view( 'show', [
            'contact' => $contact,
        ] );
    }

    public function edit( Request $request, $id ) {
        $contact = Contact::find( $id );
        return view( 'edit', [
            'contact' => $contact,
        ] );
    }

    public function handleEditFormSubmission( Request $request, $id ) {
        $contact = Contact::findOrFail($id);

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->address = $request->input('address');

        $contact->save();
        
        return redirect( route( 'contacts.index' ) )->with( [
            'success' => 'Contact Updated Successfully',
        ] );
    }

    public function destroy( Request $request, $id ) {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect( route( 'contacts.index' ) )->with( [
            'success' => 'Contact Deleted Successfully',
        ] );
    }
}
