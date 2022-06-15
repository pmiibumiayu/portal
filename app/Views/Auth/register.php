<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-body mx-md-4 mb-4">
                    <h3 class="card-title mb-6 text-center"><?=lang('Auth.register')?></h3>

                    <?= view('App\Views\Auth\_message_block') ?>

                    <form action="<?= route_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-outline mb-4">
                            <input type="text" id="fullname" name="fullname"
                                class="form-control<?php if(session('errors.fullname')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="fullname">Nama Lengkap</label>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email"
                                class="form-control<?php if(session('errors.email')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="email"><?=lang('Auth.email')?></label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="username" name="username"
                                class="form-control<?php if(session('errors.username')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="username"><?=lang('Auth.username')?></label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password"
                                class="form-control<?php if(session('errors.password')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="password"><?=lang('Auth.password')?></label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="pass_confirm" name="pass_confirm"
                                class="form-control<?php if(session('errors.pass_confirm')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                        </div>
                        <div class="mb-4 text-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1"
                                    value="Laki-laki" required />
                                <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2"
                                    value="Perempuan" />
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4"><?=lang('Auth.register')?></button>
                        <!-- Register buttons -->
                        <div class="text-center">
                            <p class="m-0"><?=lang('Auth.alreadyRegistered')?> <a
                                    href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>