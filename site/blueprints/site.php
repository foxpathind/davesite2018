<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description
    type:  text
  keywords:
    label: Keywords
    type:  tags  
  author:
    label: Author / Copyright
    type:  text
  follow:
    label: Others sites
    type: structure
    entry: >
      {{followpicto}}<br>
      {{followlink}}<br>
    fields:
      followpicto:
        label: Name
        type: text
      followlink:
        label: Link
        type: text

  stylesettings:
    label: Style settings
    type: headline  
  maxwidth:
    label: Content width (default 768px)
    type: number
    min: 360
    max: 1920
  bgcolor:
    label: Background color
    type:  color
    width: 1/3
  primarycolor:
    label: Text color
    type: color
    default: 000000 
    width: 1/3
  secondarycolor:
    label: Links color
    type: color
    default: 999999
    width: 1/3
  showmenu:
    label: Show menu on large screen
    type:  checkbox
    width: 1/2
  accordion:
    label: Accordion menu (for sections)
    type:  checkbox
    width: 1/2

  customcss:
    label: Advanced settings
    type: headline
  css:
    label: CSS
    type:  textarea


  analytics:
    label: Analystics settings
    type: headline
  analytics_id:
    label: Google Analytics ID
    type:  text