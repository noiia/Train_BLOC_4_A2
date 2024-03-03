USE `projet_poubelle`;

INSERT INTO Voitures (Nom, CarType, TrainRoulant, NbrPlaces, decapotable, descriptions, Supp)
VALUES ('NomVoiture1', 'Type1', 'Train1', 4, 1, 'Description de la voiture 1', 0),
       ('NomVoiture2', 'Type2', 'Train2', 2, 0, 'Description de la voiture 2', 0);
INSERT INTO Utilisateur (Nom, Prenom, AdresseMail, Entity, Supp)
VALUES ('NomUtilisateur1', 'Prenom1', 'email1@example.com', 1, 0),
       ('NomUtilisateur2', 'Prenom2', 'email2@example.com', 2, 0);
INSERT INTO Adresses (NoRue, Extension, NomDeRue, CodePostal, Ville, Supp, ID_Utilisateur)
VALUES (123, 'B', 'Rue de Test', '12345', 'VilleTest', 0, 1),
       (456, 'C', 'Autre Rue', '67890', 'AutreVille', 0, 2);
INSERT INTO Asso_4 (ID_Voitures, ID_Utilisateur)
VALUES (1, 1),
       (2, 2);