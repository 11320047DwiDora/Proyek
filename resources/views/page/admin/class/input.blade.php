<div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover"
  style="background-color: #663259;background-size: auto 100%; background-image: url({{ asset('keenthemes/media/misc/taieri.svg') }})">
  <!--begin::body-->
  <div class="card-body container pt-10 pb-8">
    <!--begin::Title-->
    <ol class="breadcrumb text-muted fs-6 fw-bold">
      <li class="breadcrumb-item pe-3 text-white">Data Kelas</li>
      <li class="breadcrumb-item px-3 text-white">
        @if ($room->id)
          Update Data
        @else
          Tambah Data
        @endif
      </li>
      <li class="breadcrumb-item pe-3 "><a href="javascript:;" onclick="load_list(1);" class="pe-3 text-white">Kembali</a>
      </li>
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
                    <label for="title" class="required form-label">Tingkat Kelas</label>
                    <input type="text" name="tingkat_kelas" class="form-control form-control-solid" placeholder="Tingkat Kelas" value="{{$room->tingkat_kelas}}" />
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mb-10">
                    <label for="title" class="required form-label">Nomor Kelas</label>
                    <input type="text" name="no_kelas" class="form-control form-control-solid" placeholder="Nomor Kelas" value="{{$room->no_kelas}}" />
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mb-10">
                    <label for="title" class="required form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control form-control-solid" placeholder="Jurusan" value="{{$room->jurusan}}" />
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mb-10">
                    <label for="title" class="required form-label">Tahun Masuk</label>
                    <input type="text" name="tahun_masuk" class="form-control form-control-solid" placeholder="Tahun Masuk" value="{{$room->tahun_masuk}}" />
                </div>
            </div>

            <div class="min-w-150px text-end">
              @if ($room->id)
                <button id="tombol_simpan"
                  onclick="handle_upload('#tombol_simpan','#form_input','{{ route('admin.room.update', $room->id) }}','PATCH','Simpan');"
                  class="btn btn-primary">Simpan</button>
              @else
                <button id="tombol_simpan"
                  onclick="handle_upload('#tombol_simpan','#form_input','{{ route('admin.room.store') }}','POST','Simpan');"
                  class="btn btn-primary">Simpan</button>
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
  number_only('year');
</script>
