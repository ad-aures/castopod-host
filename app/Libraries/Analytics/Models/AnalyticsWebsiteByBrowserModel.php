<?php

/**
 * Class AnalyticsWebsiteByBrowserModel
 * Model for analytics_website_by_browser table in database
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace Analytics\Models;

use CodeIgniter\Model;

class AnalyticsWebsiteByBrowserModel extends Model
{
    protected $table = 'analytics_website_by_browser';

    protected $allowedFields = [];

    protected $returnType = \Analytics\Entities\AnalyticsWebsiteByBrowser::class;
    protected $useSoftDeletes = false;

    protected $useTimestamps = false;

    /**
     * Gets browser data for a podcast
     *
     * @param int $podcastId
     *
     * @return array
     */
    public function getData(int $podcastId): array
    {
        if (!($found = cache("{$podcastId}_analytics_website_by_browser"))) {
            $oneWeekAgo = date('Y-m-d', strtotime('-1 week'));
            $found = $this->select('browser as labels')
                ->selectSum('hits', 'values')
                ->where([
                    'podcast_id' => $podcastId,
                    'date >' => $oneWeekAgo,
                ])
                ->groupBy('labels')
                ->orderBy('values', 'DESC')
                ->findAll();

            cache()->save(
                "{$podcastId}_analytics_website_by_browser",
                $found,
                600,
            );
        }
        return $found;
    }
}