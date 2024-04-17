<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'season' => 'Stagione {seasonNumber}',
    'season_abbr' => 'S{seasonNumber}',
    'number' => 'Episodio {episodeNumber}',
    'number_abbr' => 'Ep. {episodeNumber}',
    'season_episode' => 'Stagione {seasonNumber} episodio {episodeNumber}',
    'season_episode_abbr' => 'S{seasonNumber}:E{episodeNumber}',
    'persons' => '{personsCount, plural,
        one {# person}
        other {# persons}
    }',
    'persons_list' => 'Persone',
    'back_to_episodes' => 'Torna agli episodi di {podcast}',
    'comments' => 'Commenti',
    'activity' => 'Attività',
    'chapters' => 'Chapters',
    'transcript' => 'Transcript',
    'description' => 'Descrizione dell\'episodio',
    'number_of_comments' => '{numberOfComments, plural,
        one {# comment}
        other {# comments}
    }',
    'all_podcast_episodes' => 'Tutti gli episodi del podcast',
    'back_to_podcast' => 'Torna a podcast',
    'preview' => [
        'title' => 'Anteprima',
        'not_published' => 'Non pubblicato',
        'text' => '{publication_status, select,
            published {Questo episodio non è ancora stato pubblicato.}
            scheduled {Questo episodio sarà pubblicato il {publication_date}.}
            with_podcast {Questo episodio sarà pubblicato in contemporanea al podcast.}
            other {Questo episodio non è ancora stato pubblicato.}
        }',
        'publish' => 'Pubblica',
        'publish_edit' => 'Modifica pubblicazione',
    ],
    'no_chapters' => 'No chapters are available for this episode.',
    'download_transcript' => 'Download transcript ({extension})',
    'no_transcript' => 'No transcript available for this episode.',
];
