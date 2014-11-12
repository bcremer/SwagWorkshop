<?php
class Shopware_Plugins_Frontend_SwagWorkshop_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    public function install()
    {
        $em = $this->get('models');
        $tool = new \Doctrine\ORM\Tools\SchemaTool($em);

        $classes = array(
            $em->getClassMetadata('Shopware\CustomModels\Vehicle'),
        );

        $tool->createSchema($classes);

        return true;
    }

    public function afterInit()
    {
        $this->registerCustomModels();
    }

    /**
     * @param string $name
     * @return string
     */
    public function greet($name = "Benjamin")
    {
        return sprintf("Hello %s!", $name);
    }
}
