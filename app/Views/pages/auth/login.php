<?= $this->extend('pages\layout\login\template') ?>

<?= $this->section('content') ?>
    <!-- VALIDATION PLUGIN -->
    <?php $validation = \Config\Services::validation(); ?>

    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <p class="error-text"><?php echo session()->getFlashdata('error'); ?></p>
    <?php endif; ?>
    <form action="/login/submit" method="post">
        <?= csrf_field(); ?>
        <div class="form-group first">
            <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="your-email@gmail.com" name="email" id="email">
            <!-- Error -->
            <?php if($validation->getError('email')) {?>
                <small class="error-text">
                    <?= $error = $validation->getError('email'); ?>
                </small>
            <?php }?>
        </div>
        <div class="form-group last mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Your Password" name="password" id="password">
            <?php if($validation->getError('password')) {?>
                <small class="error-text">
                    <?= $error = $validation->getError('password'); ?>
                </small>
            <?php }?>
        </div>
        
        <div class="d-flex mb-5 align-items-center">
            <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
            <input type="checkbox" checked="checked"/>
            <div class="control__indicator"></div>
            </label>
            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
        </div>

        <input type="submit" value="Log In" class="btn btn-block btn-primary">
    </form>
<?= $this->endSection() ?>