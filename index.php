<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Image Generator  Create Stunning Visuals with AI</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="nav-logo">
            <span class="logo-icon"><i class="fa-solid fa-fan"></i></span>
            <span class="logo-text">peera ai</span>
        </a>
        <ul class="nav-menu">
            <li class="nav-item"><a href="#home" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#how-it-works" class="nav-link">How It Works</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1 class="hero-title">Create Stunning AI-Generated Images</h1>
        <p class="hero-subtitle">Transform your imagination into breathtaking visuals instantly with our advanced AI technology</p>
        <a href="#generator" class="btn-primary">Start Creating Now</a>
    </div>
    <div class="hero-background"></div>
</section>

<!-- FEATURES SECTION -->
<section class="features" id="features">
    <div class="section-container">
        <h2 class="section-title">Why Choose AI Image Gen?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Lightning Fast</h3>
                <p>Generate high-quality images in seconds, not hours</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Unlimited Creativity</h3>
                <p>Create any image imaginable with detailed descriptions</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Precise Control</h3>
                <p>Fine-tune your prompts to get exactly what you want</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💎</div>
                <h3>Premium Quality</h3>
                <p>High-resolution images perfect for any project</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Secure & Private</h3>
                <p>Your creations are always safe and private</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">✓</div>
                <h3>Completely Free</h3>
                <p>No credit card required, unlimited generations</p>
            </div>
        </div>
    </div>
</section>

<!-- GENERATOR SECTION -->
<section class="generator-section" id="generator">
    <div class="section-container">
        <h2 class="section-title">Create Your Image</h2>
        <div class="generator-container">
            <form action="generate.php" method="POST" class="generator-form">
                <div class="form-group">
                    <label for="prompt">Describe your image:</label>
                    <textarea 
                        id="prompt"
                        name="prompt" 
                        placeholder="Example: A serene landscape with mountains, crystal-clear lake, and sunset sky..."
                        required
                        rows="4"></textarea>
                </div>
                <button type="submit" class="btn-primary btn-large">
                    Generate Image
                </button>
            </form>
            <div class="prompt-tips">
                <h3>💡 Tips for Better Results:</h3>
                <ul>
                    <li>Be specific and detailed in your description</li>
                    <li>Mention art style (realistic, abstract, oil painting, etc.)</li>
                    <li>Include lighting and mood descriptions</li>
                    <li>Specify composition and perspective</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- GALLERY SHOWCASE SECTION -->
<section class="gallery-showcase" id="gallery">
    <div class="section-container">
        <h2 class="section-title">See What You Can Create</h2>
        <p class="gallery-subtitle">Explore stunning examples of AI-generated images created with our platform</p>
        
        <div class="gallery-showcase-grid">
            <div class="showcase-item">
                <div class="showcase-image-wrapper">
                    <img src="img_1778409760.png" alt="AI Generated Art 1" class="showcase-image">
                </div>
                <div class="showcase-content">
                    <h3 class="showcase-title">Creative Vision 1</h3>
                    <p class="showcase-description">A stunning AI-generated masterpiece showcasing advanced visual creativity and artistic excellence</p>
                </div>
            </div>

            <div class="showcase-item">
                <div class="showcase-image-wrapper">
                    <img src="img_1778409901.png" alt="AI Generated Art 2" class="showcase-image">
                </div>
                <div class="showcase-content">
                    <h3 class="showcase-title">Creative Vision 2</h3>
                    <p class="showcase-description">Beautiful artwork created through advanced AI algorithms with intricate details and vibrant composition</p>
                </div>
            </div>

            <div class="showcase-item">
                <div class="showcase-image-wrapper">
                    <img src="img_1778412895.png" alt="AI Generated Art 3" class="showcase-image">
                </div>
                <div class="showcase-content">
                    <h3 class="showcase-title">Creative Vision 3</h3>
                    <p class="showcase-description">Innovative digital artwork demonstrating the power of AI in creating stunning visual content</p>
                </div>
            </div>

            <div class="showcase-item">
                <div class="showcase-image-wrapper">
                    <img src="img_1778416748.png" alt="AI Generated Art 4" class="showcase-image">
                </div>
                <div class="showcase-content">
                    <h3 class="showcase-title">Creative Vision 4</h3>
                    <p class="showcase-description">Remarkable artwork generated by our AI, showing artistic depth and professional quality results</p>
                </div>
            </div>
        </div>

        <div class="gallery-cta-box">
            <h3>Ready to Create Amazing Images?</h3>
            <p>Start generating your own AI images today</p>
            <a href="#generator" class="btn-primary">Generate Your First Image</a>
        </div>
    </div>
</section>

<!-- HOW IT WORKS SECTION -->
<section class="how-it-works" id="how-it-works">
    <div class="section-container">
        <h2 class="section-title">How It Works</h2>
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3>Write Your Description</h3>
                <p>Describe the image you want to create in detail</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h3>AI Processing</h3>
                <p>Our advanced AI interprets and creates your image</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h3>Download & Share</h3>
                <p>Save your image or generate another instantly</p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer" id="contact">
    <div class="section-container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>AI Image Generator</h3>
                <p>Create stunning AI-generated images with advanced prompts and unlimited creativity.</p>
                <div class="social-links">
                    <a href="#" class="social-link">Facebook</a>
                    <a href="#" class="social-link">Twitter</a>
                    <a href="#" class="social-link">Instagram</a>
                </div>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#how-it-works">How It Works</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Resources</h4>
                <ul class="footer-links">
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Newsletter</h4>
                <p>Subscribe to get updates and new features</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email" required>
                    <button type="submit" class="btn-small">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 AI Image Generator. All rights reserved. Made with ❤️</p>
        </div>
    </div>
</footer>

</body>
</html>