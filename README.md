# Flexible Image Gallery
**A Drupal module for quickly adding a nice looking image gallery.**

## What does it do?
- Creates a content type "Flexible Image Gallery" with associated fields and image styles to display a nice looking, flexible, gallery grid.
- Uses gLightbox to display the full images in a modal.
- (Optional, using sub-module Flexible Image Gallery Blocks) Creates a custom block type that can be used in the Block Layout, Layout Builder, or anywhere else you can place custom blocks.

## Starting Up
Requires the Drupal core Media and Media Library modules and the [gLightbox module](https://www.drupal.org/project/glightbox).

### Flexible Image Gallery main module
On install, a new content type and associated fields and styles will be created.

#### To use: 
1. Create new a new node using the content type "Flexible Media Gallery".
2. Add images to the "Flexible Gallery" field.
3. View your node and admire how nice it looks.

#### Other notes:
- Most aspects of this are adjustable through the Drupal admin. You can add the "Flexible Gallery" field to other content types if you'd prefer the gallery be somewhere else.  Or you can modify the content type, image styles, and media display in the Drupal admin to suit your needs.
- Also easy to customize for a theme using twig and CSS.
- The content type and most related fields will not be removed on uninstall to prevent unintentional data loss.

### Flexible Image Gallery Block submodule
On install, a new custom block type and associated fields will be created.

#### To use:
1. Create a new block using type "Flexible Media Gallery".  By default, this is limited to ten images, but can be adjusted in the field settings.
2. Place your block using Layout Builder or Block layout.
3. Profit!

#### Other notes:
- Multiple galleries can be added per page
- Settings can be adjusted under "Block types" in the Drupal admin.

## FAQs

### I'm not able to edit/add captions to my images
The image caption field has been added, but you may need to adjust your media image form display to allow it to be edited.  If you prefer to use a different field, title, or alt text instead, this can be adjusted in the display settings for the "Flexible Media Gallery" block type.

## Uninstall
Uninstalling will remove image styles and Flexible Image Gallery media display mode.  Uninstalling the Flexible Image Gallery Block submodule will uninstall the the custom block type and fields.

## Screenshots
![A screenshot showing a sample Drupal page with a Flexible Gallery.](https://github.com/user-attachments/assets/a88023ae-d97e-4dc9-b71e-55546397655e)
_The gallery will adjust to the number of items uploaded in the field._

![A screenshot showing a sample image open in a gLightbox modal.](https://github.com/user-attachments/assets/efa90cb5-9645-46db-a15c-bd62e796dac2)
_Image thumbnails display a modal with the full original image on click._
