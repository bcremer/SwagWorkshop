<?php
namespace Shopware\CustomModels;

use Doctrine\ORM\Mapping AS ORM;
use Shopware\Components\Model\ModelEntity;

/**
 * @ORM\Entity()
 * @ORM\Table(name="s_plugin_swag_workshop_vehicle")
 */
class Vehicle  extends ModelEntity
{
    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
