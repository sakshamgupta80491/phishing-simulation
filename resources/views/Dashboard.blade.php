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

    @foreach ($logs as $log)
        <tr>
            <td>{{ $log->email }}</td>
            <td>{{ $log->password }}</td>
            <td>{{ $log->ip_address }}</td>
            <td>{{ $log->user_agent }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>