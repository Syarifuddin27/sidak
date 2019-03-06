{{-- @extends('test') --}}
@extends('karyawans.test')
@section('content')

    <div class="panel-body">
        <table id="karyawan-table" class="table table-hover">
            <thead>
                <tr>

                    <th>Kode Dokumen</th>
                    <th>Tanggal Dokumen</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>NO Hp</th>
                    <th>Alamat</th>
                    {{-- <th>Proses</th> --}}
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

@endsection

@section('js')


@endsection

@push('scripts')
<script type="text/javascript">
        $(function() {
                $('#karyawan-table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "karya/json",
                    columns: [
                        {data: 'order_number'},
                        {data: 'tgl_melamar'},
                        {data: 'nama'},
                        {data: 'jabatan.name'},
                        {data: 'nohp'},
                        {data: 'alamat_lengkap'},
                        // {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                    });
        } );</script>

        {{-- <script>
            $(function() {
                $('#karyawan-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: 'karya/json',
                    columns: [
                        { data: 'id'},
                        { data: 'nama'},
                    ]
                });
            });
        </script> --}}

@endpush

