<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">    
    <?php wp_head(); ?>
  </head>
  <body>
    
    <div class="container">
        <div class="row my-5 align-items-center">
            <div class="col-md-8 col-sm-12">
                <h1>Simple Blog with Bootstrap4</h1>
                <p class="lead">Tutorial de criação de tema para o Wordpress com Bootstrap4</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <form>
                    <div class="input-group">
                        <input type="text" name="" id="" class="form-control" placeholder="Pesquisar por...">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-dark">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a href="#" class="nav-link">Início</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>