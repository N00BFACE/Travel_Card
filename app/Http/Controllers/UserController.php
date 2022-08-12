<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $name = $user->name = $request->name;
        $email = $user->email = $request->email;
        $address = $user->address = $request->address;
        $phone = $user->phone = $request->phone;
        $user->update(['name'=>$name, 'email'=>$email, 'address'=>$address, 'phone'=>$phone]);
        return redirect()->route('profile.index')->withSuccess('Profile updated successfully');
    }

    public function approve($id)
    {
        $user=User::find($id);
        $user->status = 1 ;
        if ($user->save()) {
            return redirect()->route('user.pending')->withSuccess('User has been approved successfully');
        }
    }

    public function reject($id)
    {
        $user=User::find($id);
        $user->status = 3 ;
        if ($user->save()) {
            return redirect()->route('user.pending')->withSuccess('User has been rejected successfully');
        }
    }

    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('user.suspend')->withSuccess('User has been deleted successfully');
    }

    public function suspend($id)
    {
        $user=User::find($id);
        $user->status = 2;
        if ($user->save()) {
            return redirect()->route('user.active')->withSuccess('User has been suspended successfully');
        }
    }

    public function upload(Request $request, $id)
    {
        $user = User::find($id);
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            $user->update(['image'=>$filename]);
        }
        return redirect()->route('profile.index')->withSuccess('Image has been uploaded successfully');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class, 'foreign_key');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   
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
        //
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
