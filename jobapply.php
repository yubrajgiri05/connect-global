<?php include("includes/header.php"); ?>
<section class="breadcrumb-section">
    <div class="container">
        <div class="page-title">Delivery Driver</div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="index.php">Job Listing</a></li>
                <li class="breadcrumb-item active" aria-current="page">Delivery Driver
                </li>
            </ol>
        </nav>
    </div>
</section>

<section class="container jobapply custom-margin section-padding">
    <div class="section-heading center-align">
        <span>Delivery Driver</span>
        <h1 class="main-title">Start Your Job <span>Application Process</span></h1>
    </div>
    <div class="text-document-content">
        <form action="">
            <div class="row dotted">
                <h2>Education Details</h2>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="degree">Highest Degree</label><br>
                    <select id="degree">
                        <option value="volvo">Highest Degree</option>
                        <option value="saab">1 Years</option>
                        <option value="opel">2 Years</option>
                        <option value="audi">3 Years</option>
                    </select><br>
                    <div class="error-message">Degree is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="subject">Major Subject</label><br>
                    <input type="text" id="subject" name="subject" placeholder="Major Subject"><br>
                    <div class="error-message">Subject is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="degree">Result</label><br>
                    <select id="degree">
                        <option value="volvo">Result</option>
                        <option value="saab">1 Years</option>
                        <option value="opel">2 Years</option>
                        <option value="audi">3 Years</option>
                    </select><br>
                    <div class="error-message">Result is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="passedyear">Passed Year</label> <br>
                    <input type="date" id="passedyear" name="passedyear"><br>
                    <div class="error-message">Passed Year is required.</div><br><br>
                </div>
            </div>
            <div class="row dotted">
                <h2>Personal Information</h2>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="fname">Your Name</label> <br>
                    <input type="text" id="fname" name="fname" placeholder="Full Name"><br>
                    <div class="error-message">Name is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="address">Address</label> <br>
                    <input type="text" id="address" name="address" placeholder="Your Address"><br>
                    <div class="error-message"><Address></Address> is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="user_email">Your email</label><br />
                    <input type="email" id="user_email" name="user_email" placeholder="Email">
                    <div class="error-message">Email is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="phone">Phone number</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                        placeholder="Your Phone Number">
                        <div class="error-message">Phone Number is required.</div><br><br>
                </div>
            </div>
            <div class="row dotted">
                <h2>Previous Work Experience</h2>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="country">Country</label><br>
                    <select id="country">
                        <option value="volvo">Country</option>
                        <option value="saab">USA</option>
                        <option value="audi">Saudi</option>
                    </select><br>
                    <div class="error-message">Country is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="company">Company Name</label><br>
                    <input type="text" id="company" name="company" placeholder="Company Name"><br>
                    <div class="error-message">Company Name is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="Designation">Designation</label><br>
                    <input type="text" id="Designation" name="Designation" placeholder="Designation"><br>
                    <div class="error-message">Designation is required.</div><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="Duration">Work Duration</label><br>
                    <select id="Duration">
                        <option value="volvo">Duration </option>
                        <option value="saab">1 Years</option>
                        <option value="opel">2 Years</option>
                        <option value="audi">3 Years</option>
                    </select><br>
                    <div class="error-message">Work Duration is required.</div><br><br>
                </div>
            </div>
            <div class="row dotted">
                <h2>Attachments</h2>

                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="myFile">Attach CV</label><br>
                    <input type="file" id="myFile" name="filename"><br><br>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <label for="myFile">Attach Resume</label><br>
                    <input type="file" id="myFile" name="filename"><br><br>
                </div>


            </div>
            <input type="checkbox" id="accept" name="accept" value="accept">
            <label for="accept" id="accept"> I accept all the <a href="">Terms & Conditions</a></label><br>
            <input type="submit" value="Submit" class="submit">

        </form>
    </div>

</section>

<?php include("includes/footer.php"); ?>