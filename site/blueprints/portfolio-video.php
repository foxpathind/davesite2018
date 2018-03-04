<?php if(!defined('KIRBY')) exit ?>

title: Portfolio Video
pages: false
files:
  sortable: true

fields:
  title: 
    label: Title
    type:  text
  featured_video:
    label: Video
    type:  oembed
  text:
    label: Text
    type:  textarea
