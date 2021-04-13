<?php

namespace NapoleonCat\Model;

use NapoleonCat\Utils\TypedCollection;

/**
 * Class FacebookDownloader_ElementCollection
 */
class FacebookDownloader_ElementCollection extends TypedCollection
{
    public function __construct()
    {
        $this->setType(FacebookDownloader_Element::class);
    }
}