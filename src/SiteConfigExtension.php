<?php

namespace Kmedia\SocialMediaIcons;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\View\Requirements;

class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'FacebookLink' => 'Varchar',
        'InstagramLink' => 'Varchar',
        'TwitterLink' => 'Varchar',
        'YouTubeLink' => 'Varchar',
        'FooterContent' => 'Text'
    ];

    public function __construct()
    {
        Requirements::css('kmedia/silverstripe-social-media-icons:css/socialMediaIcons.css');
    }

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Social', array(
            TextField::create('FacebookLink', 'Facebook'),
            TextField::create('InstagramLink', 'Twitter'),
            TextField::create('TwitterLink', 'Twitter'),
            TextField::create('YouTubeLink', 'YouTube')
        ));
        $fields->addFieldsToTab('Root.Main', [TextareaField::create('FooterContent', 'Content for footer')]);
    }
}