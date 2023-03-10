<div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover" style="background-color: #663259;background-size: auto 100%; background-image: url({{asset('keenthemes/media/misc/taieri.svg')}})">
    <!--begin::body-->
    <div class="card-body container pt-10 pb-8">
        <!--begin::Title-->
        <ol class="breadcrumb text-muted fs-6 fw-bold">
            <li class="breadcrumb-item pe-3 text-white">Data Guru</li>
            <li class="breadcrumb-item px-3 text-white">
                @if ($guru->id)
                    Update Data
                @else
                    Tambah Data
                @endif
            </li>
            <li class="breadcrumb-item pe-3 "><a href="javascript:;" onclick="load_list(1);" class="pe-3 text-white">Kembali</a></li>
        </ol>
        <!--end::Title-->
    </div>
    <!--end::body-->
</div>
<!--end::Search form-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container" id="kt_content_container">
        <!--begin::details View-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <form id="form_input">
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="nip" class="required form-label">NIP</label>
                                <input type="text" name="nip" class="form-control form-control-solid" placeholder="NIP" value="{{$guru->nip}}" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="name" class="required form-label">Nama</label>
                                <input type="text" name="name" class="form-control form-control-solid" placeholder="Nama" value="{{$guru->name}}" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="phone" class="required form-label">No HP</label>
                                <input type="text" name="phone" class="form-control form-control-solid" placeholder="No HP" value="{{$guru->phone}}"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="email" class="required form-label">Email</label>
                                <input type="email" name="email" class="form-control form-control-solid" placeholder="Email" value="{{$guru->email}}"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="date_birth" class="required form-label">Tanggal Lahir</label>
                                <input type="text" id="date_birth" name="date_birth" class="form-control form-control-solid" placeholder="Tanggal Lahir" value="{{$guru->date_birth}}"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="place_birth" class="required form-label">Tempat Lahir</label>
                                <input type="text" name="place_birth" class="form-control form-control-solid" placeholder="Tempat Lahir" value="{{$guru->place_birth}}"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="religion" class="required form-label">Agama</label>
                                <select class="form-select" name="religion">
                                    <option SELECTED DISABLED>Pilih Agama</option>
                                    <option value="islam" {{$guru->religion == "islam" ? 'selected' : ''}}>Islam</option>
                                    <option value="katolik" {{$guru->religion == "katolik" ? 'selected' : ''}}>Katolik</option>
                                    <option value="protestan" {{$guru->religion == "protestan" ? 'selected' : ''}}>Protestan</option>
                                    <option value="buddha" {{$guru->religion == "buddha" ? 'selected' : ''}}>Buddha</option>
                                    <option value="hindu" {{$guru->religion == "hindu" ? 'selected' : ''}}>Hindu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="address" class="required form-label">Alamat</label>
                                <textarea class="form-control" name="address">{{$guru->address}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="email" class="required form-label">Jenis Kelamin</label>
                                <select name="gender" class="form-select">
                                    <option SELECTED DISABLED>Pilih Jenis Kelamin</option>
                                    <option value="l" {{$guru->gender == "l" ? 'selected' : ''}}>Laki-Laki</option>
                                    <option value="p" {{$guru->gender == "p" ? 'selected' : ''}}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="password" class="required form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-solid" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="min-w-150px text-end">
                            @if ($guru->id)
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('admin.guru.update',$guru->id)}}','PATCH','Simpan');" class="btn btn-primary">Simpan</button>
                            @else
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('admin.guru.store')}}','POST','Simpan');" class="btn btn-primary">Simpan</button>
                            @endif
                        </div>
                        <!--end::Col-->
                    </div>
                </form>
                <!--end::Row-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<script type="text/javascript">
    obj_datepicker('#date_birth');
</script>