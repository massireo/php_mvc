<div class ="container mt-5">
        <div class="row">
            <div class="col-6">
                <?php Flasher::flash(); ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah Data Guru
                </button>
 
                <h3 class="mt-4">Data Guru</h3>
                <ul class="list-group">
                 <?php foreach ($data['guru'] as $guru) : ?>
                    <li class="list-group-item">
                        <?= $guru['nama']; ?>
                        <a href="<?= BASE_URL;?> /guru/hapus/ <?=$guru['id'];?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                        <a href="<?= BASE_URL;?> /guru/ubah/ <?$guru['id'];?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $guru['id'];?>">Ubah</a>
                        <input type="hidden" name="id" id="id">
                        <a href="<?= BASE_URL; ?>/guru/detail/<?=$guru['id']; ?>"class="badge badge-primary float-right ">detail</a>
                    </li>
                 <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" arialabelledby="judulModal" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="judulModal">Tambah Data Guru</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-body">
 <form action="<?= BASE_URL; ?>/guru/tambah" method="post">
 <div class="form-group">
 <label for="nama">Nama</label>
 <input type="text" class="form-control" id="nama" name="nama">
 </div>
 <div class="form-group">
 <label for="jenis_kelamin">Jenis Kelamin</label>
 <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
 <option value="laki-laki">Laki - laki</option>
 <option value="perempuan">Perempuan</option>
 </select>
 </div>
 <div class="form-group">
 <label for="jurusan">jurusan</label>
 <input type="text" class="form-control" id="jurusan" name="jurusan">
 </div>
 <div class="form-group">
 <label for="mapel">Mapel</label>
 <input type="text" class="form-control" id="mapel" name="mapel">
 </div>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" datadismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary">Tambah Data</button>
 </div>
 </div>
 </div>
 </div>