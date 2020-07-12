    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Diri
        </h1>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data DIri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if (session()->getflashdata('tersimpan')) { ?>

              <div class="alert alert-success alert-dismissible mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <p class="mb-0">
                  <p><?= session()->getflashdata('tersimpan') ?></p>
                </p>
              </div>
            <?php } ?>
            <?php echo form_open(base_url('/user/simpan'), ' id="form_profile"'); ?>
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Pendaftaran</label>
                <input type="text" class="form-control" readonly value="<?= $user_info['nomor_pendaftaran']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <input type="text" class="form-control" readonly value="<?= $user_info['nama']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Tempat Lahir</label>
                <input type="text" class="form-control" readonly value="<?= $user_info['tempat_lahir']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Tanggal Lahir</label>
                <input type="text" class="form-control" readonly value="<?= $user_info['tanggal_lahir']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">No HP/WA</label>
                <input type="text" class="form-control" name="no_telpon" value="<?= $user_info['no_telpon']; ?>" required>
              </div>
              <div class="form-group">
                <label>Jurusan Pilihan</label>
                <select class="form-control" name="jurusan_pilihan">
                  <option value="0">Pilih Jurusan</option>
                  <option value='IPA' <?php if ($user_info['jurusan_pilihan'] == "IPA") echo 'selected="selected"'; ?>>IPA</option>
                  <option value='IPS' <?php if ($user_info['jurusan_pilihan'] == "IPS") echo 'selected="selected"'; ?>>IPS</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Nilai Rata-rata SKHU</label>
                <input type="text" class="form-control" name="nilai_skhu" value="<?= $user_info['nilai_skhu']; ?>" required placeholder="Isikan rata-rata nilai SKHU/SKHU sementara dari SMP/MTs">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Merk HP</label>
                <input type="text" class="form-control" name="merek_hp" value="<?= $user_info['merek_hp']; ?>" required placeholder="Isikan Merk HP peserta didik baru">
              </div>
              <div class="form-group">
                <label>Apakah anda bisa Mengikuti PLS ONLINE pada hari Senin 13 Juli 2020</label>
                <select class="form-control" name="bisa_online">
                  <option value="0">Pilih jawaban</option>
                  <option value='BISA' <?php if ($user_info['bisa_online'] == "BISA") echo 'selected="selected"'; ?>>BISA</option>
                  <option value='TIDAK' <?php if ($user_info['bisa_online'] == "TIDAK") echo 'selected="selected"'; ?>>TIDAK</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Alasan Tidak bisa Online</label>
                <input type="text" class="form-control" name="alasan_tidak_bisa_online" value="<?= $user_info['alasan_tidak_bisa_online']; ?>" placeholder="Isi Jika tidak bisa mengikuti PLS Online">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box -->

          <!-- /.box -->

        </div>

      </section>
      <!-- /.content -->
    </div>