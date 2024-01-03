@include('_header', ['baslik' => 'Bilgilerim'])
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          @if(session('hata'))
          <div class="alert alert-danger">
            {{ session('hata') }}
          </div>
          @endif
          <form action="/guncelle" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                  <label for="ad" class="form-label text-white">Ad</label>
                  <input name="ad" type="text" class="form-control" id="ad" value="{{ auth()->user()->ad }}" required>
                  @error('ad')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="soyad" class="form-label text-white">Soyad</label>
                <input name="soyad" type="text" class="form-control" id="soyad" value="{{ auth()->user()->soyad }}" required>
                @error('soyad')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="eposta" class="form-label text-white">e-Posta</label>
                <input name="eposta" type="email" class="form-control" id="eposta" value="{{ auth()->user()->eposta }}" required>
                @error('eposta')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Bilgilerimi Güncelle</button>
          </form>

        </div>
      </div>
    </div>
  </div>
@include('_footer') 