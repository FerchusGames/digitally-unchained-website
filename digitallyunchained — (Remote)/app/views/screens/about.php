
<section class="container col-xxl-8 px-5 py-2 my-5">
  <div class="row flex-lg-row align-items-center g-5 pt-5">
    <div class="col-12 col-sm-12 col-lg-4">
      <img src="<?=URL?>/images/company/DU_Icon.png" class="d-block mx-lg-auto img-fluid" alt="Free Man">
    </div>
    <div class="col-lg-8">
      <h1 class="display-1 fw-bold lh-1 mb-3">What is Digitally Unchained?</h1>
      <p class="lead">We are a non-profit organization that empowers people to break free from unhealthy media habits with personalized guidance.</p>
      <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-lg px-4 me-md-2">Start the quiz!</button>
      </div> -->
    </div>
  </div>
</section>

<section class="dark">
  <div class="container col-xxl-8 px-5 py-5 my-5">
    <div class="row flex-lg-row-reverse align-items-center g-5">
      <div class="col-12 col-sm-12 col-lg-4">
        <img src="<?=URL?>/images/art/other/description.png" class="d-block mx-lg-auto img-fluid" alt="Free Man">
      </div>
      <div class="col-lg-8">
        <h1 class="display-5 fw-bold lh-1 mb-3">Embracing digital balance</h1>
        <p>Digitally Unchained is committed to addressing the growing concern of unhealthy media consumption. Our mission is to empower individuals to regain control over their digital lives. By offering a tailored approach, we provide a concise, insightful questionnaire designed to understand your specific media habits. Based on your responses, we offer personalized recommendations, helping you create a healthier, more balanced relationship with your devices and media consumption.</p>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="container col-xxl-8 px-5 py-5 mt-2">
    
    <h2 class="display-5 fw-bold lh-1 pb-4">Why we exist</h2>
    
    <div class="reasons">
      <div class="reasons-container">
        <div class="reason-slider row">
          <?php
            foreach ($reasons as $key => $reason) {
              $this->view('components/reason', ["reason" => $reason]);
            }
          ?>
          </div>
        </div>
    </div>      

    </div>
  </div>
</section>
