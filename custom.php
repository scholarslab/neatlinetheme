<?php

$respondSrc = src('respond.min.js', 'javascripts');
$selectivizrSrc = src('selectivizr.min.js', 'javascripts');

$modernizrLoad = "Modernizr.load([{test: Modernizr.mq(), nope: "
  . "['$respondSrc' '$selectivizrSrc']}]);";

queue_js('modernizr.min');
queue_js_string($modernizrLoad);

queue_css('style');

function foobar() {
  echo 'foo';
}

add_plugin_hook('public_theme_header', 'foobar');

