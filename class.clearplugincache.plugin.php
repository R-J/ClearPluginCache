<?php defined('APPLICATION') or die();

$PluginInfo['ClearPluginCache'] = array(
    'Name' => 'Clear Plugin Cache',
    'Description' => 'Clears plugin cache on every enable/disable of this plugin.',
    'Version' => '0.1',
    'Author' => 'Robin Jurinka',
    'License' => 'MIT'
);

class ClearPluginCachePlugin extends Gdn_Plugin {
    public function setup() {
        Gdn::PluginManager()->ClearPluginCache();
    }
    public function OnDisable() {
        Gdn::PluginManager()->ClearPluginCache();
    }
}
