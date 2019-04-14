<div class="modal modal-info fade text-left" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="modalTambahData" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-info text-white">
      <div class="modal-header">
        <h5 class="modal-title">Tambah data praktikum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formTambahData">
        <div class="modal-body">
          <label for="kode">Kode kelas</label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" placeholder="Masukkan kode kelas" name="kode" id="kode">
          </div>
          <label for="nama">Nama praktikum</label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" placeholder="Masukkan nama praktikum" name="nama" id="nama">
          </div>
          <label for="jumlah">Jumlah praktikan</label>
          <div class="form-group position-relative has-icon-left">
            <input type="number" class="form-control" placeholder="Masukkan jumlah praktikan" name="jumlah" id="jumlah" min=1>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="tambah1" value="tambah">
          <button type="reset" class="btn btn-outline-secondary btn-xs" data-dismiss="modal" value="close">Cancel</button>
          <button type="submit" class="btn btn-outline-light btn-xs" value="submit" name="tambah" id="tambah">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal modal-info fade text-left" id="editData" tabindex="-1" role="dialog" aria-labelledby="modalEditData" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-info text-white">
      <div class="modal-header">
        <h5 class="modal-title">Edit data praktikum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formEditData">
        <div class="modal-body">
          <label for="kode">Kode kelas</label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" placeholder="Masukkan kode kelas" name="kode" id="kode1">
          </div>
          <label for="nama">Nama praktikum</label>
          <div class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" placeholder="Masukkan nama praktikum" name="nama" id="nama1">
          </div>
          <label for="jumlah">Jumlah praktikan</label>
          <div class="form-group position-relative has-icon-left">
            <input type="number" class="form-control" placeholder="Masukkan jumlah praktikan" name="jumlah" id="jumlah1" min=1>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="kdlm" id="kdlm">
          <input type="hidden" name="edit1" value="edit">
          <button type="reset" class="btn btn-outline-secondary btn-xs" data-dismiss="modal" value="close">Cancel</button>
          <button type="submit" class="btn btn-outline-light btn-xs" value="submit" name="edit" id="edit">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>