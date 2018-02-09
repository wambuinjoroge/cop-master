<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\ResidentialDetails;
use App\EmploymentDetails;
//use App\HouseholdDetails;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\RegistersUsers;

use Mail;
use App\Mail\VerificationEmail;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/member';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id_no' => 'required|unique:users',
            'nationality' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'mobile_no' => 'required|min:10|max:10',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            'terms' => 'accepted',
            //residential details
            'county_residence' => 'required|max:255',
            'sub_county' => 'required|max:255',
            'constituency' => 'required|max:255',
            'ward' => 'required|max:200',
            'city_name' => 'required|max:200',
            'street' => 'required|max:100',
            'household_type' => 'required|max:255',
            'household_name' => 'required|max:100',
            'property_number' => 'required|max:100',
            'floor_number' => 'required|max:255',
            'door_number' => 'required|max:255',  
            //employment details
            'employment' => 'required',
            'county_name' => 'required|max:255',
            'city_name' => 'required|max:255',
            'sector' => 'sometimes|max:255',
            'kra_no' => 'required|max:11|unique:users',
            'institution_name' => 'sometimes|max:200',
            //profile
           

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */

public function store(Request $request)
    {
$nextid = DB::table('users')->max('id') + 1;
        $user = new User();
        $fname = $request->input('first_name');
        $lname = $request->input('last_name');
        $user->id_no = $request->input('id_no');
        $user->nationality = $request->input('nationality');
        $user->name = $request->input('first_name').' '.$request->input('last_name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');
        $user->password = bcrypt($request->input('password'));

        //residential
$residential = new ResidentialDetails();
        $residential->user_id = $nextid;
        $residential->county_residence = $request->input('county_residence');
        $residential->sub_county = $request->input('sub_county');
        $residential->constituency = $request->input('constituency');
        $residential->ward = $request->input('ward');
        $residential->city_name = $request->input('city_name');
        $residential->street = $request->input('street');
        $residential->household_type = $request->input('household_type');
        $residential->household_name = $request->input('household_name');
        $residential->property_number = $input['property_number'];
        $residential->floor_number = $input['floor_number'];
        $residential->door_number = $input['door_number'];

        //employment
 $employment = new EmploymentDetails();
        $employment->user_id = $nextid;
        $employment->employment = $request->input('employment');
        $employment->county_name = $request->input('county_name');
        $employment->city_name = $request->input('city_name');
        $employment->sector = $request->input('sector');
        $employment->kra_no = $request->input('kra_no');
        $employment->institution_name = $request->input('institution_name');
        

        $employment->save();
        $residential->save();
        $profile->save();
        $user->save();

      
      session::flash ('msg','success') ; 

return redirect('login');
         
    }


    protected function create(array $data)
    {
        $input = $data;
        $user = User::create([
            'id_no' => $input['id_no'],  
            'nationality' => $input['nationality'],  
            'name' => $input['first_name'].' '.$input['last_name'], 
            'email' => $input['email'], 
            'password'=> bcrypt($input['password']), 
            'mobile_no' => $input['mobile_no'], 
        ]);

        $id = $user->id;

        $employment = new EmploymentDetails();
        $employment->user_id = $id;
        $employment->employment = $input['employment'];
        $employment->county_name = $input['county_name'];
        $employment->city_name = $input['city_name'];
        $employment->sector = $input['sector'];
        $employment->kra_no = $input['kra_no'];
        $employment->institution_name = $input['institution_name'];
       
        $employment->save();

        $residential = new ResidentialDetails();
        $residential->user_id = $id;
        $residential->county_residence = $input['county_residence'];
        $residential->sub_county = $input['sub_county'];
        $residential->constituency = $input['constituency'];
        $residential->ward = $request->input('ward');
        $residential->city_name = $request->input('city_name');
        $residential->street = $request->input('street');
        $residential->household_name = $request->input('household_name');
        $residential->household_type = $request->input('household_type');
        $residential->property_number = $request['property_number'];
        $residential->floor_number = $request['floor_number'];
        $residential->door_number = $request['door_number'];
        $residential->save();

        
        
        $user->attachRole(Role::where('name','user')->first());
        return $user;
       
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        Mail::to($user->email)->send(new VerificationEmail($user));

        Session::flash('verify-email', 'Please confirm your email address for you to login');

        return redirect()->route('login');
    }

    public function verifyEmail($token)
    {
        User::whereToken($token)->firstOrFail()->hasVerified();

        Session::flash('confirmed', 'Your email has been verified. Please login');

        return redirect()->route('login');
    }
}
