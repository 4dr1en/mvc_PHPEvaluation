<main>
    <?php
        print('<h1>My logs files</h1><table>'); 
        
        print('<tr><th>date</th><th>action</th></tr>');
        $files= $logsManager->getLogsFilesList();
        foreach ($logs as $log) {
            print('<tr>');
            print('<td>'.$log['date'].'</td>');
            print('<td>'.$log['object'].'</td>');
            print('</tr>');
        }
        print('</table>');
    ?>
</main>