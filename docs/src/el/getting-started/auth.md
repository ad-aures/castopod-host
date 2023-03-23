---
title: Authentication & Authorization
sidebarDepth: 3
---

# Ταυτοποίηση & εξουσιοδότηση

Ο Castopod χειρίζεται τον έλεγχο ταυτότητας και την έγκριση χρησιμοποιώντας
`codeigniter/shield` σε συνδυασμό με προσαρμοσμένους κανόνες. Οι ρόλοι και τα
δικαιώματα καθορίζονται σε δύο επίπεδα:

1. [ευρεία παρουσία](#1-instance-wide-roles-and-permissions)
2. [ανά podcast](#2-per-podcast-roles-and-permissions)

## 1. Διαχείριση ρόλων και δικαιωμάτων

### Ρόλοι εμφάνισης

<!-- AUTH-INSTANCE-ROLES-LIST:START - Do not remove or modify this section -->

| role             | description                           | permissions                                                                                |
| ---------------- | ------------------------------------- | ------------------------------------------------------------------------------------------ |
| Υπερδιαχειριστής | Έχει πλήρη έλεγχο του Castopod.       | admin.\*, podcasts.\*, users.manage, persons.manage, pages.manage, fediverse.manage-blocks |
| Διαχειριστής     | Διαχείριση περιεχομένου του Castopod. | podcasts.create, podcasts.import, persons.manage, pages.manage                             |
| Podcaster        | Γενικοί χρήστες του Castopod.         | admin.access                                                                               |

<!-- AUTH-INSTANCE-ROLES-LIST:END -->

### Instance permissions

<!-- AUTH-INSTANCE-PERMISSIONS-LIST:START - Do not remove or modify this section -->

| permission              | description                                                                            |
| ----------------------- | -------------------------------------------------------------------------------------- |
| admin.access            | Μπορεί να έχει πρόσβαση στην περιοχή διαχείρισης Castopod.                             |
| admin.settings          | Μπορεί να έχει πρόσβαση στις ρυθμίσεις Castopod.                                       |
| users.manage            | Μπορεί να διαχειριστεί τους χρήστες Castopod.                                          |
| persons.manage          | Μπορεί να διαχειριστεί τα άτομα.                                                       |
| pages.manage            | Μπορεί να διαχειριστεί τις σελίδες.                                                    |
| podcasts.view           | Μπορεί να δει όλα τα podcasts.                                                         |
| podcasts.create         | Μπορεί να δημιουργήσει νέα podcasts.                                                   |
| podcasts.import         | Μπορεί να εισάγει podcasts.                                                            |
| fediverse.manage-blocks | Μπορεί να εμποδίσει τους ψευτογενείς ηθοποιούς/τομείς να αλληλεπιδρούν με το Castopod. |

<!-- AUTH-INSTANCE-PERMISSIONS-LIST:END -->

## 2. Per podcast roles and permissions

### Per podcast roles

<!-- AUTH-PODCAST-ROLES-LIST:START - Do not remove or modify this section -->

| role         | description                                                   | permissions                                                                                                                                                                                                                                                                                 |
| ------------ | ------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Διαχειριστής | Έχει πλήρη έλεγχο του podcast #{id}.                          | \*                                                                                                                                                                                                                                                                                          |
| Εκδότης      | Διαχειρίζεται περιεχόμενο και δημοσιεύσεις του podcast #{id}. | view, edit, manage-import, manage-persons, manage-platforms, manage-publications, manage-notifications, interact-as, episodes.view, episodes.create, episodes.edit, episodes.delete, episodes.manage-persons, episodes.manage-clips, episodes.manage-publications, episodes.manage-comments |
| Συντάκτης    | Manages content of podcast #{id} but cannot publish them.     | view, manage-persons, episodes.view, episodes.create, episodes.edit, episodes.manage-persons, episodes.manage-clips                                                                                                                                                                         |
| Επισκέπτης   | Γενικός συντελεστής του podcast #{id}.                        | view, episodes.view                                                                                                                                                                                                                                                                         |

<!-- AUTH-PODCAST-ROLES-LIST:END -->

### Per podcast permissions

<!-- AUTH-PODCAST-PERMISSIONS-LIST:START - Do not remove or modify this section -->

| permission                   | description                                                              |
| ---------------------------- | ------------------------------------------------------------------------ |
| view                         | Can view dashboard and analytics of podcast #{id}.                       |
| edit                         | Can edit podcast #{id}.                                                  |
| delete                       | Can delete podcast #{id}.                                                |
| manage-import                | Can synchronize imported podcast #{id}.                                  |
| manage-persons               | Can manage subscriptions of podcast #{id}.                               |
| manage-subscriptions         | Can manage subscriptions of podcast #{id}.                               |
| manage-contributors          | Can manage contributors of podcast #{id}.                                |
| manage-platforms             | Can set/remove platform links of podcast #{id}.                          |
| manage-publications          | Can publish podcast #{id}.                                               |
| manage-notifications         | Can view and mark notifications as read for podcast #{id}.               |
| interact-as                  | Can interact as the podcast #{id} to favourite, share or reply to posts. |
| episodes.view                | Can view dashboard and analytics of podcast #{id}.                       |
| episodes.create              | Can create episodes for podcast #{id}.                                   |
| episodes.edit                | Can edit podcast #{id}.                                                  |
| episodes.delete              | Can delete podcast #{id}.                                                |
| episodes.manage-persons      | Can manage subscriptions of podcast #{id}.                               |
| episodes.manage-clips        | Can manage video clips or soundbites of podcast #{id}.                   |
| episodes.manage-publications | Can publish podcast #{id}.                                               |
| episodes.manage-comments     | Can create/remove episode comments of podcast #{id}.                     |

<!-- AUTH-PODCAST-PERMISSIONS-LIST:END -->