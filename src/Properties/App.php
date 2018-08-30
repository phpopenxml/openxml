<?php
/*
|------------------------------------------------------------------------------
| OpenXML\Properties: App
|------------------------------------------------------------------------------
*/

namespace OpenXml\Properties;

class App
{
    // Application
    // ------------------------------------------------------------------------
    // (string) Specifies the name of the application that created this
    // document
    
    public $application;
    
    // AppVersion
    // ------------------------------------------------------------------------
    // (string) Specifies the version of the application which produced this
    // document.
    //
    // The content of this element shall be of the form XX.YYYY where
    // X and Y represent numerical values, or the document shall be considered
    // non-conformant.
    //
    // [Example]
    // | ...
    // | <AppVersion>16.0000</AppVersion>
    // | ...
    // [!Example]
    
    public $appVersion;
    
    // Characters
    // ------------------------------------------------------------------------
    // (int) Specifies the total number of characters in a document
    
    public $characters;
    
    // CharactersWithSpaces
    // ------------------------------------------------------------------------
    // (int) Specifies the last count of the number of characters (including
    // spaces) in this document
    
    public $charactersWithSpaces;
    
    // Company
    // ------------------------------------------------------------------------
    // (string) Specifies the name of a company associated with the document
    
    public $company;
    
    // DigSig
    // ------------------------------------------------------------------------
    // [DEPRECATED] (OpenXml\DigSig) Contains the signature of a digitally
    // signed document
    
    public $digSig;
    
    // DocSecurity
    // ------------------------------------------------------------------------
    // (int) Specifies the security level of a document as a numeric value.
    // 
    // Document security is defined as:
    //
    //  [0] Not protected
    //  [1] Document is password protected
    //  [2] Document is recommended to be opened as read-only
    //  [4] Document is enforced to be opened as read-only
    //  [8] Document is locked for annotation
    //
    // NOTE: See Document security constants
    
    public $docSecurity;
    
    // HeadingPairs
    // ------------------------------------------------------------------------
    // (OpenXml\HeadingPairs) Indicates the grouping of document parts and the
    // number of parts in each group. These parts are not document parts but
    // conceptual representations of document sections.
    
    public $headingPairs;
    
    // HiddenSlides
    // ------------------------------------------------------------------------
    // (int) Specifies the number of hidden slides in a presentation document
    
    public $hiddenSlides;
    
    // HLinks
    // ------------------------------------------------------------------------
    // (OpenXML\VectorVariant) Specifies the set of hyperlinks that were in
    // this document when last saved
    
    public $hLinks;
    
    // HyperlinkBase
    // ------------------------------------------------------------------------
    // (string) Specifies the base string used for evaluating relative
    // hyperlinks in this document
    
    public $hyperlinkBase;
    
    // HyperlinksChanged
    // ------------------------------------------------------------------------
    // (bool) Specifies that one or more hyperlinks in this part were updated
    // exclusively in this part by a producer. The next producer to open this
    // document shall update the hyperlink relationships with the new 
    // hyperlinks specified in this part
    
    public $hyperlinksChanged = false;
    
    // Lines
    // ------------------------------------------------------------------------
    // (int) Specifies the total number of lines in a document when last saved
    // by a conforming producer if applicable
    
    public $lines;
    
    // LinksUpToDate
    // ------------------------------------------------------------------------
    // (bool) Indicates whether hyperlinks in a document are up-to-date. Set
    // this element to TRUE to indicate that hyperlinks are updated. Set this
    // element to FALSE to indicate that hyperlinks are outdated.
    
    public $linksUpToDate = false;
    
    // Manager
    // ------------------------------------------------------------------------
    // (string) Specifies the name of a supervisor associated with the document
    
    public $manager;
    
    // MMClips
    // ------------------------------------------------------------------------
    // (int) Specifies the total number of sound or video clips that are
    // present in the document
    
    public $mMClips;
    
    // Notes
    // ------------------------------------------------------------------------
    // (int) Specifies the number of slides in a presentation containing notes
    
    public $notes;
    
    // Pages
    // ------------------------------------------------------------------------
    // (int) Specifies the total number of pages of a document if applicable
    
    public $pages;
    
    // Paragraphs
    // ------------------------------------------------------------------------
    // (int) Specifies the total number of paragraphs found in a document if
    // applicable
    
    public $paragraphs;
    
    // PresentationFormat
    // ------------------------------------------------------------------------
    // (string) Specifies the intended format for a presentation document. For
    // example, a presentation intended to be shown on video has
    // PresentationFormat "Video".
    
    public $presentationFormat;
    
    // Properties
    // ------------------------------------------------------------------------
    // (OpenXml\Properties) Specifies the application properties of a document.
    // For properties of type string, NCR escape format (_xHHHH_) is used for
    // any invalid XML characters.
    
    public $properties;
    
    // ScaleCrop
    // ------------------------------------------------------------------------
    // (bool) Indicates the display mode of the document thumbnail. Set this
    // element to TRUE to enable scaling of the document thumbnail to the
    // display. Set this element to FALSE to enable cropping of the document
    // thumbnail to show only sections that fits the display
    
    public $scaleCrop = false;
    
    // SharedDoc
    // ------------------------------------------------------------------------
    // (bool) Indicates if this document is currently shared between multiple
    // producers. If this element is set to TRUE, producers should take care
    // when updating the document
    
    public $sharedDoc;
    
    // Slides
    // ------------------------------------------------------------------------
    // (int) Specifies the total number of slides in a presentation document
    
    public $slides;
    
    // Template
    // ------------------------------------------------------------------------
    // (string) Specifies the name of an external document template containing
    // format and style information used to create the current document.
    
    public $template;
    
    // TitlesOfParts
    // ------------------------------------------------------------------------
    // (OpenXml\TitlesofParts) Specifies the title of each document. These
    // parts are not document parts but conceptual representations of document
    // sections.
    //
    // [Example] A presentation composing of three slides with an applied theme
    // "Currency" can have the following TitlesofParts representation:
    // | ...
    // | <TitlesofParts>
    // |     <vt:vector size="4" baseType="lpstr">
    // |         <vt:lpstr>Currency</vt:lpstr>
    // |         <vt:lpstr>Slide 1</vt:lpstr>
    // |         <vt:lpstr>Slide 2</vt:lpstr>
    // |         <vt:lpstr>Slide 3</vt:lpstr>
    // |     </vt:vector>
    // | </TitlesofParts>
    // | ...
    // [!Example]
    
    public $titlesOfParts;
    
    // TotalTime
    // ------------------------------------------------------------------------
    // (int) Specifies the total time that a document has been edited. The
    // default time unit is minutes.
    
    public $totalTime;
    
    // Words
    // ------------------------------------------------------------------------
    // (int) Specifies the total number of words contained in a document when
    // last saved.
    
    public $words;
    
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
