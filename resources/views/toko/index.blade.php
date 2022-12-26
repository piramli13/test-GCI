<!doctype html>
<html lang="en">
<style type="text/css">
    body a
    {
        text-decoration: none;
    }


</style>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>tugas hari 3 materi 4</title>
</head>
<body>
    <header>
        <div class="container-fluid" style="background: #333">    
            <div class="container" >
                <div class="row">
                    <div  class="col-12" style="display: flex; justify-content: flex-end;">
                        
                        <a class="pt-1 pe-3 text-dark p-2 m-2 bg-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    <div  class="col-12 pb-3" style="display: flex; justify-content: space-between; column-gap: 60px">
                        <h3 class="text-light">AMSHOP</h3>

                        <div class="input-group" style="display: flex; justify-content: flex-end;">
                          <div class="form-outline">
                            <input type="search" id="form1" class="form-control" placeholder="Search.." />
                            
                        </div>
                        <div class="form-outline mx-3">
                            <button type="button" class="btn btn-light">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <div class="m-4" style="background: #333">    
        <div class="container" >
            <div class="row justify-content-center">
                <div  class="col-8" style="display: flex; justify-content: space-between;">
                    <a href="#"><h6 class="m-3 text-light">HOME</h6></a>
                    <a href="#"><h6 class="m-3 text-light">SHOP</h6></a>
                    <a href="#"><h6 class="m-3 text-light">BLOG</h6></a>
                    <a href=""><h6 class="m-3 text-light">ABOUT US</h6></a>
                </div>
            </div>
        </div>    
    </div>
</header>
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-2 ms-4">
            <ul class="list-group">
                <li class="list-group-item" ><a href="#" style="color: #333"> Kaos</a><span class="badge pull-right bg-secondary ms-2">12</span></li>
                <li class="list-group-item" ><a href="#" style="color: #333"> Celana</a><span class="badge pull-right bg-secondary ms-2">200</span></li>
                <li class="list-group-item" ><a href="#" style="color: #333"> Kemeja</a><span class="badge pull-right bg-secondary ms-2">10</span></li>
                <li class="list-group-item" ><a href="#" style="color: #333"> Jaket</a><span class="badge pull-right bg-secondary ms-2">99</span></li>
                <li class="list-group-item" ><a href="#" style="color: #333"> Topi</a><span class="badge pull-right bg-secondary ms-2">9</span></li>
                <li class="list-group-item" ><a href="#" style="color: #333"> Batik</a><span class="badge pull-right bg-secondary ms-2">41</span></li>
                <li class="list-group-item " ><a href="#" style="color: #333"> Sepatu</a><span class="badge pull-right bg-secondary ms-2">12</span></li>
            </ul>
        </div>
        <div class="col-7">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="gambar-di-baju-4.webp" class="d-block w-100" height="500px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kaos Brand Terkini</h5>
                        <p>Mendukung aktifitas gayamu untuk kerjaan sehari-hari</p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="gambar2.jpeg" class="d-block w-100" height="500px" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Kaos Cewek Cowok Keren</h5>
                    <p>Kaos cewek cowok yang lagi dimabuk cinta bisa couple.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="gambar3.jpg" class="d-block w-100" height="500px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Baju Muslimah Terkini</h5>
                    <p>Trend baju muslimah pilihanmu. tutupi auratmu ukhti !!!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row justify-content-center">
        @foreach ($barang as $item)
            
        <div class="col-4  mt-4 mb-4">
         <div class="card" style="width: 250px">
          <img src="{{ $item->gambar }}" class="card-img-top" height="200px" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->nama_barang }}</h5>
            <p class="text-primary">Rp.{{ $item->harga }}</p>
            
            <p class="text-primary">Stok : {{ $item->stok }}</p>
            <p class="card-text">{{ $item->keterangan }}</p>
            
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#input{{ $item->id }}">
                Checkout
        </div>
    </div> 
</div>
@endforeach

</div>



</div>
<div class="col-2 me-4">
 <ul class="list-group">
    <li class="list-group-item" ><a href="#" style="color: #333"> Best Seller</a></li>
    <li class="list-group-item" ><a href="#" style="color: #333"> Paling Banyak Dicari</a></li>
    <li class="list-group-item" ><a href="#" style="color: #333"> Pria</a></li>
    <li class="list-group-item" ><a href="#" style="color: #333"> Wanita</a></li>
    <li class="list-group-item" ><a href="#" style="color: #333"> Anak-Anak</a></li>
    <li class="list-group-item" ><a href="#" style="color: #333"> Flash Sale</a></li>
    <li class="list-group-item " ><a href="#" style="color: #333"> Promo</a></li>
</ul>
<div class="mt-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Spesial Promo Telkomsel</h5>
        <p class="card-text">Dapatkan Paket Telkomsel UNLIMITED 30 Hari Dengan Harga Mulai Rp. 30.000 Tanpa FUP 24 Jam. Buruan !!</p>
        <a href="#" class="btn btn-primary">Dapatkan</a>
    </div>
</div>
</div>
</div>
</div>
</div>

@foreach ($barang as $item1)
<div class="modal fade" id="input{{ $item1->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Barang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="/checkout/{{ $item1->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
              <input type="hidden" name="barangs_id" value="{{ $item1->id }}">

                  <label for="nama_barang" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" value="{{ $item1->nama_barang }}" id="nama_barang"  name="nama_barang">
              </div>
              <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="text" class="form-control" value="{{ $item1->harga }}" id="harga" name="total_harga">
              </div>
              <div class="mb-3">
                  <label for="stok" class="form-label">stok</label>
                  <input type="text" class="form-control"  id="stok"  name="stok">
              </div>
             
             
              <button type="submit" class="btn btn-primary">beli</button>
          </form>
      </div>
      </div>
    </div>
</div>
@endforeach

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>