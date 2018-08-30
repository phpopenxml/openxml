<?php
/*
|------------------------------------------------------------------------------
|   App.php
|------------------------------------------------------------------------------
*/

namespace OpenXml;

class App
{    
    // Application
    // (string) Specifies the name of the application that created this document
    
    public $application;
    
    // AppVersion
    // (string) Specifies the version of the application which produced this 
    // document. The content of this element shall be of the form XX.YYYY where
    // X and Y represent numerical values, or the document shall be considered 
    // non-conformant.
    
    public $appVersion = '16.0000';
    
    // Characters
    // (int) Specifies the total number of characters in a document
    
    public $characters;
    
    // CharactersWithSpaces
    // (int) specifies the last count of the number of characters (including 
    // spaces) in this document
    
    public $charactersWithSpaces;
    
    // Company
    // (string) specifies the name of a company associated with the document
    
    public $company;
    
    // DigSig
    // [DEPRECATED] (OpenXml\DigSig) contains the signature of a digitally
    // signed document
    
    public $digSig;
    
    // DocSecurity
    // (int) specifies the security level of a document as a numeric value. 
    // Document security is defined as:
    //  [0] Not protected
    //  [1] Document is password protected
    //  [2] Document is recommended to be opened as read-only
    //  [4] Document is enforced to be opened as read-only
    //  [8] Document is locked for annotation
    // NOTE: See Document security constants
    
    public $docSecurity;
    
    // HeadingPairs
    // (OpenXml\HeadingPairs) indicates the grouping of document parts and the
    // number of parts in each group. These parts are not document parts but
    // conceptual representations of document sections. 
    
    public $headingPairs;
    
    // HiddenSlides
    // (int) specifies the number of hidden slides in a presentation document
    
    public $hiddenSlides;
    
    // HLinks
    // (OpenXML\VectorVariant) specifies the set of hyperlinks that were in this
    // document when last saved
    
    public $hLinks;
    
    // HyperlinkBase
    // (string) specifies the base string used for evaluating relative
    // hyperlinks in this document
    
    public $hyperlinkBase;
    
    // HyperlinksChanged
    // (bool) specifies that one or more hyperlinks in this part were updated
    // exclusively in this part by a producer. The next producer to open this 
    // document shall update the hyperlink relationships with the new hyperlinks
    // specified in this part
    
    public $hyperlinksChanged = false;
    
    // Lines
    // (int) specifies the total number of lines in a document when last saved
    // by a conforming producer if applicable
    
    public $lines;
    
    
    
    
    public $linksUpToDate = false;
    
    public $scaleCrop = false;
    
    public $shareDoc = false;
    
    public $TitlesOfParts;
    
    /*
    |--------------------------------------------------------------------------
    |   Constants
    |--------------------------------------------------------------------------
    */
    
    // Document security constants
    
    const DOCSECURITY_NOTPROTECTED = 0;
    
    const DOCSECURITY_PASSWORD = 1;
    
    const DOCSECURITY_RECOMMEND_READONLY = 2;
    
    const DOCSECURITY_READONLY = 4;
    
    const DOCSECURITY_LOCKED = 8;
    
}
