<?php

use \Timber as Timber;

$templates = [
    '404.twig',
];

$context = Timber\Timber::get_context();
$context['templates'] = $templates;

Timber\Timber::render('base.twig', $context);
