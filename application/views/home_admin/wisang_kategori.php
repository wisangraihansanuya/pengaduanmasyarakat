<div id="main-wrapper">
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal1">Tambah</button>
                            <h4 class="card-title">Kategori</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
                                    <?php $i = 1 ?>
                                    <?php foreach ($kategori as $al) : ?>
                                        <tr>
                                            <th><?= $i ?></th>
                                            <input type="hidden" name="Kategori" value="<? $al['Kategori'] ?>">
                                            <td><?= $al['kategori'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_kp_Modal<?php echo $al['id']; ?>"> Edit</button>
                                                <a class="btn btn-danger" href="<?= base_url('C_login_admin/delete_kategori/' . $al['id'] . '/') ?>" onclick="return confirm('Apakah Anda Yakin ingin menghapus kategori tersebut?');">Delete</a>
                                            </td>
                                        </tr>

                                        <!-- Edit Kategori Modal -->
                                        <div class="modal fade" id="edit_kp_Modal<?php echo $al['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url('C_login_admin/edit_kategori/') . $al['id'] ?>" method="post">
                                                            <div class="form-group">
                                                                <label for="edit_kategori">Kategori</label>
                                                                <input type="edit_kategori" class="form-control" name="edit_kategori" id="edit_kategori" value="<?= $al['kategori'] ?>">
                                                                <input type="hidden" name="edit_id" value="<?= $al['id'] ?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php $i++;
                                    endforeach ?>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                        </tr>
                                        <!-- Modal TAMBAH KATEGORI-->
                                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url('C_login_admin/tambahkategori') ?>" method="post">
                                                            <div class="form-group">
                                                                <label for="kategori">Kategori</label>
                                                                <input type="kategori" class="form-control" name="kategori" id="kategori">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SUB KATEGORI -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal2">Tambah</button>
                            <h4 class="card-title">Sub-Kategori</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Sub-Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($sub_kategori as $al) : ?>
                                            <tr>
                                                <th><?= $i ?></th>
                                                <input type="hidden" name="kategori" value="<? $al['kategori'] ?>">
                                                <input type="hidden" name="sub_kategori" value="<? $al['sub_kategori'] ?>">
                                                <td><?= $al['kategori'] ?></td>
                                                <td><?= $al['subkategori'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_kp_Modal2<?php echo $al['id']; ?>"> Edit</button>
                                                    <a class="btn btn-danger" href="<?= base_url('C_login_admin/delete_subkategori/' . $al['id'] . '/') ?>" onclick="return confirm('Apakah Anda Yakin menghapus sub kategori?');">Delete</a>
                                                </td>
                                            </tr>
                                            
                                        <?php $i++;
                                        endforeach ?>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Sub-Kategori</th>
                                        </tr>
                                        <!-- Modal TAMBAH SUB KATEGORI-->
                                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url('C_login_admin/tambahsubkategori') ?>" method="post">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">Example select</label>
                                                                <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                                                    <option>Pilih kategori</option>
                                                                    <?php foreach ($kategori as $kp) : ?>
                                                                        <option value=" <?= $kp['id'] ?>"><?= $kp['kategori'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="sub_kategori">Sub-Kategori</label>
                                                                <input type="sub_kategori" class="form-control" name="sub_kategori" id="sub_kategori">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>