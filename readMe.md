**Examples of design patterns, inspired by:**

- https://designpatternsphp.readthedocs.io/de/latest
- https://github.com/kamranahmedse/design-patterns-for-humans
- https://refactoring.guru/design-patterns
- https://sourcemaking.com/design_patterns

---

**Creational**

1. Factory Method
    - Ziel:
        - Trennung der Objektinstanziierung von der Objektverwendung (Kapselung)
        - Flexibilität bei der Auswahl des zu erstellenden Objekts zur Laufzeit (Dependency Inversion)
        - erleichtert Erweiterbarkeit (hinzufügen neuer Objekttypen)
        - Single Responsibility Principle
    - Beispiel:
        - **Dokumentenerstellung:** Erstellen von verschiedenen Dokumenttypen (z. B. PDF, Word, HTML) ohne die genaue
        - Implementierung zu kennen.
        - **Zahlungsabwickler:** Erstellen von verschiedenen Zahlungsdienstleistern (z. B. PayPal, Kreditkarte)
          basierend
          auf Benutzereingaben.
        - **Formen-Grafiksystem:** Erstellen von verschiedenen geometrischen Formen (z. B. Kreis, Rechteck, Dreieck) je
          nach Benutzerwahl.


2. Abstract Factory:
    - Ziel:
        - Familien von verwandten oder abhängigen Objekten mittels Schnittstelle zu erzeugen
        - Trennung der Objektinstanziierung von der Objektverwendung (Kapselung)
        - Förderung der Flexibilität und Erweiterbarkeit (Open/Closed Principle)
        - Vermeidung von Abhängigkeiten von konkreten Klassen
        - Konsistenz und Integrität der Produktfamilie gewährleisten
        - Single Responsibility Principle
    - Beispiele:
        - **GUI-Toolkit:** Erstellen plattformabhängiger Benutzeroberflächenkomponenten (z. B. Buttons, Dialoge für
          Windows, Mac, Linux).
        - **Fahrzeugproduktion:** Erstellen von verschiedenen Fahrzeugkomponenten für verschiedene Fahrzeugtypen (z. B.
          Sportwagen, Geländewagen).
        - **Internationalisierung und Lokalisierung:** Bereitstellung von sprachspezifischen Übersetzungen und
          Datumsformaten für unterschiedliche Länder.


3. Builder:
    - Ziel:
        - Objekt wird mittels Hilfsklasse erstellt, nicht mit den bekannten Konstruktoren (Entkopplung)
        - Erzeugung unterschiedliche Repräsentationen eines komplexen Objekts (viele Parameter)
        - Erzeugung unveränderlicher Objekte
        - Single Responsibility Principle
    - Beispiele:
        - **Auto-Konfigurator:** Erstellen von komplexen Fahrzeugkonfigurationen mit vielen Optionen (Farbe, Motor,
          Ausstattung).
        - **Berichtsgenerator:** Erstellen von Berichten mit mehreren optionalen Elementen wie Textabschnitten,
          Diagrammen, Tabellen.
        - **HTML-Seiten-Generator:** Erstellen von Webseiten mit vielen konfigurierbaren Elementen wie Headern,
          Fußzeilen,
          Inhalten und Bildern.


4. Prototype
    - Ziel:
        - statt Objekte jedes Mal neu zu erzeugen, wird ein vorhandener Master geklont
        - Möglichkeit von vielfältigen Varianten eines Objekts
        - Reduktion von Objektinstanziierungscode
        - Möglichkeit komplexe Objekterstellungslogik von der Client-Seite zu kapseln
        - Shallow vs. Deep Cloning: Das Prototype Pattern ermöglicht es, tiefere oder flachere Kopien von Objekten zu
          erstellen, je nach Bedarf
    - Beispiele:
        - **Grafikeditor:** Duplizieren von Objekten wie Formen, Mustern oder Textblöcken durch Klonen von
          Prototypen.
        - **Game-Engine:** Erstellen von NPCs, Fahrzeugen oder Waffen durch Klonen eines existierenden Objekts statt
          durch Neuanlage.
        - **Dokumentenmanagement:** Erstellen von Dokumenten mit denselben Attributen (z. B. Vertragsvorlagen) durch
          Kopieren eines Prototyps.

5. Singleton
    - Ziel:
        - Verwendung einer Instanz der Klasse im gesamten Code
        - Vermeidung mehrfacher Instanziierung
        - dadurch Reduzierung des Speicherverbrauchs
        - ermöglicht durch Lazy Instantiation die Erzeugung der Instanz nur dann, wenn sie auch gebraucht wird
        - Erleichterung des Testens von globalen Zuständen durch Mocks des Singletons
    - Contra, gilt u.U. als Anti-Pattern:
        - versteckte Abhängigkeiten (Hidden Dependencies)(Wenn viele Klassen direkt auf die Singleton-Instanz zugreifen,
          ist es schwer nachzuvollziehen, welche Klassen tatsächlich welche Abhängigkeiten haben)
        - verstößt gegen Single Responsibility Principle (Beispielsweise könnte ein Singleton sowohl die
          Zustandsverwaltung als auch die Logik zur Bereitstellung von Diensten oder Ressourcen übernehmen.)
        - verstößt gegen lose Kopplung, wenn Klassen zu stark miteinander gekoppelt sind
        - Singleton verwaltet einen globalen Zustand, welcher unkontrolliert verändert werden kann. (Achtung bei
          Multi-Threading-Umgebungen oder parallelen Prozessen)
        - Schwierigere Tests (manchmal muss die Singleton-Instanz in den Tests manuell zurückgesetzt werden)
        - Erhöhte Testabhängigkeit und versteckter Zustand
        - behindert in größeren oder verteilten Systemen die Skalierbarkeit und Flexibilität
        - Alternativen wie Dependency Injection, Service Locator oder Factory Patterns sind in vielen Fällen bessere
          Optionen, die mehr Flexibilität und bessere Testbarkeit bieten.
    - Beispiele:
        - **DB-Konnektor:** Eine einzige Instanz einer Datenbankverbindung, die im gesamten System verwendet wird.
        - **Logger:** Ein zentrales Logging-System, das nur eine Instanz der Logger-Klasse im gesamten Programm
          verwendet.
        - **Konfigurationsmanager:** Eine zentrale Instanz zur Verwaltung von Konfigurationseinstellungen für die
          gesamte Anwendung.
        - **Thread Handling:** Verwaltung und Synchronisation von Threads, bei denen nur eine Instanz für die gesamte
          Anwendung verwendet wird.
        - **Lock File:** Eine einzige Instanz eines Lockfiles, das sicherstellt, dass nur eine Instanz der Anwendung auf
          dem System läuft.

6. Pool
    - Ziel:
        - verwaltet und optimiert Ressourcen, die teuer in Erstellung und Zerstörung sind
        - Objekte sind wiederverwendbar
        - nur benötigte Ressourcen werden erstellt; maximale Anzahl kann begrenzt werden
        - Performance-Verbesserung
    - Beispiele:
        - **Verbindungen zu Datenbanken**
        - **Threads**
        - **Socketverbindungen**
        - **File-Handles**
        - **Cache-Objekte**
        - **Grafikobjekten wie Schriften oder Bitmaps**

---

**Structural**

1. Adapter/Wrapper
    - Ziel:
        - Kompatibilität ohne Änderung des bestehenden Codes (Open/Closed Principle)
        - Flexibilität und Erweiterbarkeit anderer Schnittstellen (Open/Closed Principle)
        - Vermeidung von Code-Duplizierung
        - Einfachere Integration von Drittanbieter-Bibliotheken
        - Trennung von Anliegen (Separation of Concerns)
        - Einfacheres Testen und Mocken
    - Beispiele:
        - Integration von Drittanbieter-Bibliotheken
        - Migrationsprojekte, verschiedene API-Versionen, Datenbankmigration
        - Kompatibilität zwischen unterschiedlichen Datenquellen (verschiedene Datenbanken, APIs...)
        - Verwendung von Legacy-Code
        - Verschiedene Kommunikationsprotokolle (REST, SOAP)
        - Unterschiedliche Formatierungen/Datenkonvertierung (Json vs. XML)

2. Bridge
    - Ziel:
        - Unabhängige Erweiterung der Abstraktion (was wird getan/unabhängig von der Technologie) und
          Implementierung (wie wird es getan/technologieabhängig)
        - Reduziert die Anzahl von Klassen bei vielen Varianten durch Abstraktionen und Implementierungen (Single
          Responsibility Principle)
        - Erhöhte Flexibilität, da Abstraktion und Implementierung unabhängig voneinander verändert und erweitert
          werden können (Open/Closed Principle)
    - Beispiele:
        - Grafik-Rendering
        - Datenbankzugriffsschicht
        - Multimedia-Player
        - Benutzeroberflächen/UI-Frameworks
        - Zahlungssysteme
        - Spiel-Engines
        - Dokumentenverarbeitungssysteme
        - Fahrzeugverwaltungssysteme
        - Reporting-Systeme
        - Sprachübersetzungssysteme

3. Composite
    - Ziel:
        - Modellieren von Hierarchien in Baumstruktur aus Objekten
        - erhöht die Wiederverwendbarkeit und Flexibilität
        - Abstraktion und vereinheitlichte Schnittstellen
        - Vermeidung von Komplexität bei der Behandlung von Gruppen
    - Beispiele:
        - Dateisysteme
        - Grafikbibliotheken
        - Benutzeroberflächen (Buttons, Textfelder oder Panels)
        - DOM-Struktur
        - Lagerhaltung/Bücherschrank

4. Data Mapper
    - Ziel:
        - klare Trennung zwischen der Datenbank/Persistenz und der Domänenlogik (Separation of Concerns)
        - Datenpersistenz abstrahieren
        - Ermöglichung von Tests und Wartbarkeit
        - Flexibilität in Bezug auf Datenquellen
        - Reduzierung der Komplexität durch Vermeidung von direkten Datenbankzugriffen in der Domänenlogik
    - Beispiele:
        - CRM-Systeme
        - mehrere Datenquellen
        - Datenbankwechsel
        - Komplexe Entitäten mit umfangreichen Beziehungen
        - Langsame oder asynchrone Datenbankabfragen
        - Wiederverwendbarkeit von Domänenmodellen
        - Legacy-Systeme
        - Datenvalidierung und -transformation
        - Testbarkeit von Geschäftslogik

5. Decorator
    - Ziel:
        - Erweiterung der Funktionalität eines Objekts zur Laufzeit
        - Verschiedene Varianten eines Objekts zur Laufzeit kombinieren
        - Vermeidung von Subklassen/Vermeidung von Code-Duplikation
        - Flexibles Hinzufügen von Verhalten
        - Kombination mehrerer Verantwortlichkeiten
    - Beispiele:
        - GUIs/UI-Design und Styling
        - Logging und Monitoring
        - Payment-Systeme
        - Datenkompression und Verschlüsselung
        - Authentifizierung und Autorisierung
        - Caching
        - Datenvalidierung
        - Transaktionsmanagement

6. Dependency Injection
    - Ziel:
        - Abhängigkeiten einer Klasse von außen bereitzustellen
        - Reduzierung der Kopplung (Loose Coupling)
        - Erhöhung der Wartbarkeit, Testbarkeit und Lesbarkeit des Codes
    - Beispiele:
        - Komplexe Software-Architekturen (z.B. MVC)
        - Unit-Tests und Mocking
        - Ersetzen von Implementierungen (z.B. Persistenz)
        - Verwaltung von Konfigurationen
        - Webanwendungen und Middleware
        - Ereignisgesteuerte Systeme und Listener  (Event-Driven Architecture)
        - Verwendung von Services und externen APIs (z.B. Zahlungs-Gateways oder E-Mail-Dienste)
        - Verwaltung von Zustandsabhängigkeiten/Stateful (Session- oder Cache-Verwaltung)
        - Verwendung von Factories und Buildern
        - Dependency Injection in Microservices
        - Integration mit Dependency Injection Containern in Frameworks
        - Verwaltung von Singleton-Instanzen
        - Webanwendungen mit komplexen View-Komponenten

7. Facade
    - Ziel:
        - Vereinfachung der Interaktion mit einem komplexen Subsystem
        - Reduzierung der Abhängigkeiten
        - Förderung von Modulen und Entkopplung
        - Verbesserung der Wartbarkeit und Erweiterbarkeit
    - Beispiele:
        - Komplexe Subsysteme in Softwarebibliotheken/Verwendung von Frameworks
        - Datenbankzugriffs-Schicht (Methoden für CRUD-Operationen)
        - Benutzeroberflächen-Komplexität
        - Zugriff auf externe APIs
        - Cloud-Service-Interaktionen
        - Integration von Legacy-Systemen
        - Multithreading und Parallelverarbeitung
        - Datenverarbeitungs-Pipelines
        - Sicherheits- und Authentifizierungsdienste

8. Fluent Interface
    - Ziel:
        - Lesbarkeit und Klarheit durch Ketten von Methodenaufrufen in einer natürlichen Sprache
        - Vereinfachung der Syntax in eleganter und verständlicher Weise
        - Ketten von Methodenaufrufen durch Rückgabe des Objekts selbst
    - Beispiele:
        - Builder-Pattern (Objektaufbau)
        - Konfiguration von Objekten oder Komponenten
        - Erstellung von SQL-Abfragen
        - API- und HTTP-Client-Aufrufe
        - Test- und Mocking-Frameworks
        - Logging- und Debugging-Tools
        - Event-Handling und Listener
        - Schrittweise Berechnungen oder mathematische Operationen
        - Workflow- oder Prozesssteuerung

9. Flyweight
    - Ziel:
        - Speicheroptimierung durch zentrale Speicherung gemeinsamer Daten (die nicht für jede Instanz einzigartig sind)
        - Reduzierung der Objektinstanzen dadurch, dass nur die variablen Teile der Objekte gespeichert werden
          ("Extrinsic State")
        - Steigerung der Performance
        - Flexibilität bei der Trennung von intrinsischen (unveränderlichen gemeinsamen Daten) und extrinsischen
          (veränderlichen kontextabhängigen Daten)
          Zuständen
        - Förderung der Wiederverwendbarkeit von Objekten
    - Beispiel:
        - Grafische Benutzeroberflächen (GUI)
        - Spiele (Spielobjekte und Charaktere)
        - Textverarbeitung und Schriftarten
        - Datenbanken und Abfragen
        - Drucken von Dokumenten (Druck-Rendering)
        - Rendering von 2D- und 3D-Grafiken
        - Symbolische Repräsentation in großen Anwendungen
        - Verwaltung von Zuständen in Benutzeroberflächen
        - Verwaltung von grafischen Mustern oder Texturen in Spielen
        - Verwaltung von Icons oder Symbole in Softwareanwendungen

10. Private Class Data
    - Ziel:
        - Datenkapselung: Trennung von Geschäftslogik und Daten-Klassen
        - Zugriffssteuerung: Getter und Setter mit Validierung
        - Vermeidung von Seiteneffekten: private Daten können nicht von außenstehenden Komponenten verändert werden
        - Erleichterung der Wartbarkeit und Erweiterbarkeit
        - Förderung von gutem Design und sauberen Schnittstellen
    - Beispiele:
        - Bankkonten und Finanzsysteme
        - Benutzerkonten und Authentifizierungssysteme
        - Konfigurations- und Einstellungsverwaltung
        - Spiele (Spielzustand, Spielerfortschritt)
        - Inventarsysteme
        - Medizinische Daten und Gesundheitsmanagement
        - Datenbankoperationen (DB-Verbindung und Transaktionen)
        - Warenkorb-System (E-Commerce)

11. Proxy
    - Ziel:
        - Zugriffssteuerung: kontrollierter Zugriff auf ein Objekt, bevor Zugriff auf Zielobjekt erfolgt
        - Lazy Loading: Ressourcen dann laden, wenn sie benötigt werden
        - Performance-Optimierung durch Caching-Mechanismen oder Ausführen teurer Operationen on-Demand
        - Virtueller Proxy als Platzhalter für ein teures oder ressourcenintensives Objekt
        - Remote Proxy wenn Zielobjekt auf anderem Server oder in anderem Prozess existiert
        - Security Proxy mit eingeschränktem oder überwachtem Zugriff
    - Beispiele:
        - Zugriffssteuerung (Security Proxy): Eine Anwendung, die vertrauliche Daten verarbeitet, könnte einen Proxy
          verwenden, der vor dem Zugriff auf die sensiblen Daten überprüft, ob der Benutzer über die richtigen
          Berechtigungen verfügt (z. B. Rollen oder Tokens).
        - Lazy Loading (Virtueller Proxy): große Datenmengen, z. B. in einer E-Commerce-Anwendung, könnte ein Proxy
          dafür sorgen, dass eine Datenbankabfrage nur dann ausgeführt wird, wenn die entsprechenden Daten wirklich
          angezeigt werden müssen
        - Performance-Optimierung durch Caching (Virtueller Proxy): Proxy speichert das Ergebnis einer langwierigen
          Berechnung oder einer Datenbankabfrage, sodass bei nachfolgenden Zugriffen auf die gleichen Daten das Ergebnis
          aus dem Cache zurückgegeben wird
        - Remote Proxy: nwendung, die auf einen entfernten Server zugreift (z. B. über eine API), könnte einen Remote
          Proxy verwenden, der die Kommunikation mit dem Server abstrahiert und als Stellvertreter fungiert, ohne dass
          der Client sich um Details der Netzwerkverbindung kümmern muss
        - Verstecken der Komplexität (Façade Proxy): roxy, der Zugriff auf ein komplexes Subsystem bietet, wie z. B.
          ein Zahlungs-Gateway. Der Proxy könnte eine einfache API zur Verfügung stellen, die dem Benutzer die Details
          der Interaktion mit dem Gateway erspart.
        - Verhindern von Missbrauch (Schutz-Proxy): Webanwendung könnte ein Proxy sicherstellen, dass alle
          Benutzereingaben validiert und gegen SQL-Injection oder Cross-Site-Scripting (XSS) abgesichert sind, bevor die
          Eingaben an die zugrunde liegende Logik weitergeleitet werden.
        - Überwachung und Logging (Proxy für Logging)
        - Datenkompression (Proxy für Datenkompression):  Proxy könnte in einem System, das mit großen Dateien oder
          Mediendaten arbeitet, für die Kompression von Daten zuständig sein, bevor sie an den Client oder Server
          weitergegeben werden, um Bandbreite und Ladezeiten zu sparen.
        - Virtuelle Maschinen oder Container (Proxy für Virtualisierung): Proxy könnte als Vermittler zwischen einem
          Client und einer virtuellen Maschine fungieren, um den Zugriff zu abstrahieren, den Zustand zu überwachen oder
          bestimmte Verwaltungsaufgaben zu automatisieren.
        - Multithreading / Synchronisation (Proxy zur Thread-Synchronisation): Proxy könnte als
          Synchronisationsmechanismus für ein gemeinsam genutztes Objekt fungieren, das von mehreren Threads
          gleichzeitig verwendet wird, indem er sicherstellt, dass immer nur ein Thread gleichzeitig auf das Zielobjekt
          zugreifen kann.
        - Firewall oder Sicherheitsfilter (Proxy für Sicherheitskontrollen): Proxy könnte als Sicherheitsfilter
          fungieren, der prüft, ob eingehende Netzwerkverkehrsdaten einer bestimmten Richtlinie entsprechen (z. B. keine
          schädlichen Anfragen oder Angriffe enthalten).

12. Registry:
    - Anti-Pattern wie hier beschrieben:
      https://designpatternsphp.readthedocs.io/de/latest/Structural/Registry/README.html

? Composite Method (Variante des Composite)

---

**Behavioral**

1. Chain of responsibility
    - Ziele:
        - Vermeidung der direkten Kopplung zwischen Sender und Empfänger
        - Flexibles Hinzufügen und Entfernen von Handlungsobjekten
        - Reduzierung der Kopplung
        - Verarbeitung von Anfragen in der richtigen Reihenfolge
    - Beispiele:
        - Fehlerbehandlung: (z. B. Validierungsfehler, Datenbankfehler, Netzwerkfehler)
        - Verarbeitung von Benutzeranfragen (Web-Requests) durch Filter oder Middleware-Komponenten
        - Verarbeitung von Bestellungen in einem E-Commerce-System durch eine Reihe von Prozessen oder Regeln
        - E-Mail-Spamschutz durch verschiedene Filterstationen
        - Verarbeitung von Zahlungsabwicklungen
        - Benutzerauthentifizierung und -berechtigung
        - Support-Ticketsystem
        - Dokumentenverarbeitung
        - Datenvalidierung

2. Command
    - Ziel:
        - Kapselung von Anfragen als Objekte
        - Ermöglicht die Undo/Redo-Operationen
        - Ermöglicht eine einfache Verlängerung der Operationen
        - Entkopplung von Sender und Empfänger
        - Batch-Verarbeitung und Aufruf von mehreren Befehlen
        - Parametrisierung von Objekten mit Befehlen
        - Implementierung von Triggern und Ereignissteuerung
        - Vereinfachung der Implementierung von Transaktionen
    - Beispiele:
        - Undo/Redo-Funktionalität: Apps wie Texteditoren oder Grafikbearbeitungsprogramme
        - Automatisierung von Aufgaben durch Makro- und Batch-Verarbeitung
        - Benutzeroberfläche (UI) und Geschäftslogik
        - Datenbank-Transaktionen
        - Event-Trigger-Systeme wie Zahlungsabwicklung, Bestandsprüfung, Versandanforderung
        - Zeitgesteuerte Aufgaben oder wiederkehrende Aufgaben, Cron-Jobs
        - Webanwendungen mit komplexen Formularen und Aktionen
        - Bewegungssteuerung und Spielaktionen
        - Webhooks und Benachrichtigungen
        - Microservices-Kommunikation und -Interaktionen über Messaging-Systeme (z. B. Kafka, RabbitMQ)

3. Interpreter
    - Ziel:
        - Verarbeitung von Ausdrücken einer formalen Sprache
        - Erweiterbarkeit der Sprache durch Grammatik oder Regeln
        - Wiederverwendbarkeit und Modularität
        - Ermöglichung der Verarbeitung komplexer Ausdrücke
        - Erleichterung des Parsing- und Evaluierungsprozesses
        - Vermeidung der Wiederholung von Code
    - Beispiele:
        - Mathematische Ausdrücke evaluieren z.B. Taschenrechner
        - Domänenspezifische Sprachen (DSLs) z.B. Regeln für die Preisberechnung, Rabatte oder Steuerberechnungen
        - Abfragen und Filter für Datenbankabfragen
        - Konfiguration von Systemen oder Software z.B. *.ini oder *.yaml-Dateien
        - Logische Ausdrücke und Entscheidungsbäume
        - Parsen und Validieren von Texten basierend auf regulären Ausdrücken
        - Programmiersprachen oder Skriptsprachen
        - Interpretieren von Geschäftsregeln oder Workflows in einer benutzerdefinierten Sprache
        - Text- und Sprachverarbeitung
        - Interpretieren von Zeitplänen in einer benutzerdefinierten Sprache
        - Automatisierung von Tests oder Skripten
        - Simulationssoftware, für mathematische Modelle und Gleichungen
        - Spielesysteme (z.B. Regeln für Karten- oder Brettspiele)

4. Iterator
    - Ziel:
        - Trennung der Sammlung und der Iteration
        - Vereinfachung der Iteration über die Elemente einer Sammlung
        - Zugriff auf Elemente ohne Kenntnis der internen Struktur
        - Unterstützung verschiedener Iterationstypen
        - Konsistenter und sicherer Zugriff auf Elemente
        - Vermeidung der direkten Manipulation von Indizes
        - Mehrfachiterationen gleichzeitig ermöglichen
        - Erweiterbarkeit und Flexibilität bei Iterationsstrategien
        - Unterstützung für verschiedene Datentypen und komplexe Strukturen
    - Beispiele:
        - Durchlaufen von Collections (Listen, Arrays, Sets)
        - Arbeiten mit verschiedenen Datenstrukturen wie Arrays, Bäume, Graphen und Sets
        - Datenbankabfragen und Ergebnismengen
        - Verarbeitung von Dokumenten oder XML-Strukturen
        - Verarbeitung von Benutzeroberflächen-Elementen
        - Wiederholte Verarbeitung von Items in einem Warenkorb (E-Commerce)
        - Ereignisverarbeitung in Event-Handling-Systemen
        - Verarbeitung von Benutzereingaben oder Formulardaten
        - Verarbeiten von Grafiken oder Pixel-Daten (Bildbearbeitung)
        - Spiel-Entwicklung (z. B. Spielfiguren und Objekte)
        - Verarbeitung von Multi-Threading oder Parallelverarbeitung
        - Durchlaufen von Log-Daten und Überwachungsereignissen
        - Verarbeitung von Dateisystemen
        - Verarbeitung von Zeitreihen oder historischen Daten


5. Mediator
    - Ziel:
        - Reduzierung der direkten Kommunikation durch Entkopplung der Komponenten mittels Zentralisierung der
          Kommunikation
        - Vereinfachung der Interaktion zwischen Objekten
        - Förderung einer klaren Trennung der Verantwortlichkeiten
        - Erleichterung von Änderungen und Erweiterungen
        - Vermeidung von komplexen Netzwerken von Abhängigkeiten
        - Reduzierung von Vererbungshierarchien
    - Beispiele:
        - Formular- oder UI-Komponenten-Interaktion (Benutzeroberfläche) (z.B. "Absenden"-Button wird nur aktiviert,
          wenn alle erforderlichen Felder ausgefüllt sind)
        - Chat- und Kommunikationssysteme (Mediator empfängt Nachrichten von einem Teilnehmer und verteilt sie an alle
          relevanten Empfänger)
        - Komplexe Event- oder Nachrichtenverarbeitung
        - Spiele (insbesondere bei der Interaktion von Spielobjekten)
        - Workflow-Management-Systeme (Mediator verwaltet die Abfolge der Aufgaben und stellt sicher, dass die richtigen
          Aktionen zur richtigen Zeit ausgeführt werden, ohne dass die einzelnen Aufgaben direkt miteinander
          kommunizieren müssen)
        - Verkehrs- oder Fahrplanmanagement
        - E-Commerce-Systeme (z. B. Bestell- und Zahlungsabwicklung)
        - Automatisierte Fertigungssteuerung
        - Verteilte Systeme und Microservices durch Nachrichtenbroker oder Event-Bus
        - Benachrichtigungs- und Beobachtungssysteme


6. Memento
    - Ziel:
        - Speichern des Zustands eines Objekts und Wiederherstellung des Zustands des Objekts/Ermöglichung von "Undo"-
          und "Redo"-Funktionen
        - Verbergen der internen Struktur des Objekts
        - Zustandsverwaltung für komplexe Objekte
        - Verhindern von direkter Manipulation des Zustands
    - Beispiele:
        - Texteditoren (Undo/Redo-Funktionalität)
        - Grafische Design-Tools (Zustandsverlauf)
        - Spielzustände (Speichern und Laden von Spielständen)
        - Formulare und Benutzerinteraktionen (Formulardaten speichern)
        - Workflow-Management-Systeme (Verlauf von Aufgaben oder Prozessen)
        - Datenbankmigrationen (Rollback-Mechanismen)
        - E-Commerce-Systeme (Bestell- und Checkout-Prozess)
        - Simulationen (Speichern von Simulationsergebnissen)
        - Finanz- und Budgetverwaltung (Speichern von Finanzberichten)
        - Versionskontrolle in Softwareprojekten
        - Wartung von Maschinen und Geräten (Zustand von Geräten speichern)
        - Mehrstufige Berechnungen oder Datenverarbeitung (Zwischenstände speichern)


7. Null Object
    - Ziel:
        - Reduzierung von expliziten null-Prüfungen im Code
        - Vereinfachung der Logik
        - Erhöhung der Konsistenz und Stabilität des Systems
        - Förderung von Polymorphismus und Vermeidung von bedingtem Code
        - Entkopplung von Komponenten
        - Vermeidung von Fehlern durch null-Verweise
        - Reduzierung von Ausnahmen
    - Beispiele:
        - Logging-Systeme, das nicht in allen Fällen genutzt werden muss (z.B. in einer Produktionsumgebung oder in
          bestimmten Situationen)
        - optionaler externer Service oder Datenbankverbindung
        - Benutzerauthentifizierung und -autorisierung
        - Verarbeitung von optionalen Daten
        - Automatische Standardwerte für Formulare und Benutzereingaben
        - Zustandsmuster und Finite State Machines (FSMs)
        - Verwalten von nicht vorhandenen Ressourcen
        - Dynamische Anpassung von Schnittstellen
        - Fehlerbehandlung ohne Ausnahmen


8. Observer
    - Ziel:
        - Entkopplung von Subjekt und Beobachtern (lose Kopplung)
        - Benachrichtigung bei Zustandsänderung
        - Vermeidung redundanter Code-Duplikationen
        - Erweiterbarkeit
        - Asynchrone Benachrichtigungen
        - Mehrere Abonnenten auf dasselbe Ereignis
    - Beispiele:
        - Benachrichtigungs- und Event-Handling-Systeme (UI-Elemente ändern Darstellung oder Logik, wenn ein
          Ereignis eintritt)
        - Model-View-Controller (MVC) Architektur
        - Benachrichtigungssysteme (Notification Systems)
        - Logging und Auditing
        - Echtzeit-Datenstreams und Dashboard-Anwendungen
        - E-Commerce- und Bestellsysteme
        - Spielentwicklung (Erreichen eines neuen Levels oder das Sammeln eines Items)
        - Distributed Systems und Microservices
        - Automatisierung und Workflows
        - Reaktive Programmierung (Reactive Programming) (wie React oder Vue.js)
        - Zeitgesteuerte Benachrichtigungen (Countdown-Timer)


9. Specification
    - Ziel:
        - Trennung von Geschäftslogik und Geschäftsregeln
        - Wiederverwendbarkeit von Spezifikationen
        - Kombinierbarkeit von Spezifikationen durch logische Operatoren wie "AND", "OR" und "NOT"
        - Erhöhte Lesbarkeit und Klarheit
        - Erweiterbarkeit und Flexibilität
        - Testbarkeit von Geschäftsregeln
        - Vereinfachung von komplexen Bedingungen
        - Vermeidung von Code-Duplikation
        - Trennung von Anfrage und Implementierung
        - Anpassung der Geschäftslogik zur Laufzeit
    - Beispiele:
        - Filtern von Daten bei z.B. Datenbankabfragen
        - Validierung von Objekten (z. B. Passwortlänge, Passwortkomplexität, E-Mail-Format)
        - Kombinieren von Geschäftsregeln
        - Such- und Filterlogik für Benutzeroberflächen
        - Regelbasierte Entscheidungssysteme
        - Dynamisches Generieren von Suchabfragen
        - Verwalten von Regeln in einem komplexen System
        - Berechnung von Berechtigungen und Zugriffskontrolle
        - Produkt- oder Serviceangebote


10. State
    - Ziel:
        - Kapselung der Zustandslogik in separate State-Klassen
        - Vermeidung von Zustandsbedingungen (Häufige if- oder switch-Abfragen im Code)
        - Erweiterbarkeit
        - Zustandsübergänge vereinfachen
    - Beispiele:
        - Workflow- oder Prozessmanagement
        - Finite State Machines (FSM/Steuerung von Maschinen oder Geräten)
        - Benutzeroberflächen (UI)
        - Zahlungssysteme
        - Datenbanktransaktionen
        - Sprachverarbeitung und Textanalyse
        - Zustandsbasierte Steuerung von Geräten (Smart-Home-System)
        - Spiele und interaktive Anwendungen
        - Benutzersitzungen und Authentifizierung
        - Simulationen


11. Strategy
      - Ziel:
        - Trennung von Algorithmen
        - Ermöglicht die dynamische Auswahl von Algorithmen zur Laufzeit
        - Vermeidung von großen if-else-Ketten oder Switch-Statements
        - Erhöht die Flexibilität und Erweiterbarkeit
        - Förderung des offenen/geschlossenen Prinzips (Open/Closed Principle)
        - Erleichtert das Testen von Algorithmen
        - Reduziert die Kopplung zwischen der Verwendung des Algorithmus und der Implementierung
      - Beispiele:
        - Zahlungsabwicklung (E-Commerce)
        - Sortieralgorithmen (Datenverarbeitung)
        - Kompression von Dateien (Dateiverwaltung)
        - Datenbankabfragen (Datenzugriffsschicht)
        - Verkehrssteuerung (Autonomes Fahren)
        - Navigationssysteme (Routing-Algorithmen)
        - Zinsberechnung (Finanzanwendungen)
        - Verhalten von Tieren in einem Spiel (KI in Spielen)
        - Optimierung von Lieferketten (Logistik)
        - Benutzerauthentifizierung (Sicherheitsanwendungen)


- todo
12. Template method
    - Ziel:
    - Beispiele:

13. Visitor
    - Ziel:
    - Beispiele:

? Asynchronous Method Invocation
? Event Sourcing
? Resilience

---

**Other**

- todo

1. Service Locator
2. Repository
3. Entitäts-Attribut-Wert (EAV)
   ? CQRS (Command Query Responsibility Segregation)
   ? Lazy Initialization