<?php
$user_role = "admin"; 
$user_preferences = array("showTable" => true, "itemsPerPage" => 3);

echo "<h2>User Role and Access Level:</h2>";
if ($user_role == "admin") {
    echo "Welcome, Admin! You have full access to all features.<br>";
} elseif ($user_role == "editor") {
    echo "Welcome, Editor! You have access to content editing and publishing.<br>";
} elseif ($user_role == "viewer") {
    echo "Welcome, Viewer! You have read-only access.<br>";
} else {
    echo "Access restricted. Unknown role.<br>";
}

$inputs = array(
    array("id" => 1, "name" => "Fertilizer", "price" => 50),
    array("id" => 2, "name" => "Seeds", "price" => 30),
    array("id" => 3, "name" => "Pesticides", "price" => 80),
    array("id" => 4, "name" => "Herbicides", "price" => 70),
    array("id" => 5, "name" => "Irrigation Pipe", "price" => 100),
    array("id" => 6, "name" => "Compost", "price" => 40)
);

if ($user_preferences["showTable"]) {
    echo "<h2>Farm Inputs List:</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Product</th><th>Price ($)</th></tr>";
    
    for ($i = 0; $i < min($user_preferences["itemsPerPage"], count($inputs)); $i++) {
        echo "<tr>";
        echo "<td>" . $inputs[$i]["id"] . "</td>";
        echo "<td>" . $inputs[$i]["name"] . "</td>";
        echo "<td>" . number_format($inputs[$i]["price"], 2) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Table display is disabled in user preferences.</p>";
}

echo "<h2>Role-based Message:</h2>";
switch ($user_role) {
    case "admin":
        echo "As an Admin, you can manage farm inputs, pricing, and user settings.<br>";
        break;
    case "editor":
        echo "As an Editor, you can manage and edit farm input information.<br>";
        break;
    case "viewer":
        echo "As a Viewer, you have read-only access to farm input details.<br>";
        break;
    default:
        echo "No specific role assigned.<br>";
        break;
}

echo "<h2>Discounted Farm Inputs:</h2>";
foreach ($inputs as $input) {
    $discounted_price = $input["price"] * 0.9; 
    echo "The discounted price of " . $input["name"] . " is $" . number_format($discounted_price, 2) . "<br>";
}
?>
