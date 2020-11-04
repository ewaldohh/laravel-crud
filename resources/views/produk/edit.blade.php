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
            <h1>Edit Data Produk</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="/produk/{{$produk->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputNamaProduk">Nama Produk</label>
                            <input name="nama_produk" type="text" class="form-control" id="exampleInputNamaProduk" placeholder="Nama Produk" value="{{$produk->nama_produk}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputKeterangan">Keterangan</label>
                            <input name="keterangan" type="text" class="form-control" id="exampleInputKeterangan" placeholder="Keterangan" value="{{$produk->keterangan}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputKeterangan">Harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input name="harga" type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Harga" value="{{$produk->harga}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputJumlah">Jumlah</label>
                            <input name="jumlah" type="text" class="form-control" id="exampleInputJumlah" placeholder="Jumlah" value="{{$produk->jumlah}}">
                        </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div> 
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>