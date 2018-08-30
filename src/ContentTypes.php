<?php
/*
|------------------------------------------------------------------------------
| OpenXML: ContentTypes
|------------------------------------------------------------------------------
*/

namespace OpenXml;

class ContentTypes
{
    protected $default = [
        [ 'xml', 'application/xml' ],
        [ 'rels', 'application/vnd.openxmlformats-package.relationships+xml' ]
    ];
    
    protected $override = [
        [ '/docProps/core.xml', 'application/vnd.openxmlformats-package.core-properties+xml' ]
    ];
}
