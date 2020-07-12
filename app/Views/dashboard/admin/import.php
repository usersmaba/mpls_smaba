    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Diri
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <!-- /.col (left) -->
            <?php echo form_open_multipart(base_url('/admin/postimport'), 'class="form-horizontal ", id="upload_foto_settings"');  ?>
            <div class="card-content">
                <div class="card-body">
                    <p class="card-text">This example uploads a single file using dropzone js library. By default, dropzone is a
                        multiple file uploader and does not have specific option allowing us to switch to single file uploading
                        mode, but this functionality can be achieved by adding more options to the plugin settings, such as
                        <code>maxfilesexceeded</code> callback and <code>maxFiles</code> option set to 1. <code>maxFiles: 1</code>
                        is used to tell dropzone that there should be only one file. When there is more then 1 file the function
                        <code>maxfilesexceeded</code> will be called, with the exceeding file in the first parameter. Now only 1
                        file can be selected and it will be replaced with another one instead of adding it to the preview.</p>
                    <?php
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            Whoops! Ada kesalahan saat input data, yaitu:
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php } ?>
                    <?php
                    if (!empty(session()->getFlashdata('success'))) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php } ?>

                    <div class="row">
                        <div class="col-12 col-sm-6">

                            <label>Twitter</label>

                            <div class="input-group mb-75">
                                <input name="dapo_file" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Upload file dapodik</label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="upload" value="upload" class="btn btn-info">Upload</button>
                </div>

            </div>
            <?php form_close() ?>

        </section>
        <!-- /.content -->
    </div>