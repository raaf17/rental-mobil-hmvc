<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home') ?>" style="font-family: Poppins;"><b>RentGo</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdown-1" , data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-1">
                        <a href="<?= base_url('category') ?>" class="dropdown-item">Kategori</a>
                        <a href="<?= base_url('product') ?>" class="dropdown-item">Produk</a>
                        <a href="<?= base_url('order') ?>" class="dropdown-item">Order</a>
                        <a href="<?= base_url('user') ?>" class="dropdown-item">Pengguna</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('auth/register') ?>" class="nav-link">Register</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdown-2" , data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-2">
                        <a href="" class="dropdown-item">Logout</a>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
</nav>