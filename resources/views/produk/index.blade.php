<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        @if(session('sukses'))    
            <div class="alert alert-dark" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <h1>Data Produk</h1>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#staticBackdrop">Tambah Produk</button>
            </div>

            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/produk/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputNamaProduk">Nama Produk</label>
                        <input name="nama_produk" type="text" class="form-control" id="exampleInputNamaProduk" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputKeterangan">Keterangan</label>
                        <input name="keterangan" type="text" class="form-control" id="exampleInputKeterangan" placeholder="Keterangan">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input name="harga" type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputJumlah">Jumlah</label>
                        <input name="jumlah" type="text" class="form-control" id="exampleInputJumlah" placeholder="Jumlah">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
                    
                </div>
            </div>
            </div>
        <table class="table">
            <tr>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            @Foreach($data_produk as $produk)
            <tr>
                <td>{{$produk->nama_produk}}</td>
                <td>{{$produk->keterangan}}</td>
                <td>{{$produk->harga}}</td>
                <td>{{$produk->jumlah}}</td>
                <td><a href="/produk/{{$produk->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/produk/{{$produk->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apa anda yakin?')">Delete</a></td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>