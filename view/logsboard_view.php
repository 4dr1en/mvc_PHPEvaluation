<main>
    <?php
        print('<h1>My logs files</h1><table>');
        print('<tr><th>File</th><th>consult the log</th><th>delete the log</th></tr>');
        $files= $logsManager->getLogsFilesList();
        foreach ($files as $file) {
            print('<tr>');
            print('<td>');
            print($file);
            print('</td>');
            print('<td><a href="logsboard?action=consult&log='.$file.'"><div>consult</div></a></td>');
            print('<td><a href="logsboard?action=delete&log='.$file.'"><div>delete</div></a></td>');
            print('</tr>');
        }
        print('</table>')
    ?>
</main>
