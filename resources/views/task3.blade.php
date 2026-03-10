<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3 - SmartLMS</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <h1>Task 3: API & Axios Test</h1>
    <p>Go to the browser console to see the output.</p>

    <script>
        let users = [];

        axios.get('/api/users')
            .then(response => {
                users = response.data.data;
                console.log("Status:", response.data.status);
                console.log("Users Array:", users);
            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });
    </script>
</body>
</html>