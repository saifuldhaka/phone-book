<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Phonebook;
use App\Models\PhoneType;


class PhonebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $phonebook = Phonebook::paginate(1);
      return view('phonebook.index', compact('phonebook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phoneTypes = PhoneType::pluck('name');
        return view('phonebook.create', compact('phoneTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'phone_type' => 'required',
          'number' => 'required',
        ]);

        $phonebook = new Phonebook;
        $phonebook->first_name = $request->first_name;
        $phonebook->last_name = $request->last_name;
        $phonebook->phone_type = $request->phone_type;
        $phonebook->number = $request->number;
        $phonebook->save();

        return redirect()->route('phonebook.index')->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $phonebook = Phonebook::find($id);
      if (!$phonebook) {
          return redirect()->route('phonebook.index')->with('error', 'Contact not found.');
      }
      return view('phonebook.show', compact('phonebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $phonebook = Phonebook::findOrFail($id);
      $phoneTypes = PhoneType::pluck('name');
      return view('phonebook.edit', compact('phonebook', 'phoneTypes'));
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
      $phonebook = Phonebook::find($id);
      if (!$phonebook) {
          return redirect()->route('phonebook.index')->with('error', 'Contact not found.');
      }
      $request->validate([
          'last_name' => 'required',
          'first_name' => 'required',
          'phone_type' => 'required',
          'number' => 'required',
      ]);
      $phonebook->last_name = $request->last_name;
      $phonebook->first_name = $request->first_name;
      $phonebook->phone_type = $request->phone_type;
      $phonebook->number = $request->number;
      $phonebook->save();
      return redirect()->route('phonebook.index')->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $phonebook = Phonebook::find($id);
         if (!$phonebook) {
             return redirect()->route('phonebook.index')->with('error', 'Contact not found.');
         }
         $phonebook->delete();
         return redirect()->route('phonebook.index')->with('success', 'Contact deleted successfully.');
     }

}
