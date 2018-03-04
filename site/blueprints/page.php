<?php if(!defined('KIRBY')) exit ?>

title: Client Page
pages: true
files: true

fields:
  title:
    label: Title
    type:  text
  client:
    label: Client
    type: text
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
  cardimage:
    label: Page Card image
    type: image
