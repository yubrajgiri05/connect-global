<?php include("includes/header.php"); ?>

<section class="breadcrumb-section">
    <div class="container">
        <div class="page-title"> Contact</div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Contact</li>
            </ol>
        </nav>
    </div>
</section>


<section class="contact-us-page">
    <div class="contact-us-grid">
        <div class="aside-figure">
            <figure>
                <img src="images/contact.jpg" alt="">
            </figure>
        </div>
        <div class="form-section ">
            <div class="contact-us-form">
                <div class="section-heading ">
                    <span>Reach Out To Us</span>
                    <h1 class="main-title">Want To<span> Work Together? </span></h1>
                </div>
                <form action="" class="form-element">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                        <div class="error-message">Name is required.</div>
                    </div>
                    <div class="mb-3">
                        <label for=" Email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="Email" placeholder="Email">
                        <div class="error-message">Email is required.</div>
                    </div>
                    <div class="mb-3">
                        <label for=" number" class="form-label">Phone Number</label>
                        <input type="email" class="form-control" id="Email" placeholder="Your mobile number">
                        <div class="error-message">Mobile Number is required.</div>
                    </div>
                    <div class="mb-3">
                        <label for=" message" class="form-label">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                            placeholder="Describe what you want to discuss...."></textarea>
                        <div class="error-message">Message is required.</div>
                    </div>
                    <div class="button-wrapper">
                        <a  class="locate-us-button"><i class="fa-solid pe-2 fa-arrow-left-long"></i> Locate
                            Us</a>
                        <div class="custom-button">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="contact-information">
            <div class="contact-information-wrapper">
                <div class="section-heading ">
                    <span>Locate us</span>
                    <h2 class="main-title">Know Where To<span> Find Us </span></h2>
                </div>
                <ul>
                    <li><i class="fa-solid fa-phone"></i> <div class="wrapper"><a href="">9745948260</a>,<a href="">9845076883</a></div></li>
                    <li><i class="fa-solid fa-envelope"></i> <div class="wrapper"><a href="">hr@connectglobal.com</a></div></li>
                    <li><i class="fa-solid fa-location-dot"></i> Maitidevi, Setopool, Kathmandu </li>
                    <li><i class="fa-solid fa-clock"></i> 9:30am - 6:30pm</li>
                </ul>
                <a   class="send-message-btn">Send Message <i class="fa-solid ps-2 fa-arrow-right-long"></i></a>
            </div>
        </div>
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4631805446047!2d85.33263137620078!3d27.702981925682515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199f75f08da5%3A0x641a4463533be28c!2sUltrabyte%20International%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1698818174906!5m2!1sen!2snp"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>



<?php include("includes/footer.php"); ?>