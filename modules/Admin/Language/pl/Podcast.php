<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Wszystkie podcasty',
    'no_podcast' => 'Nie znaleziono podcastu!',
    'create' => 'Stwórz podcast',
    'import' => 'Importuj podcast',
    'all_imports' => 'Podcast imports',
    'new_episode' => 'Nowy Odcinek',
    'view' => 'Wyświetl podcast',
    'edit' => 'Edytuj podcast',
    'publish' => 'Opublikuj podcast',
    'publish_edit' => 'Edytuj publikację',
    'delete' => 'Usuń podcast',
    'see_episodes' => 'Zobacz odcinki',
    'see_contributors' => 'Zobacz kontrybutorów',
    'monetization_other' => 'Other monetization',
    'go_to_page' => 'Idź do strony',
    'latest_episodes' => 'Najnowsze odcinki',
    'see_all_episodes' => 'Zobacz wszystkie odcinki',
    'draft' => 'Wersja robocza',
    'messages' => [
        'createSuccess' => 'Podcast został pomyślnie utworzony!',
        'editSuccess' => 'Podcast został pomyślnie zaktualizowany!',
        'importSuccess' => 'Podcast został pomyślnie zaimportowany!',
        'deleteSuccess' => 'Podcast @{podcast_handle} został pomyślnie usunięty!',
        'deletePodcastMediaError' => 'Nie udało się usunąć {type, select,
            cover {okładki}
            banner {baneru}
            other {mediów}
        } podcastu.',
        'deleteEpisodeMediaError' => 'Nie udało się usunąć {episode_slug} {type, select,
            transcript {transkrypcji}
            chapters {rozdziału}
            image {okładki}
            audio {audio}
            other {mediów}
        } odcinka.',
        'deletePodcastMediaFolderError' => 'Nie udało się usunąć folderu podcast {folder_path}. Możesz go ręcznie usunąć ze swojego dysku.',
        'podcastFeedUpdateSuccess' => 'Successful update: {number_of_new_episodes, plural,
            one {# episode was}
            other {# episodes were}
        } added to the podcast!',
        'podcastFeedUpToDate' => 'Podcast jest już aktualny.',
        'publishError' => 'This podcast is either already published or scheduled for publication.',
        'publishEditError' => 'This podcast is not scheduled for publication.',
        'publishCancelSuccess' => 'Podcast publication successfully cancelled!',
        'scheduleDateError' => 'Schedule date must be set!',
    ],
    'form' => [
        'identity_section_title' => 'Tożsamość podcastu',
        'identity_section_subtitle' => 'Te pola pozwalają Ci zostać zauważonym.',
        'fediverse_section_title' => 'Fediverse identity',

        'cover' => 'Okładka podcastu',
        'cover_size_hint' => 'Cover must be squared and at least 1400px wide and tall.',
        'banner' => 'Baner podcastu',
        'banner_size_hint' => 'Banner must have a 3:1 ratio and be at least 1500px wide.',
        'banner_delete' => 'Usuń baner podcastu',
        'title' => 'Tytuł',
        'handle' => 'Uchwyt',
        'handle_hint' =>
            'Służy do identyfikacji podcastu. Akceptowane są wielkie i małe litery, cyfry i podkreślenia.',
        'type' => [
            'label' => 'Typ',
            'episodic' => 'Epizodyczny',
            'episodic_hint' => 'Jeśli odcinki mają być pobierane bez określonej kolejności. Najnowsze odcinki zostaną zaprezentowane jako pierwsze.',
            'serial' => 'Seryjny',
            'serial_hint' => 'Jeśli odcinki mają być pobierane w kolejności sekwencyjnej. Jako pierwsze zostaną zaprezentowane najstarsze odcinki.',
        ],
        'description' => 'Opis',
        'classification_section_title' => 'Klasyfikacja',
        'classification_section_subtitle' =>
            'Te pola wpłyną na twoją publiczność i konkurencję.',
        'language' => 'Język',
        'category' => 'Kategoria',
        'category_placeholder' => 'Wybierz kategorię…',
        'other_categories' => 'Inne kategorie',
        'parental_advisory' => [
            'label' => 'Kontrola rodzicielska',
            'hint' => 'Czy zawiera treści dla dorosłych?',
            'undefined' => 'niezdefiniowana',
            'clean' => 'Czysta',
            'explicit' => 'Dla dorosłych',
        ],
        'author_section_title' => 'Autor',
        'author_section_subtitle' => 'Kto zarządza podcastem?',
        'owner_name' => 'Nazwa właściciela',
        'owner_name_hint' =>
            'Wyłącznie do użytku administracyjnego. Widoczne w publicznym kanale RSS.',
        'owner_email' => 'Email właściciela',
        'owner_email_hint' =>
            'Będzie używany przez większość platform do weryfikacji własności podcastu. Widoczne w publicznym kanale RSS.',
        'is_owner_email_removed_from_feed' => 'Remove the owner email from the public RSS feed',
        'is_owner_email_removed_from_feed_hint' => 'You may need to temporarily unhide the email so that a directory can verify your podcast ownership.',
        'publisher' => 'Wydawca',
        'publisher_hint' =>
            'Grupa odpowiedzialna za stworzenie programu. Często odnosi się do firmy macierzystej lub sieci podcastów. To pole jest czasami oznaczone jako ’Autor’.',
        'copyright' => 'Prawa autorskie',
        'location_section_title' => 'Lokalizacja',
        'location_section_subtitle' => 'O jakim miejscu jest ten podcast?',
        'location_name' => 'Nazwa lub adres lokalizacji',
        'location_name_hint' => 'Może to być prawdziwe lub fikcyjne miejsce',
        'monetization_section_title' => 'Monetyzacja',
        'monetization_section_subtitle' =>
            'Zarabiaj dzięki swoim odbiorcom.',
        'premium' => 'Premium',
        'premium_by_default' => 'Episodes must be set as premium by default',
        'premium_by_default_hint' => 'Podcast episodes will be marked as premium by default. You can still choose to set some episodes, trailers or bonuses as public.',
        'op3' => 'Open Podcast Prefix Project (OP3)',
        'op3_link' => 'Visit your OP3 dashboard (external link)',
        'op3_hint' => 'Value your analytics data with OP3, an open-source and trusted third party analytics service. Share, validate and compare your analytics data with the open podcasting ecosystem.',
        'op3_enable' => 'Enable OP3 analytics service',
        'op3_enable_hint' => 'For security reasons, premium episodes\' analytics data will not be shared with OP3.',
        'payment_pointer' => 'Wskaźnik płatności do zarabiania w sieci',
        'payment_pointer_hint' =>
            'To tutaj otrzymasz pieniądze dzięki Monetyzacji Internetowej',
        'advanced_section_title' => 'Parametry Zaawansowane',
        'advanced_section_subtitle' =>
            'Jeśli potrzebujesz tagów RSS, których Castopod nie obsługuje, ustaw je tutaj.',
        'custom_rss' => 'Własne tagi RSS dla podcastu',
        'custom_rss_hint' => 'Zostaną wstawione w tagu ❬channel❭.',
        'new_feed_url' => 'Nowy adres URL kanału',
        'new_feed_url_hint' => 'Użyj tego pola, gdy przenosisz się do innej domeny lub platformy hostingowej podcastu. Domyślnie wartość jest ustawiona na bieżący adres URL RSS, jeśli podcast jest importowany.',
        'old_feed_url' => 'Old feed URL',
        'partnership' => 'Partnerstwo',
        'partner_id' => 'ID',
        'partner_link_url' => 'Adres URL linku',
        'partner_image_url' => 'Adres URL obrazu',
        'partner_id_hint' => 'Twój własny ID partnera',
        'partner_link_url_hint' => 'Ogólny adres linku partnera',
        'partner_image_url_hint' => 'Ogólny adres obrazu partnera',
        'block' => 'Podcast should be hidden from public catalogues',
        'block_hint' =>
            'The podcast show or hide status: toggling this on prevents the entire podcast from appearing in Apple Podcasts, Google Podcasts, and any third party apps that pull shows from these directories. (Not guaranteed)',
        'complete' => 'Podcast nie będzie miał nowych odcinków',
        'lock' => 'Zapobiegaj kopiowaniu podcastu',
        'lock_hint' =>
            'Celem jest poinformowanie innych platform podcastów, czy są uprawnione do importowania tego kanału. Wartość tak oznacza, że każda próba zaimportowania tego kanału na nową platformę powinna zostać odrzucona.',
        'submit_create' => 'Stwórz podcast',
        'submit_edit' => 'Zapisz podcast',
    ],
    'category_options' => [
        'uncategorized' => 'bez kategorii',
        'arts' => 'Sztuka',
        'business' => 'Biznes',
        'comedy' => 'Komedia',
        'education' => 'Edukacja',
        'fiction' => 'Fikcja',
        'government' => 'Rząd',
        'health_and_fitness' => 'Zdrowie i Fitness',
        'history' => 'Historia',
        'kids_and_family' => 'Dzieci i Rodzina',
        'leisure' => 'Wypoczynek',
        'music' => 'Muzyka',
        'news' => 'Wiadomości',
        'religion_and_spirituality' => 'Religia i Duchowość',
        'science' => 'Nauka',
        'society_and_culture' => 'Społeczność i Kultura',
        'sports' => 'Sport',
        'technology' => 'Technologia',
        'true_crime' => 'Prawdziwe Zbrodnie',
        'tv_and_film' => 'Telewizja i Film',
        'books' => 'Książki',
        'design' => 'Projektowanie',
        'fashion_and_beauty' => 'Moda i Uroda',
        'food' => 'Żywność',
        'performing_arts' => 'Sztuki Sceniczne',
        'visual_arts' => 'Dzieła Wizualne',
        'careers' => 'Kariera',
        'entrepreneurship' => 'Przedsiębiorczość',
        'investing' => 'Inwestowanie',
        'management' => 'Zarządzanie',
        'marketing' => 'Marketing',
        'non_profit' => 'Non-Profit',
        'comedy_interviews' => 'Wywiady Komediowe',
        'improv' => 'Improwizacja',
        'stand_up' => 'Stand-Up',
        'courses' => 'Kursy',
        'how_to' => 'Poradnik',
        'language_learning' => 'Nauka Języków',
        'self_improvement' => 'Samorozwój',
        'comedy_fiction' => 'Fikcja komediowa',
        'drama' => 'Dramat',
        'science_fiction' => 'Fantastyka Naukowa',
        'alternative_health' => 'Zdrowie Alternatywne',
        'fitness' => 'Fitness',
        'medicine' => 'Medycyna',
        'mental_health' => 'Zdrowie Psychiczne',
        'nutrition' => 'Odżywianie',
        'sexuality' => 'Seksualność',
        'education_for_kids' => 'Edukacja dla Dzieci',
        'parenting' => 'Rodzicielstwo',
        'pets_and_animals' => 'Zwierzęta i Zwierzęta Domowe',
        'stories_for_kids' => 'Historie dla Dzieci',
        'animation_and_manga' => 'Animacja i manga',
        'automotive' => 'Motoryzacja',
        'aviation' => 'Lotnictwo',
        'crafts' => 'Rzemieślnictwo',
        'games' => 'Gry',
        'hobbies' => 'Hobby',
        'home_and_garden' => 'Dom i Ogród',
        'video_games' => 'Gry Wideo',
        'music_commentary' => 'Komentarz Muzyczny',
        'music_history' => 'Historia Muzyki',
        'music_interviews' => 'Wywiady Muzyczne',
        'business_news' => 'Wiadomości Biznesowe',
        'daily_news' => 'Codzienne Wiadomości',
        'entertainment_news' => 'Wiadomości Rozrywkowe',
        'news_commentary' => 'Komentarz Wiadomości',
        'politics' => 'Polityka',
        'sports_news' => 'Wiadomości Sportowe',
        'tech_news' => 'Wiadomości Techniczne',
        'buddhism' => 'Buddyzm',
        'christianity' => 'Chrześcijaństwo',
        'hinduism' => 'Hinduizm',
        'islam' => 'Islam',
        'judaism' => 'Judaizm',
        'religion' => 'Religia',
        'spirituality' => 'Duchowość',
        'astronomy' => 'Astronomia',
        'chemistry' => 'Chemia',
        'earth_sciences' => 'Nauka o Ziemi',
        'life_sciences' => 'Nauki o Życiu',
        'mathematics' => 'Matematyka',
        'natural_sciences' => 'Nauki Przyrodnicze',
        'nature' => 'Natura',
        'physics' => 'Fizyka',
        'social_sciences' => 'Nauki Społeczne',
        'documentary' => 'Dokument',
        'personal_journals' => 'Dzienniki Osobiste',
        'philosophy' => 'Filozofia',
        'places_and_travel' => 'Miejsca i podróże',
        'relationships' => 'Związki',
        'baseball' => 'Baseball',
        'basketball' => 'Koszykówka',
        'cricket' => 'Krykiet',
        'fantasy_sports' => 'Sporty fantasy',
        'football' => 'Futbol',
        'golf' => 'Golf',
        'hockey' => 'Hokej',
        'rugby' => 'Rugby',
        'running' => 'Bieg',
        'soccer' => 'Soccer',
        'swimming' => 'Pływanie',
        'tennis' => 'Tenis',
        'volleyball' => 'Siatkówka',
        'wilderness' => 'Wilderness',
        'wrestling' => 'Wrestling',
        'after_shows' => 'After Shows',
        'film_history' => 'Historia Filmu',
        'film_interviews' => 'Wywiady filmowe',
        'film_reviews' => 'Recenzje filmów',
        'tv_reviews' => 'Recenzje telewizyjne',
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
    'by' => 'Przez {publisher}',
    'season' => 'Sezon {seasonNumber}',
    'list_of_episodes_year' => '{year} odcinki ({episodeCount})',
    'list_of_episodes_season' =>
        'Sezon {seasonNumber} odcinki ({episodeCount})',
    'no_episode' => 'Nie znaleziono odcinków!',
    'follow' => 'Obserwuj',
    'followers' => '{numberOfFollowers, plural,
        one {# follower}
        other {# followers}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# post}
        other {# posts}
    }',
    'activity' => 'Aktywność',
    'episodes' => 'Odcinki',
    'sponsor' => 'Sponsoruj',
    'funding_links' => 'Linki finansowania dla {podcastTitle}',
    'find_on' => 'Znajdź {podcastTitle} na',
    'listen_on' => 'Słuchaj na',
];
