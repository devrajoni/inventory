<?php

return [

    /*
     * ---------------------------------------
     * Tables List
     * ---------------------------------------
     *
     * by default all meta data will be stored in meta table.
     * you can change default table and customize its name.
     * you cnn also define other tables. this tables will
     * migrated when you call `migrate` artisan command.
     *
     * you can specify the meta table for each
     * model using `metaTable` property
     *
     */

    'tables' => [

        // default table for all models

        'default' => 'meta',

        // custom tables list

        'custom'  => [

            // example : 'posts_meta' , 'users_meta'

        ],
    ]
];