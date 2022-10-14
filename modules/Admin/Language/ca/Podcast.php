<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Tots els podcasts',
    'no_podcast' => 'No s\'han trobat podcasts!',
    'create' => 'Crear un podcast',
    'import' => 'Importar el podcast',
    'new_episode' => 'Nou episodi',
    'view' => 'Veure el podcast',
    'edit' => 'Editar el podcast',
    'publish' => 'Publicar el podcast',
    'publish_edit' => 'Editar la publicació',
    'delete' => 'Suprimir el podcast',
    'see_episodes' => 'Veure els episodis',
    'see_contributors' => 'Veure els col·laboradors',
    'go_to_page' => 'Anar a la pàgina ',
    'latest_episodes' => 'Darrers episodis',
    'see_all_episodes' => 'Veure tots els episodis',
    'draft' => 'Esborrany',
    'messages' => [
        'createSuccess' => 'Podcast creat correctament.',
        'editSuccess' => 'El podcast s´ha actualitzat correctament.',
        'importSuccess' => 'El podcast s\'ha importat correctament.',
        'deleteSuccess' => 'El podcast @{podcast_handle} s\'ha eliminat correctament.',
        'deletePodcastMediaError' => 'No s\'ha pogut eliminar {type, select,
            cover {la portada}
            banner {el bàner}
            other {el material}
        } del podcast.',
        'deleteEpisodeMediaError' => 'No s\'ha pogut eliminar {type, select,
            transcript {la transcripció}
            chapters {els capítols}
            image {la portada}
            audio {l\'àudio}
            other {el material}
        } de l\'episodi {episode_slug}.',
        'deletePodcastMediaFolderError' => 'No s\'ha pogut suprimir la carpeta multimèdia del podcast {folder_path}. Podeu eliminar-la manualment del vostre disc.',
        'podcastFeedUpdateSuccess' => 'Correctar actualització: {number_of_new_episodes, plural,
            one {s\'ha afegit 1 episodi}
            other {s\'han afegit # episodis}
        } al podcast.',
        'podcastFeedUpToDate' => 'El podcast ja està actualitzat.',
        'podcastNotImported' => 'No s\'ha pogut actualitzar el podcast perquè no s\'havia importat.',
        'publishError' => 'Aquest podcast ja està publicat o bé està programat per a la seva publicació.',
        'publishEditError' => 'Aquest podcast no està programat per a la seva publicació.',
        'publishCancelSuccess' => 'La publicació del podcast s\'ha cancel·lat correctament.',
        'scheduleDateError' => 'S\'ha de definir una data de publicació!',
    ],
    'form' => [
        'identity_section_title' => 'Identitat del podcast',
        'identity_section_subtitle' => 'Aquests camps permeten fer-se notar.',
        'cover' => 'Portada del podcast',
        'cover_size_hint' => 'La portada ha de ser quadrada i com a mínim de 1400 px d\'amplada i alçada.',
        'banner' => 'Bàner del podcast',
        'banner_size_hint' => 'El bàner ha de tenir una proporció de 3:1 i tenir una amplada mínima de 1500 píxels.',
        'banner_delete' => 'Eliminar el bàner del podcast',
        'title' => 'Títol',
        'handle' => 'Àlias',
        'handle_hint' =>
            'S\'utilitza per identificar el podcast. S\'accepten NOMÉS majúscules, minúscules, números i guions baixos.',
        'type' => [
            'label' => 'Tipus',
            'episodic' => 'Episòdic',
            'episodic_hint' => 'Si els episodis estan pensats per ser consumits sense cap ordre específic. Els episodis més recents es presentaran primer.',
            'serial' => 'En sèrie',
            'serial_hint' => 'Si els episodis estan pensats per ser consumits en ordre seqüencial. Primer es presentaran els episodis més antics.',
        ],
        'description' => 'Descripció',
        'classification_section_title' => 'Classificació',
        'classification_section_subtitle' =>
            'Aquests camps afectaran el vostre públic i competència.',
        'language' => 'Idioma',
        'category' => 'Categoria',
        'category_placeholder' => 'Seleccioneu una categoria',
        'other_categories' => 'Altres categories',
        'parental_advisory' => [
            'label' => 'Avís parental',
            'hint' => 'L\'episodi conté contingut explícit?',
            'undefined' => 'indefinit',
            'clean' => 'Net',
            'explicit' => 'Explícit',
        ],
        'author_section_title' => 'Autor',
        'author_section_subtitle' => 'Qui administra el podcast?',
        'owner_name' => 'Nom del propietari',
        'owner_name_hint' =>
            'Només per a ús administratiu. Visible al fil RSS públic.',
        'owner_email' => 'Correu electrònic del propietari',
        'owner_email_hint' =>
            'La majoria de plataformes l\'utilitzaran per verificar la propietat del podcast. Visible al fil RSS públic.',
        'publisher' => 'Editor',
        'publisher_hint' =>
            'El grup encarregat de crear el programa. Sovint es refereix a l\'empresa matriu o a la xarxa d\'un podcast. Aquest camp de vegades s\'etiqueta com a "Autor".',
        'copyright' => 'Copyright',
        'location_section_title' => 'Ubicació',
        'location_section_subtitle' => 'De quin lloc tracta aquest podcast?',
        'location_name' => 'Nom i adreça de la ubicació',
        'location_name_hint' => 'Aquest pot ser un lloc real o fictici',
        'monetization_section_title' => 'Monetització',
        'monetization_section_subtitle' =>
            'Guanyeu diners gràcies al vostre públic.',
        'premium' => 'Premium',
        'premium_by_default' => 'Episodes must be set as premium by default',
        'premium_by_default_hint' => 'Podcast episodes will be marked as premium by default. You can still choose to set some episodes, trailers or bonuses as public.',
        'payment_pointer' => '`Payment Pointer` per a `Web Monetization`',
        'payment_pointer_hint' =>
            'Aquí és on rebreu diners gràcies al servei `Web Monetization`',
        'advanced_section_title' => 'Paràmetres avançats',
        'advanced_section_subtitle' =>
            'Si necessiteu etiquetes RSS que Castopod no manega, configureu-les aquí.',
        'custom_rss' => 'Etiquetes RSS personalitzades per al podcast',
        'custom_rss_hint' => 'Això s\'injectarà dins de l\'etiqueta ❬channel❭.',
        'new_feed_url' => 'Nova adreça URL del fil RSS',
        'new_feed_url_hint' => 'Utilitzeu aquest camp quan us moveu a un altre domini o plataforma d\'allotjament de podcasts. De manera predeterminada, el valor s\'estableix a l\'URL RSS actual si s\'importa el podcast.',
        'old_feed_url' => 'Antiga adreça URL del fil RSS',
        'update_feed' => 'Actualitzar el fil',
        'update_feed_tip' => 'Importar els darrers episodis d\'aquest podcast',
        'partnership' => 'Socis',
        'partner_id' => 'ID',
        'partner_link_url' => 'URL de l\'enllaç',
        'partner_image_url' => 'URL de la imatge',
        'partner_id_hint' => 'El vostre propi ID de soci',
        'partner_link_url_hint' => 'L\'adreça genèrica de l\'enllaç del soci',
        'partner_image_url_hint' => 'L\'adreça genèrica de la imatge del soci',
        'status_section_title' => 'Estat',
        'block' => 'El podcast s\'ha d\'amagar als catàlegs públics',
        'block_hint' =>
            'L\'estat de visibilitat del podcast: activar aquesta opció evita que el podcast aparegui a Apple Podcasts, Google Podcasts i qualsevol aplicació de tercers que extreu programes d\'aquests directoris. (No garantit)',
        'complete' => 'El podcast no tindrà capítols nous',
        'lock' => 'Eviteu que es el podcast sigui copiat',
        'lock_hint' =>
            'L\'objectiu és indicar a altres plataformes de podcasts si tenen permís per importar aquest podcast i els seus episodis. Un valor de sí significa que s\'ha de rebutjar qualsevol intent d\'importar aquest podcast a una altra plataforma.',
        'submit_create' => 'Crear un podcast',
        'submit_edit' => 'Desar el podcast',
    ],
    'category_options' => [
        'uncategorized' => 'sense categoria',
        'arts' => 'Arts',
        'business' => 'Negocis',
        'comedy' => 'Comèdia',
        'education' => 'Educació',
        'fiction' => 'Ficció',
        'government' => 'Govern',
        'health_and_fitness' => 'Salut i fitness',
        'history' => 'Història',
        'kids_and_family' => 'Quitxalla i Família',
        'leisure' => 'Lleure',
        'music' => 'Música',
        'news' => 'Notícies',
        'religion_and_spirituality' => 'Religió i espiritualitat',
        'science' => 'Ciència',
        'society_and_culture' => 'Societat i cultura',
        'sports' => 'Esports',
        'technology' => 'Tecnologia',
        'true_crime' => 'Crims reals',
        'tv_and_film' => 'TV i películ·les',
        'books' => 'Llibres',
        'design' => 'Disseny',
        'fashion_and_beauty' => 'Moda i bellesa',
        'food' => 'Menjar',
        'performing_arts' => 'Arts escèniques',
        'visual_arts' => 'Arts visuals',
        'careers' => 'Carreres',
        'entrepreneurship' => 'Empreniment',
        'investing' => 'Inversió',
        'management' => 'Gestió',
        'marketing' => 'Màrqueting',
        'non_profit' => 'Sense ànim de lucre',
        'comedy_interviews' => 'Entrevistes de comèdia',
        'improv' => 'Millora',
        'stand_up' => 'Monòlegs',
        'courses' => 'Cursos',
        'how_to' => 'Tutorials',
        'language_learning' => 'Aprenentatge d\'idiomes',
        'self_improvement' => 'Millora personal',
        'comedy_fiction' => 'Comèdia de ficció',
        'drama' => 'Drama',
        'science_fiction' => 'Ciència-ficció',
        'alternative_health' => 'Salut alternativa',
        'fitness' => 'Fitness',
        'medicine' => 'Medicina',
        'mental_health' => 'Salut mental',
        'nutrition' => 'Nutrició',
        'sexuality' => 'Sexualitat',
        'education_for_kids' => 'Educació infantil',
        'parenting' => 'Criança',
        'pets_and_animals' => 'Mascotes i animals',
        'stories_for_kids' => 'Contes per la quitxalla',
        'animation_and_manga' => 'Animació i manga',
        'automotive' => 'Automoció',
        'aviation' => 'Aviació',
        'crafts' => 'Artesanies',
        'games' => 'Jocs',
        'hobbies' => 'Aficions',
        'home_and_garden' => 'Llar i jardineria',
        'video_games' => 'Videojocs',
        'music_commentary' => 'Música, anàlisi',
        'music_history' => 'Música, història',
        'music_interviews' => 'Música, entrevistes',
        'business_news' => 'Notícies sobre negocis',
        'daily_news' => 'Notícies del dia',
        'entertainment_news' => 'Notícies d\'entreteniment',
        'news_commentary' => 'Comentaris sobre notícies',
        'politics' => 'Política',
        'sports_news' => 'Notícies d\'esports',
        'tech_news' => 'Notícies de tecnologia',
        'buddhism' => 'Budisme',
        'christianity' => 'Cristianisme',
        'hinduism' => 'Hinduisme',
        'islam' => 'Islam',
        'judaism' => 'Judaisme',
        'religion' => 'Religió',
        'spirituality' => 'Espiritualitat',
        'astronomy' => 'Astronomia',
        'chemistry' => 'Química',
        'earth_sciences' => 'Ciències ambientals',
        'life_sciences' => 'Ciències de la Vida',
        'mathematics' => 'Matemàtiques',
        'natural_sciences' => 'Ciències naturals',
        'nature' => 'Natura',
        'physics' => 'Física',
        'social_sciences' => 'Ciències socials',
        'documentary' => 'Documentals',
        'personal_journals' => 'Diaris personals',
        'philosophy' => 'Filosofia',
        'places_and_travel' => 'Llocs i viatges',
        'relationships' => 'Relacions',
        'baseball' => 'Beisbol',
        'basketball' => 'Bàsquet',
        'cricket' => 'Criquet',
        'fantasy_sports' => 'Esports de fantasia',
        'football' => 'Futbol',
        'golf' => 'Golf',
        'hockey' => 'Hoquei',
        'rugby' => 'Rugby',
        'running' => 'Córrer',
        'soccer' => 'Futbol soccer',
        'swimming' => 'Natació',
        'tennis' => 'Tennis',
        'volleyball' => 'Voleibol',
        'wilderness' => 'Naturalesa',
        'wrestling' => 'Lluita lliure',
        'after_shows' => 'Espectacles nocturns',
        'film_history' => 'Història del cinema',
        'film_interviews' => 'Entrevistes i cinema',
        'film_reviews' => 'Ressenyes de cinema',
        'tv_reviews' => 'Ressenyes de TV',
    ],
    'publish_form' => [
        'back_to_podcast_dashboard' => 'Tornar al panell de control del podcast',
        'post' => 'La vostra publicació d\'anunci',
        'post_hint' =>
            "Escriviu un missatge per anunciar la publicació del teu podcast. El missatge apareixerà destacat a la pàgina d'inici del vostre podcast.",
        'message_placeholder' => 'Escriviu un missatge...',
        'submit' => 'Publicar',
        'publication_date' => 'Data de publicació',
        'publication_method' => [
            'now' => 'Ara',
            'schedule' => 'Programar',
        ],
        'scheduled_publication_date' => 'Data de publicació programada',
        'scheduled_publication_date_hint' =>
            'Podeu programar el llançament del podcast fixant una data de publicació futura. Aquest camp ha de tenir el format AAAA-MM-DD HH:mm',
        'submit_edit' => 'Editar la publicació',
        'cancel_publication' => 'Cancel·lar la publicació',
        'message_warning' => 'No heu escrit cap missatge per la publicació del vostre anunci!',
        'message_warning_hint' => 'Tenir un missatge augmenta la implicació social, donant lloc a una millor visibilitat del vostre podcast.',
        'message_warning_submit' => 'Publicar de totes maneres',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'mode d\'esborrany',
        'not_published' => 'Aquest podcast encara no s\'ha publicat.',
        'scheduled' => 'La publicació d\'aquest podcast està programada el dia {publication_date}.',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Si suprimiu el podcast, se suprimiran tots els episodis, fitxers multimèdia, publicacions i estadístiques associats amb ell. Aquesta acció és irreversible, no els podreu recuperar després.",
        'understand' => 'Entenc, vull que el podcast s\'elimini permanentment',
        'submit' => 'Eliminar',
    ],
    'by' => 'Per {publisher}',
    'season' => 'Temporada {seasonNumber}',
    'list_of_episodes_year' => 'Episodis del {year} ({episodeCount})',
    'list_of_episodes_season' =>
        'Episodis de la temporada {seasonNumber} ({episodeCount})',
    'no_episode' => 'No s\'han trobat episodis.',
    'follow' => 'Seguir',
    'followers' => '{numberOfFollowers, plural,
        one {# seguidor}
        other {# seguidors}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# publicació}
        other {# publicacions}
    }',
    'activity' => 'Activitat',
    'episodes' => 'Episodis',
    'sponsor' => 'Patrocinador',
    'funding_links' => 'Enllaços de finançament per {podcastTitle}',
    'find_on' => 'Trobar {podcastTitle} a',
    'listen_on' => 'Escoltant',
];
