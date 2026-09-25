<?php
include_once "includes/base.php"; 
?>
<?php include_once "includes/header.php"; ?>


<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Page Wrapper -->
        <div class="contentWrapper contact">
            <section class="inner-banner">
                 <div class="container position-relative">
                    <div class="inner-banner__logo">
                        <svg width="697" height="579" viewBox="0 0 697 579">
                            <use xlink:href="#logo"></use>
                        </svg>
                    </div>
                   <div class="inner-banner__caption">
                        <h1>Contact <span>us</span>.</h1>
                        <p>
                            For entrepreneurs, corporates and institutions seeking discreet, senior-led counsel — our principals welcome a confidential, no-obligation introduction.
                        </p>
                   </div>
                 </div>
            </section>
             <section class="contact__detail graphic-top">
                    <div class="container">
                        <div class="contact__detail--wrapper">
                            <div class="contact__detail--left" data-animate="fade-right">
                                <div class="sectionHead">
                                     <div class="sectionHead__sub-title">GET IN TOUCH</div>
                                    <h2 class="sectionHead__title">
                                        Speak with  <span>ORO Holdings.</span>
                                    </h2>
                                    <p>
                                        Every enquiry is received in strict confidence and
                                        directed to a principal. We respond personally, and
                                        without obligation.
                                    </p>
                                </div>
                                <div class="contact__detail--adress">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                 <svg width="23" height="30" viewBox="0 0 23 30">
                                                    <use xlink:href="#location"></use>
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <span>ADDRESS</span>
                                            <p>Meydan Grandstand, 6th floor, Meydan Road, Nad Al Sheba, Dubai, U.A.E</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <svg width="20" height="21" viewBox="0 0 20 21" >
                                                    <use xlink:href="#mail"></use>
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <span>EMAIL</span>
                                            <p><a href="mailto:enquiries@oroholdings.com">enquiries@oroholdings.com</a></p>
                                        </li>
                                    </ul>
                                     <ul>
                                        <li>
                                            <div class="icon">
                                                <svg  width="20" height="20" viewBox="0 0 20 20">
                                                    <use xlink:href="#phone"></use>
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <span>TELEPHONE</span>
                                            <p><a href="tel:+97140000000">+971 4 000 0000</a></p>
                                        </li>
                                    </ul>
                                     <ul>
                                        <li>
                                            <div class="icon">
                                                <svg width="10" height="21" viewBox="0 0 10 21">
                                                    <use xlink:href="#regulator"></use>
                                                </svg>
                                            </div>
                                        </li>
                                        <li>
                                            <span>REGULATOR</span>
                                            <p>Dubai Financial Services Authority (DFSA)</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact__detail--right" data-animate="fade-left">
                                <div class="contact__form">
                                     <div class="logo-bg">
                                        <svg width="697" height="579" viewBox="0 0 697 579">
                                            <use xlink:href="#logo"></use>
                                        </svg>
                                    </div>
                                    <h3>Make an Enquiry</h3>
                                    <p>Tell us a little about how we can help. Fields marked * are required.</p>
                                    <form>
                                        <div class="d-flex">
                                            <div class="form-group">
                                                <label>FIRST NAME *</label>
                                                <input type="text" placeholder="First name" name="first name">
                                            </div>
                                            <div class="form-group">
                                                <label>Last NAME *</label>
                                                <input type="text" placeholder="Last name" name="last name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input type="mail" placeholder="you@company.com" name="Email">
                                            </div>
                                            <div class="form-group">
                                                <label>TELEPHONE</label>
                                                <input type="tel" placeholder="Optional" name="telephone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>COMPANY / ORGANISATION</label>
                                            <input type="text" placeholder="Company name" name="Company name">
                                        </div>
                                        <div class="form-group">
                                            <label>NATURE OF ENQUIRY</label>
                                            <select class="nice-select">
                                                <option value="1" selected disabled>Please select...</option>
                                                <option value="2">Another option</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>HOW CAN WE HELP? *</label>
                                            <textarea name="message" placeholder="Briefly describe your enquiry"></textarea>
                                        </div>
                                        <div class="button-row">
                                            <button class="btn btn-primary w-100 dark">
                                                SUBMIT ENQUIRY 
                                                <span></span>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="contact__form--text">
                                        By submitting this form you agree to be contacted regarding your enquiry. Please see
                                        our <a href="#">Privacy & Cookies</a> policy. All communications are treated in strict confidence.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
         <?php include_once "includes/footer.php"; ?>
    </div>
</div>
<?php include_once "includes/scripts.php"; ?>
</body>

</html>