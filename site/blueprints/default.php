<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
fields:
  title:
    label: Title
    type:  text
  featured:
    label: Featured
    type: select
    options:
      shuffle: Shuffle
      index: Index
      picture: Picture
  text:
    label: Text
    type:  textarea
