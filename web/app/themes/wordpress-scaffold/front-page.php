<?php

use \Timber as Timber;

$templates = [
    'front-page.twig',
];

$context = Timber\Timber::get_context();
$post = new Timber\Post();
$context['post'] = $post;
$context['templates'] = $templates;

Timber\Timber::render('base.twig', $context);
