<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ai.com</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <h1 style="font-size: 54px; color: rgb(143, 194, 235);">Ai.com<h1>
            </a>

            <ul class="menu">
                <li><a href="#" >Home</a></li>
                <li><a href="#page2">Courses</a></li>
                <li><a href="#page3">About</a></li>
                <li><a href="#page4">Contact Us</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create prespectives with AI.</h1>
            <p>Explore the vast domains of AI...<br>
                Learn new concepts by contacting us...</p>
            
        </div>
    </header>

    <section class="features" id="page2">
    <h2 style="font-size: 51px; text-shadow:2px 2px 8px lightblue"> Courses</h2>
        <div class="feature-container">
            

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/datascience1.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Data Science</h4>
                    <p>Have fun with data, analyze and derive insights.</p>
                    
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/machinelearning.png"/>
                </div>
                <div class="f-text">
                    <h4>Machine Learning</h4>
                    <p>Learn how a machine learns by itself.</p>
                    
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/deeplearning.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Deep Learning</h4>
                    <p>Explore how the neural networks works.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="page3">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2 style="font-size: 51px; text-shadow:2px 2px 8px lightblue">About Us</h2>
            <p>We are the provider of a variety of AI courses. <br> We help developers who are creative and keen on their innovations.</p>
            
        </div>
    </section>

    <footer class="contact" id="page4">
        <div class="contact-heading">
            <h2 style="font-size: 51px; text-shadow:2px 2px 8px lightblue">Contact Us</h2>
            <p>For required courses Contact Us.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Full Name" required/>
            <input type="email" name="email" placeholder="E-Mail"/>
            <input type="tel"  name="phone" placeholder="Phone no." />
            <input type="text" name="clgname" placeholder="College Name"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit" herf="#">Continue</button>
        </form>
    </footer>
</body>
</html>