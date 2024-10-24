# Flexible Image Gallery Block

## Starting Up
Installing requires the Drupal core Media and Media Library modules and the gLightbox module.

On install, a new custom block type, image style, and associated fields will be created.  If not already existing, a caption field will be added to media images.

## Set Up
Create a new block using type "Flexible Media Gallery".  By default, this is limited to ten images, but can be adjusted in the field settings.

Place your block using Layout Builder or Block layout and the gallery should show.

### I can't edit the captions
The image caption field has been added, but you may need to adjust your media image form display to allow it to be edited.

## Uninstall
Uninstalling will remove the custom block type, images styles, and associated fields.  The caption field added to media images will not be removed.
