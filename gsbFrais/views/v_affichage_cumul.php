<h2>Cumul des frais pour le mois : <?php echo($moisAnnee ?? '') ?></h2>

<table border="1">
    <thead>
        <tr>
            <th>Type de frais</th>
            <th>Cumul</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Kilometres</td>
            <td><?php echo($KM ?? '0') ?></td>
        </tr>
        <tr>
            <td>Etape</td>
            <td><?php echo($ETP ?? '0') ?></td>
        </tr>
        <tr>
            <td>Repas midi</td>
            <td><?php echo($REP ?? '0') ?></td>
        </tr>
        <tr>
            <td>Nuitée</td>
            <td><?php echo($NUI ?? '0') ?></td>
        </tr>
    </tbody>
</table>

