<!DOCTYPE html>
<html>
<head>
    <title>Phishing Simulation Dashboard</title>
</head>
<body>

<h2>Captured Credentials (Simulation)</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Email</th>
        <th>Password</th>
        <th>IP Address</th>
        <th>User Agent</th>
    </tr>

    <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($log->email); ?></td>
            <td><?php echo e($log->password); ?></td>
            <td><?php echo e($log->ip_address); ?></td>
            <td><?php echo e($log->user_agent); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html><?php /**PATH C:\Users\saksham gupta\myproject\resources\views/dashboard.blade.php ENDPATH**/ ?>