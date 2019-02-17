<?php

// Função para a tag title
function wpbs4_title_tag(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wpbs4_title_tag');