<?php

declare(strict_types=1);

namespace Potter\Container\DefinitionAggregate;

use \League\Container\Definition\{
    DefinitionAggregateInterface,
    DefinitionInterface
};

use \Potter\{
    Container\Aware\Contract as ContainerAwareContract,
    IteratorAggregate\Contract as IteratorAggregateContract
};

interface Contract 
    extends DefinitionAggregateInterface,
    ContainerAwareContract,
    IteratorAggregateContract
{
    public function add(string $id, mixed $definition, bool $overwrite = false): DefinitionInterface;
    
    public function addShared(string $id, mixed $definition, bool $overwrite = false): DefinitionInterface;
    
    public function getDefinition(string $id): DefinitionInterface;
    
    public function has(string $id): bool;
    
    public function hasTag(string $tag): bool;
    
    public function resolve(string $id): mixed;
    
    public function resolveNew(string $id): mixed;
    
    public function resolveTagged(string $tag): array;
    
    public function resolveTaggedNew(string $tag): array;
}
