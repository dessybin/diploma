<?php

return [
    'plugin' => [
        'name' => 'Preklady',
        'description' => 'Umožňuje viacjazyčné webové stránky.',
        'tab' => 'Preklad',
        'manage_locales' => 'Spravovať jazyky',
        'manage_messages' => 'Spravovať správy',
    ],
    'locale_picker' => [
        'component_name' => 'Výber jazyka',
        'component_description' => 'Zobrazí rozbaľovaciu ponuku na výber jazyka front-endu.',
    ],
    'alternate_hreflang' => [
        'component_name' => 'Alternatívne prvky hrefLang',
        'component_description' => 'Vloží jazykové alternatívy pre stránku ako prvky hreflang'
    ],
    'locale' => [
        'title' => 'Spravovať jazyky',
        'update_title' => 'Aktualizovať jazyk',
        'create_title' => 'Vytvoriť jazyk',
        'select_label' => 'Zvoliť jazyk',
        'default_suffix' => 'predvolený',
        'unset_default' => '":locale" je už predvolený a nemožno ho nastaviť ako predvolený.',
        'delete_default' => '":locale" je predvolený a nemôže byť zmazaný.',
        'disabled_default' => '":locale" je neaktívny a nemôýe byť nastavený ako predvolený.',
        'name' => 'Meno',
        'code' => 'Kód',
        'is_default' => 'Predvolený',
        'is_default_help' => 'Predvolený jazyk predstavuje obsah pred prekladom.',
        'is_enabled' => 'Aktívny',
        'is_enabled_help' => 'Neaktívne jazyky nebudú dostupné na front-ende.',
        'not_available_help' => 'Nie sú nastavené žiadne ďalšie jazyky.',
        'hint_locales' => 'Vytvárajte tu nové jazyky pre preklad obsahu front-endu. Predvolený jazyk predstavuje obsah pred tým, než bol preložený.',
        'reorder_title' => 'Zmeniť poradie jazykov',
        'sort_order' => 'Smer zoradenia',
    ],
    'messages' => [
        'title' => 'Preložiť správy',
        'description' => 'Aktualizovať správy',
        'clear_cache_link' => 'Vymazať vyrovnávaciu pamäť',
        'clear_cache_loading' => 'Čistenie vyrovnávacej pamäte aplikácie...',
        'clear_cache_success' => 'Vyrovnávacia pamäť aplikácie vyčistená!',
        'clear_cache_hint' => 'Možno budete musieť kliknúť <strong>Vymazať vyrovnávaciu pamäť</strong> aby sa zmeny prejavili na front-ende.',
        'scan_messages_link' => 'Vyhľadávanie správ',
        'scan_messages_begin_scan' => 'Začať vyhľadávanie',
        'scan_messages_loading' => 'Vyhľadávanie nových správ...',
        'scan_messages_success' => 'Vyhľadávanie nových správ úspešne ukončené!',
        'scan_messages_hint' => 'Kliknutie na <strong>Vyhľadávanie správ</strong> skontroluje súbory aktívnej témy a nájde nové správy na preklad.',
        'scan_messages_process' => 'Tento proces vyhľadí v aktívnej téme správy, ktoré môžu byť preložené.',
        'scan_messages_process_limitations' => 'Niektoré správy nemusia byť zachytené a objavia sa po ich prvom použití.',
        'scan_messages_purge_label' => 'Najprv vyčistiť všetky správy',
        'scan_messages_purge_help' => 'Ak zaškrtnuté zmaže všetky správy pred vykonaním vyhľadávania.',
        'scan_messages_purge_confirm' => 'Naozaj chcete odstrániť všetky správy? Toto sa nedá vrátiť späť!',
        'hint_translate' => 'Tu môžete preložiť správy používané na front-ende, polia sa ukladajú automaticky.',
        'hide_translated' => 'Skryť preložené',
        'export_messages_link' => 'Exportovať správy',
        'import_messages_link' => 'Importovať správy',
    ],
];