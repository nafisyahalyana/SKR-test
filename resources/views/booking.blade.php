  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  
    <title>SIRUANG | Booking</title>
  </head>
  <!-- Favicon icon -->
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="{{ asset('../assets/images/logo.png') }}"
  />
  <body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
      <img src="logo.png" alt="network-logo" width="72" height="72" />
      <h2>Booking Ruangan</h2>
    </div>
    <!-- End Header form -->
    <!-- Start Card -->
    <div class="card">
      <!-- Start Card Body -->
      <div class="card-body">
        <!-- Start Form -->
        <form id="bookingForm" action="{{ route('booking') }}" method="POST" class="needs-validation" novalidate autocomplete="off">
         @csrf
            <!-- Start Input Name -->
          <div class="form-group">
            <label for="inputName">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ auth()->user()->name }}" readonly/>
            {{-- <small class="form-text text-muted">Silahkan isi nama anda</small> --}}
            {{-- <input type="text" id="nama" name="nama" value="{{ auth()->user()->name }}" readonly> --}}
          </div>

          <div class="form-group">
            <label for="inputName">Bidang</label>
            <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Nama Bidang" required />
            <small class="form-text text-muted">Silahkan bidang anda</small>
          </div>
          <!-- End Input -->

          <!-- Start Input Telephone -->
          <div class="form-group">
            <label for="inputPhone">Nomor Handphone</label>
            <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="08xxxxxxx" pattern="\d{4}\d{4}\d{4}" required />
            <small class="form-text text-muted"></small>
          </div>
          <!-- End Input Telephone -->
  
          <!-- Start Input Date , Start Time and End Time -->
          <div class="form-row">
            <!-- Start Input Date -->
            <div class="form-group col-md-4">
              <label for="inputDate">Tanggal</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" required />
              <small class="form-text text-muted">Silahkan pilih waktu rapat</small>
            </div>
            <!-- End Input Date -->

            <!-- End Input End Time -->

            <!-- Start Input Start Time -->
            <div class="form-group col-md-4">
              <label for="Mulai">Waktu mulai</label>
              <input type="time" class=" form-control" id="waktu_mulai" name="waktu_mulai" required><br>
            </div>
            <!-- End Input Start Time -->
  
            <!-- Start Input End Time -->
            <div class="form-group col-md-4">
              <label for="Berakhir">Waktu berakhir</label>
              <input type="time" class="form-control" id="waktu_berakhir" name="waktu_berakhir" required><br>
            </div>
            <!-- End Input End Time -->
          </div>
          <!-- End Input Date , Start Time and End Time -->
  
          <!-- Start Check Room Type -->
          <div class="form-group pl-1 pr-2">
            <legend class="col-form-label pt-0">Pilih Ruangan</legend>
            <div class="d-flex flex-row justify-content-between align-items-center">
              <select class="form-control mr-1" id="ruangan" name="ruangan" required>
                <option value="" disabled selected>Pilih Ruangan</option>
                @foreach ($ruangan as $r)
                <option value="{{ $r->id }}">{{ $r->ruangan }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- End Check Room Type -->
          
          <!-- Start Input Remark -->
          <div class="form-group">
            <label for="textAreaRemark">Keperluan</label>
            <textarea class="form-control" name="keperluan" id="keperluan" rows="2" placeholder="Silahkan tuliskan kegiatan"></textarea>
          </div>
          <!-- End Input Remark -->
  
          <!-- Start Submit Button -->
          <button class="btn btn-primary btn-block col-lg-2" type="submit"><a href="jadwal"></a>Submit</button>
          <!-- End Submit Button -->
        </form>
        <!-- End Form -->
      </div>
      <!-- End Card Body -->
    </div>
    <!-- End Card -->
    <footer>
      <div class="my-4 text-muted text-center">
        <p>© SIRUANG</p>
      </div>
    </footer>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
    <!-- Start Scritp for Form -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <!-- End Scritp for Form -->
  
  </body>