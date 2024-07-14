<div class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">FortuneCodeHub</a>
        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-target="#navbar"
            data-bs-toggle="collapse"    
        >
            <span class="navbar-toggler-icon">
                <i class="bi bi-list"></i>
            </span>
        </button>

        <div class="navbar-collapse collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <?php if (!empty($sessions)) { ?>
                    <li class="nav-item">
                        <a href="<?=ROOT_URL;?>/logout" class="btn btn-anchor shadow">LogOut</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?=ROOT_URL;?>/signin" class="btn btn-anchor shadow">LogIn/SignIn</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="<?=ROOT_URL;?>/signup" class="btn btn-anchor shadow">SignUp</a>
                </li>
            </ul>
        </div>
    </div>
</div>