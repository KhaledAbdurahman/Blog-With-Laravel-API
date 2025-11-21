<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API - Simplify Your Development</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 2rem 0;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 0 2rem;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 2rem;
        }

        .feature {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 2rem;
            width: calc(33.333% - 1rem);
            transition: transform 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .cta {
            text-align: center;
            margin-top: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .code-sample {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 1.5rem;
            border-radius: 5px;
            overflow-x: auto;
            margin-top: 2rem;
        }

        .developers {
            display: flex;
            justify-content: space-around;
            margin-top: 3rem;
            flex-wrap: wrap;
        }

        .developer {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 2rem;
            width: calc(50% - 1rem);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .developer:hover {
            transform: translateY(-5px);
        }

        .developer img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 1rem;
            object-fit: cover;
        }

        .developer h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .developer p {
            color: #7f8c8d;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {

            .feature,
            .developer {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>API Project For Advanced Programming</h1>
        <p>Simplify Your Development Process</p>
    </header>
    <div class="container">
        <section class="features">
            <div class="feature">
                <h3>Easy Integration</h3>
                <p>Seamlessly integrate CoolAPI into your projects with just a few lines of code.</p>
            </div>
            <div class="feature">
                <h3>Powerful Features</h3>
                <p>Access a wide range of powerful features to enhance your application's functionality.</p>
            </div>
            <div class="feature">
                <h3>Scalable Solution</h3>
                <p>Built to handle millions of requests, CoolAPI grows with your business needs.</p>
            </div>
        </section>
        <div class="cta">
            <a href="#" class="btn">Get Started</a>
        </div>
        <div class="code-sample">
            <pre><code>
// Example usage of CoolAPI
const coolAPI = require('cool-api');

coolAPI.initialize('YOUR_API_KEY');

coolAPI.doSomethingAwesome()
    .then(result => console.log(result))
    .catch(error => console.error(error));
            </code></pre>
        </div>
        <section class="developers">
            <div class="developer">
                <img src="https://i.pinimg.com/236x/fa/d5/e7/fad5e79954583ad50ccb3f16ee64f66d.jpg"
                    alt="Khaled Abdurahman">
                <h3>Khaled Abdurahman</h3>
                <p>Lead Developer</p>
                <p>Khaled is the mastermind behind CoolAPI's core functionality. With over 10 years of experience in API
                    development, he ensures that CoolAPI stays at the cutting edge of technology.</p>
            </div>
            <div class="developer">
                <img src="https://cdn.talkie-ai.com/talkie-user-img/105862529118597/113887861502523-2-2-2-2-2-2-2-2.jpeg"
                    alt="Nabeel Noman">
                <h3>Nabeel Noman</h3>
                <p>Security Specialist</p>
                <p>Nabeel is our security guru, ensuring that CoolAPI is not only powerful but also secure. Her
                    expertise
                    in cryptography and secure coding practices keeps our users' data safe and sound.</p>
            </div>
        </section>
    </div>
    <script>
        document.querySelectorAll('.feature, .developer').forEach(element => {
            element.addEventListener('mouseover', () => {
                element.style.backgroundColor = '#f0f0f0';
            });
            element.addEventListener('mouseout', () => {
                element.style.backgroundColor = '#fff';
            });
        });
    </script>
</body>

</html>
