@include('_header', ['baslik' => 'Üye Ol'])
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          @if(session('hata'))
          <div class="alert alert-danger">
            {{ session('hata') }}
          </div>
          @endif
          <form action="/uye-kayit" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                  <label for="ad" class="form-label text-white">Ad</label>
                  <input name="ad" type="text" value="{{ old('ad') }}" class="form-control" id="ad" required>
                  @error('ad')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="soyad" class="form-label text-white">Soyad</label>
                <input name="soyad" type="text" value="{{ old('soyad') }}" class="form-control" id="soyad" required>
                @error('soyad')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="eposta" class="form-label text-white">e-Posta</label>
                <input name="eposta" type="email" value="{{ old('eposta') }}" class="form-control" id="eposta" required>
                @error('eposta')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="parola" class="form-label text-white">Parola</label>
                <input name="parola" type="password" value="{{ old('parola') }}" class="form-control" id="parola" required>
                @error('parola')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="parola_confirmation" class="form-label text-white">Parola (Tekrar)</label>
                <input name="parola_confirmation" type="password" class="form-control" id="parola_confirmation" required>
              </div>
              <div class="mb-3">
                <label for="profil" class="form-label text-white">Profil Resmi</label>
                <input name="profil" type="file" value="{{ old('profil') }}" class="form-control" id="profil" required>
                @error('profil')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Üye Ol</button>
          </form>

        </div>
      </div>
    </div>
  </div>
@include('_footer') 