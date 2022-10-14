<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Tódolos podcast',
    'no_podcast' => 'Non se atopan podcast!',
    'create' => 'Crear un podcast',
    'import' => 'Importar podcast',
    'new_episode' => 'Novo Episodio',
    'view' => 'Ver podcast',
    'edit' => 'Editar podcast',
    'publish' => 'Publicar podcast',
    'publish_edit' => 'Editar publicación',
    'delete' => 'Eliminar podcast',
    'see_episodes' => 'Ver episodios',
    'see_contributors' => 'Ver colaboradoras',
    'go_to_page' => 'Ir á páxina',
    'latest_episodes' => 'Últimos episodios',
    'see_all_episodes' => 'Ver tódolos episodios',
    'draft' => 'Borrador',
    'messages' => [
        'createSuccess' => 'Podcast creado correctamente!',
        'editSuccess' => 'Episodio actualizado correctamente!',
        'importSuccess' => 'Episodio importado correctamente!',
        'deleteSuccess' => 'Eliminado o podcast @{podcast_handle}!',
        'deletePodcastMediaError' => 'Fallou a eliminación {type, select,
            cover {da portada}
            banner {da cabeceira}
            other {do multimedia}
        } do podcast.',
        'deleteEpisodeMediaError' => 'Fallou a eliminación {type, select,
            transcript {da transcrición}
            chapters {dos capítulos}
            image {da imaxe}
            audio {do audio}
            other {do multimedia}
        } do episodio {episode_slug}.',
        'deletePodcastMediaFolderError' => 'Fallou a eliminación do cartafol {folder_path} co multimedia do podcast. Intenta eliminalo do teu disco de xeito manual.',
        'podcastFeedUpdateSuccess' => 'Actualización correcta: {number_of_new_episodes, plural,
            one {# episodio foi engadido}
            other {# episodios foron engadidos}
        } ao podcast!',
        'podcastFeedUpToDate' => 'O podcast xa está ao día.',
        'podcastNotImported' => 'Podcast could not be updated as it was not imported.',
        'publishError' => 'This podcast is either already published or scheduled for publication.',
        'publishEditError' => 'This podcast is not scheduled for publication.',
        'publishCancelSuccess' => 'Podcast publication successfully cancelled!',
        'scheduleDateError' => 'Schedule date must be set!',
    ],
    'form' => [
        'identity_section_title' => 'Podcast identity',
        'identity_section_subtitle' => 'These fields allow you to get noticed.',
        'cover' => 'Podcast cover',
        'cover_size_hint' => 'Cover must be squared and at least 1400px wide and tall.',
        'banner' => 'Podcast banner',
        'banner_size_hint' => 'Banner must have a 3:1 ratio and be at least 1500px wide.',
        'banner_delete' => 'Delete podcast banner',
        'title' => 'Title',
        'handle' => 'Handle',
        'handle_hint' =>
            'Used to identify the podcast. Uppercase, lowercase, numbers and underscores are accepted.',
        'type' => [
            'label' => 'Type',
            'episodic' => 'Episodic',
            'episodic_hint' => 'If episodes are intended to be consumed without any specific order. Newest episodes will be presented first.',
            'serial' => 'Serial',
            'serial_hint' => 'If episodes are intended to be consumed in sequential order. The oldest episodes will be presented first.',
        ],
        'description' => 'Description',
        'classification_section_title' => 'Classification',
        'classification_section_subtitle' =>
            'These fields will impact your audience and competition.',
        'language' => 'Language',
        'category' => 'Category',
        'category_placeholder' => 'Select a category…',
        'other_categories' => 'Other categories',
        'parental_advisory' => [
            'label' => 'Parental advisory',
            'hint' => 'Does it contain explicit content?',
            'undefined' => 'undefined',
            'clean' => 'Clean',
            'explicit' => 'Explicit',
        ],
        'author_section_title' => 'Author',
        'author_section_subtitle' => 'Who is managing the podcast?',
        'owner_name' => 'Owner name',
        'owner_name_hint' =>
            'For administrative use only. Visible in the public RSS feed.',
        'owner_email' => 'Owner email',
        'owner_email_hint' =>
            'Will be used by most platforms to verify the podcast ownership. Visible in the public RSS feed.',
        'publisher' => 'Publisher',
        'publisher_hint' =>
            'The group responsible for creating the show. Often refers to the parent company or network of a podcast. This field is sometimes labeled as ’Author’.',
        'copyright' => 'Copyright',
        'location_section_title' => 'Location',
        'location_section_subtitle' => 'What place is this podcast about?',
        'location_name' => 'Location name or address',
        'location_name_hint' => 'This can be a real place or fictional',
        'monetization_section_title' => 'Monetization',
        'monetization_section_subtitle' =>
            'Earn money thanks to your audience.',
        'premium' => 'Premium',
        'premium_by_default' => 'Episodes must be set as premium by default',
        'premium_by_default_hint' => 'Podcast episodes will be marked as premium by default. You can still choose to set some episodes, trailers or bonuses as public.',
        'payment_pointer' => 'Payment Pointer for Web Monetization',
        'payment_pointer_hint' =>
            'This is your where you will receive money thanks to Web Monetization',
        'advanced_section_title' => 'Advanced Parameters',
        'advanced_section_subtitle' =>
            'If you need RSS tags that Castopod does not handle, set them here.',
        'custom_rss' => 'Custom RSS tags for the podcast',
        'custom_rss_hint' => 'This will be injected within the ❬channel❭ tag.',
        'new_feed_url' => 'New feed URL',
        'new_feed_url_hint' => 'Use this field when you move to another domain or podcast hosting platform. By default, the value is set to the current RSS URL if the podcast is imported.',
        'old_feed_url' => 'Old feed URL',
        'update_feed' => 'Update feed',
        'update_feed_tip' => 'Import this podcast\'s latest episodes',
        'partnership' => 'Partnership',
        'partner_id' => 'ID',
        'partner_link_url' => 'Link URL',
        'partner_image_url' => 'Image URL',
        'partner_id_hint' => 'Your own partner ID',
        'partner_link_url_hint' => 'The generic partner link address',
        'partner_image_url_hint' => 'The generic partner image address',
        'status_section_title' => 'Status',
        'block' => 'Podcast should be hidden from public catalogues',
        'block_hint' =>
            'The podcast show or hide status: toggling this on prevents the entire podcast from appearing in Apple Podcasts, Google Podcasts, and any third party apps that pull shows from these directories. (Not guaranteed)',
        'complete' => 'Podcast will not be having new episodes',
        'lock' => 'Prevent podcast from being copied',
        'lock_hint' =>
            'The purpose is to tell other podcast platforms whether they are allowed to import this feed. A value of yes means that any attempt to import this feed into a new platform should be rejected.',
        'submit_create' => 'Create podcast',
        'submit_edit' => 'Save podcast',
    ],
    'category_options' => [
        'uncategorized' => 'uncategorized',
        'arts' => 'Arts',
        'business' => 'Business',
        'comedy' => 'Comedy',
        'education' => 'Education',
        'fiction' => 'Fiction',
        'government' => 'Government',
        'health_and_fitness' => 'Health &amp Fitness',
        'history' => 'History',
        'kids_and_family' => 'Kids &amp Family',
        'leisure' => 'Leisure',
        'music' => 'Music',
        'news' => 'News',
        'religion_and_spirituality' => 'Religion &amp Spirituality',
        'science' => 'Science',
        'society_and_culture' => 'Society &amp Culture',
        'sports' => 'Sports',
        'technology' => 'Technology',
        'true_crime' => 'True Crime',
        'tv_and_film' => 'TV &amp Film',
        'books' => 'Books',
        'design' => 'Design',
        'fashion_and_beauty' => 'Fashion &amp Beauty',
        'food' => 'Food',
        'performing_arts' => 'Performing Arts',
        'visual_arts' => 'Visual Arts',
        'careers' => 'Careers',
        'entrepreneurship' => 'Entrepreneurship',
        'investing' => 'Investing',
        'management' => 'Management',
        'marketing' => 'Marketing',
        'non_profit' => 'Non-Profit',
        'comedy_interviews' => 'Comedy Interviews',
        'improv' => 'Improv',
        'stand_up' => 'Stand-Up',
        'courses' => 'Courses',
        'how_to' => 'How To',
        'language_learning' => 'Language Learning',
        'self_improvement' => 'Self-Improvement',
        'comedy_fiction' => 'Comedy Fiction',
        'drama' => 'Drama',
        'science_fiction' => 'Science Fiction',
        'alternative_health' => 'Alternative Health',
        'fitness' => 'Fitness',
        'medicine' => 'Medicine',
        'mental_health' => 'Mental Health',
        'nutrition' => 'Nutrition',
        'sexuality' => 'Sexuality',
        'education_for_kids' => 'Education for Kids',
        'parenting' => 'Parenting',
        'pets_and_animals' => 'Pets &amp Animals',
        'stories_for_kids' => 'Stories for Kids',
        'animation_and_manga' => 'Animation &amp Manga',
        'automotive' => 'Automotive',
        'aviation' => 'Aviation',
        'crafts' => 'Crafts',
        'games' => 'Games',
        'hobbies' => 'Hobbies',
        'home_and_garden' => 'Home &amp Garden',
        'video_games' => 'Video Games',
        'music_commentary' => 'Music Commentary',
        'music_history' => 'Music History',
        'music_interviews' => 'Music Interviews',
        'business_news' => 'Business News',
        'daily_news' => 'Daily News',
        'entertainment_news' => 'Entertainment News',
        'news_commentary' => 'News Commentary',
        'politics' => 'Politics',
        'sports_news' => 'Sports News',
        'tech_news' => 'Tech News',
        'buddhism' => 'Buddhism',
        'christianity' => 'Christianity',
        'hinduism' => 'Hinduism',
        'islam' => 'Islam',
        'judaism' => 'Judaism',
        'religion' => 'Religion',
        'spirituality' => 'Spirituality',
        'astronomy' => 'Astronomy',
        'chemistry' => 'Chemistry',
        'earth_sciences' => 'Earth Sciences',
        'life_sciences' => 'Life Sciences',
        'mathematics' => 'Mathematics',
        'natural_sciences' => 'Natural Sciences',
        'nature' => 'Nature',
        'physics' => 'Physics',
        'social_sciences' => 'Social Sciences',
        'documentary' => 'Documentary',
        'personal_journals' => 'Personal Journals',
        'philosophy' => 'Philosophy',
        'places_and_travel' => 'Places &amp Travel',
        'relationships' => 'Relationships',
        'baseball' => 'Baseball',
        'basketball' => 'Basketball',
        'cricket' => 'Cricket',
        'fantasy_sports' => 'Fantasy Sports',
        'football' => 'Football',
        'golf' => 'Golf',
        'hockey' => 'Hockey',
        'rugby' => 'Rugby',
        'running' => 'Running',
        'soccer' => 'Soccer',
        'swimming' => 'Swimming',
        'tennis' => 'Tennis',
        'volleyball' => 'Volleyball',
        'wilderness' => 'Wilderness',
        'wrestling' => 'Wrestling',
        'after_shows' => 'After Shows',
        'film_history' => 'Film History',
        'film_interviews' => 'Film Interviews',
        'film_reviews' => 'Film Reviews',
        'tv_reviews' => 'TV Reviews',
    ],
    'publish_form' => [
        'back_to_podcast_dashboard' => 'Back to podcast dashboard',
        'post' => 'Your announcement post',
        'post_hint' =>
            "Write a message to announce the publication of your podcast. The message will be featured in your podcast's homepage.",
        'message_placeholder' => 'Write your message…',
        'submit' => 'Publish',
        'publication_date' => 'Publication date',
        'publication_method' => [
            'now' => 'Now',
            'schedule' => 'Schedule',
        ],
        'scheduled_publication_date' => 'Scheduled publication date',
        'scheduled_publication_date_hint' =>
            'You can schedule the podcast release by setting a future publication date. This field must be formatted as YYYY-MM-DD HH:mm',
        'submit_edit' => 'Edit publication',
        'cancel_publication' => 'Cancel publication',
        'message_warning' => 'You did not write a message for your announcement post!',
        'message_warning_hint' => 'Having a message increases social engagement, resulting in a better visibility for your podcast.',
        'message_warning_submit' => 'Publish anyway',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'draft mode',
        'not_published' => 'This podcast is not yet published.',
        'scheduled' => 'This podcast is scheduled for publication on {publication_date}.',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Deleting the podcast will delete all episodes, media files, posts and analytics associated with it. This action is irreversible, you will not be able to retrieve them afterwards.",
        'understand' => 'I understand, I want the podcast to be permanently deleted',
        'submit' => 'Delete',
    ],
    'by' => 'By {publisher}',
    'season' => 'Season {seasonNumber}',
    'list_of_episodes_year' => '{year} episodes ({episodeCount})',
    'list_of_episodes_season' =>
        'Season {seasonNumber} episodes ({episodeCount})',
    'no_episode' => 'No episode found!',
    'follow' => 'Follow',
    'followers' => '{numberOfFollowers, plural,
        one {# follower}
        other {# followers}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# post}
        other {# posts}
    }',
    'activity' => 'Activity',
    'episodes' => 'Episodes',
    'sponsor' => 'Sponsor',
    'funding_links' => 'Funding links for {podcastTitle}',
    'find_on' => 'Find {podcastTitle} on',
    'listen_on' => 'Listen on',
];
