<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
      public function __construct(User $user)
    {
        $this->middleware('auth');
        // Dependency injection
        $this->user = $user;
    }
	
    public function index()
	{
		$users = User::orderBy('created_at', 'desc')->get();
        return view('admin.user.index')->with('users', $users);
        
	}


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */

	public function getAllUsers(Request $request, DataTablesResponse $response)
    {
        $page = $request->input("page");
        $size = $request->input("size");
        $size = $size - 1;
        if ($page == 1) {
            $skip = 0;
        }

        else
            $skip = (($page * $size) - $size);
        //return json_encode(array(["page"=> $page],["size"=>$size]));
        $users = $this->user->with('role')->skip($skip)->take($size)->get(['id','email','name','role_id',]);
		//$users = DB::table('users')->skip($skip)->take($size)->get();
		$response->setTotalRecords($this->user->count());
		$response->setTotalDisplayRecords($this->user->count());
		$response->setData($users);
		return $response->toJSON();
	}

    public function saveUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
        //$user = new User;
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->role_id = $request->role;
        $this->user->password = bcrypt($request->password);
        $this->user->save();

        return redirect("/user");
    }
    public function deleteUser(Request $request, $user_id)
    {
        if(auth()->user()->hasRole('admin')):
            $user=$this->user->findOrFail($user_id);
            $user->delete();
        endif;
        return redirect()->back();
    }
}
