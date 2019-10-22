<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Image;
use App\Besoin;
use App\Annonce;
use App\Message;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _contruct()
    {
        //
        $this->middleware('auth');
    }
    public function index()
    {
        // show us the sellers recommended
       
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(is_numeric($id))
		{
		
			$annonces = Annonce::where('user_id',$id)->get();
			 return view('sellers.show', compact('annonces'));
			
		}else
		{
			return view('terme');
		}

    }
    public function password()
    {
        if( Auth::check() ){
        $user=Auth::User();
        $besoins=Besoin::all();
        $message = Message::where('user_id',Auth::user()->id);
       return view('sellers.password',compact('user','besoins','message'));
       }
        return redirect(route('login'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //$users= User::findOrFail($user->id);
        //$users= \Illuminate\Support\Facades\Auth::where('id',$user->id);
        if( Auth::check() ){
        $user=Auth::User();
		$besoins=Besoin::all();
                $message = Message::where('user_id',Auth::user()->id);
		return view('sellers.edit',compact('user','besoins','message'));
                }
        return redirect(route('login'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
                $user=User::find($id);
        //$user=Auth::User()->id;
                $formInput=$request->except('profilePicture');

                 //        validation
                $this->validate($request,[
                    'name'=>'required',
                    'email'=>'required',
                    'callPhoneNumber'=>'required',
                    'country'=>'required',
                    'location'=>'required',
                    'profilePicture'=>'image|mimes:png,jpg,jpeg|max:1000'
                ]);

                //        image upload
                $image=$request->profilePicture;
                if($image){
                    $imageName=time().rand(123,999).'.'.$image->getClientOriginalExtension();
                    $image->move('images/user',$imageName);
                    $formInput['profilePicture']=$imageName;
                }

                 
                $user->update($formInput);
                return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    public function updatePassword(Request $request)
    {
        $this->validate($request,[
                    'password' => 'required|string|min:6|confirmed',
                ]);
        $old = $request->old;
        $new=$request->password;
        if(!\Illuminate\Support\Facades\Hash::check($old,Auth::user()->password))
        {
            return back()->withInput()->with('error' , 'Votre ancien mot de passe est incorrect');
        }
        else
        {
            $request->user()->fill(['password' => \Illuminate\Support\Facades\Hash::make($new)])->save();
            $besoins=Besoin::all();
                        $message= \App\Message::all();
            $annonces = Annonce::where('user_id', Auth::user()->id)->orderBY('id','desc')->paginate((5));

             return view('home', compact('annonces','besoins','message'));  
        }
    }
}
