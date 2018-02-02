<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\ResidentialDetails;
use App\EmploymentDetails;
use App\HouseholdDetails;
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'mobile_no' => 'required|min:10|max:10',
            'needs' => 'sometimes|max:255',
            'needs_description' => 'sometimes',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            'terms' => 'accepted',
            //employment details
            'employment' => 'required',
            'county_name' => 'required|max:255',
            'city_name' => 'required|max:255',
            'sector' => 'sometimes|max:255',
            'business_category'  => 'sometimes|max:255',
            'institution_name' => 'sometimes|max:200',
            'building_name' => 'sometimes|max:200',
            'floor_num' => 'sometimes|max:100',
            'room_num' => 'sometimes|max:100',
            'branch_name' => 'sometimes|max:100',
            'street_name' => 'sometimes|max:200',
            'postal_address' => 'sometimes|max:255',
            'email_address' => 'sometimes|max:100',
            'telephone' => 'sometimes|max:100',
            'fax_num' => 'sometimes|max:100',
            'website' => 'sometimes|max:100',
            //residential details
            'county_residence' => 'required|max:255',
            'sub_county' => 'required|max:255',
            'constituency' => 'required|max:255',
            'household_type' => 'required|max:255',
            'household_name' => 'required|max:100',
            'street' => 'required|max:100',
            'property_number' => 'required|max:200',
            'floor_number' => 'required|max:200',
            'door_number' => 'required|max:100',
            //religion
            'religion' => 'required',
            'cluster' => 'sometimes|max:100',

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
        $user->name = $request->input('first_name').' '.$request->input('last_name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');
        $user->password = bcrypt($request->input('password'));

        //employment
 $employment = new EmploymentDetails();
        $employment->user_id = $nextid;
        $employment->employment = $request->input('employment');
        $employment->county_name = $request->input('county_name');
        $employment->city_name = $request->input('city_name');
        $employment->sector = $request->input('sector');
        $employment->business_category = $request->input('business_category');
        $employment->institution_name = $request->input('institution_name');
        $employment->building_name = $request->input('building_name');
        $employment->floor_num = $request->input('floor_num');
        $employment->room_num = $request->input('room_num');
        $employment->branch_name = $request->input('branch_name');
        $employment->street_name = $request->input('street_name');
        $employment->postal_address = $request->input('postal_address');
        $employment->email_address = $request->input('email_address');
        $employment->telephone = $request->input('telephone');
        $employment->fax_num = $request->input('fax_num');
        $employment->website = $request->input('website');

 $residential = new ResidentialDetails();
        $residential->user_id = $nextid;
        $residential->county_residence = $request->input('county_residence');
        $residential->sub_county = $request->input('sub_county');
        $residential->constituency = $request->input('constituency');
        $residential->household_name = $request->input('household_name');
        $residential->household_type = $request->input('household_type');
        $residential->property_number = $request->input('property_number');
        $residential->street = $request->input('street');
        $residential->floor_number =$request->input('floor_number');
        $residential->door_number = $request->input('door_number');
       


        $household = new HouseholdDetails();
        $household->user_id = $nextid;
        $household->religion = $request->input('religion');
        $household->cluster = $request->input('cluster');


        $employment->save();
       $residential->save();
        $household->save();
        $user->save();

      
      session::flash ('msg','success') ; 

return redirect('login');
         
    }


    protected function create(array $data)
    {
        $input = $data;
        $user = User::create([
            'id_no' => $input['id_no'],  
            'name' => $input['first_name'].' '.$input['last_name'], 
            'email' => $input['email'], 
            'password'=> bcrypt($input['password']), 
            'mobile_no' => $input['mobile_no'], 
            'needs' => $input['needs'] , 
            'needs_description' => $input['needs_description']
        ]);

        $id = $user->id;

        $employment = new EmploymentDetails();
        $employment->user_id = $id;
        $employment->employment = $input['employment'];
        //$employment->employment = "employed"
        $employment->county_name = $input['county_name'];
        $employment->city_name = $input['city_name'];
        $employment->sector = $input['sector'];
        $employment->business_category = $input['business_category'];
        $employment->institution_name = $input['institution_name'];
        $employment->building_name = $input['building_name'];
        $employment->floor_num = $input['floor_num'];
        $employment->room_num = $input['room_num'];
        $employment->branch_name = $input['branch_name'];
        $employment->street_name = $input['street_name'];
        $employment->postal_address = $input['postal_address'];
        $employment->email_address = $input['email_address'];
        $employment->telephone = $input['telephone'];
        $employment->fax_num = $input['fax_num'];
        $employment->website = $input['website'];
        $employment->save();

        $residential = new ResidentialDetails();
        $residential->user_id = $id;
        $residential->county_residence = $input['county_residence'];
        $residential->sub_county = $input['sub_county'];
        $residential->constituency = $input['constituency'];
        $residential->household_name = $input['household_name'];
        $residential->household_type = $input['household_type'];
        $residential->property_number = $input['property_number'];
        $residential->street = $input['street'];
        $residential->floor_number = $input['floor_number'];
        $residential->door_number = $input['door_number'];
        $residential->save();


        $household = new HouseholdDetails();
        $household->user_id = $id;
        $household->religion = $input['religion'];
        $household->cluster = $input['cluster'];
        $household->save();
        
        //mail::send('mails.confirmation', $data ,function ($message) use ($data) {
        //    $message->to($data['email']);
        //    $message->subject('Registration Confirmation');
         //   )
        $user->attachRole(Role::where('name','user')->first());
        return $user;
       // return redirect(route('login'))->with('status', 'Confirmation email has been send.kindly check your mail')
    }
       // return redirect(route('login'))->with('status', '$validator->errors')

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
