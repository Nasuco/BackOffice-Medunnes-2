<!-- Modal -->
<form method="POST" action="{{ route('dokter.store') }}" enctype="multipart/form-data">
  @csrf
  @method('GET')
  <div class="modal fade" id="CreateDokter" tabindex="-1" aria-labelledby="CreateDokterLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="CreateDokterLabel">Tambah Dokter</h1>
        </div>
        <div class="modal-body">
          <form>
                  <div class="form-outline mb-4">
                      <input type="number" id="id_user" class="form-control @error('id_user') is-invalid @enderror" name="id_user" value="{{ old('id_user') }}"/>
                      <label class="form-label" for="form5Example1">User ID</label>

                      @error('id_user')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="number" id="id_spesialis" class="form-control @error('id_spesialis') is-invalid @enderror" name="id_spesialis" value="{{ old('id_spesialis') }}"/>
                      <label class="form-label" for="form5Example1">Spesialis ID</label>

                      @error('id_spesialis')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                <!-- Name input -->
                  <div class="form-outline mb-4">
                      <input type="text" id="title_depan" class="form-control @error('title_depan') is-invalid @enderror" name="title_depan" value="{{ old('title_depan') }}" />
                      <label class="form-label" for="form5Example1">Title Depan</label>

                      @error('title_depan')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="text" id="nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ old('nama_dokter') }}" />
                      <label class="form-label" for="form5Example1">Nama Dokter</label>

                      @error('nama_dokter')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="text" id="title_belakang" class="form-control @error('title_belakang') is-invalid @enderror" name="title_belakang" value="{{ old('title_belakang') }}" />
                      <label class="form-label" for="form5Example1">Title Belakang</label>

                      @error('title_belakang')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="text" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" />
                      <label class="form-label" for="form5Example1">Jenis Kelamin</label>

                      @error('jenis_kelamin')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              
                  <!-- Image input -->    
                  <label class="form-label" for="customFile">Image Spesialisasi</label>
                  <input type="file" class="form-control mb-4 @error('img_spesialis') is-invalid @enderror" id="img_spesialis" name="img_spesialis" value="{{ old('img_spesialis') }}"/>

                  @error('img_spesialis')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                  <div class="form-outline mb-4">
                      <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" />
                      <label class="form-label" for="form5Example1">Alamat</label>

                      @error('alamat')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="text" id="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}" />
                      <label class="form-label" for="form5Example1">No. Tlp</label>

                      @error('no_tlp')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="text" id="tempat_kerja" class="form-control @error('tempat_kerja') is-invalid @enderror" name="tempat_kerja" value="{{ old('tempat_kerja') }}" />
                      <label class="form-label" for="form5Example1">Tempat Kerja</label>

                      @error('tempat_kerja')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="number" id="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" name="tahun_lulus" value="{{ old('tahun_lulus') }}" />
                      <label class="form-label" for="form5Example1">Tahun Lulus</label>

                      @error('tahun_lulus')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="date" id="tgl_mulai_aktif" class="form-control @error('tgl_mulai_aktif') is-invalid @enderror" name="tgl_mulai_aktif" value="{{ old('tgl_mulai_aktif') }}" />
                      <label class="form-label" for="form5Example1">Tgl Mulai Aktif</label>

                      @error('tgl_mulai_aktif')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="text" id="alumni_kampus" class="form-control @error('alumni_kampus') is-invalid @enderror" name="alumni_kampus" value="{{ old('alumni_kampus') }}" />
                      <label class="form-label" for="form5Example1">Alumni Kampus</label>

                      @error('alumni_kampus')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="number" id="no_reg" class="form-control @error('no_reg') is-invalid @enderror" name="no_reg" value="{{ old('no_reg') }}" />
                      <label class="form-label" for="form5Example1">No Reg</label>

                      @error('no_reg')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  <div class="form-outline mb-4">
                      <input type="text" id="status" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" />
                      <label class="form-label" for="form5Example1">Status</label>

                      @error('status')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

          </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>
</form>

<script>
  CKEDITOR.replace( 'content' );
</script>