<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-body mx-md-4 mb-4">
                    <h3 class="card-title mb-6 text-center"><?=lang('Auth.loginTitle')?></h3>
                    <?= view('App\Views\Auth\_message_block') ?>
                    <form action="<?= route_to('login') ?>" method="post">
                        <?= csrf_field() ?>
                        <!-- Email input -->
                        <?php if ($config->validFields === ['email']): ?>
                        <div class="form-outline mb-4">
                            <input type="email" id="login" name="login"
                                class="form-control<?php if(session('errors.login')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="login"><?=lang('Auth.email')?></label>
                        </div>
                        <?php else: ?>
                        <div class="form-outline mb-4">
                            <input type="text" id="login" name="login"
                                class="form-control<?php if(session('errors.login')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="login"><?=lang('Auth.emailOrUsername')?></label>
                        </div>
                        <?php endif; ?>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password"
                                class="form-control<?php if(session('errors.password')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="password"><?=lang('Auth.password')?></label>
                        </div>
                        <!-- 2 column grid layout for inline styling -->
                        <?php if ($config->allowRemembering): ?>
                        <div class="row mb-4">
                            <div class="col d-flex text-start">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember"
                                        name="remember" <?php if(old('remember')) : ?> checked <?php endif ?> />
                                    <label class="form-check-label" for="remember">
                                        <?=lang('Auth.rememberMe')?></label>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <!-- Submit button -->
                        <button type="submit"
                            class="btn btn-primary btn-block mb-4"><?=lang('Auth.loginAction')?></button>
                        <!-- Register buttons -->
                        <div class="text-center">
                            <?php if ($config->allowRegistration) : ?>
                            <a href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a>
                            <?php endif; ?>
                            <!-- Simple link -->
                            <?php if ($config->activeResetter): ?>
                            <div class="my-2">
                                <a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a>
                                <?php endif; ?>
                            </div>
                            <?php if ($config->socialLogin) : ?>
                            <p>Atau Masuk menggunakan:</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>