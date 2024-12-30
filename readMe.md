**Examples of design patterns, inspired by:**

- https://designpatternsphp.readthedocs.io/de/latest
- https://github.com/kamranahmedse/design-patterns-for-humans
- https://refactoring.guru/design-patterns

---

**Creational**

1. Factory Method
    - Ziel:
        - Trennung der Objektinstanziierung von der Objektverwendung (Kapselung)
        - Flexibilität bei der Auswahl des zu erstellenden Objekts zur Laufzeit (Dependency Inversion)
        - erleichtert Erweiterbarkeit (hinzufügen neuer Objekttypen)
        - Single Responsibility Principle

2. Abstract Factory:
    - Ziel:
        - Familien von verwandten oder abhängigen Objekten mittels Schnittstelle zu erzeugen
        - Trennung der Objektinstanziierung von der Objektverwendung (Kapselung)
        - Förderung der Flexibilität und Erweiterbarkeit (Open/Closed Principle)
        - Vermeidung von Abhängigkeiten von konkreten Klassen
        - Konsistenz und Integrität der Produktfamilie gewährleisten
        - Single Responsibility Principle

3. Builder:
    - Ziel:
        - Objekt wird mittels Hilfsklasse erstellt, nicht mit den bekannten Konstruktoren (Entkopplung)
        - Erzeugung unterschiedliche Repräsentationen eines komplexen Objekts (viele Parameter)
        - Erzeugung unveränderlicher Objekte
        - Single Responsibility Principle
4. Prototype
    - Ziel:
      - statt Objekte jedes Mal neu zu erzeugen, wird ein vorhandener Master geklont
      - Möglichkeit von vielfältigen Varianten eines Objekts
      - Reduktion von Objektinstanziierungscode
      - Möglichkeit komplexe Objekterstellungslogik von der Client-Seite zu kapseln
      - Shallow vs. Deep Cloning: Das Prototype Pattern ermöglicht es, tiefere oder flachere Kopien von Objekten zu erstellen, je nach Bedarf
5. Singleton
    - todo

**Structural**

- todo

**Behavioral**

- todo