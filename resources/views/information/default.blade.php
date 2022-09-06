<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>welcome to oke Garden</title>
  </head>
  <body>    
    <h1 class="text-center mb-4">Information</h1>
    <div class="container">
      <a href="/home" type="button" class="btn btn-danger">logout</a>
      {{-- <a href="/home" type="button" class="btn btn-success mb-3">Home</a> --}}
      <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3" role="alert">
          {{ $message }}
        </div>
        @endif
        @foreach ($data as $row)
        <div class="card" style="width: 18rem; margin: 30px;">
          <div class="card-body">
            <h5 class="card-title">{{ $row->nama_projek; }}</h5>
            <p class="card-text">{{ $row->keterangan; }}</p>
            <p>Status: {{ $row->status; }}</p>
            <a href="/detail/{{ $row->id }}" class="btn btn-primary">Lihat</a>            
          </div>
        </div>
        @endforeach
    </table>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>