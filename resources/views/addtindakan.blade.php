<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Tambah Tindakan
  </title>
  @include('partial.head')
</head>

<body class="g-sidenav-show  bg-gray-200">
  <!-- sidebar here -->

@include('partial.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah Tindakan</li>
          </ol>

          <ul class="navbar-nav  justify-content-end">
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            
          </ul>

          <h6 class="font-weight-bolder mb-0">Tambah Tindakan</h6>
        </nav>
        
            
            
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tindakan</h6>
              </div>
            </div>
            <div class="card-body px-3 pb-3">
              <div class="table-responsive">
                <form>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan tindakan" aria-label="tindakan" style="border: 1px solid #ccc; padding: 10px;">
                  </div>
                  <div class="mb-3">
                    <label for="harga-minimal" class="form-label">Harga Minimal</label>
                    <input type="text" class="form-control" id="harga-minimal" placeholder="50.000" aria-label="harga-minimal" style="border: 1px solid #ccc; padding: 10px;">
                  </div>
                  <div class="mb-3">
                    <label for="harga-maksimal" class="form-label">Harga Maksimal</label>
                    <input type="text" class="form-control" id="harga-maksimal" placeholder="150.000" aria-label="harga-maksimal" style="border: 1px solid #ccc; padding: 10px;">
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      

      
    
      <div class="row">
        
      </div>
       <!-- Footer Here -->
       @include('partial.footer')
    </div>
  </main>
  
  
</body>
@include('partial.script')
</html>