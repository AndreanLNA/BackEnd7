<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mb-2" href="<?= base_url('C_siswa/add'); ?>">Tambah Data</a>
            <div mb-2>
                <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tableMahasiswa">
                            <thead>
                                <tr class="table-success">
                                    <th></th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>EMAIL</th>
                                    <th>PASSWORD</th>
                                    <th>TGL LAHIR</th>
                                    <th>AGAMA</th>
                                    <th>GENDER</th>
                                    <th>STATUS</th>
                                    <th>FOTO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_mahasiswa as $row) : ?>
                                    <tr>
                                        <td>
                                            <a href="<?= site_url('C_siswa/edit/' . $row->id_siswa) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                                            <a href="javascript:void(0);" data="<?= $row->id_siswa ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                                        </td>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->alamat ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->password ?></td>
                                        <td><?= $row->tgl_lhr ?></td>
                                        <td><?= $row->agama ?></td>
                                        <td><?= $row->gender ?></td>
                                        <td><?= $row->ststus ?></td>
                                        <td><img src="<?php echo base_url(). 'img/'. $row ->foto; ?>" width="100px" height="100px"></td>
                                        
                                        
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableMahasiswa').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableMahasiswa').on('click', '.item-delete', function() {
        //ambil data dari atribute data 
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
        //pada controller mahasiswa
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>C_siswa/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>