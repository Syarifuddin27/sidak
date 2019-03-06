@extends('adminlte::page')
@section('content')
<div class="panel panel-default panel-danger bes">
    <div class="panel-heading">
        <h4><b>{{ $permintaan->order_number }}</b></h4>
    </div>
    <div class="panel-body">
        <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-6">
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Data Perusahaan</small></p>
            </div>
            <div class="stepwizard-step col-xs-6">
                <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                <p><small>Kriteria Calon Pegawai</small></p>
            </div>
        </div>
    </div>
    <div class="panel panel-danger setup-content" id="step-1">
        <section class="invoice">
            <div class="row">

                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> {{ $permintaan->unit }}
                        <?php
                            $hari = date("d-m-Y");
                            $proses = mktime(0,0,0,date("n"),date("j")+0,date("Y"));
                            $hari_ini = date("d-m-Y", $proses);
                            ?>
                            <small class="pull-right">Periode :&nbsp;<?php echo $hari_ini; ?></small>

                    </h2>
                </div>

            </div>

            <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">
                    <legend></legend>
                    <table class="table table-hover">
                        <tr>
                            <td align="left" width="40%"><b>Kode Order</td>
                                <td width="1%">&nbsp</td>
                                <td>{{ $permintaan->order_number }}</td>
                              </tr>
                              <tr>
                                <td align="left"><b>Tanggal Order</b></td>
                            <td>&nbsp;</td>
                            <td>{{ $permintaan->tgl_order }}</td>
                        </tr>
                        <tr>
                            <td align="left"><b>Status</b></td>
                            <td>&nbsp;</td>
                            @if($permintaan->cek != 0)
                            <td>DI SETUJUI oleh {{ $permintaan->verifyOrder->name }}</td>
                            @else
                            <td>Belum DI SETUJUI</td>
                            @endif
                        </tr>
                        <tr>
                            <td align="left"><b>Jumlah</b></td>
                            <td>&nbsp;</td>
                            <td>{{ $permintaan->jumlah }}</td>
                        </tr>
                        <tr>
                            <td align="left"><b>Verifikasi Oleh</b></td>
                            <td>&nbsp;</td>
                            <td>ADMIN</td>
                    </table>
                </div>
                </br>
                <div class="col-sm-12 invoice-col">
                    <legend>DATA PERUSAHAAN</legend>
                    <table class="table table-hover">
                        <tr>
                            <td align="right" width="20%"><b>Nama Perusahaan</b></td>
                            <td width="1%">&nbsp</td>
                            <td>{{ $permintaan->unit }}</td>
                        </tr>
                        <tr>
                            <td align="right"><b>Alamat Perusahaan</b></td>
                            <td>&nbsp;</td>
                            <td>BELUM DI SETTING</td>
                        </tr>
                        <tr>
                            <td align="right"><b>No Telp.</b></td>
                            <td>&nbsp;</td>
                            <td>BELUM SETTING</td>
                        </tr>
                        <tr>
                            <td align="right"><b>Bagian yg Dibutuhkan</b></td>
                            <td>&nbsp;</td>
                            <td>{{ $permintaan->jabatan->name }}</td>
                        </tr>
                        <tr>
                            <td align="right"><b>Gaji yg Diberikan</b></td>
                            <td>&nbsp;</td>
                            <td>{{ $permintaan->gaji }}</td>
                        </tr>
                        <tr>
                            <td align="right"><b>System Kerja</b></td>
                            <td>&nbsp;</td>
                            <td>{{ $permintaan->sistem_kerja }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <legend>LIST KARYAWAN YANG DIBUTUHKAN</legend>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>L / P</th>
                                <th>Bagian yg Dibutuhkan</th>
                                <th>Jumlah</th>
                                {{-- <th>Jurusan</th> --}}
                                <th>Lulusan</th>
                                <th>Usia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ( $permintaan->count() > 0)
                            <tr>
                                <td>{{ $permintaan->id }}</td>
                                <td>{{ $permintaan->jenis_kelamin }}</td>
                                <td>{{ $permintaan->jabatan->name }}</td>
                                <td>{{ $permintaan->jumlah }}</td>
                                {{-- <td>{{ $permintaan->jurusan }}</td> --}}
                                <td>{{ $permintaan->lulusan }}</td>
                                <td>{{ $permintaan->usia }}</td>
                            </tr>
                            @else
                            <tr>
                                <th colSpan="6" class="text-center">Tidak Punya Pendidikan NonFormal</th>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            {{-- <div class="row no-print">
                <div class="col-xs-12">
                    <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                      <i class="fa fa-download"></i> Generate PDF
                    </button>
                </div>
            </div> --}}
        </section>
    </div>
    <div class="panel panel-danger setup-content" id="step-2">
        <section class="invoice">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> PT. Mitra Jua Abadi.
                        <small class="pull-right">Date: 2/10/2014</small>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <h3 style="text-align: center;">Tambah Pegawai : </h3>
                            <div class="text-center">
                                <form action="#" class="form-inline">
                                    <input type="search" name="search" id="search" class="form-control" placeholder="Cari Pegawai">
                                    <button class="btn btn-success">
                                        <i class="fa fa-search"></i>
                                        Search
                                    </button>
                                </form>
                            </div>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                            <table class="table table-striped" id="tborang">
                                <thead>
                                    <tr>
                                        <th><b>Document Id</b></th>
                                        <th><b>Nama</b></th>
                                        <th><b>Devisi</b></th>
                                        <th><b>Alamat</b></th>
                                        <th><b>No HP</b></th>
                                        <th><b>Ket.</b></th>
                                        <th><b>Status</b></th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                {{-- <form method="POST" action="{{ route('simpan.store') }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }} --}}
                                    @foreach($karpermin as $karya)
                                    
                                    @if($karya->permintaan->id == $permintaan->id)
                                    <tr>
                                        <td>{{ $karya->karyawan->order_number }}</td>
                                        <td>{{ $karya->karyawan->nama }}</td>
                                        <td>{{ $karya->karyawan->jabatan->name }}</td>
                                        <td>{{ $karya->karyawan->alamat_lengkap }}</td>
                                        <td>{{ $karya->karyawan->nohp }}</td>
                                        <td>
                                            <input class="form-control" type="number" id="kode_absen[]{{ $karya->karyawan->id }}" name="kode_absen[]{{ $karya->karyawan->id }}" placeholder="Kode Absen" value="{{ $karya->karyawan->kode_absen }}">
                                            @foreach($categories as $category)
                                            <input type="radio" name="category_id{{ $karya->karyawan->id }}" value="{{ $category->id }}"

                                            @if($karya->karyawan->category_id == $category->id)
                                            checked
                                            @endif
                                            > {{ $category->name }} 
                                            
                                            @endforeach
                                            {{-- <input type="radio" name="category_id{{ $karya->karyawan->id }}" value="2">Actived  
                                            <input type="radio" name="category_id{{ $karya->karyawan->id }}" value="3">Resign --}}
                                        </td>
                                        <td>
                                            {{-- <form action="{{ route('simpan.destroy', $karya->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><span class="fa fa-trash-o"></span></button>
                                            </form> --}}
                                            <button type="button" onclick="deleteBaris({{ $karya->id }}, this)" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                {{-- </form> --}}
                                </tbody>
                            </table>
                            <div class="row no-print">
                                <div class="col-xs-12">
                                    {{-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> --}}
                                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;" onclick="saVe()" title="Save to DataBase">
                                      <i class="fa fa-download"></i> Save
                                    </button>
                                </div>
                            </div>
                            {{-- <button type="submit" name="store" class="btn btn-danger">Store</button> --}}
                            <button onclick="klikMe()" class="btn btn-danger">Klik Me</button>
                            {{-- <button id="testAjax" class="btn btn-danger">Test Ajax</button> --}}
                    </div>

                </div>
                
            </div>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            TAMBAH KARYAWAN
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>KODE DOKUMEN</th>
                                        <th>NAMA</th>
                                        <th>GENDER</th>
                                        <th>DEVISI</th>
                                        <th>ALAMAT</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($karyawan as $kry)
                                        @if ($kry->cek != 0 )
                                        @if($kry->category_id == 1)
                                        @if($kry->kode_absen == null)
                                        
                                        <tr>
                                            <td>{{ $kry->order_number }}</td>
                                            <td>{{ $kry->nama }}</td>
                                            <td>{{ $kry->jenis_kelamin }}</td>
                                            <td>{{ $kry->jabatan->name }}</td>
                                            <td>
                                                <ul>
                                                    <li>Kab.{{ $kry->kabupaten }}</li>
                                                    <li>Kec.{{ $kry->kecamatan }}</li>
                                                    <li>Desa.{{ $kry->desa }}</li>
                                                    <li>Almt.{{ $kry->alamat_lengkap }}</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <button class="btn btn-info btn-sm" 
                                                    onclick="test1(
                                                        '{{ $kry->id }}',
                                                        '{{ $kry->order_number }}',
                                                        '{{ $kry->nama }}',
                                                        '{{ $kry->jenis_kelamin }}',
                                                        '{{ $kry->jabatan->name }}',
                                                        '{{ $kry->nohp }}'
                                                        )">
                                                        <i class="fa fa-external-link"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif
                                        @endif
                                        @endif
                                        @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <a href="{{ route('permintaan.index') }}" class="btn btn-success nextBtn pull-right">Censel</a>
    </div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/styleform.css') }}">
@stop

@section('js')
<script src="{{ asset('js/styleform.js') }}"></script>
<script>
var csrf_token ='{{ csrf_token() }}';
</script>
<script type="text/javascript">

    var sistem_kerja = "<?php echo( $permintaan->sistem_kerja ) ?>";
    var idpermintaan = "<?php echo( $permintaan->id ) ?>";
    var idJabatan = "<?php echo( $permintaan->jabatan->id ) ?>";
    var IDKarr = [];
    var IDK = "<?php 
        foreach ($karpermin as $karya) {
            if ($karya->permintaan->id == $permintaan->id) {
                ?>"+

                IDKarr.push("<?php echo($karya->karyawan->id)?>")

                "<?php
            }
        }
        ?>";

    var dataKaryawan = [];
    var number;
    var category = "";
    var idKaryawan = [];
    var idK = [];
    

    var refTab = document.getElementById("tborang");
    var data = [];
    // menghitung jumlah isi table
    for ( var i = 1; row = refTab.rows[i] ; i++ ) {
        row = refTab.rows[i];
        data.push(document.getElementById("tborang").rows[i].cells[0].innerHTML);
    }
    // console.log(data);
    // mindah data ke atas
    function test1(id, dokid, nama, kelamin, jabatan, hp) {
        // penacarian, biar tidak ada data yg sama
        var ketemu = data.includes(dokid);
        
        if (ketemu) {
          alert("Data Sudah ada Boss!!");
        } else {
            idKaryawan.push(id);
            dataKaryawan.push([id, dokid, nama, kelamin, jabatan, hp]);
            data.push(dokid);
            document.getElementById("tbody").insertRow(-1).innerHTML =
            '<tr>'
                +'<td>'+ dokid +'</td>'
                +'<td>'+ nama +'</td>'
                +'<td>'+ kelamin +'</td>'
                +'<td>'+ jabatan +'</td>'
                +'<td>'+ hp +'</td>'
                +'<td>'
                    +'<input class="form-control" type="text" id="kode_absen[]'+ id +'" name="kode_absen[]'+id+'" placeholder="Kode Abssen"/>'
                    +'<input type="radio" name="category_id'+ id +'" value="1" checked >No Action '
                    +'<input type="radio" name="category_id'+ id +'" value="2">Actived '
                    +'<input type="radio" name="category_id'+ id +'" value="3">Resign '
                +'</td>'
                +'<td><button type="button" onclick="RowDel('+ id +', this)" class="btn btn-danger btn-sm">Delete</button></td>'
            +'</tr>'
        }
        // console.log('Jabatan',jabatan);
        // console.log('isi array',idKaryawan.length);
    }
        // console.log('dsata karyawan',dataKaryawan);

    function saVe() {
        IDKarr.forEach(function(val) {
            var kode_absen = document.getElementById("kode_absen[]"+val).value;
            var category = document.querySelector('input[name="category_id'+val+'"]:checked').value;
            
            var req = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var sm = ['_token={{csrf_token()}}&id='+val+' &kode_absen='+kode_absen+' &category='+category+'&idJabatan='+idJabatan+'&sistem_kerja='+sistem_kerja];

            req.open('POST', '/ajax/upStore', true);
            req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            req.send(sm);
            req.onreadystatechange = function()
            {
                if(req.readyState == 4){
                    // alert(req.responseText); //just for debug\
                  // see_resp.innerHTML = req.responseText;
                }
            }
            // console.log(ambilSemua);
        });
    }

    // function to save table karyawan_permintaan
    function klikMe()
    {
        if (idKaryawan.length > 0) {
            var req = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var sm = ['_token={{csrf_token()}}&idP='+idpermintaan+'&idK='+idKaryawan];
            req.open('POST', '/ajax/send1', true);
            req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            req.send(sm);
            req.onreadystatechange = function()
            {
                if(req.readyState == 4){
                    alert(req.responseText); //just for debug\
                  // see_resp.innerHTML = req.responseText;
                }
            }
        } else {
            alert("masih kosong");
        }
    }

    // delete Row and in DataBase
    function deleteBaris(id, r) {
        // validation browser
        var req = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        // id yang mau di input untuk di hapus + Token dari laravel
        var sm = '_token={{csrf_token()}}&id'+id;
        // method post karena akan di input ke controller
        req.open('POST', '/simpan/hapus'+id, true);
        req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        req.send(sm);
        req.onreadystatechange = function()
        {
            req.readyState == 4
        }
        var i = r.parentNode.rowIndex;
        document.getElementById("tbody").deleteRow(i);
    }

    // function removeItem(array, item){
    //     for(var i in array){
    //         if(array[i]==item){
    //             array.splice(i,1);
    //             break;
    //         }
    //     }
    // }

    // deleteRow before klik button 'klikMe'
    function RowDel(id, r){
        
        // console.log('"'+id+'"');
        // var isi = idKaryawan.join(',');
        // var arrIsi = [];

        // // console.log(' jumlah array' + isi.length);

        // for (var i = 0; i < isi.length; i++) {
        //     if (isi[i] != ",") {
        //         arrIsi.push( isi[i] );
        //     }
        // }

        // removeItem(arrIsi, id);

        // console.log("isine: " , arrIsi);

        // var idH = '"'+id+'"';
        var idH = id;
        var idH1 = idH.toString();
        var index = idKaryawan.indexOf(idH1);
        if (index !== -1) idKaryawan.splice(index, 1);
        console.log(idH);
        console.log('Index',index);
        console.log(idKaryawan);
       
        var i = r.parentNode.rowIndex;
        document.getElementById("tbody").deleteRow(i);
    }

        // console.log('Global',idKaryawan);

    // function remove(array, element) {
    //     const index = array.indexOf(element);
    //     array.splice(index, 1);
    // }


</script>

@stop
