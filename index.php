<?php
//определение ассоциативного массива транзакций
$transactions = [
 [
 "transaction_id" => 1, // id
 "transaction_date" => "2019-01-01", // дата
 "transaction_amount" => 100.00, // сумма транзакции
 "transaction_description" => "Payment for groceries", // описание
 "merchant_name" => "SuperMart", // название организации
 ],
 [
 "transaction_id" => 2,
 "transaction_date" => "2020-02-15",
 "transaction_amount" => 75.50,
 "transaction_description" => "Dinner with friends",
 "merchant_name" => "Local Restaurant",
 ],
 [
 "transaction_id" => 3,
 "transaction_date" => "2021-02-15",
 "transaction_amount" => 79.00,
 "transaction_description" => "Date",
 "merchant_name" => "Megapolis Restaurant",
 ],
 [
"transaction_id" => 4,
"transaction_date" => "2021-12-24",
"transaction_amount" => 739.02,
"transaction_description" => "Bom bom",
"merchant_name" => "Bam bam beer",
 ],
];
?>
<table border="1">
 <tr style="background-color: #a6a6a6; color: #252525">
 <th colspan="4">Оценки студентов</th>
 </tr>
 <tr style="background-color: #a6a6a6; color: #252525">
 <th>ID</th>
 <th>Дата</th>
 <th>Сумма транзакции</th>
 <th>Описание транзакции</th>
 <th>Название организации</th>
 </tr>
 <?php
 foreach ($transactions as $transaction) { ?>
 <tr>
        <td><?php echo $transaction["transaction_id"]; ?></td>
        <td><?php echo $transaction["transaction_date"]; ?></td>
        <td><?php echo $transaction["transaction_amount"]; ?></td>
        <td><?php echo $transaction["transaction_description"]; ?></td>
        <td><?php echo $transaction["merchant_name"]; ?></td>
 </tr>
<?php }

function calculateTotalAmount($transactions) {
    $sum = 0;
    foreach ($transactions as $transaction) {
        $sum += $transaction["transaction_amount"];
    }
    echo "Сумма всех транзакций: " . $sum;
}

calculateTotalAmount($transactions);

echo "<br/>";
function calculateAverage($transactions) {
    $sum = 0;
    foreach ($transactions as $transaction) {
        $sum += $transaction["transaction_amount"];
    }
    echo "Среднее арифметическое всех транзакций: " . $sum / count($transactions);
}

calculateAverage($transactions);

echo "<br/>";
function mapTransactionDescriptions($transactions) {
    $transaction_description_arr = [];
    $i = 1;
    foreach ($transactions as $transaction) {
        $transaction_description_arr[$i] = $transaction["transaction_description"];
        $i++;
    }
    return print_r($transaction_description_arr);
}

mapTransactionDescriptions($transactions);
?>