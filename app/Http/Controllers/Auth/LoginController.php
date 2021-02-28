<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
use Socialite;


class LoginController extends Controller
{

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        $validData = User::where('email', $email)->first();
        
        $password_check = password_verify($password, @$validData->password);

        if($password_check == false){
            return redirect()->back()->with('message', 'Email or Password does not match!');
        }
        
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('login');
        }
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        // $user->token;

        // All Providers
         
        $countuser = User::where('email',$user->getEmail())->count();

        if($countuser>0)
        {

            $countuserthird = User::where('email',$user->getEmail())->where('login_by',2)->count();

            if($countuserthird>0)
            {
                $notification = array(
                        'message' => 'You are successfully login!',
                        'alert-type' => 'success'
                     );
                
                $userthird = User::where('email',$user->getEmail())->first();

                Auth::login($userthird,true);
                return redirect('myaccount/dashboard');

                }
                else
                {
                    $notification = array(
                        'message' => 'please click login!',
                        'alert-type' => 'error'
                     );
                
                    return redirect('user/login');

                }
        }
        else{


            $newdata = New User();
            $newdata->usertype    = "User";
            $newdata->name        = $user->getName();
            $newdata->email       = $user->getEmail();
            $newdata->provider_id = $user->getId();
            $newdata->login_by    = 2;
            $newdata->save();

             $notification = array(
                        'message' => 'You are successfully login!',
                        'alert-type' => 'success'
                     ); 

                Auth()->login($newdata);
                return redirect('myaccount/dashboard');

        }
        
    }













}
