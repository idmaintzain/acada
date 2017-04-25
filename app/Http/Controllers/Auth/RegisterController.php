<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;
<<<<<<< HEAD
//use Illuminate\Http\Request;






use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
//use Auth;
//use Exception;

=======
>>>>>>> 3880f96ba8a4143cbd03f1a8fe186c2d59a98b20


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
    protected $redirectTo = '/home';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'account_status' => '',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }








     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
<<<<<<< HEAD
   public function handleProviderCallback(User $user)
    {
    $money =  Socialite::driver('facebook')->user();
     
        if(User::where('email', '=', $money->email)->first()){
        $checkUser = User::where('email', '=', $money->email)->first();
        Auth::login($checkUser);
        return Socialite::driver('facebook')->redirect();
        return redirect('/');
        
         } 

        $user->provider_id = $money->getId();
        $user->name = $money->getName();
        $user->email = $money->getEmail();
     //   $user->avatar = $money->getAvatar();
        $user->save();
    
        Auth::login($user);
        return redirect('/home');
        
         
    }
    
    
    
    
    
    
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

   public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            
            $userModel = new User;
            $createdUser = $userModel->addNew($userModel);
            Auth::loginUsingId($createdUser->id);
            return redirect()->route('home');
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
    
       
=======
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // $user->token;

        return $user->getEmail();
>>>>>>> 3880f96ba8a4143cbd03f1a8fe186c2d59a98b20
    }
}
