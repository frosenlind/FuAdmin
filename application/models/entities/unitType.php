<?php
namespace Entities;

/**
 *
 *
 * @RoleType(name="unittype")
 * @Entity
 */
class UnitType extends CoreEntity
{
    /**
     * @var int
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @Column(type="string", nullable=false, unique=true)
     */
    protected $name;

    /**
     * @OneToMany(targetEntity="Unit", mappedBy="unitType")
     * @var Units[]
     **/
    protected $units = null;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getUnits() {
        return $this->units;
    }

    public function setUnits($units) {
        $this->units = $units;
    }


}