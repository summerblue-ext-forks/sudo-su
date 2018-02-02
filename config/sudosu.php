<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Allowed TLDs - Use with caution!
    |--------------------------------------------------------------------------
    |
    | This is to prevent mis-usage during production if debug mode is
    | unintentionally left active. The package will detect the site
    | URL and if the TLD isn't present in this array, it will not
    | activate. If your development TLD is different to .dev or
    | .local, simply add it to the arrow below.
    |
     */
    
    'allowed_tlds' => ['dev', 'local', 'test'],

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | Path to the application User model. This will be used to retrieve the users
    | displayed in the select dropdown. This must be an Eloquent Model instance.
    |
     */
    
    'user_model' => App\User::class

    /*
    |--------------------------------------------------------------------------
    | Limited user
    |--------------------------------------------------------------------------
    |
    | Using whereIn($user_ids) for selecting users. Can be:
    | 'user_ids' => [2,3,4],
    | Empty will select all.
     */
    'user_ids' => [],

    /*
    |--------------------------------------------------------------------------
    | Maximum user count
    |--------------------------------------------------------------------------
    |
    | How many user can be selected. Available when user_ids is set to empty array.
    |
     */
    'max_user' => 50,
    
];