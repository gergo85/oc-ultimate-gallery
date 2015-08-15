<?php

return [
    'plugin' => [
        'name' => 'Ultimate Galéria',
        'description' => 'Kezelje képeit egyszerűen.',
        'author' => 'Szabó Gergő'
    ],
    'menu' => [
        'gallery' => 'Galéria',
        'albums' => 'Albumok',
        'categories' => 'Kategóriák',
        'settings' => 'Beállítások'
    ],
    'title' => [
        'albums' => 'album',
        'categories' => 'kategória',
        'comingsoon' => 'Hamarosan...'
    ],
    'new' => [
        'albums' => 'Új album',
        'categories' => 'Új kategória'
    ],
    'form' => [
        // Általános
        'name' => 'Név',
        'slug' => 'Webcím',
        'labels' => 'Címkék',
        'owner' => 'Tulajdonos',
        'desc' => 'Leírás',
        'image' => 'Borítókép',
        'status' => 'Státusz',
        'common' => 'Megjegyzés',
        'created' => 'Létrehozva',
        'updated' => 'Módosítva',
        // Albumok
        'images' => 'Képek',
        'upload' => 'Feltöltés',
        'properties' => 'Tulajdonságok',
        'category' => 'Kategória'
    ],
    'button' => [
        'activate' => 'Aktíválás',
        'deactivate' => 'Deaktiválás',
        'active' => 'Aktív',
        'inactive' => 'Inaktív',
        'remove' => 'Eltávolítás',
        'return' => 'Vissza'
    ],
    'flash' => [
        'activate' => 'A tételek sikeresen aktiválva lettek.',
        'deactivate' => 'A tételek sikeresen deaktiválva lettek.',
        'delete' => 'Valóban törölni akarja a tételeket?',
        'remove' => 'A tételek sikeresen eltávolításra kerültek.'
    ],
    'widget' => [
        'show_total' => 'Összes mutatása',
        'show_active' => 'Aktívak mutatása',
        'show_inactive' => 'Inaktívak mutatása',
        'total' => 'Összes'
    ],
    'component' => [
        'albums' => 'Albumok megjelenítése',
        'categories' => 'Kategóriák listázása'
    ],
    'permission' => [
        'albums' => 'Albumok kezelése',
        'categories' => 'Kategóriák kezelése',
        'settings' => 'Beállítások kezelése'
    ],
    'misc' => [
        'title' => 'Név',
        'description' => 'A galéria megjelenő neve.',
        'defaultname' => 'Galéria'
    ],
    'groups' => [
        'options' => 'Opciók',
        'effects' => 'Áttűnések',
        'thumbs' => 'Bélyegkép'
    ],
    'idgallery' => [
        'title' => 'Galéria',
        'description' => 'Megjelenő albumok'
    ],
    'jqueryinject' => [
        'title' => 'jQuery betöltése',
        'description' => 'A függvénykönyvtár hozzáadás az oldalhoz.',
        'optionsyes' => 'igen',
        'optionsno' => 'nem'
    ],
    'thumbnail' => [
        'title' => 'Bélyegképek nézet',
        'description' => 'A megjelenító gomb mutatása.',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem'
    ],
    'caption' => [
        'title' => 'Kép aláírás',
        'description' => 'Kép címeinek megjelenítése.',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem'
    ],
    'desc' => [
        'title' => 'Kép leírása',
        'description' => 'A képekhez megadottt leírás megjelenítése.',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem'
    ],
    'counter' => [
        'title' => 'Kép számláló',
        'description' => 'Az összes és az aktuális kép sorszámának mutatása.',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem'
    ],
    'controls' => [
        'title' => 'Irányítás',
        'description' => 'Az "előző" és a "következő" gombok megjelenítése.',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem'
    ],
    'preload' => [
        'title' => 'Képek előtöltése',
        'description' => 'Az aktuális kép előtt hány kép töltődjön be.',
        'validationMessage' => 'Érvénytelen formátum',
    ],
    'mode' => [
        'title' => 'Áttűnés',
        'description' => 'Képek között áttűnés típusa.',
        'optionsslide' => 'Átváltás',
        'optionsfade' => 'Áttűnés'
    ],
    'speed' => [
        'title' => 'Áttűnés sebessége',
        'description' => 'Képek átváltásának ideje másodpercben.',
        'validationMessage' => 'Érvénytelen formátum',
    ],
    'loop' => [
        'title' => 'Lapozás',
        'description' => 'Az utolsó kép után az első következzen.',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem'
    ],
    'auto' => [
        'title' => 'Automatikus lejátszás',
        'description' => 'Engedélyezés a slideshow módban.',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem'
    ],
    'pause' => [
        'title' => 'Várakozási idő',
        'description' => 'Áttűnések között várakozási idő a slideshow módban.',
        'validationMessage' => 'Érvénytelen formátum',
    ],
    'escKey' => [
        'title' => 'Ablak bezárás',
        'description' => 'A képnézegetés maradjon abba az "Esc" billentyű lenyomásával?',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem'
    ],
    'height' => [
        'title' => 'Bélyegkép magassága',
        'description' => 'Megjelenő bélyegkép magassága képpontban.',
        'validationMessage' => 'Érvénytelen formátum'
    ],
    'width' => [
        'title' => 'Bélyegkép szélessége',
        'description' => 'Megjelenő bélyegkép szélessége képpontban.',
        'validationMessage' => 'Érvénytelen formátum'
    ],
    'resizer' => [
        'title' => 'Méretezés módja',
        'description' => 'A bélyegképek méretezése.',
        'optionsauto' => 'Automatikus',
        'optionsexact' => 'Pontos',
        'optionsportrait' => 'Álló',
        'optionslandscape' => 'Fekvő',
        'optionscrop' => 'Vágás'
    ],
    'album' => [
        'name' => 'Album',
        'description' => 'Albumok mutatása',
        'show_image' => 'Borítókép megjelenítése',
        'show_desc' => 'Leírás megjelenítése',
        'links' => 'Linkek',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem',
        'no_images_title' => 'Nincsenek képek üzenet',
        'no_images_description' => 'Az albumban megjelenő üzenet abban az esetben, ha nincsenek képek. Az alapértelmezett komponensrész használja ezt a tulajdonságot.',
        'no_images_found' => 'Nincs kép az albumban',
        'order_title' => 'Képek sorrendje',
        'order_description' => 'Attribútum, mely alapján rendezni kell a képeket.',
        'page_title' => 'Képek oldala',
        'page_description' => 'Az alapértelmezett komponensrész használja ezt a tulajdonságot.'
    ],
    'category' => [
        'name' => 'Kategória',
        'description' => 'Kategóriák mutatása',
        'show_image' => 'Borítókép megjelenítése',
        'show_desc' => 'Leírás megjelenítése',
        'optionstrue' => 'Igen',
        'optionsfalse' => 'Nem',
        'order_title' => 'Kategóriák sorrendje',
        'order_description' => 'Attribútum, mely alapján rendezni kell a kategóriákat.',
        'page_title' => 'Kategóriák oldala',
        'page_description' => 'Az alapértelmezett komponensrész használja ezt a tulajdonságot.'
    ],
    'sorting' => [
        'title_asc' => 'Név (emelkedő)',
        'title_desc' => 'Név (csökkenő)',
        'created_asc' => 'Létrehozva (emelkedő)',
        'created_desc' => 'Létrehozva (csökkenő)'
    ]
];
