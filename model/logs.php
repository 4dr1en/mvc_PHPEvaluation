<?php

/*
*Log files management,
*registration, modification and deletion
*/
class LogsManager{
    
    private $_currentLogFilePath;

    public function __construct(){
        date_default_timezone_set('Europe/Paris');
        $this->_currentLogFilePath= './logs/'.date('d-m-Y').'.log';
    }

    public function getLogsFilesList(){
        $content= scandir('./logs/'); //get all the content of a directory
        $logsFiles= [];
        foreach ( $content as $file) { // for all the contents check if it is a file log
            if(!is_dir('./logs/'.$file) && preg_match('/\.log$/', $file)){
                $logsFiles[] = $file;
            }
        }
        return  $logsFiles;
    }

    /* save the log for the loading of a page, the login, logout or the registration*/
    public function pushLog($action, $page, $userId= null){

        $logFile= fopen($this->_currentLogFilePath, 'a+');
        $newLine= $this->getFormatedCurrentTime();
        if($action == 'pageVisited'){
            $newLine.= ' page visited: '. $page;
        }
        elseif($action == 'login'){
            $newLine.= ' connection';
        }
        elseif($action == 'register'){
            $newLine.= ' registration';
        }
        elseif($action == 'disconnection'){
            $newLine.= ' disconnection';
        }
        if($userId){
            $newLine.= ' by user n°'. $userId;
        }
        fwrite($logFile, $newLine . PHP_EOL);
    }

    private function getFormatedCurrentTime(){
        return '['.date("H:i:s").']';
    }

    /*return the logs in a array*/
    public function getLogsFromFile($path){
        $filelog= fopen($path, 'r');
        $logs= [];
        while($linelog= fgets($filelog)){
            $logs[]= $linelog;
        }
        return $logs;
    }

    /*modify or delete a comment if $text is null*/
    public function modifyLog($path, $id, $text= null){
        $filelog= fopen($path, 'r');
        $logs= '';
        $i= 1;
        while($linelog= fgets($filelog)){
            if($id == $i){
                if(!is_null($text)){  //modify the right, if $text = null the log is deleted
                    $logs.= htmlspecialchars($text) . PHP_EOL;
                }
            }else{  //others lines
                $logs.= $linelog;
            }
    
            $i++;
        }
        fclose($filelog);
        $filelog= fopen($path, 'w');
        return fwrite($filelog, $logs); //save the changes
    }

    /*delete a -file- not a line*/
    public function deleteFilelog($path){
        return unlink($path);
    }

}
