<?php

return [
    'uploadsFolder' => env('UPLOADS_FOLDER', null),
    'home' => [
        'banner' => env('HOME_BANNER_FOLDER', null),
        'feature' => env('HOME_FEATURE_FOLDER', null),
        'rates' => env('HOME_RATES_FOLDER', null),
    ],
    'about
    ' => [
        'banner' => env('ABOUT_BANNER_FOLDER', null),
        'features' => env('ABOUT_FEATURES_FOLDER', null),
        'values' => env('ABOUT_VALUES_FOLDER', null),
        'whyChooseFeatures' => env('ABOUT_WHY_CHOOSE_FEATURES_FOLDER', null),
    ],
    'products' => [
        'banner' => env('PRODUCTS_BANNER_FOLDER', null),
    ],
    'glp' => [
        'banner' => env('GLP_BANNER_FOLDER', null),
        'recommendationPdfs' => env('GLP_RECOMMENDATION_PDFS_FOLDER', null),
    ],
];
