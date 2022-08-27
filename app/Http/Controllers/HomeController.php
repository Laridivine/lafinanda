<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Medecin;
use App\Models\Specialite;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
$medecins = Medecin::orderBy('id','desc')->paginate(10);
$specialites = Specialite::orderBy('id','desc')->get();
return view('home',compact(['medecins','specialites']));
}
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
