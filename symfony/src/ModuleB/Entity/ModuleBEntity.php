<?php 

declare(strict_types=1);

namespace ModuleB\Entity;


class ModuleBEntity
{
  public $id;
  public function __construct(private readonly string $id = 'module_a_id')
  {
    $this->id = $id;
  }

  public function getId() :string
  {
    return $this->id;
  }
}