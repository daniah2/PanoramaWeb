<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $show = Service::get();
        $show = Service::paginate(10);

       return view('admin.service.index',['show'=>$show]);
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
        $path= $request->file('photo')->store('service','service');

        Service::create([
            'title'=>$title,
            'description'=>$description,
            'photo'=>"$path",
        ]);

        return redirect()->route('service');


    }

    /**
     * Display the specified resource.
     */
    public function show(service $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $show = Service::findOrFail($id);
        return view('admin.service.edit',['show'=>$show]);
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
        
        $service = Service::findOrFail($id); // افترض أن $id هو معرف العميل الذي ترغب في تحديثه
        
 
        $service->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        
        if ($request->hasFile('photo')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($service->photo) {
                Storage::disk('service')->delete($service->photo);
            }
        
            // رفع الصورة الجديدة وتحديث مسارها في قاعدة البيانات
            $path = $request->file('photo')->store('service', 'service');
            $service->update([
                'photo'=>$path,
                 
            ]);
          
        }
        
        
        
        return redirect()->route('service');
        
    }

    /**
     * Remove the specified resource from storage.
     */
 
    public function destroy($id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);
    
        // Delete the associated image file from the storage
        if ($service->photo) {
            Storage::disk('service')->delete($service->photo); // Use the Storage facade correctly
        }
    
        // Delete the service record from the database
        $service->delete();
    
        return redirect()->route('service');
    }
    
}