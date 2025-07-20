@include ('frontend.layouts.header')

<div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="{{ asset('frontend/assets/images/breadcrumb-bg.jpg')}}">
<div class="container">
<div class="tm-breadcrumb">
<h2>Contact Us</h2>
<ul>
<li><a href="/">Home</a></li>
<li>Contact Us</li>
</ul>
</div>
</div>
</div>
<main class="page-content">
<div id="google-map" class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.9520630662487!2d80.24407947488045!3d26.48948827815137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c3795db2dbd51%3A0x9187ba02ffb3b850!2sPanchratna%20%26%20Sons%20Jewellers!5e0!3m2!1sen!2sin!4v1721920737752!5m2!1sen!2sin" width="100%" height="450" style="border: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="tm-section tm-contact-area tm-padding-section bg-white">
<div class="container">
<div class="tm-contact-blocks">
<div class="row mt-30-reverse justify-content-center">
<div class="col-lg-4 col-md-6  mt-30">
<div class="tm-contact-block text-center">
<i class="ion-android-call"></i>
<h6>Call Us</h6>
<p>Phone : <a href="tel:+919120305154">+91 9120305154</a></p>
<p>Phone : <a href="tel:+917457995154">+91 7457995154</a></p>
</div>
</div>
<div class="col-lg-4 col-md-6  mt-30">
<div class="tm-contact-block text-center">
<i class="ion-location"></i>
<h6>Our Location</h6>
<p>Plot no. 6 Kalyanpur,Panki Road 208017 Near Yamaha Showroom</p>
</div>
</div>
<div class="col-lg-4 col-md-6  mt-30">
<div class="tm-contact-block text-center">
<i class="ion-email"></i>
<h6>Email</h6>
<p><a href="mailto:Panchratna@gmail.com">Panchratna@gmail.com</a></p>
<p><a href="mailto:info@Panchratna.com">info@Panchratna.com</a></p>
</div>
</div>
</div>
</div>
<div class="tm-contact-forms tm-padding-section-top">
<div class="row justify-content-center">
<div class="col-lg-6 col-12">
<div class="tm-sectiontitle text-center">
<h3>SEND US A MESSAGE</h3>
<p>You can contact us for any of your requirements. We’ll help you meet your needs.
</p>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-8">
<form id="tm-contactform" action="" class="tm-contact-forminner tm-form">
<div class="tm-form-inner">
<div class="tm-form-field tm-form-fieldhalf">
<label for="contact-form-name">Name</label>
<input type="text" id="name" placeholder="Your name here" name="name" required>
</div>
<div class="tm-form-field tm-form-fieldhalf">
<label for="contact-form-email">Email</label>
<input type="email" id="emali" placeholder="surose@example.com" name="email" required>
</div>
<div class="tm-form-field tm-form-fieldhalf">
<label for="contact-form-phone">Phone</label>
<input type="text" id="phone" placeholder="Your phone number here" name="phone" required>
</div>
<div class="tm-form-field tm-form-fieldhalf">
<label for="contact-form-subject">Subject</label>
<input type="text" id="subject" placeholder="Your subjert" name="subject">
</div>
<div class="tm-form-field">
<label for="contact-form-message">Message</label>
<textarea cols="30" rows="5" id="message" placeholder="Write your message" name="message"></textarea>
</div>
<div class="tm-form-field text-center">
<button type="submit" class="tm-button tm-button-block"  >Send Message</button>
</div>
</div>
</form>
<p class="form-messages"></p>
</div>
</div>
</div>
</div>
</div>
</main>



@include ('frontend.layouts.footer')