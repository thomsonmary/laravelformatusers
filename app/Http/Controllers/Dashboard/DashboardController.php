<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Relation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;  // ini yg benar untuk Gate
use App\Models\User;
use App\Models\Role;
use App\Models\Rps;
use App\Models\Semester;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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
        
        if (Gate::allows('Hanya_Untuk_Administrator')) {

        $users =  User::all();
        $relasi = User::with('roles')->get();
        $cariuser = User::with(['roles'])->find(Auth::id());

        
        // Tampilan untuk tabel 4 MEMAKAI WHERE HAS:
        $relation = Rps::with(['relasitabeldosen', 'relasitabelkaprodi', 'relasitabelsemester', 
        'relasitabelsap', 'relasitabelbahanajar', 'relasitabeltime', 'relasitabelmatakuliah', 
        'relasitabeltemplaterps', 'relasitabeltemplatesap',
                    ])->get(); 

        $datawhere = Rps::with(['relasitabeldosen', 'relasitabelkaprodi', 'relasitabelsemester', 
        'relasitabelsap', 'relasitabelbahanajar', 'relasitabeltime', 'relasitabelmatakuliah', 
        'relasitabeltemplaterps', 'relasitabeltemplatesap',
                    ])->whereHas('relasitabelsemester', function($q) { 
                        $q->where('semesters.id', 1);
                    })->orWhereHas('relasitabeltime', function ($qu) {
                        $qu->where('times.id', 1);
                    })->get(); 
    
       return view('HalamanDashboard.index', compact(
            'users', 
            'relasi', 
            'cariuser', 
            'relation',
            'datawhere',
        ));

        }else {
           
            return redirect()->route('erorpage')->with('pesan', 'Your are not administrator');
        }
    }


    public function edit()
    {
        if (Gate::allows('Hanya_Untuk_Administrator')) {
            $users =  User::all();
            $roles =  Role::all();

            return view('HalamanDashboard.edit', compact('users', 'roles'));


        }else {
            //  echo 'Not Allowed' ;
            return redirect()->route('erorpage')->with('pesan', 'Your are not administrator');
        }
    }
  
    public function destroy(User $user)
    {
        // dd($user);
    if (Gate::denies('Hanya_Admin_Delete')) {
        return redirect(route('dashboard'))->with('eror', 'Yours role not admin, you can not delete');
    }
     //destroy ini untuk meremove role nya beserta usernya sekalian pada tabel dosens dan mahasiswas.
     $user->roles()->detach();
     $user->delete();
     return redirect()->route('dashboard')->with('sukses', 'Data telah berhasil di delete');

    }   


    public function relasi()
    {
        $relasi = Relation::all();
      
      
        return view('HalamanDashboardRPS.rps', compact('relasi', ));

    }


}
