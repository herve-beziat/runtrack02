-- Ecrivez dans le fichier “job15.sql” une requête permettant de récupérer le nom des
-- salles et le nom de leur étage.

SELECT
    etages.nom AS etages_nom,
    salles.nom AS salles_nom,
    etages.id
FROM
    salles
INNER JOIN etages ON salles.id_etage = etages.id;