DROP DATABASE IF EXISTS quizbezoeker;
CREATE DATABASE quizbezoeker;

USE quizbezoeker; 

CREATE TABLE DATA (
    id INT NOT NULL AUTO_INCREMENT,
    voornaam VARCHAR(100) NOT NULL,
    teamnaam VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE KAMER_EEN (
    id INT NOT NULL AUTO_INCREMENT,
    vraag VARCHAR(255) NOT NULL,
    antwoord_een VARCHAR(255),
    antwoord_twee VARCHAR(255),
    antwoord_drie VARCHAR(255),
    antwoord_vier VARCHAR(255),
    juist VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE KAMER_TWEE (
    id INT NOT NULL AUTO_INCREMENT,
    vraag VARCHAR(255) NOT NULL,
    antwoord_een VARCHAR(255),
    antwoord_twee VARCHAR(255),
    antwoord_drie VARCHAR(255),
    antwoord_vier VARCHAR(255),
    juist VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE KAMER_DRIE (
    id INT NOT NULL AUTO_INCREMENT,
    vraag VARCHAR(255) NOT NULL,
    antwoord_een VARCHAR(255),
    antwoord_twee VARCHAR(255),
    antwoord_drie VARCHAR(255),
    antwoord_vier VARCHAR(255),
    juist VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE KAMER_VIER (
    id INT NOT NULL AUTO_INCREMENT,
    vraag VARCHAR(255) NOT NULL,
    antwoord_een VARCHAR(255),
    antwoord_twee VARCHAR(255),
    antwoord_drie VARCHAR(255),
    antwoord_vier VARCHAR(255),
    juist VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO `KAMER_EEN` 
(`vraag`, `antwoord_een`, `antwoord_twee`, `antwoord_drie`, `antwoord_vier`, `juist`)
VALUES
('Welke van de volgende dingen kan je verwachten bij de Bit Academy?', 'Een leuke werkervaring opbouwen met klasgenoten', 'Een goede Software Developer worden', 'Expert worden in jouw codetalen naar keuze', 'Alle bovenstaande', 'Alle bovenstaande'),
('Welke van de volgende lesindelingen past het best bij de Bit Academy?', 'De hele dag les krijgen van je docent voor de klas', 'Zelfstandig je rooster inplannen', 'Samen met je docent je eigen koers bepalen en dagelijks je eigen starttijd kiezen', NULL, 'Samen met je docent je eigen koers bepalen en dagelijks je eigen starttijd kiezen'),
('Met welk platform werken we op deze opleiding?', 'Nexed', 'Yahoo', 'Gitlab', 'Notepad', 'Nexed'),
('Wat heb je nodig voor deze opleiding?', 'Een laptop met goede hardware', 'Voorkennis van software', 'Ervaring met coderen', 'Werkervaring', 'Een laptop met goede hardware'),
('Welke van de volgende vaardigheden heb je niet nodig voor de opleiding?', 'Economie', 'Rekenen', 'Omgaan met tijdsdruk', 'Creativiteit', 'Economie');

INSERT INTO `KAMER_TWEE` 
(`vraag`, `antwoord_een`, `antwoord_twee`, `antwoord_drie`, `antwoord_vier`, `juist`)
VALUES
('Welk beroep bouwt de voorkant van een website? (Wat je ziet)', 'Backend Developer', 'Hardware Developer', 'Frontend Developer', 'Game Developer', 'Frontend Developer'),
('Welke codetaal wordt het meest gebruikt onder developers?', 'Java', 'PHP', 'Javascript', 'C++', 'Javascript'),
('Welk beroep bouwt de achterkant van een website? (Wat je niet ziet)', 'Hardware Developer', 'Frontend Developer', 'Game Developer', 'Backend Developer', 'Backend Developer'),
('Wat betekent "P2P" learning?', 'Samenwerken met medestudenten om te leren', 'Vragen stellen aan docenten om problemen op te lossen', 'Zelfstandig leren', 'Naar andere locaties reizen om daar te leren van anderen', 'Samenwerken met medestudenten om te leren'),
('Met welke programmeertaal zie je scherp?', 'HTML', 'PHP', 'CSS', 'cSharp', 'cSharp');

INSERT INTO `KAMER_DRIE` 
(`vraag`, `antwoord_een`, `antwoord_twee`, `antwoord_drie`, `antwoord_vier`, `juist`)
VALUES
('Hoe groot is een megabyte?', '1000 Bytes', '1 Byte', '1.000.000 Bytes', '100.000 Bytes', '1000 Bytes'),
('Wat is een "bug" in software?', 'Een insect in je PC', 'Een fout in de code', 'Een virus', 'Een oude versie software', 'Een fout in de code'),
('Wat is een variable in het progammeren?', 'Een stukje tekst op een website', 'Een wiskundeformule', 'Een plek om een waarde op te slaan', 'Een knop op een pagina', 'Een plek om een waarde op te slaan'),
('Wat is het verschil tussen front-end en back-end?', 'Front-End is voor mobile, backend voor desktop', 'Front-End is het design, en backend is de logica', 'Er is geen verschil', 'Front-End is de database en backend het design', 'Front-End is het design, en backend is de logica'),
('Wat is een app?', 'Een progamma voor enkel je telefoon', 'Een applicatie met een doel voor elk apparaat', 'Een stukje hardware', 'Een bestand op je computer', 'Een applicatie met een doel voor elk apparaat');

INSERT INTO `KAMER_VIER` 
(`vraag`, `antwoord_een`, `antwoord_twee`, `antwoord_drie`, `antwoord_vier`, `juist`)
VALUES
('Waar ligt de focus van de Bit Academy opleiding op?', 'Theorielessen en tentamens', 'Praktijkgericht leren door zelf projecten te bouwen', 'Alleen werken met bestaande software', 'Hardware en netwerken', 'Praktijkgericht leren door zelf projecten te bouwen'),
('Wat kun je na de opleiding worden?', 'Alleen een webdesigner', 'Alleen een game developer', 'Verschillende richtingen zoals frontend, backend of fullstack developer', 'Alleen werken bij grote bedrijven', 'Verschillende richtingen zoals frontend, backend of fullstack developer'),
('Wat is de gemiddelde duur van de opleiding?', '1 jaar', '2 jaar', '3 jaar', '4 jaar', '3 jaar'),
('Op welk niveau is de Software Developer opleiding?', 'MBO niveau 2', 'MBO niveau 3', 'MBO niveau 4', 'HBO', 'MBO niveau 4'),
('Wat is het doel van een "stage" tijdens de opleiding?', 'Gratis werken voor een bedrijf', 'Werkervaring opdoen in de praktijk', 'Een extra vak volgen', 'Je diploma halen', 'Werkervaring opdoen in de praktijk');