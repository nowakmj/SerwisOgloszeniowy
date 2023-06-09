<?php
/**
 * Task service interface.
 */

namespace App\Service;

use App\Entity\Notice;
use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * Interface NoticeServiceInterface.
 */
interface NoticeServiceInterface
{
    /**
     * Get paginated list.
     *
     * @param int $page Page number
     *
     * @return PaginationInterface<string, mixed> Paginated list
     */
    public function getPaginatedList(int $page): PaginationInterface;
}
