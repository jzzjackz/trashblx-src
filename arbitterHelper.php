<?php
// this is used to delete dead gameservers.
include_once "./config/config.php";

try {
    $pdo = new PDO(
        "mysql:host=" . config['database']['host'] . ";dbname=" . config['database']['database'],
        config['database']['user'],
        config['database']['password'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException) {
    header('Content-Type: application/json');
    exit(json_encode(['error' => "true", "message" => "Database Error. Please Contact Administrator"])); //$e->getMessage()
}

function isPortInUse(int $Port) : bool
{
    exec('netstat -a -n -o | find "' . $Port . '"', $output);

    if (empty($output))
    {
        return false;
    } else {
        return true;
    }
}
function killRcc(int $port)
{
    exec('wmic process where name=\'RCCService.exe\' get processid, commandline', $output);
    $args = '-console ' . $port;

    foreach ($output as $arrayLn)
    {
        if (preg_match('/(\d+)$/', $arrayLn, $matches)) {
            if (strpos($arrayLn, $args) !== false)
            {
                $pid = $matches[1];
                exec("taskkill /PID $pid /F");
            }
        }
    }
}

while (true)
{
    echo "[Main] Checking For Servers\n";
    $stmt = $pdo->prepare('SELECT * FROM `jobs`');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $rowCount = $stmt->rowCount();

    if ($rowCount > 0)
    {
        echo "[Job Checker] " . $rowCount . " Servers Found\n";
        foreach ($rows as $row)
        {
            if (!isPortInUse($row["port"]))
            {
                Sleep(4);
                $port = $row["port"];
                killRcc($port);
                $stmt = $pdo->prepare('DELETE FROM `jobs` WHERE `port` = :port');
                $stmt->bindParam(":port", $port, PDO::PARAM_INT);
                $stmt->execute();
                echo "[Job Deleter] Deleted 1 Broken Server(s)\n";
            }
        }
    } else {
        echo "[Job Checker] No Running Servers Found\n";
    }
    Sleep(5);
}