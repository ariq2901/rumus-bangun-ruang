<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/menu.css">
  <title>Calculator Kerucut</title>
</head>
<body>
  <div class="container">
    <div class="row h-100 justify-content-center mt-5">
      <div class="col col-6">
        <form action="/rumus-kerucut" method="post">
          @csrf
          <div class="form-group">
            <input type="text" class="neu form-control @error('jari2') is-invalid @enderror" id="jari2" name="jari2" placeholder="jari-jari" value={{ old('jari2') }}>
            @error('jari2')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <input type="text" class="neu form-control @error('tinggi') is-invalid @enderror" id="tinggi" name="tinggi" placeholder="tinggi" value={{ old('tinggi') }}>
            @error('tinggi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="flx">
            <button type="submit" class="btn neu text-primary">Hitung</button>
            <div class="btn neu"><a href="/" class="text-success text-center">Home</a></div>
          </div>
        </form>
        @if (isset($hasil))
          <div class="hasil mt-3">
            <span class="font-weight-bold">Hasil : </span><span class="text-success font-weight-bold">{{ $hasil }}</span>
          </div>
        @else
          
        @endif
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>