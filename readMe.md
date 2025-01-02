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


- todo
4. Data Mapper
5. Decorator
6. Dependency Injection
7. Fluent Interface
8. Facade
9. Flyweight
10. Private Class Data
11. Proxy


---

**Behavioral**

- todo
1. Chain of responsibility
2. Command
3. Interpreter
4. Iterator
5. Mediator
6. Memento
7. Null Object
8. Observer
9. Specification
10. State
11. Strategy
12. Template method
13. Visitor

---

**Other**

- todo
1. Service Locator
2. Repository
3. Entitäts-Attribut-Wert (EAV)