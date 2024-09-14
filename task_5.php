
<?php
class Student {
    private $name;
    private $age;
    private $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function displayInfo() {
        return "Name: $this->name ,<br> Age: $this->age, <br> Grade: $this->grade";
    }
}

$student_esraa = new Student('Esraa', 20, 'A');

echo $student_esraa->displayInfo();
?>



<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    public function withdraw($amount) {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getBalance() {
        return $this->balance;
    }
}



$account = new BankAccount('12345678', 1000);


$account->deposit(500);
echo "Balance after depositing 500: " . $account->getBalance() . "<br>"; 

$account->withdraw(300);
echo "Balance after withdrawing 300: " . $account->getBalance() . "<br>";

$withdrawalSuccess = $account->withdraw(2000);
if ($withdrawalSuccess) {
    echo "Withdrawal successful!<br>";
} else {
    echo "Insufficient balance for withdrawal.<br>";


echo "Final balance: " . $account->getBalance(); 
?>



<?php
class Vehicle {
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        return "Brand: $this->brand, Model: $this->model, Year: $this->year";
    }
}


$vehicle1 = new Vehicle('Toyota', 'Corolla', 2020);


echo $vehicle1->displayDetails(); 

echo "<br>";  


$vehicle2 = new Vehicle('Honda', 'Civic', 2021);


echo $vehicle2->displayDetails();  
?>





<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    
    public function area() {
        return pi() * pow($this->radius, 2);
    }

    
    public function circumference() {
        return 2 * pi() * $this->radius;
    }
}


$circle = new Circle(5);

echo "Area of the circle: " . $circle->area() . "<br>"; 


echo "Circumference of the circle: " . $circle->circumference() . "<br>";  




<?php
class Logger {
    private static $logCount = 0;

   
    public static function log($message) {
        self::$logCount++;
        echo "[Log " . self::$logCount . "] " . $message . "<br>";  
    }
}


Logger::log("This is the first log message.");  
Logger::log("This is the second log message.");
Logger::log("Something happened in the system.");
?>





<?php
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}


echo "Addition of 5 and 3: " . Math::add(5, 3) . "<br>";           
echo "Subtraction of 5 and 3: " . Math::subtract(5, 3) . "<br>";   
echo "Multiplication of 5 and 3: " . Math::multiply(5, 3) . "<br>";
?>

