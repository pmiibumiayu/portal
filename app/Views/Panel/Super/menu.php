<?= $this->extend($config->viewLayout['main'] . 'index') ?>
<?= $this->section('main') ?>

<h1 class="app-page-title">Manajemen Menu</h1>

<?php
d($menu);
d($encmenu);
?>

<!-- Tab-title -->
<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="menus-main-tab" data-bs-toggle="tab" href="#menus-main"
        role="tab" aria-controls="menus-main" aria-selected="true">Main Menu</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="menus-sub-tab" data-bs-toggle="tab" href="#menus-sub" role="tab"
        aria-controls="menus-sub" aria-selected="false">Sub Menu</a>
</nav>
<!-- Tab-title -->

<!-- tab-content-->
<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="menus-main" role="tabpanel" aria-labelledby="menus-main-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="row g-3 mb-4 align-items-center justify-content-center">
                    <div class="col-auto">
                        <a class="btn app-btn-secondary" href="#!">
                            <i class="bi bi-plus-circle"></i>
                            Tambah
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">Order</th>
                                <th class="cell">Icon</th>
                                <th class="cell">Label</th>
                                <th class="cell">Route</th>
                                <th class="cell">Role</th>
                                <th class="cell">Type</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cell">1</td>
                                <td class="cell text-center"><i class="bi bi-list"></i></td>
                                <td class="cell">Manajemen Menu</td>
                                <td class="cell">#!</td>
                                <td class="cell">
                                    <span class="badge bg-danger">super</span>
                                    <span class="badge bg-danger">pengurus</span>
                                    <span class="badge bg-danger">kader</span>
                                </td>
                                <td class="cell"><span class="badge bg-success">Single</span></td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#!">Edit</a> <a
                                        class="btn-sm app-btn-secondary" href="#!">Hapus</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="menus-sub" role="tabpanel" aria-labelledby="menus-sub-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="row g-3 mb-4 align-items-center justify-content-center">
                    <div class="col-auto">
                        <a class="btn app-btn-secondary" href="#!">
                            <i class="bi bi-plus-circle"></i>
                            Tambah
                        </a>
                    </div>
                </div>
                <!--//row-->
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">Order</th>
                                <th class="cell">Label</th>
                                <th class="cell">Deskripsi</th>
                                <th class="cell">Route</th>
                                <th class="cell">Sub Of</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cell">1</td>
                                <td class="cell">Manajemen Menu</td>
                                <td class="cell"><span class="truncate">Kontak yang dapat dihubungi oleh publik</span>
                                </td>
                                <td class="cell">#!</td>
                                <td class="cell">
                                    <span class="badge bg-danger">menu</span>
                                </td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#!">Edit</a> <a
                                        class="btn-sm app-btn-secondary" href="#!">Hapus</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tab-content-->

<?= $this->endSection() ?>