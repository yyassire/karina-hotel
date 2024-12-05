<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Gorditas:wght@400;700&family=Manrope:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Karinna Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>


@include('guest.includes.header')

<div class="container-fluid footer text-center text-white p-5 mt-4 ">

    <h1 class="p-3"> REZERVASYON</h1>
</div>
<div class="container my-3 bg-white p-2 shadow">
    <div class="form-group p-4">

        <div class="d-flex flex-wrap justify-content-between">

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Hotel Tipi</h6>
                <select class="form-select border-0 focus-ring-0" id="mySelect" aria-label="Otel 1 Seçimi">
                    <option value="otel1" selected>Karinna Hotel </option>
                    <option value="otel2">Otel 2</option>
                    <option value="otel3">Otel 3</option>
                    <option value="otel4">Otel 4</option>
                    <option value="otel5">Otel 5</option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Giriş</h6>
                <select class="form-select  border-0" id="mySelect" aria-label="Otel 2 Seçimi">
                    <option value="otel1" selected>24 Kasım 2024</option>
                    <option value="otel2">Otel 2 </option>
                    <option value="otel3">Otel 3 </option>
                    <option value="otel4">Otel 4 </option>
                    <option value="otel5">Otel 5 </option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Çıkış</h6>
                <select class="form-select border-0" id="otelSeç3" aria-label="Otel 3 Seçimi">
                    <option value="otel1" selected>25 Kasım 2024</option>
                    <option value="otel2">Otel 2 </option>
                    <option value="otel3">Otel 3 </option>
                    <option value="otel4">Otel 4 </option>
                    <option value="otel5">Otel 5 </option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Oda Tipi</h6>
                <select class="form-select border-0" id="otelSeç4" aria-label="Otel 4 Seçimi">
                    <option value="otel1" selected>King Suit Odası</option>
                    <option value="otel2">Otel 2 </option>
                    <option value="otel3">Otel 3 </option>
                    <option value="otel4">Otel 4 </option>
                    <option value="otel5">Otel 5


                    </option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0 mt-2">
                <button class="btn btn-success w-100 w-sm-auto d-flex align-items-center justify-content-center">
                    Bul
                    <i class="fas fa-arrow-up ms-2" style="transform: rotate(45deg);"></i>
                </button>

            </div>
        </div>
    </div>
</div>


<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="/" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <span class="text-dark">Rezervasyon</span>
    </p>
</div>



<div class="container my-5">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-start ">
            <p class="text-black fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Odalarımızı Keşfedİn</p>

        </div>

    </div>
</div>


<div class="container mt-5">
    <div class="row">
        @foreach ($rooms as $room)
            <div class="col-md-4 col-12 mb-4">
                <div class="card border-0">
                    <!-- Oda resmini dinamik hale getiriyoruz -->
                    <img src="{{ asset($room->featured_image ?? 'path/to/default_image.jpg') }}" class="card-img-top" style="height: 350px" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('room.details', $room->id) }}" class="text-decoration-none text-dark">
                                {{ $room->name }}
                            </a>
                            <!-- Oda yıldızları (örnek) -->
                            @for ($i = 0; $i < min($room->stars, 5); $i++)
                                <i class="ms-1 fas fa-star text-warning me-1"></i>
                            @endfor
                        </h5>
                        <p class="mt-2">
                            <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt="">
                            {{ optional($room->various_rooms_numb)[1] ?? '0' }} Yetişkin
                            <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt="">
                            {{ $room->size ?? '0' }} cm<sup>2</sup>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<div class="container my-5">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link btn-success" href="#" aria-label="Previous">
                    <span aria-hidden="true">&lt;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link btn-success" href="#">1</a></li>
            <li class="page-item"><a class="page-link btn-success" href="#">2</a></li>
            <li class="page-item"><a class="page-link btn-success" href="#">3</a></li>
            <li class="page-item"><a class="page-link btn-success" href="#">4</a></li>
            <li class="page-item">
                <a class="page-link btn-success" href="#" aria-label="Next">
                    <span aria-hidden="true">&gt;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>


@include('guest.includes.footer')


</body>

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
