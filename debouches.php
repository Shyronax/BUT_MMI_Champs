<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <?php include 'head.php'; ?>
    <title>Débouchés post-MMI</title>
</head>

<body>
    <?php include 'menu.php'; ?>

    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://raw.githubusercontent.com/benfred/venn.js/master/venn.js"></script>

    <!-- Créer un élément svg pour afficher le diagramme -->
    <svg id="venn"></svg>

    <script>
        // Définir les données pour les ensembles
        var sets = [{
                label: "Ensemble A",
                size: 28
            },
            {
                label: "Ensemble B",
                size: 35
            },
            {
                label: "Ensemble C",
                size: 17
            },
            {
                label: "Ensemble A & B",
                size: 8
            },
            {
                label: "Ensemble A & C",
                size: 14
            },
            {
                label: "Ensemble B & C",
                size: 4
            },
            {
                label: "Ensemble A & B & C",
                size: 3
            },
        ];

        // Définir les dimensions du diagramme
        var width = 500,
            height = 500;

        // Créer un objet venn
        var venn = d3.venn()
            .width(width)
            .height(height);

        // Appliquer les données à l'objet venn
        var vennDiagram = d3.select("#venn")
            .datum(sets)
            .call(venn);
    </script>