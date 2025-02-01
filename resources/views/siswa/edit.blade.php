@extends('layout')

@section('konten')


<!-- Start content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Range Slider</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <div class="text-center">

                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Masukan Data</button>
                            </div>
                        </li>
                    </ol>

                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                            <div class="info">Web Data Nexus</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Masukan Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">ION Range slider</h4>
                            <p class="text-muted m-b-30">Cool, comfortable, responsive and easily customizable range slider</p>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-3">
                                        <h5 class="font-14 m-b-20 mt-0">Default</h5>


                                        <form action="{{ route('siswa.update', $data->id)}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="text" name="nis" class="form-control" id="exampleInputEmail1" value="{{$data['nis']}}" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{$data['nama']}}" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nomor Telp Yang Bisa Dihubungi</label>
                                                <input type="text" name="nomer_tlp" class="form-control" id="exampleInputEmail1" value="{{$data['nomer_tlp']}}" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nomor Telp Yang Bisa Dihubungi</label>
                                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" value="{{$data['alamat']}}" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nomor Telp Yang Bisa Dihubungi</label>
                                                <input type="text" name="hoby" class="form-control" id="exampleInputEmail1" value="{{$data['hoby']}}" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>







                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>
        <!-- end page content-->

    </div> <!-- container-fluid -->

</div> <!-- content -->
@endsection('konten')