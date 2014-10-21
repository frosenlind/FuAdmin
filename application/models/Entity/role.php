<?php
/**
 * 
 *
 * @Role(name="role")
 * @Entity
 */
class Role implements acl\IAclRole
{
    /**
     * @var int
     * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="RoleType", inversedBy="roles")
     **/
    protected $roleType;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getAclRoleId()
    {
        return $this->getId();
    }

    /**
     * @param mixed $roleType
     */
    public function setRoleType($roleType)
    {
        $this->roleType = $roleType;
    }



}