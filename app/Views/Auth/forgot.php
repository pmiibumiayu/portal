<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-body mx-md-4 mb-4">
                    <h3 class="card-title mb-6 text-center"><?=lang('Auth.forgotPassword')?></h3>
                    <?= view('App\Views\Auth\_message_block') ?>
                    <p><?=lang('Auth.enterEmailForInstructions')?></p>
                    <form action="<?= route_to('forgot') ?>" method="post">
                        <?= csrf_field() ?>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email"
                                class="form-control<?php if(session('errors.email')) : ?> is-invalid<?php endif ?>"
                                required />
                            <label class="form-label" for="email"><?=lang('Auth.emailAddress')?></label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit"
                            class="btn btn-primary btn-block mb-4"><?=lang('Auth.sendInstructions')?></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>