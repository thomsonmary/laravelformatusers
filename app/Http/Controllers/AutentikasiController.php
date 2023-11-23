<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AutentikasiController extends Controller
{
    public function index()
    {
    	
    	return view('autentikasi');

    }


    public function rest()
    {
       return view('autentikasi-rest');
    }


    public function authrest(Request $request)
    {
    	$res = $this->_makeRequest($request->login, $request->password); // , $request->password
//  dd($res);
    	if ($res->code == 10) {
            
            if ($res->data->ProdiID == 1) 
                $namaprodi = "Pendidikan Biologi";
                elseif ($res->data->ProdiID == 2) 
                $namaprodi = "Pendidikan Sejarah";
                elseif ($res->data->ProdiID == 3) 
                $namaprodi = "Pendidikan Geografi";
                elseif ($res->data->ProdiID == 4) 
                $namaprodi = "Pendidikan Bahasa Inggris";
                elseif ($res->data->ProdiID == 5) 
                $namaprodi = "Pendidikan Matematika";
                elseif ($res->data->ProdiID == 6) 
                $namaprodi = "Pendidikan Bimbingan Konseling";
                elseif ($res->data->ProdiID == 7) 
                $namaprodi = "Pendidikan Sosiologi";
                elseif ($res->data->ProdiID == 8) 
                $namaprodi = "Pendidikan Bahasa Indonesia";
                elseif ($res->data->ProdiID == 9) 
                $namaprodi = "Pendidikan Ekonomi";
                elseif ($res->data->ProdiID == 10) 
                $namaprodi = "Pendidikan Informatika";
                elseif ($res->data->ProdiID == 11) 
                $namaprodi = "Pendidikan Fisika";
                elseif ($res->data->ProdiID == 12) 
                $namaprodi = "Pendidikan IPS";
                elseif ($res->data->ProdiID == 13) 
                $namaprodi = "Pendidikan PPKN";
                elseif ($res->data->ProdiID == 14) 
                $namaprodi = "Pendidikan Akuntansi";
                else 
                $namaprodi = "Peserta PLK";

                
                if ($res->data->role == "dosen"){
                    $user = User::updateOrCreate(['login'=>$request->login], [
                        'name' => str_replace('&#039;',"'",$res->data->Nama),
                        'email' => $res->data->Email,
                        'login' => $res->data->Login,
                        'level' => $res->data->role == 'dosen' ? 'dosen' : 'dosen',
                        'avatar' => 'https://sit.stkip-pgri-sumbar.ac.id/'.$res->data->Foto,
                        'password' => Hash::make($res->data->Password),
                    ]);
                }

                if($res->data->role == 'dosen') {
    
                    $role = Role::where(['role'=>'dosen'])->first();
                    $user->roles()->sync([$role->id]);
                }else{
                    $role = Role::where(['role'=>$res->data->role])->first();
                    $user->roles()->sync([$role->id]);
    
                }

   
                Auth::login($user);
    
                return redirect(route('dashboard'));
    
    
    
            } else{
                return redirect(route('autentikasi.rest'))->with(['msg'=>$res->message]);
            }
        }
    
        public function _makeRequest($login, $password)
        {
            $client = new \GuzzleHttp\Client(['verify' => false ]);
            $url = "https://endpoint.stkip-pgri-sumbar.ac.id/index.php/v1/plk/autentikasi";
           
            $myBody['login'] = $login;
            $myBody['password'] = $password;
            $response = $client->post($url,  
                [
                    'form_params' => ['login'=>$login, 'password'=>$password],
                    'headers' => [
                        'X-API-KEY' => 'EMONEVhasdjkhui23h487ofihsdf897234r',
                      ],
                ]);
    
            // $response = $request->send();
          
            return json_decode($response->getBody());
        }
    
    }
