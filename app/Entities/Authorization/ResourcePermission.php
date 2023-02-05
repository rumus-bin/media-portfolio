<?php

namespace App\Entities\Authorization;

use App\Entities\EntityInterface;
use App\Entities\Enums\Auth\ExcessType;
use App\Entities\Enums\Auth\PermissionType;
use App\Entities\PersistUpdateTimestamps;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('resource_permission')]
class ResourcePermission extends PersistUpdateTimestamps implements EntityInterface
{
    public const TABLE_NAME = 'resource_permission';
    public const RESOURCE_NAME = 'resource_name';
    public const PERMISSION_TYPE = 'permission_type';
    public const EXCESS_TYPE = 'excess_type';
    public const ROLE_ID = 'role_id';


    #[Id]
    #[GeneratedValue]
    #[Column(type: 'integer')]
    protected int $id;

    #[Column(type: 'string')]
    protected string $resourceName;

    #[Column(type: 'integer', enumType: PermissionType::class)]
    protected PermissionType $permissionType;

    #[Column(type: 'integer', enumType: ExcessType::class)]
    protected ExcessType $excessType;

    #[ManyToOne(targetEntity: Role::class, fetch: 'EAGER')]
    protected Role $role;

    public function getResourceName(): string
    {
        return $this->resourceName;
    }

    public function setResourceName(string $resourceName): self
    {
        $this->resourceName = $resourceName;

        return $this;
    }

    public function getPermissionType(): PermissionType
    {
        return $this->permissionType;
    }

    public function setPermissionType(PermissionType $permissionType): self
    {
        $this->permissionType = $permissionType;

        return $this;
    }

    public function getExcessType(): ExcessType
    {
        return $this->excessType;
    }

    public function setExcessType(ExcessType $excessType): self
    {
        $this->excessType = $excessType;

        return $this;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(Role $role): self
    {
        $this->role = $role;

        return $this;
    }
}