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
                        <p class="pt-1 pe-3 text-light">Gift Card</p>
                        <p class="pt-1 pe-3 text-light">Track Order</p>
                        <a href="{{ route('logout') }}" class="pt-1 pe-3 text-light">Logout</a>
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
            @foreach ($invoice as $item)
            <h3>Invoice</h3>
            <p>Invoice ID : {{ $item->transaksi_id }}</p>
            <p>mama : {{ auth::user()->name }}</p>
            <p>barang : {{ $item->barang->nama_barang }}</p>
            <p>jumlah : {{ $item->entity }}</p>
            <p>harga : {{ $item->total_harga }}</p>
        
            
                @if ($kupon)
               
                <a href="/claim-voucer/{{ $item->id }}/{{ $kupon->id }}" class=" p-2 bg-primary text-white"> claim Voucher Rp.10000</a>
                @endif
            
            <a href="/bayar/{{ $item->id }}" class=" p-2 bg-primary text-white"> bayar</a>

                
          
            

            @endforeach
            @if ($invoice->count() > 0)
            
           
            @else
            <p class="text-success">Terimakasih Telah Berbelanja</p>
            <a class="p-2 bg-primary text-white" href="/toko">belanja lagi</a>
            @endif

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



<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>