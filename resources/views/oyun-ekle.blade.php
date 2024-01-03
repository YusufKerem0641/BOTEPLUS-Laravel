@include('_header', ['baslik' => 'Oyun Ekle'])
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
          @if(session('hata'))
          <div class="alert alert-danger">
            {{ session('hata') }}
          </div>
          @endif
          <form action="/oyun-kayit" method="POST">
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
                  <label for="kategori" class="form-label text-white">Kategori</label>
                  <input name="kategori" type="text" value="{{ old('kategori') }}" class="form-control" id="kategori" required>
                  @error('kategori')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="fiyat" class="form-label text-white">Fiyat</label>
                <input name="fiyat" type="number" value="{{ old('fiyat') }}" class="form-control" id="fiyat" required>
                @error('fiyat')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="indirilme_sayisi" class="form-label text-white">İndirilme Sayısı</label>
                <input name="indirilme_sayisi" type="number" value="{{ old('indirilme_sayisi') }}" class="form-control" id="indirilme_sayisi" required>
                @error('indirilme_sayisi')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="yas_siniri" class="form-label text-white">Yaş Sınırı</label>
                <input name="yas_siniri" type="text" value="{{ old('yas_siniri') }}" class="form-control" id="yas_siniri" required>
                @error('yas_siniri')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="yildiz" class="form-label text-white">Yıldız</label>
                <input name="yildiz" type="number" value="{{ old('yildiz') }}" class="form-control" id="yildiz" required>
                @error('yildiz')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="kapak" class="form-label text-white">Kapak</label>
                <input name="kapak" type="file" value="{{ old('kapak') }}" class="form-control" id="kapak" required>
                @error('kapak')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="fragman" class="form-label text-white">Fragman</label>
                <input name="fragman" type="url" value="{{ old('fragman') }}" class="form-control" id="fragman" required>
                @error('fragman')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="tarih" class="form-label text-white">Tarih</label>
                <input name="tarih" type="date" value="{{ old('tarih') }}" class="form-control" id="tarih" required>
                @error('tarih')
                  <div class="alert alert-danger">
                    {{$message}}
                  </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Oyun Ekle</button>
          </form>

        </div>
      </div>
    </div>
  </div>
@include('_footer') 