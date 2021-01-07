<main>
    <?php
        print('<h1>My logs files</h1><form action="logsboard" method="post" id="formlogs"><table>'); 
        print('<input type="hidden" name="file" value="'.$logpath.'"></input>');
        print('<tr><th>log</th><th>action</th></tr>');
        $i= 1;
        foreach ($logs as $log) {
            print('<td class="logline" data-line="'.$i.'">'.$log.'</td>');
            print('<td><a href="http://cours/logsboard?action=deleteLine&line='.$i.'&log='.htmlspecialchars($_GET['log']).'">delete line</a></td>');
            print('</tr>');
            $i++;
        }
        print('</table></form>');
    ?>
</main>