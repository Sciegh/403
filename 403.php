<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <style>
        body {
            font-family: "Times New Roman", serif; 
            background-color: #e3dada; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            font-size: 60px; 
            margin-bottom: 20px;
            color: #3d1314;
        }

        p {
            font-size: 36px; 
            margin-bottom: 20px;
            color: #3d1314; 
        }

        a {
            font-size: 36px; 
            color: #640f0f;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        #animation-container {
            width: 300px;
            height: 300px; 
            margin: 20px auto; 
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>
</head>
<body>
    <div class="container">
        <div id="animation-container"></div>
        <h1>403 Forbidden</h1>
        <p>Oops! You don't have permission to access this page.</p>
        <p class="container"><a href="https://iamcarlllemos.github.io/auabc_live/#">Go back to the homepage</a></p> 

    </div>
    <script>
        const animationContainer = document.getElementById("animation-container");

        const animationData = {
            container: animationContainer,
            renderer: "svg",
            loop: true,
            autoplay: true,
            path: "lost.json" // paki palit nlng ng link sa line 55 if may official link na sa website natin hihi //
        };

        const animation = lottie.loadAnimation(animationData);
    </script>
</body>
</html>
