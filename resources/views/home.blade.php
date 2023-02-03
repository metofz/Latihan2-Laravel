@extends('layouts.main')

@section('container-fluid')
{{-- Start Jumbotron --}}
<div class="jumbotron jumbotron-fluid  d-flex align-items-center">
  <div class="container text-center">
    <h2 class="display-5 fw-bold">Lorem ipsum dolor sit amet consectetur.</h2>
    <p class="lead">Lorem ipsum dolor sit amet.</p>
    <button type="button" class="btn btn-info rounded-pill px-5 my-2 py-3 fw-bold btn-jumbotron">Lorem, ipsum.</button>
  </div>
</div>
{{-- End Jumbotron --}}

{{-- Content 1 --}}
<section class="bg-dark text-light fitur">
  <div class="container">
    <h1>Course Programming</h1>
    <p class="fs-3">Lorem ipsum dolor sit.</p>
  </div>
  <div class="container text-dark">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="row">
          <div class="col-lg-4 d-flex mb-4 card-fitur">       
          
            @foreach ($courses as $course)
            <div class="carousel-item active">
              {{-- Card --}}
              <div class="card" style="width: 18rem;">
                  <div class="img-wrapper">
                    <img src="img/logo.png" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title mb-4">{{ $course->title }}</h4>
                    <h6><i class="bi bi-people-fill"></i> {{ $course->jumlah }} Pendaftar</h6>
                    <hr style="bg-dark""></hr>
                    <p>{{ $course->excerpt }}</p>
                    <p class="card-text fw-bold">Rp. {{ $course->harga }}</p>
                    <a href="#" class="btn btn-info d-flex justify-content-center btn-course text-dark fw-bold rounded-pill">Daftar</a>
                  </div>
              </div>
            </div>
            @endforeach
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  </div>
  
  {{-- Content 2 --}}
  <div class="container">
    <div class="row my-4 text-center">
      <div class="col-md-4">
        <img src="img/logo.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dicta accusantium natus facere impedit iste.</p>
      </div>

      <div class="col-md-4">
        <img src="img/logo.png" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dicta accusantium natus facere impedit iste.</p>
      </div>

      <div class="col-md-4">
        <img src="img/logo.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dicta accusantium natus facere impedit iste.</p>
      </div>
    </div>
  </div>

  {{-- Content 3 --}}
  <div class="container">
    <h1>Bootcamp</h1>
  </div>

  <div class="container text-dark mt-4">
    <div class="row position-relative justify-content-center">
      <div class="col-12 d-flex justify-content-center">
        <div class="carousel-item">
          <div class="card me-5" style="width: 18rem;">
            <div class="img-wrapper">
              <img src="img/ori.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body position-relative">
              <h4 class="card-title">Title Bootcamp</h4>
              <h5 class="card-text"><i class="bi bi-people-fill"></i> Pendaftar</h5>
              <hr style="bg-dark""></hr>
              <p class="card-text fw-bold">Rp. 1800000</p>
              <a href="#" class="btn btn-primary d-flex">Daftar</a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card me-5" style="width: 18rem;">
            <div class="img-wrapper">
              <img src="img/ori.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body position-relative">
              <h4 class="card-title">Title Bootcamp</h4>
              <h5 class="card-text"><i class="bi bi-people-fill"></i> Pendaftar</h5>
              <hr style="bg-dark""></hr>
              <p class="card-text fw-bold">Rp. 1800000</p>
              <a href="#" class="btn btn-primary d-flex">Daftar</a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="card me-5" style="width: 18rem;">
            <div class="img-wrapper">
              <img src="img/ori.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body position-relative">
              <h4 class="card-title">Title Bootcamp</h4>
              <h5 class="card-text"><i class="bi bi-people-fill"></i> Pendaftar</h5>
              <hr style="bg-dark""></hr>
              <p class="card-text fw-bold">Rp. 1800000</p>
              <a href="#" class="btn btn-primary d-flex">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Content 4 --}}
  <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center fs-5">
      <div class="col-md-5 me-4 mb-5">
        <img src="img/logo.png" width="500" height="400" alt="">
      </div>

      <div class="col-md-6 ">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
        <ul class="mt-4">
          <li>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae cum enim doloribus ipsum voluptate quisquam expedita corrupti saepe neque optio? Obcaecati quasi corporis aliquid saepe.</p>
          </li>
        </ul>   
      </div>
    </div>
  </div>
</section>
@endsection


  {{-- <div class="container text-dark">
    <div class="row">
      <div class="col-md-12">
        <div class="card-fitur d-flex justify-content-start mb-5"> --}}
          {{-- Card --}}
          {{-- <div class="card" style="width: 18rem;">
            <img src="img/mstore2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary d-flex justify-content-center">Lorem</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="img/mstore2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary d-flex justify-content-center">Lorem</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="img/mstore2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary d-flex justify-content-center">Lorem</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="img/mstore2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary d-flex justify-content-center">Lorem</a>
            </div>
          </div> --}}
          {{-- End Card --}}
        {{-- </div>
      </div>
    </div>
  </div> --}}
{{-- End Content --}}