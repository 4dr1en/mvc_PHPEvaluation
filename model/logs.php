<?php

class LogsManager{
    
    private $_currentLogFilePath;

    public function __construct(){
        date_default_timezone_set('Europe/Paris');
        $this->_currentLogFilePath= './logs/'.date('d-m-Y').'.log';
    }

    public function getLogsFilesList(){
        $content= scandir('./logs/');
        $logsFiles= [];
        foreach ( $content as $file) {
            if(!is_dir('./logs/'.$file) && preg_match('/\.log$/', $file)){
                $logsFiles[] = $file;
            }
        }
        return  $logsFiles;
    }

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

    public function getLogsFromFile($path){
        $filelog= fopen($path, 'r');
        $logs= [];
        while($linelog= fgets($filelog)){
            $logs[]= [
                'date'=> substr($linelog, 0, 10),
                'object'=> substr($linelog, 11)
            ];
        }
        return $logs;
    }

    public function deleteFilelog($path){
        return unlink($path);
    }

}
