<!DOCTYPE html>
<html>
<head>
    <title>Logging out...</title>
    <script>
        window.onload = function () {
            const iframe = document.createElement('iframe');
            iframe.style.display = 'none';
            iframe.src = 'https://ecom-app.deshicreative.com/logout-sync';
            document.body.appendChild(iframe);

            setTimeout(() => {
                window.location.href = "{{ route('login') }}";
            }, 1500);
        }
    </script>
</head>
<body>
    <p>Logging out from all systems...</p>
</body>
</html>
