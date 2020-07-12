    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Diri
        </h1>
      </section>
      <?php $today = time();
      $jam_absen_h1 = $jadwal['jam_absen_h1'];
      $jam_absen_h1_end = $jadwal['jam_absen_h1_end'];
      $jam_respon_h1 = $jadwal['jam_respon_h1'];
      $jam_respon_h1_end = $jadwal['jam_respon_h1_end'];
      $jam_absen_h2 = $jadwal['jam_absen_h2'];
      $jam_absen_h2_end = $jadwal['jam_absen_h2_end'];
      $jam_respon_h2 = $jadwal['jam_respon_h2'];
      $jam_respon_h2_end = $jadwal['jam_respon_h2_end'];
      $jam_absen_h3 = $jadwal['jam_absen_h3'];
      $jam_absen_h3_end = $jadwal['jam_absen_h3_end'];
      $jam_respon_h3 = $jadwal['jam_respon_h3'];
      $jam_respon_h3_end = $jadwal['jam_respon_h3_end'];
      $jam_pesan_kesan = $jadwal['jam_pesan_kesan'];
      $jam_pesan_kesan_end  = $jadwal['jam_pesan_kesan_end'];
      ?>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Absen Hadir </h3>
            </div>
            <div class="box-body" style="text-align: center;">

              <?php if ($jam_absen_h1 <= $today && $jam_absen_h1_end >= $today) { ?>
                <label>Daftar Hadir Hari Pertama</label>
                <div class="form-group">
                  <input type="checkbox" id="myCheck" class="myCheck" data-absen="absen_h1" <?php if ($user_info['absen_h1'] == '-') {
                                                                                            } else {
                                                                                              echo 'checked';
                                                                                            } ?>>
                </div>
                <label>Ceklis untuk mengisi daftar hadir</label>
              <?php } ?>
              <?php if ($jam_respon_h1 <= $today && $jam_respon_h1_end >= $today) { ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jejak Pendapat Hari Pertama</label>
                  <textarea class="form-control responsi" id="responsi" rows="15" data-absen="respon_h1" placeholder="Isikan pendapat anda tetnang PLS hari ini "><?= $user_info['respon_h1']; ?></textarea>
                </div>
              <?php } ?>

              <?php if ($jam_absen_h2 <= $today && $jam_absen_h2_end >= $today) { ?>
                <label>Daftar Hadir Hari Kedua</label>
                <div class="form-group">
                  <input type="checkbox" id="myCheck" class="myCheck" data-absen="absen_h2" <?php if ($user_info['absen_h2'] == '-') {
                                                                                            } else {
                                                                                              echo 'checked';
                                                                                            } ?>>
                </div>
                <label>Ceklis untuk mengisi daftar hadir</label>
              <?php } ?>
              <?php if ($jam_respon_h2 <= $today && $jam_respon_h2_end >= $today) { ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jejak Pendapat Hari Kedua</label>
                  <textarea class="form-control responsi" id="responsi" rows="15" data-absen="respon_h2" placeholder="Isikan pendapat anda tetnang PLS hari ini "><?= $user_info['respon_h2']; ?></textarea>
                </div>
              <?php } ?>

              <?php if ($jam_absen_h3 <= $today && $jam_absen_h3_end >= $today) { ?>
                <label>Daftar Hadir Hari Ketiga</label>
                <div class="form-group">
                  <input type="checkbox" id="myCheck" class="myCheck" data-absen="absen_h3" <?php if ($user_info['absen_h3'] == '-') {
                                                                                            } else {
                                                                                              echo 'checked';
                                                                                            } ?>>
                </div>
                <label>Ceklis untuk mengisi daftar hadir</label>
              <?php } ?>
              <?php if ($jam_respon_h3 <= $today && $jam_respon_h3_end >= $today) { ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jejak Pendapat Hari Ketiga</label>
                  <textarea class="form-control responsi" id="responsi" rows="15" data-absen="respon_h3" placeholder="Isikan pendapat anda tetnang PLS hari ini "><?= $user_info['respon_h3']; ?></textarea>
                </div>
              <?php } ?>

              <?php if ($jam_pesan_kesan <= $today && $jam_pesan_kesan_end >= $today) { ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kesan dan Pesan untuk MPLS Tahun 2020</label>
                  <textarea class="form-control responsi" id="responsi" rows="15" data-absen="pesan_kesan" placeholder="Isikan pendapat anda tetnang PLS hari ini "><?= $user_info['pesan_kesan']; ?></textarea>
                </div>
              <?php } ?>

            </div>
          </div>


          <div class=" box box-primary">
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
    <script>
      $("body").on("change", ".myCheck", function() {
        var test = moment();
        var asd = test.format('HH:mm:ss');
        //dateElement.value = new Date().toISOString().substr(0, 10);
        if ($(this).is(':checked') == true) {
          var absen = $(this).data('absen');
          $.post('<?= base_url("user/simpan_absen") ?>', {
              '<?= csrf_token() ?>': '<?= csrf_hash() ?>',
              no_pendaftaran: <?= $user_info['id_peserta']; ?>,
              var1: asd,
              var2: absen
            },
            function(data) {});
        } else {
          var absen = $(this).data('absen');
          $.post('<?= base_url("user/simpan_absen") ?>', {
              '<?= csrf_token() ?>': '<?= csrf_hash() ?>',
              no_pendaftaran: <?= $user_info['id_peserta']; ?>,
              var1: '-',
              var2: absen
            },
            function(data) {});
        }
      });
    </script>
    <script>
      $("body").on("change", ".responsi", function() {
        var asd = document.getElementById("responsi").value;
        //dateElement.value = new Date().toISOString().substr(0, 10);
        var absen = $(this).data('absen');
        $.post('<?= base_url("user/simpan_absen") ?>', {
            '<?= csrf_token() ?>': '<?= csrf_hash() ?>',
            no_pendaftaran: <?= $user_info['id_peserta']; ?>,
            var1: asd,
            var2: absen
          },
          function(data) {});
      });
    </script>