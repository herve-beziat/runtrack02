-- Ecrivez dans le fichier “job16.sql” une requête permettant de récupérer le nom de
-- l'étage ayant la salle avec la plus grande capacité (et afficher aussi le nom de cette salle
-- ainsi que sa capacité).
-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”

SELECT salles.nom AS BiggestRoom, etages.nom AS etages, MAX(capacite) 
FROM salles 
INNER JOIN etages ON salles.id_etage = etages.id