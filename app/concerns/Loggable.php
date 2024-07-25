<?php

declare(strict_types=1);

namespace BankSystem\App\concerns;

trait Loggable
{
  public function logStatus(): void
  {
    $checkStatus = $this->is_active ? "active" : "not active";
    echo "Status: This user is {$checkStatus}";
  }
}
