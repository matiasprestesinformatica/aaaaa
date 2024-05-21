<?php

$lang = [
    'pr_title' => 'Premium-Einstellungen',
    'pr_sub_title' => 'Alles, was Dunkle Materie betrifft, kann hier verwaltet werden. Von Offizieren bis zu Händlern.',
    'pr_general' => 'Allgemein',
    'pr_pay_url' => 'Zahlungs-URL',
    'pr_registration_dark_matter' => 'Anfängliche Dunkle Materie',
    'pr_trader' => 'Ressourcenmarkt - Ressourcen tauschen',
    'pr_trader_price' => 'Preis für den Händlerruf (Dunkle Materie)',
    'pr_merchant_base_min_exchange_rate' => 'Mindesttauschrate',
    'pr_merchant_base_max_exchange_rate' => 'Maximale Tauschrate',
    'pr_merchant_metal_multiplier' => 'Grundrate für Metall',
    'pr_merchant_crystal_multiplier' => 'Grundrate für Kristall',
    'pr_merchant_deuterium_multiplier' => 'Grundrate für Deuterium',
    'pr_merchant_explanation' => 'Die Händlerraten variieren im Verhältnis 3/2/1 (Standardwerte), gegeben durch die drei Grundraten. Mit jedem Händlerruf schwankt der Preis zwischen 0,7% und 1%. Zum Beispiel, wenn wir Metall verkaufen, ist der Basispreis 3, aber der Preis für Kristall und Deuterium wird basierend auf einer zufälligen Zahl zwischen 0,7 (Standard) und 1 (Standard) berechnet.<br><br>Beispiel:<br>random(0.7,1)=0.88;<br>Metallpreis = 3 <br>Kristallpreis = 2 * 0.88 (3 Metall = 1.76 Kristall)<br>Deuteriumpreis = 1 * 0.88 (3 Metall = 0.88 Deuterium)<br><br>Dies wird gleichmäßig mit den drei Ressourcen wiederholt, wobei die verkauft Ressource immer eine Konstante ist.',
    'pr_save_changes' => 'Änderungen speichern',
    'pr_all_ok_message' => 'Änderungen erfolgreich gespeichert!',
];
