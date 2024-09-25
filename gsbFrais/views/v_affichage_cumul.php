<h2>Cumul des frais pour le mois : <?= htmlspecialchars($moisAnnee ?? '') ?></h2>

<table border="1">
    <thead>
        <tr>
            <th>Type de frais</th>
            <th>Cumul</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>KM</td>
            <td><?= htmlspecialchars($KM ?? '0') ?></td>
        </tr>
        <tr>
            <td>ETP</td>
            <td><?= htmlspecialchars($ETP ?? '0') ?></td>
        </tr>
        <tr>
            <td>REP</td>
            <td><?= htmlspecialchars($REP ?? '0') ?></td>
        </tr>
        <tr>
            <td>NUI</td>
            <td><?= htmlspecialchars($NUI ?? '0') ?></td>
        </tr>
    </tbody>
</table>

