<?php

namespace App\Repository;

use App\Models\Log;
use App\Repository\Interfaces\LogRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\Pure;

class LogRepository extends BaseRepository implements LogRepositoryInterface
{
    /**
     * LogRepository constructor.
     *
     * @param Log $log
     */
    #[Pure]
    public function __construct(Log $log)
    {
        parent::__construct($log);
    }
}
