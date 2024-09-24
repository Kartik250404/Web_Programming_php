<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: blanchedalmond;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 12px;
        }
        .form-container input[type="radio"],
        .form-container input[type="checkbox"] {
            margin-right: 8px;
        }
        .form-container button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Contact Us</h1>
        <form action="HOMEPAGE.PHP" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
            <input type="name" name="nm" >
            <label for="file">header:</label>
            <input type="file"  name="img1" >
            <label for="myskil">myskil:</label>
            <input type="myskil" name="myskil" >
            <label for="task1">task1:</label>
            <input type="task1" name="task1" >
            <label for="task2">task2:</label>
            <input type="task2"  name="task2" >
            <label for="task3">task3:</label>
            <input type="task3"  name="task3" >
            <label for="task4">task4:</label>
            <input type="task4"  name="task4" >
            <label for="task5">task5:</label>
            <input type="task5" name="task5" >
            <label for="task6">task6:</label>
            <input type="task6" name="task6" >
            <label for="task7">task7:</label>
            <input type="task7" name="task7" >
            <label for="myproject">myproject:</label>
            <input type="myproject" name="myproject" >
            <label for="google">Google:</label>
            <input type="google"  name="google" >
            <label for="link">Link:</label>
            <input type="link"  name="link" >
            <label for="blog">Blog:</label>
            <input type="blog"  name="blog" >
            <label for="git">Git:</label>
            <input type="Git"  name="git" >
            <label for="file">Footer:</label>
            <input type="file"  name="img2" >
            <input type="submit" name="nm12"  >
    </div>
    </form>
</body>
</html>
