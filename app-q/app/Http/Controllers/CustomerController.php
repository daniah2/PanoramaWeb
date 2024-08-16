<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $show = Customer::get();
        $show = Customer::paginate(10);

       return view('admin.customer.index',['show'=>$show]);
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);
    
        $title=$request->title;
        $description=$request->description;
        // $photo=$request->file('photo')->getClientOriginalName();
        $path= $request->file('photo')->store('customer','customer');

        Customer::create([
            'title'=>$title,
            'description'=>$description,
            'photo'=>"$path",
        ]);

        return redirect()->route('customer');


    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $show = Customer::findOrFail($id);
        return view('admin.customer.edit',['show'=>$show]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // جعل رفع الصورة اختياريًا
        ]);
        
        $customer = Customer::findOrFail($id); // افترض أن $id هو معرف العميل الذي ترغب في تحديثه
        
 
        $customer->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        
        if ($request->hasFile('photo')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($customer->photo) {
                Storage::disk('customer')->delete($customer->photo);
            }
        
            // رفع الصورة الجديدة وتحديث مسارها في قاعدة البيانات
            $path = $request->file('photo')->store('customer', 'customer');
            $customer->update([
                'photo'=>$path,
                 
            ]);
          
        }
        
        
        
        return redirect()->route('customer');
        
    }

    /**
     * Remove the specified resource from storage.
     */
 
    public function destroy($id)
    {
        // Find the customer by ID
        $customer = Customer::findOrFail($id);
    
        // Delete the associated image file from the storage
        if ($customer->photo) {
            Storage::disk('customer')->delete($customer->photo); // Use the Storage facade correctly
        }
    
        // Delete the customer record from the database
        $customer->delete();
    
        return redirect()->route('customer');
    }
    
}
