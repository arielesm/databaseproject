@extends('layouts.app')
@section('contents')

<style>
    .menu-bar {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background-color: white;
        border-bottom: 1px solid black;
    }

    .menu-item {
        margin-right: 10px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
    }

    th {
        background-color: #00BFFF;
        color: black;
    }
    .box {
        display: flex;
        align-items: center;
        border: 1px solid gray ;
        height: 100px;
        background-color: white;
    }
    .text {
        align-self: flex-start;
    }

    .image-container {
        display: inline-block;
        justify-content: center;
        align-items: center;
        height: 110px;
        flex-direction: column;
    }

    .fp-thumbnail {
        width: 90px;
        height: 90px;
        text-align: center;
    }

    .fp-thumbnail img {
        max-width: 100%;
        max-height: 100%;
    }

    .fp-filename-field {
        text-align: center;
    }

    .fp-filename {
        width: 300px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
</style>



<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4"><a class="btn btn-primary btn-sm d-none d-sm-inline-block text-primary" href="#" style="  background-color: #e9ecee;
  font-size: 16px;
"><i class="fas fa-home fa-sm text-primary"></i>/ Pengajuan Izin Kerja Sama / View Proposal<br /></a></div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary" style="  background-color: #5e72e3;">
                <div class="text-dark font-weight-bold h5 mb-0"></div>
                <div class="card-body">
                    <div class="row align-items-center justify-content-center no-gutters">
                        <div>
                            <div class="col text-center" style="  color: rgb(255,255,255); background-color: #5e72e3; font-size: 14px;">
                                <span>BAB 1</span></div>
                            <div class="col text-center" style="  color: rgb(255,255,255); background-color: #5e72e3; font-size: 14px;">
                                <span>PROFIL PERGURUAN</span></div>
                            <div class="col text-center" style="  color: rgb(255,255,255); background-color: #5e72e3; font-size: 14px;">
                                <span>TINGGI</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card primary py-2" style="  background-color: #ffffff;">
                <div class="text-dark font-weight-bold h5 mb-0"></div>
                <div class="card-body">
                    <div class="row align-items-center justify-content-center no-gutters">
                        <div>
                            <div class="col text-center" style="  color: #5e72e3; background-color: #ffffff; font-size: 14px;">
                                <span>BAB 2</span></div>
                            <div class="col text-center" style="  color: #5e72e3; background-color: #ffffff; font-size: 14px;">
                                <span>DOKUMEN KERJA SAMA</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card primary py-2" style="  background-color: #ffffff;">
                <div class="text-dark font-weight-bold h5 mb-0"></div>
                <div class="card-body">
                    <div class="row align-items-center justify-content-center no-gutters">
                        <div>
                            <div class="col text-center" style="  color: #5e72e3; background-color: #ffffff; font-size: 14px;">
                                <span>BAB 3</span></div>
                            <div class="col text-center" style="  color: #5e72e3; background-color: #ffffff; font-size: 14px;">
                                <span>KESIAPAN SUMBER DAYA</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card primary py-0" style="background-color: #ffffff;">
                <div class="text-dark font-weight-bold h5 mb-0"></div>
                <div class="card-body">
                    <div class="row align-items-center justify-content-center no-gutters">
                        <div>
                            <div class="col text-center" style="  color: #5e72e3; background-color: #ffffff; font-size: 14px;"><span>BAB 4</span></div>
                            <div class="col text-center" style="  color: #5e72e3; background-color: #ffffff; font-size: 14px;"><span>RENCANA PELAKSANAAN</span>
                            <div class="col text-center" style="  color: #5e72e3; background-color: #ffffff; font-size: 14px;"><span>KERJA SAMA</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-xl-8">
</div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div class="text-uppercase fw-bold text-xs mb-3"><span style="font-size: 18px;text-align: center;color: #000000;font-weight: bold;">BAB 1.Profil Perguruan tinggi</span></div>
                </div>
            </div>
            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 text-nowrap" style="margin-left: 30px;">
                    <div class="fw-bold text-xs mb-3"><span style="font-size: 16px;text-align: center;">No Berkas       :  {{ $item->nama_berkas }}</span></div>
                    <div class="fw-bold text-xs mb-3"><span style="font-size: 16px;text-align: center;">Judul Berkas    : {{ $item->judul_berkas }}</span></div>
                </div>
            </div>
            @endforeach


            <body>
                <table>
                    <tr>
                        <th style="text-align: center;">PROFIL PERGURUAN TINGGI</th>
                    </tr>
                </table>
            </body>

            @foreach ($viewbabsatu as $item)
            <div class="row" style="background-color: lightgreen;">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: left; padding: 5px;">Nama PT</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7" > 
                    <div id="dataTable" class="table-responsive table mt-2"  role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0" >
                            <tbody>
                                <tr>
                                    
                                        <div class="mb-3">
                                            <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" >
                                            {{ $item->nama_pt }}
                                            </textarea>
                                        </div>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row" style="background-color: lightgreen;">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Alamat PT</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                    
                                    <div class="mb-3">
                                        <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                        {{ $item->alamat_pt }}
                                        </textarea>
                                    </div>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Izin Operasional PT</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                        <label for="formFile" class="form-label">Izin Operasional</label>
                                        <div class="mb-3">
                                            <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                            {{ $item->izinop_text }}
                                            </textarea>
                                        </div>
                                </tr>
                            </tbody>
                        </table>

                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                    <td>
                                   
                                        <label for="formFile" class="form-label">Scan Izin Operasional</label>
                                        
                                        <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->izinop_file }}" target="_blank">{{ $item->nama_pt }} - Scan Izin Operasional</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                    
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row"> 
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Status Akreditasi Institusi</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                        <label for="formFile" class="form-label">Status Akreditasi Institusi</label>
                                        <div class="mb-3">
                                            <select class="form-select " aria-label="Default select example" readonly placeholder="" style="width: 200px;">
                                            <option selected>{{ $item->statakreinst_text }}</option>
                                            </select>
                                        </div>
                                </tr>
                            </tbody>
                        </table>

                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Scan SK  Akreditasi Institusi</label>
                                        
                                        <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->statakreinst_file }}" target="_blank">{{ $item->nama_pt }} - Scan SK Akreditasi Institusi</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            <body>
                <table>
                    <tr>
                    <th style="text-align: center;">PROFIL PERGURUAN TINGGI MITRA</th>
                    </tr>
                </table>
            </body>

            @foreach ($viewbabsatu as $item)
            <div class="row" style="background-color: lightgreen;">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: left;">Nama PT</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                        <div class="mb-3">
                                            <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                            {{ $item->namaptmitra }}
                                            </textarea>
                                        </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Alamat PT</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                    
                                        <div class="mb-3">
                                            <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                            {{ $item->alamatptmitra }}
                                            </textarea>
                                        </div>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row" style="background-color: lightgreen;">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: left;">Negara</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                    <select class="form-select " aria-label="Default select example" readonly placeholder="" style="width: 800px;">
                                    <option selected >{{ $item->negaramitra }}</option>
                                    </select>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Izin Operasional PT</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                        <label for="formFile" class="form-label">Izin Operasional</label>
                                        <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                        {{ $item->izinopmitra_text }}
                                        </textarea>
                                </tr>
                            </tbody>
                        </table>

                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Scan Izin Operasional</label>
                                        
                                        <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->izinopmitra_file }}" target="_blank">{{ $item->namaptmitra }} - Scan Izin Operasional</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Status Akreditasi Institusi</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                        <label for="formFile" class="form-label">Status Akreditasi Institusi</label>
                                        <div class="mb-3">
                                            <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                            {{ $item->statakreinstmitra_text }}
                                            </textarea>
                                        </div>
                                </tr>
                            </tbody>
                        </table>

                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Scan SK  Akreditasi Institusi</label>
                                        
                                        <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->statakreinstmitra_file }}" target="_blank">{{ $item->namaptmitra }} - Scan SK Akreditasi Institusi</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach
            
            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Peringkat Internasional</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                    
                                        <div class="mb-3">
                                            <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                            {{ $item->peringinter }}
                                            </textarea>
                                        </div>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            <body>
                <table>
                    <tr>
                        <th style="text-align: center;">PROFIL PROGRAM STUDI</th>
                    </tr>
                </table>
            </body>

            @foreach ($viewbabsatu as $item)
            <div class="row" style="background-color: lightgreen;">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: left;">Nama Prodi</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <thead>
                                <tr>
                                    <td>PT:{{ $item->nama_pt }}</td>
                                    <td>PT.MITRA:{{ $item->namaptmitra }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="form-select " aria-label="Default select example" readonly placeholder="" style="width: 200px;">
                                        <option selected >{{ $item->namaprodipt_select }}</option>
                                    </td>
                                    <td>
                                        <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                        {{ $item->namaprodimitra_text }}
                                        </textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row" style="background-color: lightgreen;">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Akreditasi Prodi</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                        <thead>
                                <tr>
                                    <td>PT: {{ $item->nama_pt }}</td>
                                    <td>PT.MITRA: {{ $item->namaptmitra }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="form-select " aria-label="Default select example" readonly placeholder="" style="width: 200px;">
                                        <option selected>{{ $item->akreprodpt_select }}</option>
                                        </select>
                                    </td>
                                    <td>
                                        <textarea class="bg-light form-control border-0 small" type="text" readonly placeholder="" style="padding-top: 50px;">
                                        {{ $item->akreprodmitra_text }}
                                        </textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">SK Akreditasi Prodi</span><span style="text-align: left; color: red;">*</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <thead>
                                <tr>
                                    <td>PT: {{ $item->nama_pt }}</td>
                                    <td>PT.MITRA: {{ $item->namaptmitra }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan SK  Akreditasi Prodi</label>
                                            
                                            <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->sk_akprodpt_file }}" target="_blank">{{ $item->nama_pt }} - Scan SK Akreditasi Prodi</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                      
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan SK  Akreditasi Prodi</label>
                                            
                                            <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->sk_akprodmitra_file }}" target="_blank">{{ $item->namaptmitra }} - Scan SK Akreditasi Prodi</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>    
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach

            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: right;">Izin Operasional Prodi</span></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <thead>
                                <tr>
                                    <td>PT: {{ $item->nama_pt }}</td>
                                    <td>PT.MITRA: {{ $item->namaptmitra }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Izin Operasional Prodi</label>
                                            
                                            <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->izopeprodipt_file }}" target="_blank">{{ $item->nama_pt }} - Scan Izin Operasional Prodi</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Izin Operasional Prodi</label>
                                            
                                            <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->izopeprodimitra_file }}" target="_blank">{{ $item->namaptmitra }} - Scan Izin Operasional Prodi</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach


            <body>
                <table>
                    <tr>
                    <th style="text-align: center;">DOKUMEN KERJA SAMA</th>
                    </tr>
                </table>
            </body>

            @foreach ($viewbabsatu as $item)
            <div class="row">
                <div class="col-md-6 col-xl-5 align-self-top"><span style="text-align: left;">Proposal Usulan Kerja Sama<br>Perguruan Tinggi</span><span style="text-align: left; color: red;">*</span></br></div>
                <div class="col-md-6 col-xl-7">
                    <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                        <table id="dataTable" class="table my-0">
                            <tbody>
                                <tr>
                                        
                                        <div class="filemanager w-100 fm-loaded">
                                                <div class="filemanager-container card">
                                                    <div class="fm-content-wrapper">
                                                        <div class="fp-content">
                                                            <div class="fp-iconview">
                                                                <a href="#">
                                                                    <div class="image-container">
                                                                        <div class="fp-thumbnail">
                                                                            <img src="https://spada.untirta.ac.id/theme/image.php/klass/core/1659283779/f/pdf-80">
                                                                        </div>
                                                                        <div class="fp-filename-field">
                                                                            <div class="fp-filename" link=>
                                                                                <a href="{{ $item->proposalusul_file }}" target="_blank">Proposal Usulan Kerja Sama</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="solid">
            @endforeach


            <div class="col-xl-12" style="padding-right: 43px;">
                <a class="btn btn-success btn-icon-split" role="button" style="margin-left: 1140px;background: #172b4c;">
                    <span class="text-white text">Kembali</span>
                </a>
                <a class="btn btn-success btn-icon-split" role="button" style="margin-left: 1235px;margin-top: -38px;margin-bottom: 38px;">
                    <span class="text-white text" style="padding-right: 14px;">Lanjutkan</span>
                </a>
            </div>
        </div>
    </div>
    
</div>
</div>
</div>

</div>
</div>
</div>

@endsection
