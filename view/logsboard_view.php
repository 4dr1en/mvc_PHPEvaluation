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
            print('<td><a class="btNeutral" href="logsboard?action=consult&log='.$file.'">consult</a></td>');
            print('<td><a class="btRed" href="logsboard?action=delete&log='.$file.'">Delete file</a></td>');
            print('</tr>');
        }
        print('</table>')
    ?>
</main>
