<?php

class DirectoryListing extends DataObject
{
    
    private static $db = array(
        'Title' => 'Varchar(255)',
        'Description' => 'Text',
        'Website' => 'Varchar(2000)',
        'Phone' => 'Varchar(25)'
    );

    private static $has_one = array(
        'Page' => 'DirectoryPage',
        'Image' => 'Image'
    );
}
