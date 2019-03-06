<!DOCTYPE html>
<html lang="en">

  <head>
    <style type="text/css">
      .bes{
        text-transform: uppercase;
      }
      .cap{
        text-transform: capitalize;
      }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Icon Logo -->
    <link rel="icon" href="{{ asset('assets/bootstrap/mja.ico') }}">

    <title >History {{ $karyawan->nama }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('res/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="{{asset('res/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('res/css/resume.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none bes">{{ $karyawan->nama }}</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset($karyawan->image) }}" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#attendance">Attendance</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#pkwt">PKWT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#sp">SP</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#kecelakaan">Kecelakaan</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">{{ $karyawan->nama }}
            <!-- <span class="text-primary"></span> -->
          </h1>
          <div class="subheading mb-5">{{ $karyawan->nama_ibu }}
          </div>
          <div class="row invoice-info">
            <div class="col-sm-6 invoice-col">
              <legend><b>Pribadi</b></legend>
              <table class="table table-hover bes">
                <tr>
                    <td align="right" width="40%"><b>Kode Dokumen</td>
                    <td width="1%">&nbsp;</td>
                    <td>{{ $karyawan->order_number }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Tanggal Dokumen</b></td>
                    <td>&nbsp;</td>
                    <td>
                        {{ $karyawan->tgl_melamar->toFormattedDateString() }}
                    </td>
                </tr>
                <tr>
                    <td align="right"><b>Kategori</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->kategori }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Jenis Kelamin</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Agama</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->agama }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Status</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->status }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Tinggi Badan</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->tinggi_badan }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Berat Badan</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->berat_badan }}</td>
                </tr>
              </table>
            </div>

            <div class="col-sm-5 invoice-col">
              <legend><b>Kontak</b></legend>
              <table class="table table-hover bes">
                <tr>
                    <td align="right" width="40%"><b>No KTP</b></td>
                    <td width="1%">&nbsp</td>
                    <td>{{ $karyawan->noktp }}</td>
                </tr>
                <tr>
                    <td align="right"><b>No HP</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->nohp }}</td>
                </tr>
                <tr>

                    <td align="right"><b>TTL</b></td>
                    <td>&nbsp;</td>
                        <td>{{ $karyawan->tempat_lahir }},

                        {{ $karyawan->tgl_lahir->toFormattedDateString() }}
                    </td>
                </tr>

                <tr>
                    @if($karyawan->created_at->diffForHumans() != $karyawan->updated_at->diffForHumans())
                    <td align="right"><b>Di Update </b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->updated_at->diffForHumans() }}</td>
                    @else
                    <td align="right"><b>Di Buat </b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->created_at->diffForHumans() }}</td>
                    @endif
                </tr>

                <tr>
                    <td align="right"><b>Kewarganegaraan</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->warganegara }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Provinsi</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->provinsi }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Kota / Kabupaten</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->kabupaten }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Kecamatan</b></td>
                    <td>&nbsp;</td>
                    <td>{{ $karyawan->kecamatan }}</td>
                </tr>
                <tr>
                    <td align="right"><b>Alamat Lengkap</b></td>
                    <td>&nbsp</td>
                    <td>{{ $karyawan->alamat_lengkap }}</td>
                </tr>
                <!-- jika ada alamat kos -->
                @if ($karyawan->alamat_kos != 0)
                <tr>
                    <td align="right"><b>Alamat Kos</b></td>
                    <td>&nbsp</td>
                    <td>{{ $karyawan->alamat_kos }}</td>
                </tr>
                @endif
              </table>
            </div>
          </div>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="attendance">
        <div class="my-auto">
          <h2 class="mb-5">Attendance
            <span class="text-danger btn btn-outline-dark">{{ $karyawan->kode_absen }}</span>
          </h2>
          {{-- <div class="subheading mb-5">
          </div> --}}
          {{ $absensi->links() }}
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            {{-- <div class="resume-content mr-auto"> --}}
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>TANGGAL</th>
                    <th>KETERANGN</th>
                    <th>SEBAB</th>
                  </tr>
                </thead>
                <tbody>
                  @if($absensi->count() > 0)
                  @foreach($absensi as $absen)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td><span class="text-success">{{ $absen->tanggal_awal->toFormattedDateString() }}</span></td>
                    <td>
                      @if($absen->sebab == 'A')
                        <span class="text-danger">{{ $absen->sebab }}</span>
                      @else
                      <span class="text-info">{{ $absen->sebab }}</span>
                      @endif
                    </td>
                    <td>{{ $absen->keterangan }}</td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                      <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                  </tr>
                  @endif
                </tbody>
              </table>
          </div>

        </div>

      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="pkwt">
        <div class="my-auto">
          <h2 class="mb-5">PKWT</h2>
          {{ $pkwt->links() }}

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>TYPE</th>
                  <th>MULAI</th>
                  <th>SAMPAI</th>
                  <th>KETERANGAN</th>
                  <th>DIBUAT</th>
                </tr>
              </thead>
              <tbody>
                @if($pkwt->count() > 0)
                @foreach($pkwt as $pk)
                <tr>
                  <td>{{ $noP++ }}</td>
                  <td>{{ $pk->type }}</td>
                  <td>{{ $pk->tgl_awal->toFormattedDateString() }}</td>
                  <td>{{ $pk->tgl_sampai->toFormattedDateString() }}</td>
                  <td>{{ $pk->note }}</td>
                  <td>{{ $pk->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="sp">
        <div class="my-auto">
          <h2 class="mb-5">SP</h2>
          {{ $sp->links() }}

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>STATUS</th>
                  <th>TANGGAL</th>
                  <th>KETERANGAN</th>
                  <th>DIBUAT</th>
                </tr>
              </thead>
              <tbody>
                @if($sp->count() > 0)
                @foreach($sp as $s)
                <tr>
                  <td>{{ $noS++ }}</td>
                  <td>{{ $s->status }}</td>
                  <td>{{ $s->tanggal->toFormattedDateString() }}</td>
                  <td>{{ $s->keterangan }}</td>
                  <td>{{ $s->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                </tr>
                @endif
              </tbody>
            </table>
          </div>

      </section>

      {{-- <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Interests</h2>
          <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
          <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
        </div>
      </section> --}}

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="kecelakaan">
        <div class="my-auto">
          <h2 class="mb-5">KECELAKAAN KERJA</h2>
          {{ $kecelakaan->links() }}
          
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>TANGGAL</th>
                  <th>SEBAB</th>
                  <th>KETERANGAN</th>
                  <th>DIBUAT</th>
                </tr>
              </thead>
              <tbody>
                @if($kecelakaan->count() > 0)
                @foreach($kecelakaan as $kec)
                <tr>
                  <td>{{ $noK++ }}</td>
                  <td>{{ $kec->tgl_kec->toFormattedDateString() }}</td>
                  <td>{{ $kec->karena }}</td>
                  <td>{{ $kec->keterangan }}</td>
                  <td>{{ $kec->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <th colSpan="9" class="text-center">Tabel Masih Kosong</th>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('res/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('res/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('res/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('res/js/resume.min.js')}}"></script>

  </body>

</html>
