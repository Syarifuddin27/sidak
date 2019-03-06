@extends('adminlte::page')
@section('content')
@include('includes.error')
    <div class="panel panel-default panel-danger">
        <div class="panel-heading">
            <h3 class="text-center"><b>Tambah History Absensi</b></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form role="form" method="POST" action="{{ route('absensi.store') }}">
                {{ csrf_field() }}
                    <div class="box-header with-border">
                        <h3 class="box-title"><b>Update Absen Karyawan</b></h3>
                    </div>
                    <div class="row">
                        <section class="col-lg-3 connectedSortable">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Select Divisi</label>
                                    <select class="form-control" id="jabatan_id" name="jabatan_id" onchange="filter(this)" required>
                                        <option>Jabatan/Devisi</option>
                                        @foreach($jabatans as $jbt)
                                        <option value="{{ $jbt->id }}">{{ $jbt->id }}-{{ $jbt->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sistem_kerja">SISTEM KERJA :</label>
                                    <select class="form-control" name="sistem_kerja" onchange="filter(this)" required>
                                        <option class="disabled">.: PILIH :.</option>
                                        <option value="PEGAWAI KONTRAK">PEGAWAI KONTRAK</option>
                                        <option value="PEGAWAI BORONGAN">PEGAWAI BORONGAN</option>
                                        <option value="PEGAWAI HARIAN">PEGAWAI HARIAN</option>
                                    </select>
                                </div>
                            </div>
                        </section>
                        <section class="col-lg-5 connectedSortable">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>TANGGAL :</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="tanggal_awal" required class="form-control pull-right" id="datepicker" data-toggle="datepicker" value="{{ old('tanggal_awal') }}" required>
                                        </div>
                                    </div>
                                </div>
                        </section>
                        <section class="col-lg-12 connectedSortable">
                            <div class="panel-body">
                                <table class="table table-hover" id="karyawans-table">
                                    <thead>
                                        <tr>
                                            <th>Kode Absen</th>
                                            <th>Nama</th>
                                            <th>Nama Ibu</th>
                                            <th>Sebab</th>
                                            <th>Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        
                                    </tbody>
                                </table>
                                <div class="col-md-3 col-md-offset-4">
                                    
                                    <button type="submit" class="btn btn-primary nextBtn pull-right btn-block">SAVE</button>
                                </div>
                            </div>
                        </section>

                    </div>
                </form>
            </div>
        </div>
    </div>

    
@endsection

@section('js')
    <!-- jQuery Sekarang-->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- DataTables sekarang -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script>
        var csrf_token = '{{ csrf_token() }}'

        $(document).ready(function() {
            
            window.datatable = $('#karyawans-table').DataTable({
                data: [],
                columns: [
                    { title: 'Kode Absen'},
                    { title: 'Nama'},
                    { title: 'Nama Ibu'},
                    { title: 'Sebab'},
                    { title: 'Attendance'}
                ]
            });

            var filter_data = {
                jabatan_id: null,
                sistem_kerja: null
            }
            
            window.filter = function filter(input){
                datatable.clear().draw();
                filter_data[input.name] = input.value;
                // console.log(filter_data);
                if(filter_data.jabatan_id != null && filter_data.sistem_kerja != null) {
                    load_data()
                }
            }

            function load_data() {
                $.ajax({
                    url: '{{ route('karyawan.aktif') }}',
                    dataType: 'json',
                    headers: {
                      'X-CSRF-TOKEN': csrf_token
                    },
                    type: 'GET',
                    data: filter_data,
                    success: function(data){
                        compile_datatable(data);
                    }
                });
            }

            function compile_datatable(karya) {
                console.log('ini hasilnya',karya);
                var compile = [];
                datatable.clear();
                $.each(karya, function(index, value){
                    // console.log('isi Comple', compile);
                    // console.log('ini Index',index);
                    console.log('ini Value',value);
                    datatable.row.add([
                        value.kode_absen,
                        value.nama,
                        value.nama_ibu,
                        '<div class="form-group">'+
                            '<input type="text" name="keterangan[]'+value.id+'" class="form-control" placeholder="Sebab Tidak Masuk">'+
                        '</div>',
                        '<div class="form-group">'+
                            '<label class="radio-inline">'+
                                '<input type="radio" name="'+value.id+'" value="I"> Izin'+
                            '</label>'+
                            '<label class="radio-inline">'+
                                '<input type="radio" name="'+value.id+'" value="A"> Absent'+
                            '</label>'+
                        '</div>'
                    ]).draw();
                })
            }

        });

    </script>

@stop
