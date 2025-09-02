<?php
// Employee Payroll Calculator

echo "<h2>Employee Payroll Calculator</h2>\n";
echo "<hr>\n";

// ===== EMPLOYEE DATA (Variables) =====
$employeeName = "Sarah Johnson";
$employeeId = "2005";             
$hoursWorked = 47.5;               
$hourlyRate = 18.50;               
$isFullTime = true;                
$yearsOfService = 7;               


// ===== PAYROLL CALCULATIONS =====

// Calculate regular and overtime hours
if ($hoursWorked <= 40){
    $regularHours = $hoursWorked;
}
else{
    $regularHours = 40;
    $overtimeHours = $hoursWorked - 40;
}

// Calculate pay amounts
if($isFullTime){
    $regularPay = $regularHours * $hourlyRate;
    $overtimePay = $overtimeHours * ($hourlyRate + $hourlyRate/2);
    $grossPay = $regularPay + $overtimePay;
}
else{
    $regularPay = $hoursWorked * $hourlyRate;
}

// Calculate tax based on gross pay brackets
if ($grossPay > 800){
    $taxBracket = "25% (High Income)";
    $taxAmount =  $grossPay*.25;
    $netPay = $grossPay - $taxAmount;
}
elseif ($grossPay >= 500) {
    $taxBracket = "20% (Medium Income)";
    $taxAmount =  $grossPay*.20;
    $netPay = $grossPay - $taxAmount;
}
else{
    $taxBracket = "15% (Low Income)";
    $taxAmount =  $grossPay*.15;
    $netPay = $grossPay - $taxAmount;
}
// ===== EMPLOYEE STATUS DETERMINATION =====


// ===== OUTPUT RESULTS =====

echo "<h3>Employee Information</h3>\n";
echo "Name: $employeeName<br>\n";
echo "Employee ID: $employeeId<br>\n";
echo "Status: $employeeStatus<br>\n";
echo "Years of Service: $yearsOfService<br>\n";


echo "<h3>Hours Breakdown</h3>\n";
echo "Total Hours Worked: $hoursWorked<br>\n";
echo "Regular Hours (≤40): $regularHours<br>\n";
echo "Overtime Hours (>40): $overtimeHours<br>\n";
echo "Hourly Rate: $" . number_format($hourlyRate, 2) . "<br>\n";

echo "<h3>Pay Calculation</h3>\n";
echo "Regular Pay: $" . number_format($regularPay, 2) . "<br>\n";
echo "Overtime Pay: $" . number_format($overtimePay, 2) . "<br>\n";

echo "<strong>Gross Pay: $" . number_format($grossPay, 2) . "</strong><br>\n";

echo "<h3>Tax Information</h3>\n";
echo "Tax Bracket: $taxBracket<br>\n";
echo "Tax Amount: $" . number_format($taxAmount, 2) . "<br>\n";
echo "<strong>Net Pay (Take Home): $" . number_format($netPay, 2) . "</strong><br>\n";

