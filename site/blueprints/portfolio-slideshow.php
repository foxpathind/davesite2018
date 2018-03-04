<?php if(!defined('KIRBY')) exit ?>

title: Portfolio Slideshow
pages: true
files:
  sortable: true

fields:
  title: 
    label: Title
    type:  text
  slidespeed:
    label: slideshow speed (ms)
    type: number
    step: 100
    min: 0
    max: 5000
    width: 1/2
  rewindspeed:
    label: rewind speed (ms)
    type: number
    step: 100
    min: 0
    max: 5000
    width: 1/2
  text:
    label: Text
    type:  textarea
