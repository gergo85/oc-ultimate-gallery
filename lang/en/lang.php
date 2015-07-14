<?php

return [
    'plugin' => [
        'name' => 'Ultimate Gallery',
        'description' => 'Manage your images easily.',
        'author' => 'Gergő Szabó'
    ],
    'menu' => [
        'gallery' => 'Gallery',
        'albums' => 'Albums',
        'categories' => 'Categories',
        'settings' => 'Settings'
    ],
    'title' => [
        'albums' => 'album',
        'categories' => 'category',
        'comingsoon' => 'Coming soon...'
    ],
    'new' => [
        'albums' => 'New album',
        'categories' => 'New category'
    ],
    'form' => [
        // General
        'name' => 'Name',
        'slug' => 'Slug',
        'labels' => 'Labels',
        'owner' => 'Owner',
        'desc' => 'Description',
        'image' => 'Cover image',
        'status' => 'Status',
        'common' => 'Common',
        'created' => 'Created at',
        'updated' => 'Updated at',
        // Albums
        'images' => 'Images',
        'upload' => 'Upload',
        'properties' => 'Properties',
        'category' => 'Category'
    ],
    'button' => [
        'activate' => 'Activate',
        'deactivate' => 'Deactivate',
        'active' => 'Active',
        'inactive' => 'Inactive',
        'remove' => 'Removed',
        'return' => 'Return'
    ],
    'flash' => [
        'activate' => 'Successfully activated those items.',
        'deactivate' => 'Successfully deactivated those items.',
        'delete' => 'Do you really want to delete this items?',
        'remove' => 'Successfully removed those items.'
    ],
    'widget' => [
        'show_total' => 'Show total',
        'show_active' => 'Show active',
        'show_inactive' => 'Show inactive',
        'total' => 'Total'
    ],
    'component' => [
        'albums' => 'Display albums',
        'categories' => 'Show categories'
    ],
    'permission' => [
        'albums' => 'Manage albums',
        'categories' => 'Manage categories',
        'settings' => 'Manage settings'
    ],
    'misc' => [
        'title' => 'Title',
        'description' => 'Title of the gallery',
        'defaultname' => 'Gallery'
    ],
    'groups' => [
        'options' => 'Options',
        'effects' => 'Effects',
        'thumbs' => 'Thumbnail Options'
    ],
    'idgallery' => [
        'title' => 'Gallery',
        'description' => 'Choose the gallery that will display'
    ],
    'jqueryinject' => [
        'title' => 'jQuery Inject',
        'description' => 'Whether to inject jQuery or not',
        'optionsyes' => 'Yes',
        'optionsno' => 'No'
    ],
    'thumbnail' => [
        'title' => 'Thumbnail Preview',
        'description' => 'Whether to display a button to show thumbnails',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'caption' => [
        'title' => 'Image Caption',
        'description' => 'Enables image captions',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'desc' => [
        'title' => 'Image Description',
        'description' => 'Enables image descriptions',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'counter' => [
        'title' => 'Image Counter',
        'description' => 'Shows total number of images and index number of current image',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'controls' => [
        'title' => 'Navigation Controls',
        'description' => 'Whether to display PREV/NEXT buttons',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'preload' => [
        'title' => 'Preload Images',
        'description' => 'Number of preload images before and after the current image',
        'validationMessage' => 'Invalid format',
    ],
    'mode' => [
        'title' => 'Transition',
        'description' => 'Type of transition between images',
        'optionsslide' => 'Slide',
        'optionsfade' => 'Fade'
    ],
    'speed' => [
        'title' => 'Transition Speed',
        'description' => 'Transition duration (in ms)',
        'validationMessage' => 'Invalid format',
    ],
    'loop' => [
        'title' => 'Loop',
        'description' => 'Allows to go to the other end of the gallery at first/last image',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'auto' => [
        'title' => 'Autoplay',
        'description' => 'Enables slideshow autoplay',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'pause' => [
        'title' => 'Pause Time',
        'description' => 'Delay (in ms) between transitions in slideshow mode',
        'validationMessage' => 'Invalid format',
    ],
    'escKey' => [
        'title' => 'ESC Close',
        'description' => 'Whether gallery should be closed when user presses "Esc"',
        'optionstrue' => 'True',
        'optionsfalse' => 'False'
    ],
    'height' => [
        'title' => 'Thumbnail Height',
        'description' => 'Main thumbnail height in pixels',
        'validationMessage' => 'Invalid format'
    ],
    'width' => [
        'title' => 'Thumbnail Width',
        'description' => 'Main thumbnail width in pixels',
        'validationMessage' => 'Invalid format'
    ],
    'resizer' => [
        'title' => 'Resizer Mode',
        'description' => 'How thumbnails should be resized',
        'optionsauto' => 'Auto',
        'optionsexact' => 'Exact',
        'optionsportrait' => 'Portrait',
        'optionslandscape' => 'Landscape',
        'optionscrop' => 'Crop'
    ],
    'album' => [
        'name' => 'Album',
        'description' => 'List albums',
        'show_image' => 'Show cover image',
        'show_desc' => 'Show description',
        'links' => 'Links',
        'optionstrue' => 'True',
        'optionsfalse' => 'False',
        'no_images' => 'No images message',
        'no_images_descriptio' => 'Message to display in the album list in case if there are no images. This property is used by the default component partial.',
        'no_images_found' => 'No images found',
        'order_title' => 'Image order',
        'order_description' => 'Attribute on which the images should be ordered',
        'page_title' => 'Image page',
        'page_description' => 'Name of the images page. This property is used by the default component partial.'
    ],
    'category' => [
        'name' => 'Category',
        'description' => 'List categories',
        'show_image' => 'Show cover image',
        'show_desc' => 'Show description',
        'optionstrue' => 'True',
        'optionsfalse' => 'False',
        'order_title' => 'Category order',
        'order_description' => 'Attribute on which the categories should be ordered',
        'page_title' => 'Category page',
        'page_description' => 'Name of the categories page. This property is used by the default component partial.'
    ],
    'sorting' => [
        'title_asc' => 'Title (ascending)',
        'title_desc' => 'Title (descending)',
        'created_asc' => 'Created (ascending)',
        'created_desc' => 'Created (descending)'
    ]
];
