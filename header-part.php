<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
  </head>
  <body>
  
  <!-- Header section  -->
   <header class="position-fixed w-100 header">
    <div class="container d-flex align-items-start flex-column flex-md-row align-items-md-center">
        <img src="./assets/images/logo.png" width="125" height="50"/>
        <ul class="ms-md-3 ms-0 header-list align-items-center mb-0 flex-column flex-md-row">
            <li class="mx-md-3"><p class="m-0">Our Team</p></li>
            <li class="mx-md-3"><P class="m-0">About Us</P></li>
            <li class="mx-md-3"><P class="m-0">Products</P></li>
            <li class="mx-md-3"><P class="m-0">Contact</P></li>
        </ul>
        <div class="menu-icons">
            <div class="menu-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
            </div>
            <div class="close-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
            </div>
        </div>
    </div>
   </header>

   <!-- Banner Section  -->
    <section class="banner-section">
      <div class="container position-relative p-xl-0">
          <div class="row me-0">
            <div class="col-12 col-lg-6 d-flex align-items-center banner-left-content">
              <h1 class="banner-text">Digital health <br/> tools for smarter <br/> care</h1>
            </div>
            <div class="col-12 col-lg-6 position-relative mt-3 mt-lg-0 p-0">
              <img src="./assets/images/banner-image.png" alt="health-care-image" class="banner-image"/>
            </div>
          </div>
          <div class="vertical-div"></div>
          <div class="row me-0 p-0">
              <div class="col-sm-8 col-9 p-0 banner-description">
                <img src="./assets/images/quotes-image.png" alt="quotes.png" class="quotes-image"/>
                <p class="text-end">Witty Health was founded on the core principle that tech can help bring down cost of healthcare while increasing access. We build digital platforms that create a supportive, specialized community and help bring a wide range of tools right to the pockets of patients and caregivers.</p>
              </div>
          </div>
      </div>
    </section>

    <!-- About witty Health  -->
    <section id="about-us">
      <div class="container-fluid about-section p-0">
          <div class="grid m-0">
              <div class="px-3 px-md-0">
               <span class="position-relative z-1 witty-health-section w-100" >
                  <img src="./assets/images/witty-health.png" alt="witty-health" class="w-100 "/>
                </span>
              </div>
              <div class="about-right-section d-flex align-items-center">
                <div class="about-right-content">
                  <h2>About Witty Health</h2>
                  <p >We focus on specialty care, learn the specific pain points for patients and providers, and then build out an ecosystem of tools that support the end user.</p>
                  <div class="about-inside-empty"></div>
                </div>
              </div>
          </div>
      </div>
    </section>

    <!-- Market Solution -->
    <section>
      <div class="container-fluid p-0 market-solution">
        <div class="grid">
          <div class="market-solution-left-side">
              <div class="market-solution-content">
                <h3>OncoPower is our core <br/> brand and first in <br/> <span class="market-solution-empty-div position-relative">market solution.</span> </h3>
                <p class="fw-normal market-solution-content-description">Witty Health has several products, each focused on a specialty care market. Each product has an ecosystem of resources for the respective discipline that streamline care access and support both the patient and provider. OncoPower focuses on cancer care and is Witty Health's first brand in market and growing rapidly.</p>
                <p class="text-uppercase fw-semibold see-our-team position-relative ms-4">See Our Team</p>
              </div>
          </div>
          <div class="market-solution-right-side">
              <img src="./assets/images/market-solution.png" alt="market-solution" class="w-100 h-100 market-solution-image"/>
          </div>
        </div>
      </div>
      <div class="container d-flex justify-content-end">
          <div class="market-sol-bg-color"></div>
      </div>
    </section>
  </body>
</html>

