<?php

declare(strict_types=1);

namespace BankSystem\App\abstracts;

use BankSystem\App\concerns\Loggable;

abstract class Person
{
  use Loggable;

  protected string $name;
  protected string $cep;
  protected string $address;
  protected string $phone;
  protected float $income = 0;
  protected bool $is_active = true;
}
