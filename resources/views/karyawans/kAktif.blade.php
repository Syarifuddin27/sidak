{{-- @extends('test') --}}
@extends('karyawans.test')
@section('content')

    <div class="panel-body">
        <table id="karyawan-table" class="table table-hover" style="width: 100%">
            <thead>
                <tr>
                    <th>Kode Dokumen</th>
                    {{-- <th>Tanggal Dokumen</th> --}}
                    <th>Nama</th>
                    <th>NO Hp</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

@endsection

@section('css')


@push('scripts')

<script type="text/javascript">
$(function() {
    $('#karyawan-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('karyawan.aktif') !!}',
        columns: [
            { data: 'order_number', name: 'order_number' },
            { data: 'nama', name: 'nama' },
            { data: 'nohp', name: 'nohp' },
            { data: 'alamat_lengkap', name: 'alamat' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
{{-- <script type="text/javascript">
    $(function() {
        $('#karyawan-table').dataTable({
            processing: true,
            serverSide: true,
            ajax: "api/kAktif",
            columns: [
                {data: 'order_number'},
                {data: 'tgl_melamar'},
                {data: 'nama'},

                {data: 'nohp'},
                {data: 'alamat_lengkap'},
                // {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    } );
</script> --}}

@endpush

