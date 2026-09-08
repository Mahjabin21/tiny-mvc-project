<!DOCTYPE html>
<html>
<head>
    <title>Tiny Expense Tracker</title>
    <link rel="stylesheet" href="views/style.css">
</head>
<body>
    <div class="box">
        <h1>Tiny Expense Tracker</h1>

        <?php foreach ($expenses as $expense): ?>
            <p>
                <?= htmlspecialchars($expense['title']) ?>
                - ৳<?= htmlspecialchars($expense['amount']) ?>
            </p>
        <?php endforeach; ?>
    </div>

    <script src="views/script.js"></script>
</body>
</html>