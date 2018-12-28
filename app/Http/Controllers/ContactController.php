<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = \App\Contact::all();

        if(count($data) > 0) {
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        } else {
            $res['message'] = "Empty!";
            return response($res);
        }

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
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $website = $request->input('website');
        $fbprofile = $request->input('fbprofile');

        $data = new \App\Contact();
        $data->name = $name;
        $data->email = $email;
        $data->address = $address;
        $data->phonenumber = $phonenumber;
        $data->website = $website;
        $data->fbprofile = $fbprofile;

        if($data->save()) {
            $res['message'] = 'Success!';
            $res['value'] = $data;
            return response($res); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $data = \App\Kontak::where('id',$id)->get();

        $data = \App\Contact::where('id', $id) -> get();

        if(count($data) > 0) {
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        } else {
            $res['message'] = "There is no contact id {$id}!";
            return response($res);
        }
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
        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $website = $request->input('website');
        $fbprofile = $request->input('fbprofile');

        $data = \App\Contact::where('id', $id)->first();
        $data->name = $name;
        $data->email = $email;
        $data->address = $address;
        $data->phonenumber = $phonenumber;
        $data->website = $website;
        $data->fbprofile = $fbprofile;

        if($data->save()) {
            $res['message'] = 'Successfully updated!';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = 'Failed to update';
            return response($res);
        }

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
        $data = \App\Contact::where('id', $id)->first();

        if($data->delete()) {
            $res['message'] = 'Succesfully deleted';
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = "Failed to delete";
            return $response($res);
        }
    }
}
