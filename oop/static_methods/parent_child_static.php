<?php

// To call a static method from a child class, use parent keyword inside the class. Here, the static method can be "public" or "protected". 

class websiteDomain {
    protected static function getWebsiteDomain(){
        return "TuhamWorld.com";
    }
}

class whatYourWebsite extends websiteDomain{
    public $websiteName;
    public function __construct(){
        $this->websiteName = parent::getWebsiteDomain();

    }
}

$domainTuhamWorld = new whatYourWebsite();
echo $domainTuhamWorld -> websiteName;

?>