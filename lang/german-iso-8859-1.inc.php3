<?php
/* $Id$ */

/**
 * For suggestions concerning this file please contact
 *     Alexander M. Turek <rabus at users.sourceforge.net>.
 *
 * Bei Verbesserungsvorschl�gen diese Datei betreffend wenden Sie sich bitte an
 *     Alexander M. Turek <rabus at users.sourceforge.net>.
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$month = array('Januar', 'Februar', 'M�rz', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y um %H:%M';
$timespanfmt = '%s Tage, %s Stunden, %s Minuten und %s Sekunden';

$strAPrimaryKey = 'Ein Prim�rschl�ssel wurde in %s erzeugt';
$strAbortedClients = 'Abgebrochen';
$strAbsolutePathToDocSqlDir = 'Bitte geben Sie den vollst�ndigen Pfad auf dem Webserver zum docSQL-Verzeichnis ein.';
$strAccessDenied = 'Zugriff verweigert.';
$strAction = 'Aktion';
$strAddDeleteColumn = 'Spalten hinzuf�gen/entfernen';
$strAddDeleteRow = 'Zeilen hinzuf�gen/entfernen';
$strAddNewField = 'Neue Felder hinzuf�gen';
$strAddPriv = 'Rechte hinzuf�gen';
$strAddPrivMessage = 'Rechte wurden hinzugef�gt';
$strAddPrivilegesOnDb = 'Rechte zu folgender Datenbank hinzuf�gen';
$strAddPrivilegesOnTbl = 'Rechte zu folgender Tabelle hinzuf�gen';
$strAddSearchConditions = 'Suchkondition (Argumente f�r den WHERE-Ausdruck):';
$strAddToIndex = '%s&nbsp;Spalten zum Index hinzuf�gen';
$strAddUser = 'Neuen Benutzer hinzuf�gen';
$strAddUserMessage = 'Der Benutzer wurde hinzugef�gt.';
$strAddedColumnComment = 'Spaltenkommentar wurde hinzugef�gt';
$strAddedColumnRelation = 'Spaltenbeziehung wurde hinzugef�gt';
$strAdministration = 'Administration';
$strAffectedRows = ' Betroffene Datens�tze: ';
$strAfter = 'Nach %s';
$strAfterInsertBack = 'zur�ck';
$strAfterInsertNewInsert = 'anschlie�end einen weiteren Datensatz einf�gen';
$strAll = 'Alle';
$strAllTableSameWidth = 'Sollen alle Tabellen mit der gleichen Breite angezeigt werden?';
$strAlterOrderBy = 'Tabelle sortieren nach';
$strAnIndex = 'Ein Index wurde in %s erzeugt';
$strAnalyzeTable = 'Analysiere Tabelle';
$strAnd = 'und';
$strAny = 'Jeder';
$strAnyColumn = 'Jede Spalte';
$strAnyDatabase = 'Jede Datenbank';
$strAnyHost = 'Jeder Host';
$strAnyTable = 'Jede Tabelle';
$strAnyUser = 'Jeder Benutzer';
$strAscending = 'aufsteigend';
$strAtBeginningOfTable = 'An den Anfang der Tabelle';
$strAtEndOfTable = 'An das Ende der Tabelle';
$strAttr = 'Attribute';
$strAutomaticLayout = 'Automatische Anordnung';

$strBack = 'Zur�ck';
$strBeginCut = 'AUSSCHNITTSANFANG';
$strBeginRaw = 'BEGINN DER AUSGABE';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - nicht editierbar !';
$strBookmarkDeleted = 'SQL-Abfrage wurde gel�scht.';
$strBookmarkLabel = 'Titel';
$strBookmarkQuery = 'Gespeicherte SQL-Abfrage';
$strBookmarkThis = 'SQL-Abfrage speichern';
$strBookmarkView = 'Nur zeigen';
$strBrowse = 'Anzeigen';
$strBzError = 'phpMyAdmin konnte die Datei wegen eines Fehler in der Bz2-Erweiterung in dieser php-Version nicht komprimieren. Es wird deshalb empfohlen die Einstellung <code>$cfg[\'BZipDump\']</code> in Ihrer phpMyAdmin-Konfiguration auf <code>FALSE</code> zu setzen. Falls Sie die Bz2-Kompressionsfunktionen dennoch nutzen wollen, so sollten Sie eine neuere php-Version installieren. Bitte lesen Sie auch den php-Bugreport %s f�r weitere Informationen.';
$strBzip = 'BZip-komprimiert';

$strCSVOptions = 'CSV-Optionen';
$strCannotLogin = 'Die Anmeldung am MySQL-Server ist fehlgeschlagen.';
$strCantLoad = 'Die Erweiterung &quot;%s&quot; kann nicht geladen werden.<br />Bitte �berpr�fen Sie Ihre PHP-Konfiguration.';
$strCantLoadMySQL = 'Die MySQL-Erweiterung konnte nicht geladen werden.<br />Bitte �berpr�fen Sie Ihre PHP-Konfiguration!';
$strCantLoadRecodeIconv = 'Die PHP-Erweiterungen iconv und recode, welche f�r die Zeichensatzkonvertierung ben�tigt werden, konnten nicht geladen werden. Bitte �ndern Sie Ihre PHP-Konfiguration und aktivieren Sie diese Erweiterungen oder deaktivieren Sie die Zeichensatzkonvertierung in phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kann Index nicht in PRIMARY umbenennen!';
$strCantUseRecodeIconv = 'Weder die iconv- noch libiconv- oder recode_string-Funktion konnte verwandt werden, obwohl die ben�tigten php-Erweiterungen angeblich geladen wurden. Bitte �berpr�fen Sie Ihre PHP-Konfiguration.';
$strCardinality = 'Kardinalit�t';
$strCarriage = 'Wagenr�cklauf \\r';
$strChange = '�ndern';
$strChangeCopyMode = 'Erstelle einen neuen Benutzer mit identischen Rechten und ...';
$strChangeCopyModeCopy = ' ... behalte den alten bei.';
$strChangeCopyModeDeleteAndReload = ' ... l�sche den alten und lade anschlie�end die Benutzertabellen neu.';
$strChangeCopyModeJustDelete = ' ... l�sche den alten von den Benutzertabellen.';
$strChangeCopyModeRevoke = ' ... entziehe dem alten alle Rechte und l�sche ihn anschlie�end.';
$strChangeCopyUser = 'Logininformation �ndern / Benutzer kopieren';
$strChangeDisplay = 'Anzuzeigende Spalte bestimmen';
$strChangePassword = 'Kennwort �ndern';
$strCharsetOfFile = 'Zeichencodierung der Datei:';
$strCheckAll = 'Alle ausw�hlen';
$strCheckDbPriv = 'Rechte einer Datenbank pr�fen';
$strCheckPrivs = 'Rechte �berpr�fen';
$strCheckPrivsLong = '�berpr�ft die Rechte f�r die Datenbank &quot;%s&quot;.';
$strCheckTable = '�berpr�fe Tabelle';
$strChoosePage = 'Bitte w�hlen Sie die zu bearbeitende Seite.';
$strColComFeat = 'Darstellung von Spaltenkommentaren';
$strColumn = 'Spalte';
$strColumnNames = 'Spaltennamen';
$strColumnPrivileges = 'Spaltenspezifische Rechte';
$strCommand = 'Befehl';
$strComments = 'Kommentare';
$strCompleteInserts = 'Vollst�ndige \'INSERT\'s';
$strCompression = 'Kompression';
$strConfigFileError = 'phpMyAdmin konnte Ihre Konfigurationsdatei nicht verarbeiten!<br />Dies kann passieren, wenn der PHP-Parser Syntaxfehler in ihr findet oder sie nicht existiert.<br />Bitte rufen Sie die Konfigurationsdatei �ben den unteren Link direkt auf und lesen Sie die PHP-Fehlermeldungen, die Sie erhalten. Meistens fehlt blo� irgendwo ein Anf�hrungszeichen oder Semikolon.<br />Wenn Sie eine leere Seite erhalten, ist Ihre Konfigurationsdatei in Ordnung.';
$strConfigureTableCoord = 'Bitte konfigurieren Sie die Koordinaten f�r die Tabelle %s';
$strConfirm = 'Sind Sie wirklich sicher?';
$strConnections = 'Verbindungen';
$strCookiesRequired = 'Ab diesem Punkt m�ssen Cookies aktiviert sein.';
$strCopyTable = 'Kopiere Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strCopyTableOK = 'Tabelle %s wurde nach %s kopiert.';
$strCouldNotKill = 'phpMyAdmin konnte den Prozess %s nicht abbrechen. Er wurde wahrscheinlich bereits geschlossen.';
$strCreate = 'Anlegen';
$strCreateIndex = 'Index �ber&nbsp;%s&nbsp;Spalten anlegen';
$strCreateIndexTopic = 'Neuen Index anlegen';
$strCreateNewDatabase = 'Neue Datenbank anlegen';
$strCreateNewTable = 'Neue Tabelle in Datenbank %s erstellen';
$strCreatePage = 'Neue Seite erstellen';
$strCreatePdfFeat = 'Erzeugen von PDFs';
$strCriteria = 'Kriterium';

$strDBComment = 'Datenbankkommentar: ';
$strDBGContext = 'Kontext';
$strDBGContextID = 'Kontext-ID';
$strDBGHits = 'Treffer';
$strDBGLine = 'Zeile';
$strDBGMaxTimeMs = 'Max. Zeit in ms';
$strDBGMinTimeMs = 'Min. Zeit in ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Zeit/Treffer in ms';
$strDBGTotalTimeMs = 'Gesamtzeit in ms';
$strData = 'Daten';
$strDataDict = 'Strukturverzeichnis';
$strDataOnly = 'Nur Daten';
$strDatabase = 'Datenbank';
$strDatabaseHasBeenDropped = 'Datenbank %s wurde gel�scht.';
$strDatabaseWildcard = 'Datenbank (Platzhalter sind erlaubt):';
$strDatabases = 'Datenbanken';
$strDatabasesDropped = 'Es wurden %s Datenbanken gel�scht.';
$strDatabasesStats = 'Statistiken �ber alle Datenbanken';
$strDatabasesStatsDisable = 'Datenbankstatistiken deaktivieren';
$strDatabasesStatsEnable = 'Datenbankstatistiken aktivieren';
$strDatabasesStatsHeavyTraffic = 'Bitte beachten Sie: Das Aktivieren der Datenbankstatistiken kann starken Traffic zwischen dem Web- und dem MySQL-Server zur Folge haben.';
$strDbPrivileges = 'Datenbankspezifische Rechte';
$strDbSpecific = 'datenbankspezifisch';
$strDefault = 'Standard';
$strDefaultValueHelp = 'Bitte geben Sie jeweils nur einen Standardwert ohne Escape- oder Anf�hrungszeichen an.';
$strDelOld = 'Auf der aktuellen Seite bestehen Referenzen zu Tabellen, die nicht mehr existieren. Sollen diese Referenzen gel�scht werden?';
$strDelete = 'L�schen';
$strDeleteAndFlush = 'Die Benutzer l�schen und die Benutzertabellen anschlie�end neu laden.';
$strDeleteAndFlushDescr = 'Dies ist zwar der sauberste Weg, jedoch kann es einige Zeit in Anspruch nehmen, die Benutzertabellen neu zu laden.';
$strDeleteFailed = 'L�schen fehlgeschlagen!';
$strDeleteUserMessage = 'Der Benutzer %s wurde gel�scht.';
$strDeleted = 'Die Zeile wurde gel�scht.';
$strDeletedRows = 'Gel�schte Zeilen:';
$strDeleting = 'L�sche %s';
$strDescending = 'absteigend';
$strDisabled = 'Deaktiviert';
$strDisplay = 'Zeige';
$strDisplayFeat = 'Anzeige verkn�pfter Daten';
$strDisplayOrder = 'Sortierung nach:';
$strDisplayPDF = 'PDF-Schema anzeigen';
$strDoAQuery = 'Suche �ber Beispielwerte ("query by example") (Platzhalter: "%")';
$strDoYouReally = 'M�chten Sie wirklich diese Abfrage ausf�hren: ';
$strDocu = 'Dokumentation';
$strDrop = 'L�schen';
$strDropDB = 'Datenbank %s l�schen';
$strDropSelectedDatabases = 'Ausgew�hlte Datenbanken l�schen';
$strDropTable = 'Tabelle l�schen:';
$strDropUsersDb = 'Die gleichnamigen Datenbanken l�schen.';
$strDumpComments = 'Spaltenkommentare als SQL-Kommentare einbetten';
$strDumpXRows = 'Exportiere %s Datens�tze ab Zeile %s.';
$strDumpingData = 'Daten f�r Tabelle';
$strDynamic = 'dynamisch';

$strEdit = 'Bearbeiten';
$strEditPDFPages = 'PDF-Seiten bearbeiten';
$strEditPrivileges = 'Rechte �ndern';
$strEffective = 'Effektiv';
$strEmpty = 'Leeren';
$strEmptyResultSet = 'MySQL lieferte ein leeres Resultat zur�ck (d.h. null Zeilen).';
$strEnabled = 'Aktiviert';
$strEnd = 'Ende';
$strEndCut = 'AUSSCHNITTSENDE';
$strEndRaw = 'ENDE DER AUSGABE';
$strEnglishPrivileges = ' Anmerkung: MySQL-Rechte werden auf Englisch angegeben. ';
$strError = 'Fehler';
$strExplain = 'SQL erkl�ren';
$strExport = 'Exportieren';
$strExportToXML = 'Ins XML-Format exportieren';
$strExtendedInserts = 'Erweiterte \'INSERT\'s';
$strExtra = 'Extra';

$strFailedAttempts = 'Fehlgeschlagen';
$strField = 'Feld';
$strFieldHasBeenDropped = 'Spalte %s wurde entfernt.';
$strFields = 'Felder';
$strFieldsEmpty = ' Sie m�ssen angeben wie viele Felder die Tabelle haben soll! ';
$strFieldsEnclosedBy = 'Felder eingeschlossen von';
$strFieldsEscapedBy = 'Felder escaped von';
$strFieldsTerminatedBy = 'Felder getrennt mit';
$strFileCouldNotBeRead = 'Die Datei konnte nicht gelesen werden';
$strFileNameTemplate = 'Dateinamenskonvention';
$strFileNameTemplateHelp = 'Benutzen Sie __DB__ f�r den Datenbanknamen, __TABLE__ f�r den Tabellennamen und %sbeliebige strftime-Optionen%s zur Angabe von Datumsvariablen. Die Erweiterung wird automagisch hinzugef�gt. Jeglicher anderer Text wird beibehalten.';
$strFileNameTemplateRemember = 'Konvention merken';
$strFixed = 'starr';
$strFlushPrivilegesNote = 'Anmerkung: phpMyAdmin liest die Benutzerprofile direkt aus den entsprechenden MySQL-Tabellen aus. Der Inhalt dieser Tabellen kann sich von den Benutzprofilen, die MySQL z.Zt. verwendet, unterscheiden, wenn manuelle �nderungen vorgenommen wurden. In diesem Fall sollten Sie  %sdie Benutzerprofile neu laden%s bevor Sie fortfahren.';
$strFlushTable = 'Leeren des Tabellenchaches ("FLUSH")';
$strFormEmpty = 'Das Formular ist leer !';
$strFormat = 'Format';
$strFullText = 'vollst�ndige Textfelder';
$strFunction = 'Funktion';

$strGenBy = 'Erstellt von';
$strGenTime = 'Erstellungszeit';
$strGeneralRelationFeat = 'Allgemeine Verkn�pfungsfunktionen';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale Rechte';
$strGlobalValue = 'Globaler Wert';
$strGo = 'OK';
$strGrantOption = 'Grant';
$strGrants = 'Rechte';
$strGzip = 'GZip-komprimiert';

$strHasBeenAltered = 'wurde ge�ndert.';
$strHasBeenCreated = 'wurde erzeugt.';
$strHaveToShow = 'Bitte w�hlen Sie mindestens eine anzuzeigende Spalte';
$strHome = 'Home';
$strHomepageOfficial = ' Offizielle phpMyAdmin-Homepage ';
$strHomepageSourceforge = ' phpMyAdmin-Downloadseite bei Sourceforge ';
$strHost = 'Host';
$strHostEmpty = 'Es wurde kein Host angegeben!';

$strId = 'ID';
$strIdxFulltext = 'Volltext';
$strIfYouWish = 'Wenn Sie nur bestimmte Spalten importieren m�chten, geben Sie diese bitte hier an.';
$strIgnore = 'Ignorieren';
$strIgnoringFile = 'Die Datei %s wird ignoriert';
$strImportDocSQL = 'docSQL-Dateien importieren';
$strImportFiles = 'Dateiimport';
$strImportFinished = 'Import beendet';
$strInUse = 'in Benutzung';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s wurde entfernt.';
$strIndexName = 'Index Name&nbsp;:';
$strIndexType = 'Index Typ&nbsp;:';
$strIndexes = 'Indizes';
$strInnodbStat = 'InnoDB-Status';
$strInsecureMySQL = 'Ihre Konfigurationsdatei enth�lt Einstellungen (Benutzer &quot;root&quot; ohne Passwort), welche denen des MySQL-Stardardbenutzers entsprechen. Wird Ihr MySQL-Server mit diesen Einstellungen betrieben, so k�nnen Unbefugte leicht von au�en auf ihn zugreifen. Sie sollten diese Sicherheitsl�cke unbedingt schlie�en!';
$strInsert = 'Einf�gen';
$strInsertAsNewRow = ' Als neuen Datensatz speichern ';
$strInsertNewRow = 'Neue Zeile einf�gen';
$strInsertTextfiles = 'Textdatei in Tabelle einf�gen';
$strInsertedRows = 'Eingef�gte Zeilen:';
$strInstructions = 'Befehle';
$strInvalidName = '"%s" ist ein reserviertes Wort, welches nicht als Datenbank-, Feld- oder Tabellenname verwendet werden darf.';

$strJumpToDB = 'Zur Datenbank &quot;%s&quot; springen.';
$strJustDelete = 'Die Benutzer aus den Benutzertabellen l�schen.';
$strJustDeleteDescr = 'Die &quot;gel�schten&quot; Benutzer k�nnten weiterhin wie gewohnt auf den Server zugreifen, bis die Benutzertabellen neu geladen werden.';

$strKeepPass = 'Kennwort nicht ver�ndert';
$strKeyname = 'Name';
$strKill = 'Beenden';

$strLaTeX = 'LaTeX';
$strLandscape = 'Querformat';
$strLength = ' L�nge ';
$strLengthSet = 'L�nge/Set*';
$strLimitNumRows = 'Eintr�ge pro Seite';
$strLineFeed = 'Zeilenvorschub: \\n';
$strLines = 'Zeilen';
$strLinesTerminatedBy = 'Zeilen getrennt mit';
$strLinkNotFound = 'Der Verweis wurde nicht gefunden.';
$strLinksTo = 'Verweise';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Datei';
$strLogPassword = 'Kennwort:';
$strLogUsername = 'Benutzername:';
$strLogin = 'Login';
$strLoginInformation = 'Logininformationen';
$strLogout = 'Neu einloggen';

$strMIME_MIMEtype = 'MIME-Typ';
$strMIME_available_mime = 'Verf�gbare MIME-Typen';
$strMIME_available_transform = 'Verf�gbare Umwandlungen';
$strMIME_description = 'Beschreibung';
$strMIME_file = 'Dateiname';
$strMIME_nodescription = 'F�r diese Umwandlung ist keine Beschreibung verf�gar.<br />F�r weitere Informationen wenden Sie sich bitte an den Autoren der Funktion &quot;%s&quot;.';
$strMIME_transformation = 'Darstellungsumwandlung';
$strMIME_transformation_note = 'Um eine Liste aller verf�gbaren MIME-Typen-Umwandlungen und deren Optionen zu sehen, klicken Sie bitte auf %sUmwandlungen%s';
$strMIME_transformation_options = 'Umwandlungsoptionen';
$strMIME_transformation_options_note = 'Bitte die Werte f�r die Umwandlungsoptionen in folgendem Format angeben:: \'a\',\'b\',\'c\'...<br />Wann immer Sie ein Backslash ("\") oder ein einfaches Anf�hrungszeichen ("\'") verwenden,<br \>setzen Sie bitte ein Backslash vor das Zeichen.  (z.B.: \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'Kursiv dargestellte MIME-Typen besitzen keine untergliederten Umwandlungen.';
$strMissingBracket = 'Fehlende Klammer';
$strModifications = '�nderungen gespeichert.';
$strModify = 'Ver�ndern';
$strModifyIndexTopic = 'Index modifizieren';
$strMoreStatusVars = 'Weitere Statusvariablen';
$strMoveTable = 'Verschiebe Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strMoveTableOK = 'Tabelle %s wurde nach %s verschoben.';
$strMySQLCharset = 'MySQL-Zeichensatz';
$strMySQLReloaded = 'MySQL wurde neu gestartet.';
$strMySQLSaid = 'MySQL meldet: ';
$strMySQLServerProcess = 'Verbunden mit MySQL %pma_s1% auf %pma_s2% als %pma_s3%';
$strMySQLShowProcess = 'Prozesse anzeigen';
$strMySQLShowStatus = 'MySQL-Laufzeit-Informationen anzeigen';
$strMySQLShowVars = 'MySQL-System-Variablen anzeigen';

$strName = 'Name';
$strNext = 'N�chste';
$strNo = 'Nein';
$strNoDatabases = 'Keine Datenbanken';
$strNoDatabasesSelected = 'Es wurden keine Datenbanken ausgew�hlt.';
$strNoDescription = 'keine Beschreibung';
$strNoDropDatabases = 'Die Anweisung "DROP DATABASE" wurde deaktiviert.';
$strNoExplain = 'SQL-Erkl�rung umgehen';
$strNoFrames = 'phpMyAdmin arbeitet besser mit einem <b>Frame</b>-f�higen Browser.';
$strNoIndex = 'Kein Index definiert!';
$strNoIndexPartsDefined = 'Keine Indizies definiert.';
$strNoModification = 'Keine �nderung';
$strNoOptions = 'F�r dieses Format sind keine Optionen vorhanden';
$strNoPassword = 'Kein Kennwort';
$strNoPhp = 'ohne PHP-Code';
$strNoPrivileges = 'Keine Rechte';
$strNoQuery = 'Kein SQL-Befehl!';
$strNoRights = 'Sie haben nicht genug Rechte um fortzufahren!';
$strNoTablesFound = 'Es wurden keine Tabellen in der Datenbank gefunden.';
$strNoUsersFound = 'Es wurden keine Benutzer gefunden.';
$strNoUsersSelected = 'Es wurden keine Benutzer ausgew�hlt.';
$strNoValidateSQL = 'SQL-Validierung umgehen';
$strNone = 'keine';
$strNotNumber = 'Das ist keine Zahl!';
$strNotOK = 'fehlerhaft';
$strNotSet = 'Die Tabelle <b>%s</b> wurde entweder nicht gefunden oder in der Kofigurationsdatei %s nicht gesetzt.';
$strNotValidNumber = ' ist keine g�ltige Zeilennummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s Treffer in der Tabelle <i>%s</i>';
$strNumSearchResultsTotal = '<b>Insgesamt</b> <i>%s</i> Treffer';
$strNumTables = 'Tabellen';

$strOK = 'OK';
$strOftenQuotation = 'H�ufig Anf�hrungszeichen. Optional bedeutet, dass nur Textfelder von den angegeben Zeichen eingeschlossen sind.';
$strOperations = 'Operationen';
$strOptimizeTable = 'Optimiere Tabelle';
$strOptionalControls = 'Optional. Bestimmt, wie Sonderzeichen kenntlich gemacht werden.';
$strOptionally = 'optional';
$strOptions = 'Optionen';
$strOr = 'oder';
$strOverhead = '�berhang';

$strPHP40203 = 'Sie verwenden die PHP-Version 4.2.3, welche leider fehlerhaft im Umgang mit Multibyte-Zeichenketten (mbstring) ist. Dieser Fehler ist in der PHP-Datenbank als Bug-Report #19404 dokumentiert. Aus diesem Grund wird diese PHP-Version nicht f�r den Betrieb von phpMyAdmin empfohlen.';
$strPHPVersion = 'PHP-Version';
$strPageNumber = 'Seite:';
$strPartialText = 'gek�rzte Textfelder';
$strPassword = 'Kennwort';
$strPasswordChanged = 'Das Kennwort f�r %s wurde ge�ndert.';
$strPasswordEmpty = 'Es wurde kein Kennwort angegeben!';
$strPasswordNotSame = 'Die eingegebenen Kennw�rter sind nicht identisch!';
$strPdfDbSchema = 'Schema der Datenbank "%s" - Seite %s';
$strPdfInvalidPageNum = 'Undefinierte PDF-Seitennummer!';
$strPdfInvalidTblName = 'Die Tabelle "%s" existiert nicht!';
$strPdfNoTables = 'keine Tabellen';
$strPerHour = 'pro Stunde';
$strPerMinute = 'pro Minute';
$strPerSecond = 'pro Sekunde';
$strPhp = 'PHP-Code erzeugen';
$strPmaDocumentation = 'phpMyAdmin-Dokumentation';
$strPmaUriError = 'Das <tt>$cfg[\'PmaAbsoluteUri\']</tt>-Verzeichnis MUSS in Ihrer Konfigurationsdatei angegeben werden!';
$strPortrait = 'Hochformat';
$strPos1 = 'Anfang';
$strPrevious = 'Vorherige';
$strPrimary = 'Prim�rschl�ssel';
$strPrimaryKey = 'Prim�rschl�ssel';
$strPrimaryKeyHasBeenDropped = 'Der Prim�rschl�ssel wurde gel�scht.';
$strPrimaryKeyName = 'Der Name des Prim�rschl�ssels muss PRIMARY lauten!';
$strPrimaryKeyWarning = 'Der Name des Prim�rschl�ssels darf <b>nur</b> "PRIMARY" lauten.';
$strPrint = 'Drucken';
$strPrintView = 'Druckansicht';
$strPrivDescAllPrivileges = 'Enth�lt alle Rechte bis auf GRANT.';
$strPrivDescAlter = 'Erlaubt das Ver�ndern der Struktur betehender Tabellen.';
$strPrivDescCreateDb = 'Erlaubt das Erstellen neuer Datenbanken und Tabellen.';
$strPrivDescCreateTbl = 'Erlaubt das Erstellen neuer Tabellen.';
$strPrivDescCreateTmpTable = 'Erlaubt das Erstellen tempor�rer Tabellen.';
$strPrivDescDelete = 'Erlaubt das L�schen von Daten.';
$strPrivDescDropDb = 'Erlaubt das L�schen ganzer Datenbanken und Tabellen.';
$strPrivDescDropTbl = 'Erlaubt das L�schen ganzer Tabellen.';
$strPrivDescExecute = 'Erlaubt das Ausf�hren gespeicherter Prozeduren; Hat keinen Effekt in dieser MySQL-Version.';
$strPrivDescFile = 'Erlaubt das Importieren von Daten aus und das Exportieren in externe Dateien.';
$strPrivDescGrant = 'Erlaubt das Hinzuf�gen von Benutzern und Rechten ohne den die Benutzerprofile neu laden zu m�ssen.';
$strPrivDescIndex = 'Erlaubt das Erstellen und L�schen von Indizes.';
$strPrivDescInsert = 'Erlaubt das Hinzuf�gen und Ersetzen von Daten.';
$strPrivDescLockTables = 'Erlaubt die Sperrung bestimmter Tabellen.';
$strPrivDescMaxConnections = 'Begrenzt die Anzahl neuer Verbindungen, welche ein Benutzer pro Stunde aufbauen darf.';
$strPrivDescMaxQuestions = 'Begrent die Anzahl der Abfragen, welche ein Benutzer pro Stunde senden darf.';
$strPrivDescMaxUpdates = 'Begrenzt die Anzahl der Ver�nderungen, welche ein Benutzer pro Stunde an allen Datenbanken und Tabellen vornehmen darf.';
$strPrivDescProcess3 = 'Erlaubt das Beenden fremder Prozesse.';
$strPrivDescProcess4 = 'Erlaubt das Anzeigen der vollen Abfragen in der Prozessliste.';
$strPrivDescReferences = 'Hat keinen Effekt in dieser MySQL-Version.';
$strPrivDescReload = 'Erlaubt das erneute Laden von Servereinstellungen und das Leeren der Zwischenspeicher zur Laufzeit.';
$strPrivDescReplClient = 'Erlaubt dem Benutzer zu fragen, wo sich die Master- bzw. Slave-Systeme befinden';
$strPrivDescReplSlave = 'Wird f�r die Replication-Slave-Systeme ben�tigt.';
$strPrivDescSelect = 'Erlaubt das Auslesen von Daten.';
$strPrivDescShowDb = 'Gew�hrt Zugang zur vollst�ndigen Datenbankliste.';
$strPrivDescShutdown = 'Erlaubt das Beenden des Servers.';
$strPrivDescSuper = 'Erlaubt eine Verbindung, selbst wenn die maximale Anzahl an Verbindungen bereits erreicht ist; Wird f�r viele administrative Operationen, wie das Setzen globaler Variables oder das Beenden fremder Prozesse, vorausgesetzt.';
$strPrivDescUpdate = 'Elaubt das Ver�ndern von gespeicherten Daten.';
$strPrivDescUsage = 'Keine Rechte.';
$strPrivileges = 'Rechte';
$strPrivilegesReloaded = 'Die Benutzerprofile wurden neu geladen.';
$strProcesslist = 'Prozesse';
$strProperties = 'Eigenschaften';
$strPutColNames = 'Feldnamen in die erste Zeile setzen';

$strQBE = 'Abfrageeditor';
$strQBEDel = 'Entf.';
$strQBEIns = 'Einf.';
$strQueryFrame = 'Abfragefenster';
$strQueryFrameDebug = 'Debugging Information';
$strQueryFrameDebugBox = 'Aktive Variablen des Abfrageformulars:\nDB: %s\nTabellle: %s\nServer: %s\n\nMomentate Variablen des Abfrageofrmulars:\nDB: %s\nTabelle: %s\nServer: %s\n\nQuelle des �ffnenden Fensters: %s\nQuelle des Framesets: %s.';
$strQueryOnDb = ' SQL-Befehl in der Datenbank <b>%s</b>:';
$strQuerySQLHistory = 'SQL-Verlaufsprotokoll';
$strQueryStatistics = '<b>Abfragestatisktik</b>: Seit seinem Start wurden %s Abfragen an diesen MySQL-Server gesandt.';
$strQueryTime = 'die Abfrage dauerte %01.4f sek';
$strQueryType = 'Abfrageart';

$strReType = 'Wiederholen';
$strReceived = 'Empfangen';
$strRecords = 'Eintr�ge';
$strReferentialIntegrity = 'Pr�fe referentielle Integrit�t:';
$strRelationNotWorking = 'Die zus�tzlichen Funktionen f�r verkn�pfte Tabellen wurden automatisch deaktiviert. Klicken Sie %shier%s um herauszufinden warum.';
$strRelationView = 'Beziehungs�bersicht';
$strRelationalSchema = 'Beziehungsschema';
$strReloadFailed = 'MySQL Neuladen fehlgeschlagen.';
$strReloadMySQL = 'MySQL neu starten';
$strReloadingThePrivileges = 'Lade die Benutzertabellen neu';
$strRememberReload = 'Der Server muss neu gestartet werden.';
$strRemoveSelectedUsers = 'Die ausgew�hlten Benutzer l�schen';
$strRenameTable = 'Tabelle umbenennen in';
$strRenameTableOK = 'Tabelle %s wurde umbenannt in %s.';
$strRepairTable = 'Repariere Tabelle';
$strReplace = 'Ersetzen';
$strReplaceTable = 'Tabelleninhalt ersetzen';
$strReset = 'Zur�cksetzen';
$strResourceLimits = 'Ressourcenbeschr�nkungen';
$strRevoke = 'Entfernen';
$strRevokeAndDelete = 'Den Benutzern alle Rechte entziehen und sie anschlie�end aus den Benutzertabellen l�schen.';
$strRevokeAndDeleteDescr = 'Die Benutzer w�rden weiterhin das USAGE-Recht behalten, bis die Benutzertabellen neu geladen werden.';
$strRevokeGrant = '\'Grant\' entfernen';
$strRevokeGrantMessage = 'Sie haben das Recht \'Grant\' f�r %s entfernt.';
$strRevokeMessage = 'Sie haben die Rechte f�r %s entfernt.';
$strRevokePriv = 'Rechte entfernen';
$strRowLength = 'Zeilenl�nge';
$strRowSize = 'Zeilengr��e';
$strRows = 'Zeilen';
$strRowsFrom = 'Datens�tze, beginnend ab';
$strRowsModeFlippedHorizontal = 'horizontal (gedrehte Bezeichner)';
$strRowsModeHorizontal = 'untereinander';
$strRowsModeOptions = '%s angeordnet und wiederhole die Kopfzeilen nach %s Datens�tzen.';
$strRowsModeVertical = 'nebeneinander';
$strRowsStatistic = 'Zeilenstatistik';
$strRunQuery = 'SQL-Befehl ausf�hren';
$strRunSQLQuery = 'SQL-Befehl(e) in Datenbank %s ausf�hren';
$strRunning = 'auf %s';

$strSQL = 'SQL';
$strSQLOptions = 'SQL-Optionen';
$strSQLParserBugMessage = 'M�glicherweise haben Sie einen Bug im SQL-Parser entdeckt. Bitte �berpr�fen Sie Ihre Abfrage genaustens, insbesondere auf falsch gesetzte oder nicht geschlossene Anf�hrungszeichen. Eine weitere Ursache k�nnte darin liegen, dass Sie versuchen eine Datei mit bin�ren Daten, welche nicht von Anf�hrungszeichen eingeschlossen sind, hochzuladen. Sie k�nnen alternativ versuchen Ihre Abfrage �ber das MySQL-Kommandozeileninterface zu senden. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen. Falls Sie weiterhin Probleme haben sollten oder der Parser dort versagt, wo die Kommandozeile erfolgreich ist, so reduzieren Sie bitte Ihre Abfrage auf den Befehl, welcher die Probleme verursacht, und senden Sie uns einen Bugreport mit den Datenausschnitt, den Sie weiter unten auf dieser Seite finden.:';
$strSQLParserUserError = 'Es scheint einen Fehler in Ihrer MySQL-Abfrage zu geben. Die MySQL-Fehlerausgabe, falls vorhanden, kann Ihnen auch bei der Fehleranalyse helfen.';
$strSQLQuery = 'SQL-Befehl';
$strSQLResult = 'SQL-Abfrageergebnis';
$strSQPBugInvalidIdentifer = 'Ung�ltiger Bezeichner';
$strSQPBugUnclosedQuote = 'Nicht geschlossene Anf�hrungszeichen';
$strSQPBugUnknownPunctuation = 'Unbekannte Interpunktion';
$strSave = 'Speichern';
$strScaleFactorSmall = 'Der Skalierungsfaktor ist zu klein, sodass das Schma nicht auf eine Seite passt!';
$strSearch = 'Suche';
$strSearchFormTitle = 'Durchsuche die Datenbank';
$strSearchInTables = 'In der / den Tabelle(n):';
$strSearchNeedle = 'Zu suchende W�rter oder Werte (Platzhalter: "%"):';
$strSearchOption1 = 'mindestens eines der W�rter';
$strSearchOption2 = 'alle W�rter';
$strSearchOption3 = 'genau diese Zeichenkette';
$strSearchOption4 = 'als regul�ren Ausdruck';
$strSearchResultsFor = 'Suchergebnisse f�r "<i>%s</i>" %s:';
$strSearchType = 'Finde:';
$strSelect = 'Teilw. anzeigen';
$strSelectADb = 'Bitte Datenbank ausw�hlen';
$strSelectAll = 'Alle ausw�hlen';
$strSelectFields = 'Felder ausw�hlen (mind. eines):';
$strSelectNumRows = 'in der Abfrage';
$strSelectTables = 'Tabellenauswahl';
$strSend = 'Senden';
$strSent = 'Gesendet';
$strServer = 'Server %s';
$strServerChoice = 'Server Ausw�hlen';
$strServerStatus = 'Laufzeit-Informationen';
$strServerStatusUptime = 'Dieser MySQL-Server l�uft bereits %s. Er wurde am %s gestartet.';
$strServerTabProcesslist = 'Prozesse';
$strServerTabVariables = 'Variablen';
$strServerTrafficNotes = '<b>Servertraffic</b>: In diesen Tabellen wird der Netzwerktraffic dieses MySQL-Servers seit dessen Start aufgef�hrt.';
$strServerVars = 'Servervariablen und -einstellungen';
$strServerVersion = 'Server Version';
$strSessionValue = 'Wert f�r diese Sitzung';
$strSetEnumVal = 'Wenn das Feld vom Typ \'ENUM\' oder \'SET\' ist, benutzen Sie bitte das Format: \'a\',\'b\',\'c\',....<br />Wann immer Sie ein Backslash ("\") oder ein einfaches Anf�hrungszeichen ("\'") verwenden,<br \>setzen Sie bitte ein Backslash vor das Zeichen.  (z.B.: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Zeige';
$strShowAll = 'Alles anzeigen';
$strShowColor = 'mehrfarbig';
$strShowCols = 'Reihen anzeigen';
$strShowDatadictAs = 'Format des Strukturverzeichnisses';
$strShowGrid = 'Gitterlinien anzeigen';
$strShowPHPInfo = 'PHP-Informationen anzeigen';
$strShowTableDimension = 'Tabellendimensionen anzeigen.';
$strShowTables = 'Tabellen anzeigen';
$strShowThisQuery = 'SQL-Befehl hier wieder anzeigen';
$strShowingRecords = 'Zeige Datens�tze ';
$strSingly = '(einmalig)';
$strSize = 'Gr��e';
$strSort = 'Sortierung';
$strSpaceUsage = 'Speicherplatzverbrauch';
$strSplitWordsWithSpace = 'Die W�rter werden durch Leerzeichen (" ") getrennt.';
$strStatCheckTime = 'Letzter Check am';
$strStatCreateTime = 'Erzeugt am';
$strStatUpdateTime = 'Aktualisiert am';
$strStatement = 'Angaben';
$strStatus = 'Status';
$strStrucCSV = 'CSV-Daten';
$strStrucData = 'Struktur und Daten';
$strStrucDrop = 'Mit \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV-Daten f�r MS Excel';
$strStrucOnly = 'Nur Struktur';
$strStructPropose = 'Tabellenstruktur analysieren';
$strStructure = 'Struktur';
$strSubmit = 'Abschicken';
$strSuccess = 'Ihr SQL-Befehl wurde erfolgreich ausgef�hrt.';
$strSum = 'Gesamt';

$strTable = 'Tabelle';
$strTableComments = 'Tabellen-Kommentar';
$strTableEmpty = 'Der Tabellenname ist leer!';
$strTableHasBeenDropped = 'Die Tabelle %s wurde gel�scht.';
$strTableHasBeenEmptied = 'Die Tabelle %s wurde geleert.';
$strTableHasBeenFlushed = 'Die Tabelle %s wurde geschlossen und zwischengespeicherte Daten gespeichert.';
$strTableMaintenance = 'Hilfsmittel';
$strTableOfContents = 'Inhalt';
$strTableStructure = 'Tabellenstruktur f�r Tabelle';
$strTableType = 'Tabellentyp';
$strTables = '%s Tabellen';
$strTblPrivileges = 'Tabellenspezifische Rechte';
$strTextAreaLength = 'Wegen seiner L�nge ist dieses<br />Feld vielleicht nicht editierbar.';
$strTheContent = 'Der Inhalt Ihrer Datei wurde eingef�gt.';
$strTheContents = 'Der Inhalt der CSV-Datei ersetzt die Eintr�ge mit den gleichen Prim�r- oder Unique-Schl�sseln.';
$strTheTerminator = 'Der Trenner zwischen den Feldern.';
$strThisHost = 'Dieser Host';
$strThisNotDirectory = 'Dies ist kein Verzeichnis';
$strThreadSuccessfullyKilled = 'Der Prozess %s wurde erfolgreich abgebrochen.';
$strTime = 'Dauer';
$strTotal = 'insgesamt';
$strTotalUC = 'Insgesamt';
$strTraffic = 'Traffic';
$strType = 'Typ';

$strUncheckAll = 'Auswahl entfernen';
$strUnique = 'Unique';
$strUnselectAll = 'Auswahl entfernen';
$strUpdatePrivMessage = 'Die Rechte f�r %s wurden ge�ndert.';
$strUpdateProfile = 'Benutzer �ndern:';
$strUpdateProfileMessage = 'Benutzer wurde ge�ndert.';
$strUpdateQuery = 'Aktualisieren';
$strUsage = 'Verbrauch';
$strUseBackquotes = ' Tabellen- und Feldnamen in einfachen Anf�hrungszeichen ';
$strUseTables = 'Verwendete Tabellen';
$strUseTextField = 'Textfeld verwenden';
$strUser = 'Benutzer';
$strUserAlreadyExists = 'Der Benutzer %s existiert bereits!';
$strUserEmpty = 'Kein Benutzername eingegeben!';
$strUserName = 'Benutzername';
$strUserNotFound = 'Der gew�hlte Benutzer wurde in der Benutzertabelle nicht gefunden.';
$strUserOverview = 'Benutzer�bersicht';
$strUsers = 'Benutzer';
$strUsersDeleted = 'Die gew�hlten Benutzer wurden gel�scht.';
$strUsersHavingAccessToDb = 'Benutzer mit Zugriff auf &quot;%s&quot;';

$strValidateSQL = 'SQL validieren';
$strValidatorError = 'Bei der Initialisierung des SQL-Validators ist ein Fehler aufgetreten. Bitte �berpr�fen Sie, ob Sie die in der %sDokumentation%s beschriebenen php-Erweiterungen installiert haben.';
$strValue = 'Wert';
$strVar = 'Variable';
$strViewDump = 'Dump (Schema) der Tabelle anzeigen';
$strViewDumpDB = 'Dump (Schema) der Datenbank anzeigen';

$strWebServerUploadDirectory = 'Upload-Verzeichnis auf dem Webserver';
$strWebServerUploadDirectoryError = 'Auf das festgelegte Upload-Verzeichnis kann nicht zugegriffen werden.';
$strWelcome = 'Willkommen bei %s';
$strWildcard = 'wildcard';
$strWithChecked = 'markierte:';
$strWritingCommentNotPossible = 'Es k�nnen keine Kommentare geschrieben werden';
$strWritingRelationNotPossible = 'Es k�nnen keine Spaltenbeziehungen gespeichert werden.';
$strWrongUser = 'Falscher Benutzername/Kennwort. Zugriff verweigert.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Anmerkung: Der Wert 0 (null) entfernt die Beschr�nkung.';
$strZip = 'Zip-komprimiert';

// To translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate

$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate

$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
?>
