<?php

class DirectoryPage extends Page{

	private static $has_many = array(
		'Listings' => 'DirectoryListing'
	);
	
	function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Listings",
			GridField::create("Listings", "Listings", $this->Listings(),
				GridFieldConfig_RecordEditor::create()
			)
		);
		return $fields;
	}

}

class DirectoryPage_Controller extends Page_Controller{

}