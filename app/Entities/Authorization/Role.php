<?php

namespace App\Entities\Authorization;

use App\Entities\EntityInterface;
use App\Entities\PersistUpdateTimestamps;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('roles')]
class Role extends PersistUpdateTimestamps implements EntityInterface
{
    public const TABLE_NAME = 'roles';
    public const ROLE_NAME = 'role_name';

    #[Id]
    #[GeneratedValue]
    #[Column(type: 'integer')]
    protected int $id;

    #[Column(name: 'role_name', type: 'string', length: 255)]
    protected string $roleName;

    #[OneToMany(mappedBy: 'role', targetEntity: ResourcePermission::class, fetch: 'EAGER', orphanRemoval: true)]
    protected Collection $permissions;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getRoleName(): string
    {
        return $this->roleName;
    }

    public function setRoleName(string $roleName): self
    {
        $this->roleName = $roleName;

        return $this;
    }

    public function getPermissions(): Collection
    {
        return $this->permissions;
    }

    public function setPermission(ResourcePermission $permission): self
    {
        $permission->setRole($this);

        $this->permissions[] = $permission;

        return $this;
    }
}