<!DOCTYPE html>
<html>
<head>
    <title>Logging in</title>
</head>
<body>
    <h3>Welcome! Please click the button below to continue.</h3>
    <form id="autoRedirect" method="GET" action="{{ route('dashboard') }}">
        <button type="button" id="triggerBtn" onclick="openTabs()">Continue to Dashboard</button>
    </form>

    <script>
        function openTabs() {
            const foodpandaUrl = "http://127.0.0.1:8000/auto-login?token={{ $token }}";
            window.open(foodpandaUrl, '_blank');
            document.getElementById('autoRedirect').submit();
        }
    </script>
</body>
</html>
