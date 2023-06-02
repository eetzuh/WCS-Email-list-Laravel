<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contacts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Contacts $contact)
    {
        $contacts= auth()->user()->contacts;
        return view('dashboard', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request, Contacts $contact)
    {
        $contact->user_id= auth()->user()->id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $path = "public/" . $request->file('file')->storeAs('storage/contact_pictures',  $request->file->getClientOriginalName());
        $contact->image_path = $path;
        $contact->save();
         return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
