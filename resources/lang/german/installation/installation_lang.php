<?php

$lang = [
    // messages
    'ins_no_server_requirements' => 'Ihr Server / Hosting erfüllt nicht die Mindestanforderungen, die zum Ausführen von XG Proyect erforderlich sind. <br /><br />Anforderungen: <br />- PHP 7.3+<br />- MySQL 5.5+',
    'ins_not_writable' => 'Sie müssen dem Konfigurationsverzeichnis Schreibberechtigung (chmod 777) geben, um mit der Installation fortzufahren.',
    'ins_already_installed' => 'XG Proyect ist bereits installiert. Wählen Sie eine Option: <br /><br /> - <a href="../admin.php?page=update">Aktualisieren</a> <br /> - <a href="../admin.php?page=migrate">Migrieren</a> <br /> - <a href="../">Zurück zum Spiel</a> <br /><br />Falls Sie keine Aktion durchführen möchten, empfehlen wir aus Sicherheitsgründen, das Installationsverzeichnis zu <span style="color:red;text-decoration:underline;">LÖSCHEN</span>.',

    // error headers
    'ins_error_title' => 'Alarm!',
    'ins_warning_title' => 'Warnung!',
    'ins_ok_title' => 'Ok!',

    // navigation bar
    'ins_overview' => 'Übersicht',
    'ins_license' => 'Lizenz',
    'ins_install' => 'Installieren',
    'ins_language_select' => 'Sprache auswählen',

    // overview page
    'ins_install_title' => 'Installation',
    'ins_title' => 'Einführung',
    'ins_welcome' => 'Willkommen bei XG Proyect!',
    'ins_welcome_first_line' => 'XG Proyect ist eines der besten OGame-Klone. XG Proyect 3 ist das neueste und stabilste Paket, das je entwickelt wurde. Wie jede andere Version erhält XG Proyect Unterstützung vom Team Xtreme-gameZ, das stets sicherstellt, dass beste Qualität und Stabilität der Veröffentlichung gewährleistet sind. XG Proyect strebt Tag für Tag nach Wachstum, Stabilität, Flexibilität, Dynamik, Qualität und Benutzervertrauen. Wir erwarten immer, dass XG Proyect besser ist als Ihre Erwartungen.',
    'ins_welcome_second_line' => 'Das Installationssystem wird Sie durch die Installation oder das Upgrade von einer früheren Version zur neuesten führen. Bei Zweifeln, Problemen oder Anfragen zögern Sie nicht, unsere <a href="https://www.xgproyect.org/"><em>Support- und Entwicklergemeinschaft</em></a> zu besuchen.',
    'ins_welcome_third_line' => 'XG Proyect ist ein OpenSource-Projekt. Um die Lizenzspezifikationen zu sehen, klicken Sie im Hauptmenü auf Lizenz. Um die Installation zu starten, klicken Sie auf den Installationsknopf, um zu aktualisieren oder zu migrieren, loggen Sie sich in das ADMIN CP ein.',
    'ins_install_license' => 'Lizenz',

    // installation - general
    'ins_steps' => 'Schritte',
    'ins_step1' => 'Verbindungsdaten',
    'ins_step2' => 'Verbindung prüfen',
    'ins_step3' => 'Konfigurationsdatei',
    'ins_step4' => 'Daten einfügen',
    'ins_step5' => 'Administrator erstellen',
    'ins_continue' => 'Fortsetzen',

    // installation - step 1
    'ins_connection_data_title' => 'Daten zur Verbindung mit der Datenbank',
    'ins_server_title' => 'SQL-Server:',
    'ins_db_title' => 'Datenbank:',
    'ins_user_title' => 'Benutzer:',
    'ins_password_title' => 'Passwort:',
    'ins_prefix_title' => 'Tabellenpräfix:',
    'ins_ex_tag' => 'Bsp:',
    'ins_install_go' => 'Installieren',

    // installation - errors
    'ins_not_connected_error' => 'Verbindung zur Datenbank mit den eingegebenen Daten nicht möglich.',
    'ins_db_not_exists' => 'Zugriff auf die Datenbank mit dem angegebenen Namen nicht möglich.',
    'ins_empty_fields_error' => 'Alle Felder sind erforderlich',
    'ins_write_config_error' => 'Fehler beim Schreiben der config.php-Datei, stellen Sie sicher, dass sie die Berechtigung 777 CHMOD (Schreibberechtigungen) hat oder die Datei existiert',
    'ins_insert_tables_error' => 'Fehler beim Einfügen der Daten in die Datenbank, überprüfen Sie die Datenbank oder ob der Server aktiv ist.',

    // installation -  step 2
    'ins_done_config' => 'config.php-Datei erfolgreich konfiguriert.',
    'ins_done_connected' => 'Verbindung erfolgreich hergestellt.',
    'ins_done_insert' => 'Basisdaten erfolgreich eingefügt.',

    // installation - step 3
    'ins_admin_create_title' => 'Neues Administrator-Konto',
    'ins_admin_create_user' => 'Benutzer:',
    'ins_admin_create_pass' => 'Passwort:',
    'ins_admin_create_email' => 'E-Mail-Adresse:',
    'ins_admin_create_create' => 'Erstellen',

    // installation - errors
    'ins_adm_empty_fields_error' => 'Alle Felder sind erforderlich',
    'ins_adm_invalid_email_address' => 'Bitte geben Sie eine gültige E-Mail-Adresse an',

    // installation - step 4
    'ins_completed' => 'INSTALLATION ABGESCHLOSSEN!',
    'ins_admin_account_created' => 'Administrator erfolgreich erstellt!',
    'ins_delete_install' => 'Sie müssen das <i>install</i>-Verzeichnis löschen, um Sicherheitsrisiken zu vermeiden!',
    'ins_end' => 'Abschließen',
];
