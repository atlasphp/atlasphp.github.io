<?php
$file = dirname(__DIR__) . '/index.html';
$html = file_get_contents($file);
$lead = substr($html, 0, strpos($html, '<div class="container">'));
$tail = substr($html, strpos($html, '</footer>') + 9);
$html = $lead . file_get_contents(__DIR__ . '/front.html') . $tail;
file_put_contents($file, $html);
