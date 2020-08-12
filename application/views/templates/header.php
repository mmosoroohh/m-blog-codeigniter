<html>
    <head>
        <title>M-Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/litera/bootstrap.min.css" integrity="sha384-Gr51humlTz50RfCwdBYgT+XvbSZqkm8Loa5nWlNrvUqCinoe6C6WUZKHS2WIRx5o" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">M-Blog</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-item">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                        </li>
                    <?php endif; ?>
                    <?php if($this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
                        </li>
                    <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Flash Messages -->
        <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert alert-success">'.$this->
            session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->
            session->flashdata('login_failed').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_login')): ?>
            <?php echo '<p class="alert alert-success">'.$this->
            session->flashdata('user_login').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_logout')): ?>
            <?php echo '<p class="alert alert-success">'.$this->
            session->flashdata('user_logout').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_created')): ?>
            <?php echo '<p class="alert alert-success">'.$this->
            session->flashdata('post_created').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_updated')): ?>
            <?php echo '<p class="alert alert-success">'.$this->
            session->flashdata('post_updated').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('post_deleted')): ?>
            <?php echo '<p class="alert alert-success">'.$this->
            session->flashdata('post_deleted').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('category_created')): ?>
            <?php echo '<p class="alert alert-success">'.$this->
            session->flashdata('category_created').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('category_deleted')): ?>
            <?php echo '<p class="alert alert-success">'.$this->
            session->flashdata('category_deleted').'</p>'; ?>
        <?php endif; ?>
