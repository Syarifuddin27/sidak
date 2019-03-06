<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-center">Show Dokumen {{ $karyawan->order_number }}</h1>
        </div>
        <div class="panel-body">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        <p><small>Personal</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle">2</a>
                        <p><small>Pendidikan & Pengalaman</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle">3</a>
                        <p><small>History Absensi</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
                        <p><small>Dokumen</small></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-danger setup-content" id="step-1">
                <section class="invoice">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-book"></i> {{ $karyawan->order_number }}
                                <?php
                                        $hari = date("d-m-Y");
                                        $proses	= mktime(0,0,0,date("n"),date("j")+0,date("Y"));
                                        $hari_ini = date("d-m-Y", $proses);
                                        ?>
                                    <small class="pull-right">Terakhir Di Update :&nbsp;{{ $karyawan->updated_at->toFormattedDateString() }}</small>
                            </h2>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-sm-3 invoice-col">
                            <div class="box box-primary text-center">
                                <img class="img-circle" width="200px" height="auto" src="{{ $karyawan->image }}">
                            </div>
                        </div>

                        <div class="col-sm-4 invoice-col">
                            <legend><b>Pribadi</b></legend>
                            <table class="table table-hover">
                                <tr>
                                    <td align="right" width="40%"><b>Kode Dokumen</td>
                                        <td width="1%">&nbsp</td>
                                        <td>{{ $karyawan->order_number }}</td>
                                    </tr>
                                    <tr>
                                        <?php
                                            $hari = $karyawan->tgl_melamar;
                                            $melamar = str_replace('/','-',$hari);
                                        ?>
                                        <td align="right"><b>Tanggal Dokumen</b></td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <?php echo $melamar ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Kategori</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->kategori }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Nama Lengkap</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->nama }}</td>
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

                        <div class="col-sm-4 invoice-col">
                            <legend><b>Kontak</b></legend>
                            <table class="table table-hover">
                                <tr>
                                    <td align="right" width="40%"><b>No Identitas KTP</b></td>
                                    <td width="1%">&nbsp</td>
                                    <td>{{ $karyawan->noktp }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>No HP</b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->nohp }}</td>
                                </tr>
                                <tr>
                                    <?php
                                        $hari = $karyawan->tgl_lahir;
                                        $proses	= str_replace('/','-',$hari);
                                        ?>
                                        <td align="right"><b>TTL</b></td>
                                        <td>&nbsp;</td>
                                        <td>{{ $karyawan->tempat_lahir }},
                                            <?php echo $proses ?>
                                        </td>

                                        {{-- {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $karyawan->tgl_lahir)->format('Y-m-d') }} --}}
                                </tr>

                                <tr>
                                    <td align="right"><b>Di buat </b></td>
                                    <td>&nbsp;</td>
                                    <td>{{ $karyawan->created_at->toFormattedDateString() }}</td>
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
                                <tr>
                                    <td align="right"><b>Alamat Kos</b></td>
                                    <td>&nbsp</td>
                                    <td>{{ $karyawan->alamat_kos }}</td>
                                </tr>
                            </table>
                        </div>

                    </div>


                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                <i class="fa fa-download"></i> Generate PDF
                                </button>
                        </div>
                    </div>
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

                    </div>
                    <div class="panel-heading">
                        <h3 class="panel-title"><b> Pendidikan Formal</b></h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pendidikan</th>
                                        <th>Nama Sekolah</th>
                                        <th>Kota</th>
                                        <th>Jurusan</th>
                                        <th>Mulai</th>
                                        <th>Lulus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($karyawan->pendidikan->count() > 0)
                                    <tr>
                                        <td>{{ $karyawan->pendidikan->id }}</td>
                                        <td>{{ $karyawan->pendidikan->pendidikan }}</td>
                                        <td>{{ $karyawan->pendidikan->nama_sekolah }}</td>
                                        <td>{{ $karyawan->pendidikan->kota_formal }}</td>
                                        <td>{{ $karyawan->pendidikan->jurusan }}</td>
                                        <td>{{ $karyawan->pendidikan->mulai }}</td>
                                        <td>{{ $karyawan->pendidikan->lulus }}</td>
                                    </tr>
                                    @else
                                    <tr>
                                        <th colSpan="6" class="text-center">Tidak Punya Pendidikan</th>
                                    </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Pendidikan Non Formal</b></h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Jenis Pendidikan</th>
                                        <th>Lembaga</th>
                                        <th>Kota</th>
                                        <th>Tahun</th>
                                        <th>Durasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($karyawan->nonpendidikan->count() > 0)
                                    <tr>
                                        <td>{{ $karyawan->nonpendidikan->id }}</td>
                                        <td>{{ $karyawan->nonpendidikan->jenis_pendidikan }}</td>
                                        <td>{{ $karyawan->nonpendidikan->lembaga }}</td>
                                        <td>{{ $karyawan->nonpendidikan->kota }}</td>
                                        <td>{{ $karyawan->nonpendidikan->tahun }}</td>
                                        <td>{{ $karyawan->nonpendidikan->durasi }}</td>
                                    </tr>
                                    @else
                                    <tr>
                                        <th colSpan="6" class="text-center">Tidak Punya Pendidikan NonFormal</th>
                                    </tr>
                                    @endif


                                </tbody>
                            </table>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>Pengalaman Kerja</b></h3>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Alamat Perusahaan</th>
                                            <th>Bidang Usaha</th>
                                            <th>Jabatan</th>
                                            <th>Gaji</th>
                                            <th>Mulai Kerja</th>
                                            <th>Sampai</th>
                                            <th>Alasan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($karyawan->pengalaman->count() > 0)
                                        <tr>
                                            <td>{{ $karyawan->pengalaman->id }}</td>
                                            <td>{{ $karyawan->pengalaman->nama_perusahaan }}</td>
                                            <td>{{ $karyawan->pengalaman->alamat_perusahaan }}</td>
                                            <td>{{ $karyawan->pengalaman->bidang_usaha }}</td>
                                            <td>{{ $karyawan->pengalaman->jabatan }}</td>
                                            <td>{{ $karyawan->pengalaman->gaji }}</td>
                                            <td>{{ $karyawan->pengalaman->mulai_kerja }}</td>
                                            <td>{{ $karyawan->pengalaman->akhir_kerja }}</td>
                                            <td>{{ $karyawan->pengalaman->alasan }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            <th colSpan="9" class="text-center">Tidak Punya Pengalaman</th>
                                        </tr>
                                        @endif

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                <i class="fa fa-download"></i> Generate PDF
                                </button>
                        </div>
                    </div>
                </section>
            </div>

            <div class="panel panel-danger setup-content" id="step-3">
                <section class="invoice">
                    <div class="row">

                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> PT. Mitra Jua Abadi.
                                <small class="pull-right">Date: 2/10/2014</small>
                            </h2>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Serial #</th>
                                        <th>Description</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Call of Duty</td>
                                        <td>455-981-221</td>
                                        <td>El snort testosterone trophy driving gloves handsome</td>
                                        <td>$64.50</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Need for Speed IV</td>
                                        <td>247-925-726</td>
                                        <td>Wes Anderson umami biodiesel</td>
                                        <td>$50.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Monsters DVD</td>
                                        <td>735-845-642</td>
                                        <td>Terry Richardson helvetica tousled street art master</td>
                                        <td>$10.70</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Grown Ups Blue Ray</td>
                                        <td>422-568-642</td>
                                        <td>Tousled lomo letterpress</td>
                                        <td>$25.99</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                            <p class="lead">Amount Due 2/22/2014</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$250.30</td>
                                    </tr>
                                    <tr>
                                        <th>Tax (9.3%)</th>
                                        <td>$10.34</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td>$5.80</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$265.24</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead">Amount Due 2/22/2014</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$250.30</td>
                                    </tr>
                                    <tr>
                                        <th>Tax (9.3%)</th>
                                        <td>$10.34</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td>$5.80</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$265.24</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                <i class="fa fa-download"></i> Generate PDF
                                </button>
                        </div>
                    </div>
                </section>
            </div>
            <div class="panel panel-danger setup-content" id="step-4">
                <section class="invoice">
                    <div class="row">

                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> PT. Mitra Jua Abadi.
                                <small class="pull-right">Date: 2/10/2014</small>
                            </h2>
                        </div>

                    </div>

                    <div class="row invoice-info">

                        <div class="col-sm-6 invoice-col">
                            <legend><b>Pribadi</b></legend>
                            <table class="table table-hover">
                                <tr>
                                    <td align="right" width="40%"><b>Kode Dokumen</td>
                                        <td width="1%">&nbsp</td>
                                        <td>1234566></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><b>Tanggal Dokumen</b></td>
                                    <td>&nbsp;</td>
                                    <td>223222</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Kategori</b></td>
                                    <td>&nbsp;</td>
                                    <td>98847474</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Nama Lengkap</b></td>
                                    <td>&nbsp;</td>
                                    <td>77557550440</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Jenis Kelamin</b></td>
                                    <td>&nbsp;</td>
                                    <td>baru</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Agama</b></td>
                                    <td>&nbsp;</td>
                                    <td>784847</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Status</b></td>
                                    <td>&nbsp;</td>
                                    <td>98847474</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Tinggi Badan</b></td>
                                    <td>&nbsp;</td>
                                    <td>98847474</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Berat Badan</b></td>
                                    <td>&nbsp;</td>
                                    <td>98847474</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-sm-6 invoice-col">
                            <legend><b>Kontak</b></legend>
                            <table class="table table-hover">
                                <tr>
                                    <td align="right" width="40%"><b>No Identitas KTP</b></td>
                                    <td width="1%">&nbsp</td>
                                    <td>1234566></td>
                                </tr>
                                <tr>
                                    <td align="right"><b>No HP</b></td>
                                    <td>&nbsp;</td>
                                    <td>223222</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Tempat Lahir</b></td>
                                    <td>&nbsp;</td>
                                    <td>98847474</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Tanggal Lahir</b></td>
                                    <td>&nbsp;</td>
                                    <td>788873737</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Kewarganegaraan</b></td>
                                    <td>&nbsp;</td>
                                    <td>77557550440</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Provinsi</b></td>
                                    <td>&nbsp;</td>
                                    <td>baru</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Kota / Kabupaten</b></td>
                                    <td>&nbsp;</td>
                                    <td>784847</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Alamat Lengkap</b></td>
                                    <td>&nbsp</td>
                                    <td>sillfia</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Alamat Kos</b></td>
                                    <td>&nbsp</td>
                                    <td>sillfia</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                            <p class="lead">Amount Due 2/22/2014</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$250.30</td>
                                    </tr>
                                    <tr>
                                        <th>Tax (9.3%)</th>
                                        <td>$10.34</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td>$5.80</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$265.24</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead">Amount Due 2/22/2014</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>$250.30</td>
                                    </tr>
                                    <tr>
                                        <th>Tax (9.3%)</th>
                                        <td>$10.34</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping:</th>
                                        <td>$5.80</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>$265.24</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <a href="showprint.blade.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                <i class="fa fa-download"></i> Generate PDF
                                </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
