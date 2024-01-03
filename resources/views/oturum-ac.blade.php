@include('_header', ['baslik' => 'Oturum Aç'])
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
        @if(session('hata'))
        <div class="alert alert-danger">
          {{ session('hata') }}
        </div>
        @endif
        @if(session('basarili'))
        <div class="alert alert-success">
          {{ session('basarili') }}
        </div>
        @endif
        <form action="/uye-kontrol" method="POST">
          @csrf
            <div class="mb-3">
                <label for="eposta" class="form-label text-white">e-Posta</label>
                <input name="eposta" type="email" value="{{ old('eposta') }}" class="form-control" id="eposta" required>
            </div>
            <div class="mb-3">
                <label for="parola" class="form-label text-white">Parola</label>
                <input name="parola" type="password" class="form-control" id="parola" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="cookie" id="cookie">
                <label class="form-check-label text-white" for="cookie">Oturumu Açık Tut</label>
            </div>
            <button type="submit" class="btn btn-primary">Oturum Aç</button>
        </form>

        </div>
      </div>
    </div>
  </div>
@include('_footer') 