<?php
interface Resizable {
    public function resize($percentage);
}

class Rectangle implements Resizable {
    private $width;
    private $length;

    public function __construct($width, $length) {
        $this->width = $width;
        $this->length = $length;
    }

    public function resize($percentage) {
        $this->width *= $percentage / 100;
        $this->length *= $percentage / 100;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getlength() {
        return $this->length;
    }
}

$rectangle = new Rectangle(6,9);
echo "Before resizing - Width: " . $rectangle->getWidth() . ", length: " . $rectangle->getlength() . "\n";

$rectangle->resize(300);
echo "After resizing - Width: " . $rectangle->getWidth() . ", length: " . $rectangle->getlength() . "\n";
?>
 50 changes: 50 additions & 0 deletions50  
interface/Ex2.php
@@ -0,0 +1,50 @@
<?php
interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

class FileLogger implements Logger {
    public function logInfo($message) {
        file_put_contents('logs.txt', "[INFO] " . $message . "\n", FILE_APPEND);
    }

    public function logWarning($message) {
        file_put_contents('logs.txt', "[WARNING] " . $message . "\n", FILE_APPEND);
    }

    public function logError($message) {
        file_put_contents('logs.txt', "[ERROR] " . $message . "\n", FILE_APPEND);
    }
}

class DatabaseLogger implements Logger {
    public function logInfo($message) {
        $this->saveToDatabase('INFO', $message);
    }

    public function logWarning($message) {
        $this->saveToDatabase('WARNING', $message);
    }

    public function logError($message) {
        $this->saveToDatabase('ERROR', $message);
    }

    private function saveToDatabase($level, $message) {
    }
}


$fileLogger = new FileLogger();
$fileLogger->logInfo("This is an information message");
$fileLogger->logWarning("This is a warning message");
$fileLogger->logError("This is an error message");

$databaseLogger = new DatabaseLogger();
$databaseLogger->logInfo("This is an information message");
$databaseLogger->logWarning("This is a warning message");
$databaseLogger->logError("This is an error message");

?>
 25 changes: 25 additions & 0 deletions25  
interface/Ex3.php
@@ -0,0 +1,25 @@
<?php
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    public function draw() {
        echo "Drawing a circle\n";
    }
}

class Square implements Drawable {
    public function draw() {
        echo "Drawing a square\n";
    }
}


$circle = new Circle();
$circle->draw();

$square = new Square();
$square->draw();

?>
 28 changes: 28 additions & 0 deletions28  
interface/Ex4.php
@@ -0,0 +1,28 @@
<?php
interface Sortable {
    public function sort(array $data);
}

class ArraySorter implements Sortable {
    public function sort(array $data) {
        sort($data);
        return $data;
    }
}

class LinkedListSorter implements Sortable {
    public function sort(array $data) {
        return $data;
    }
}

$arraySorter = new ArraySorter();
$data = [4, 2, 8, 1, 5];
$sortedData = $arraySorter->sort($data);
print_r($sortedData);

$linkedListSorter = new LinkedListSorter();
$sortedData = $linkedListSorter->sort($data);
print_r($sortedData);

?>
 39 changes: 39 additions & 0 deletions39  
interface/Ex5.php
@@ -0,0 +1,39 @@
<?php
interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    public function encrypt($data) {
        $encryptedData = "AES: " . $data;
        return $encryptedData;
    }

    public function decrypt($encryptedData) {
        $data = str_replace("AES: ", "", $encryptedData);
        return $data;
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
        $encryptedData = "DES: " . $data;
        return $encryptedData;
    }

    public function decrypt($encryptedData) {
        $data = str_replace("DES: ", "", $encryptedData);
        return $data;
    }
}

$aes = new AES();
$data = "Sensitive data";
$encryptedData = $aes->encrypt($data);
echo "Encrypted data: " . $encryptedData . "\n";

$decryptedData = $aes->decrypt($encryptedData);
echo "Decrypted data: " . $decryptedData . "\n";

?>
 9 changes: 9 additions & 0 deletions9  
interface/logs.txt
@@ -0,0 +1,9 @@
[INFO] This is an information message
[WARNING] This is a warning message
[ERROR] This is an error message
[INFO] This is an information message
[WARNING] This is a warning message
[ERROR] This is an error message
[INFO] This is an information message
[WARNING] This is a warning message
[ERROR] This is an error message
