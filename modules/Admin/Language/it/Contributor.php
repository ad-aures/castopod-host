<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'podcast_contributors' => 'Collaboratori del podcast',
    'view' => "{username}'s contribution to {podcastTitle}",
    'add' => 'Aggiungi collaboratore',
    'add_contributor' => 'Add a contributor for {0}',
    'edit_role' => 'Update role for {0}',
    'edit' => 'Modifica',
    'remove' => 'Rimuovi',
    'list' => [
        'username' => 'Nome Utente',
        'role' => 'Role',
    ],
    'form' => [
        'user' => 'User',
        'user_placeholder' => 'Seleziona un utente…',
        'role' => 'Ruolo',
        'role_placeholder' => 'Seleziona il suo ruolo…',
        'submit_add' => 'Aggiungi collaboratore',
        'submit_edit' => 'Aggiorna Ruolo',
    ],
    'roles' => [
        'podcast_admin' => 'Amministratore del podcast',
    ],
    'messages' => [
        'removeOwnerError' => "Non puoi rimuovere il proprietario del podcast!",
        'removeSuccess' =>
            'Hai rimosso con successo {username} da {podcastTitle}',
        'alreadyAddedError' =>
            "Il collaboratore che stai cercando di aggiungere è già stato aggiunto!",
    ],
];
