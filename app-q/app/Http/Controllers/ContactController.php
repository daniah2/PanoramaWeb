<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $show = Contact::get();
        $show = Contact::paginate(10);

       return view('admin.contact.index',['show'=>$show]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'description' => 'nullable|string',
        ]);
        
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        return redirect()->route('contact');


    }

    /**
     * Display the specified resource.
     */
    public function show(contact $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
      //
        
    }

    /**
     * Remove the specified resource from storage.
     */
 
    public function destroy($id)
    {
       //
    }
    
}