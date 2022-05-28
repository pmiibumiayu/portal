<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-body mx-md-4 mb-4">
                    <h3 class="card-title mb-6 text-center"><?=lang('Auth.resetYourPassword')?></h3>
                    <?= view('App\Views\Auth\_message_block') ?>
                    <p><?=lang('Auth.enterCodeEmailPassword')?></p>
                    <form action="<?= route_to('reset-password') ?>" method="post">
                        <?= csrf_field() ?>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="token" name="token"
                                class="form-control<?php if(session('errors.token')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="token"><?=lang('Auth.token')?></label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email"
                                class="form-control<?php if(session('errors.email')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="email"><?=lang('Auth.email')?></label>
                        </div>
                        <hr>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password"
                                class="form-control<?php if(session('errors.password')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="password"><?=lang('Auth.newPassword')?></label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="pass_confirm" name="pass_confirm"
                                class="form-control<?php if(session('errors.pass_confirm')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="pass_confirm"><?=lang('Auth.newPasswordRepeat')?></label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit"
                            class="btn btn-primary btn-block mb-4"><?=lang('Auth.resetPassword')?></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>