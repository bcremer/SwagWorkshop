<?php
class PluginTest extends Shopware\Components\Test\Plugin\TestCase
{
    protected static $ensureLoadedPlugins = array(
        'SwagWorkshop' => []
    );

    public function testCanCreateInstance()
    {
        /** @var Shopware_Plugins_Frontend_SwagWorkshop_Bootstrap $plugin */
        $plugin = Shopware()->Plugins()->get('Frontend')->get('SwagWorkshop');
        $this->assertInstanceOf('Shopware_Plugins_Frontend_SwagWorkshop_Bootstrap', $plugin);
    }

    public function testCanPersistVehicle()
    {
        $foobar = new \Shopware\CustomModels\Vehicle("foobar");

        Shopware()->Models()->persist($foobar);
        Shopware()->Models()->flush();

        $this->assertNotNull($foobar->getId());
    }
}
