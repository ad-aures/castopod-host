<?php

/**
 * Class AnalyticsWebsiteByEntryPageModel
 * Model for analytics_website_by_entry_page table in database
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Analytics\Models;

use CodeIgniter\Model;

class AnalyticsWebsiteByEntryPageModel extends Model
{
    protected $table = 'analytics_website_by_entry_page';

    protected $allowedFields = [];

    protected $returnType = \Analytics\Entities\AnalyticsWebsiteByEntryPage::class;
    protected $useSoftDeletes = false;

    protected $useTimestamps = false;

    /**
     * Gets entry pages data for a podcast
     *
     * @param int $podcastId
     *
     * @return array
     */
    public function getData(int $podcastId): array
    {
        if (!($found = cache("{$podcastId}_analytics_website_by_entry_page"))) {
            $oneWeekAgo = date('Y-m-d', strtotime('-1 week'));
            $found = $this->select(
                'IF(entry_page_url=\'/\',\'/\',SUBSTRING_INDEX(entry_page_url,\'/\',-1)) as labels',
            )
                ->selectSum('hits', 'values')
                ->where([
                    'podcast_id' => $podcastId,
                    'date >' => $oneWeekAgo,
                ])
                ->groupBy('labels')
                ->orderBy('values', 'DESC')
                ->findAll();
            cache()->save(
                "{$podcastId}_analytics_website_by_entry_page",
                $found,
                600,
            );
        }
        return $found;
    }
}