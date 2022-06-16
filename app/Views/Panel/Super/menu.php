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
                        <a class="btn app-btn-secondary btn-add" href="#!">
                            <i class="bi bi-plus-circle"></i>
                            Tambah
                        </a>
                        <a class="btn app-btn-secondary reload-menu" href="#!">
                            <i class="bi bi-arrow-clockwise"></i>
                            Reload
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="table-responsive">
                                <div class="alert alert-primary" role="alert">Anda belum mempunyai data !</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="menus-sub" role="tabpanel" aria-labelledby="menus-sub-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="row g-3 mb-4 align-items-center justify-content-center">
                    <div class="col-auto">
                        <a class="btn app-btn-secondary btn-add" href="#!">
                            <i class="bi bi-plus-circle"></i>
                            Tambah
                        </a>
                        <a class="btn app-btn-secondary reload-menu" href="#!">
                            <i class="bi bi-arrow-clockwise"></i>
                            Reload
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col mb-4">
                            <div class="table-responsive">
                                <div class="alert alert-primary" role="alert">Anda belum mempunyai data !</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tab-content-->

<?= $this->endSection() ?>