<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('C_siswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="<?php echo site_url('C_siswa/edit');?>" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_siswa" name="id_siswa" value=" <?= $data_mahasiswa->id_siswa; ?>">
                            <input type="text" class="form-control" id="nama" name="nama" value="  <?= $data_mahasiswa->nama; ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $data_mahasiswa->alamat; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email"  id="email" name="email" value="<?= $data_mahasiswa->email; ?>"> 
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" name="password" value=" <?= $data_mahasiswa->password; ?>">
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?= $data_mahasiswa->tgl_lhr; ?>"> 
                            <small class="text-danger">
                                <?php echo form_error('tgl_lhr') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="agama" name="agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if ($data_mahasiswa->agama == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if ($data_mahasiswa->agama == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if ($data_mahasiswa->agama == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if ($data_mahasiswa->agama == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if ($data_mahasiswa->agama == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if ($data_mahasiswa->agama == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('agama') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="gender" name="gender" value="Laki-laki" <?php if ($data_mahasiswa->gender == "Laki-laki") : echo "checked";
                                                                                                                                endif; ?>>
                                    <label class="form-check-label" for="gender">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="gender2" name="gender" value="Perempuan" <?php if ($data_mahasiswa->gender == "Perempuan") : echo "checked";
                                                                                                                                endif; ?>>
                                    <label class="form-check-label" for="gender2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('gender') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="ststus" name="ststus" value="lulus" <?php if ($data_mahasiswa->ststus == "lulus") : echo "checked";
                                                                                                                                    endif; ?>>
                                    <label class="form-check-label" for="ststus">
                                        lulus
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="ststus2" name="ststus" value="belum lulus" <?php if ($data_mahasiswa->ststus == "belum lulus") : echo "checked";
                                                                                                                                    endif; ?>>
                                    <label class="form-check-label" for="ststus2">
                                        belum lulus
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('ststus') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="foto" name="foto" value="<?= $data_mahasiswa->foto; ?>">
                            <td><img src="<?php echo base_url('img/') . $data_mahasiswa->foto; ?>" width="100px" height="100px"></td>
                            <input type="hidden" id="foto" name="foto" value="<?php echo  $data_mahasiswa->foto; ?>">
                            <small class="text-danger">
                            <th><?php echo  $data_mahasiswa->foto; ?></th>    
                                <?php echo form_error('foto') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('alamat')
</script>