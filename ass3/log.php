<?php
trait loggable
{
    public function log($message)
    {
        $file = "transactions.txt";

        $handle = fopen($file, 'a+');
        fwrite($handle, $message);
        fclose($handle);
        // file_put_contents($file, $message);
    }
}
/**
 * git remote add origin https://github.com/NuhaSam/StudentManagmentSystem.git
*   git branch -M main
*   git push -u origin main
 */