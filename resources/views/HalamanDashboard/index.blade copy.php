Anda Masukke Halaman Dashboard Admin

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Hello <b> {{ Auth::user()->name }} </b> Login dengan Level  <b> {{ (Auth::user()->level)}} </b> 
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <ul>
                                @can('Hanya_Admin_Edit')
                                    
                                    <li>
                                        <h3>
                                            Menu Admin 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu Admin 2
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu User 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu User 2
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu Guest 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu Guest 2
                                        </h3>
                                    </li>
                                @endcan
                                @can('Hanya_Dosen_Edit')
                                    <li>
                                        <h3>
                                            Menu Dosen 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu Dosen 2
                                        </h3>
                                    </li>
                                @endcan
                                @can('Hanya_Gkm_Edit')
                                    <li>
                                        <h3>
                                            Menu GKM 1
                                        </h3>
                                    </li>
                                    <li>
                                        <h3>
                                            Menu GKM 2
                                        </h3>
                                    </li>
                                @endcan
                                </ul>
                                <h1>1. Manajemen Administrator (Khusus Admin)</h1>
                                @if (Auth::user()->hasRole('admin'))
                                @can('Hanya_Admin_Edit')
                                    <table border="1">
                                        <tr>
                                            <td>
                                            <b> Nama </b>
                                            </td>
                                            <td>
                                            <b> Email </b>
                                            </td>
                                            <td>
                                            <b> Level </b>
                                            </td>
                                            <td>
                                                <b> Role id(Tabel role_user) </b>
                                            </td>
                                            <td>
                                                <b> User id(Tabel role_user) </b>
                                            </td>
                                            <td>
                                                <b> Role(Tabel Roles) </b>
                                            </td>
                                        </tr>
                                        @foreach ( $relasi as $user )
                                            <tr>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->level }}
                                                </td>
                                                <td>
                                                    {{ $user->role_id }}
                                                </td>
                                                <td>
                                                    {{ $user->user_id }}
                                                </td>
                                                <td>
                                                    {{ $user->role }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                 
                                    <h1>2. Edit Manajemen User</h1>
                                    <table border="1">
                                        <tr>
                                            <td>
                                            <b> Nama </b>
                                            </td>
                                            <td>
                                            <b> Email </b>
                                            </td>
                                            <td>
                                            <b> Level </b>
                                            </td>
                                            <td>
                                                <b> Role(Tabel role_user) </b>
                                            </td>
                                            <td>
                                                Aksi
                                            </td>
                                        </tr>
                                        @foreach ( $users as $user )
                                            <tr>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->level }}
                                                </td>
                                                <td>
                                                    {{ implode(', ', $user->roles()->get()->pluck('role')->toArray()) }}
                                                </td>
                                                <td>
                                                            <div class="form-button-action">

                                                                <a href="{{ route('management.edit', $user->id) }}">
                                                                <button type="button" data-toggle="tooltip" title="Edit" 
                                                                class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                </a>
                                                                <form action="{{ route('management.destroy', $user) }}" method="POST" class="float-left">
                                                                    @csrf
                                                                    {{ method_field('DELETE') }}
                                                                    <button type="submit" data-toggle="tooltip" title="Remove" class="btn btn-link btn-danger" data-original-title="Remove"
                                                                    onclick="return confirm('Yakin {{$user->name}} Dihapus? ')">
                                                                    <i class="fa fa-times"></i>
                                                                    </button>
                                                                </form>	
                                                            </div>
                                                        </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                @endcan
                                @else
                                    {{ "Maaf Anda Bukan Admin, Tidak Bisa Ditampilkan !!!" }}    
                                @endif

                                @can('Hanya_Untuk_Administrator')
                                <h1>3. Tabel Profil Administrator YBS Login</h1>
                                <table border="1">
                                    <tr>
                                        <td>
                                           <b> Nama </b>
                                        </td>
                                        <td>
                                           <b> Email </b>
                                        </td>
                                        <td>
                                           <b> Level </b>
                                        </td>
                                        <td>
                                            <b> Role id(Tabel role_user) </b>
                                         </td>
                                         <td>
                                            <b> User id(Tabel role_user) </b>
                                         </td>
                                         <td>
                                            <b> Role(Tabel Roles) </b>
                                         </td>
                                     </tr>
                                    @foreach ( $profil as $profil )
                                        <tr>
                                            <td>
                                                {{ $profil->name }}
                                            </td>
                                            <td>
                                                {{ $profil->email }}
                                            </td>
                                            <td>
                                                {{ $profil->level }}
                                            </td>
                                            <td>
                                                {{ $profil->role_id }}
                                            </td>
                                            <td>
                                                {{ $profil->user_id }}
                                            </td>
                                            <td>
                                                {{ $profil->role }}
                                            </td>

                                        </tr>
                                    @endforeach

                                </table>
                                    
                                @endcan