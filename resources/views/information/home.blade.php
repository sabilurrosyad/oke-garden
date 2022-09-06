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
    <h1 class="text-center mb-4">Database Information</h1>
    <div class="container">
      <a href="/admin/tambahpengguna" type="button" class="btn btn-success mb-3">Tambah +</a>
      <a href="/home" type="button" class="btn btn-danger mb-3">Logout</a>
      <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3" role="alert">
          {{ $message }}
        </div>
        @endif
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Projek</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)            
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $row->nama_projek }}</td>
          <td>{{ $row->keterangan }}</td>
          <td>{{ $row->updated_at->diffForHumans() }}</td>
          <td>{{ $row->status }}</td>
          <td>
            <div class="button" style="display: flex; padding: 5px; gap: 5px;">
            <a href="/admin/tampilkandata/{{ $row->id }}" type="button" class="btn btn-warning">Ubah</a>
            <a href="/detail/{{ $row->id }}" type="button" class="btn btn-primary">Lihat</a>
            <a href="/admin/delete/{{ $row->id }}" type="button" class="btn btn-danger">Hapus</a>
          </div>
          </td>
        </tr>        
        @endforeach
      </tbody>
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