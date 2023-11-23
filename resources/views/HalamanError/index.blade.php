ERRROROROROROR

@if (session('pesan'))  <!-- UNTUK REDIRECT KE HALAMAN AWAL /SISWA    -->
                        <div class="alert alert-danger" role="alert">
                          <h4 class="alert-heading">Danger !</h4>
                          <p>{{session('pesan')}} </p>
                          <hr>
                          <p class="mb-0">Forbiden Acces !!!</p>
                        </div>
                      @endif
