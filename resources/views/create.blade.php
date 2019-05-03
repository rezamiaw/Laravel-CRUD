<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Buku Perpustakaan</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2 style="text-align: center"></h2><br/>
      <form method="post" action="{{ action('SiswaController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="pengarang">Pengarang</label>
              <input type="text" class="form-control" name="pengarang">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="tahun_terbit">Tahun Terbit</label>
              <input type="text" class="form-control" name="tahun_terbit">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" name="penerbit">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
              <div class="form-group col-md-4" style="text-align: center">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
  </body>
</html>
