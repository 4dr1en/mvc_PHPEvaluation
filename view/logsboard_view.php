<main>
    <?php
        print('<h1>My logs files</h1><table>');
        print('<tr><th>Fichier</th><th>consulter</th></tr>');
        $files= $logsManager->getLogsFilesList();
        foreach ($files as $file) {
            print('<tr>');
            print('<td>');
            print($file);
            print('</td>');
            print('<td><a href="logsboard?action=consult&log='.$file.'"><div>consult the log</div></a></td>');
            print('</tr>');
        }
        print('</table>')
    ?>
</main>
