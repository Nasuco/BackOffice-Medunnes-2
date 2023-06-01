
  <!-- Modal -->
  <form method="POST" action="{{ route('spesialis.store') }}" enctype="multipart/form-data">
    @csrf
    @method('GET')
    <div class="modal fade" id="CreateSpesialisasi" tabindex="-1" aria-labelledby="CreateSpesialisasiLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="CreateSpesialisasiLabel">Tambah Spesialisasi</h1>
          </div>
          <div class="modal-body">
              <form>
                  <!-- Name input -->
                  <div class="form-outline mb-4">
                      <input type="text" id="nama_spesialis" class="form-control @error('nama_spesialis') is-invalid @enderror" name="nama_spesialis" />
                      <label class="form-label" for="form5Example1">Nama Spesialisasi</label>

                      @error('nama_spesialis')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                
                  <!-- Image input -->    
                  <label class="form-label" for="customFile">Image Spesialisasi</label>
                  <input type="file" class="form-control @error('img_spesialis') is-invalid @enderror" id="img_spesialis" name="img_spesialis" />

                  @error('img_spesialis')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
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