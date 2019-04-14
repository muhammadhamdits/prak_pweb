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
          <button type="reset" class="btn btn-danger btn-xs" data-dismiss="modal" value="close">Cancel</button>
          <button type="submit" class="btn btn-success btn-xs" value="submit" name="tambah" id="tambah">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>