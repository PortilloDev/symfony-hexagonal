<?php 

declare(strict_types=1);

namespace ModuleA\Entity;


class ModuleAEntity
{
  public $id;
  public function __construct(private readonly string $id = 'module_b_id')
  {
    $this->id = $id;
  }

  public function getId() :string
  {
    return $this->id;
  }
}