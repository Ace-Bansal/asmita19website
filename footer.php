</div>
<footer class="site-footer bg-light" id="contact">
      <div class="container">

        <div class="row">
          <div class="col-12">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4 text-primary" style="text-align: center;"><strong>Contact Info</strong></h3>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top: 2rem;">
            <div class="col-md-6">
                <div id='map' style='width: 100%; height: 550px;'></div>
                <script>
                    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFsY29uaXMiLCJhIjoiY2pwcmJsbGdtMDIwMTQzcW9iem95Y3JwMiJ9.ZMuieD007uiLhCAT-TfeIg';
                    var map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/streets-v9',
                        center: [81.77278,25.42894],
                        zoom: 17,
                        pitch: 40, // pitch in degrees
                    });
                    
                    map.addControl(new MapboxDirections({
                        accessToken: mapboxgl.accessToken
                    }), 'top-left');
                    // Add zoom and rotation controls to the map.
                    map.addControl(new mapboxgl.NavigationControl());
      
                    var geojson = {
                        type: 'Feature',
                        features: [{
                          type: 'Feature',
                          geometry: {
                            type: 'Point',
                            coordinates: [81.77278,25.42896]
                          },
                          properties: {
                            title: 'Mapbox',
                            description: 'Asmita HQ, IIIT-Allahabad, Uttar Pradesh'
                          }
                        }]
                  };
                  // add markers to map
                  geojson.features.forEach(function(marker) {
      
                  // create a HTML element for each feature
                  var el = document.createElement('div');
                  el.className = 'marker';
      
                  // make a marker for each feature and add to the map
                  new mapboxgl.Marker(el)
                  .setLngLat(marker.geometry.coordinates)
                  .addTo(map)
                  .setLngLat(marker.geometry.coordinates)
                  .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                  .setHTML('<h3>' + 'Welcome!' + '</h3><p>' + marker.properties.description + '</p>'))
                  .addTo(map);
                  });
      
              </script>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                      <h3 class="footer-heading mb-4 text-primary" style="text-align: center;">Address</h3>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                        <p style="text-align: center;"><i class="fas fa-map-marked-alt"></i> ASMITA Headquarters
                          <br>
                          IIIT-Allahabad, Jhalwa, Uttar Pradesh - 211015
                        </p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12" style="padding-top: 2rem;">
                        <h3 class="footer-heading mb-4 text-primary" style="text-align: center;">Phone</h3>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                          <p style="text-align: center;"><i class="fas fa-question-circle"></i> Registrations & Enquiry:
                            <br>
                            +91 9205325547 - Divyansh Tripathi
                          </p>
                          <p style="text-align: center;"><i class="fas fa-users"></i> Public Relations:
                            <br>
                            +91 8770347157 - Prasoon Maheshwari
                          </p>
                          <p style="text-align: center;"><i class="fas fa-calendar-check"></i> Events & Management:
                            <br>
                            +91 8586044965 - Arnav Agarwal
                          </p>
                        </div>
                  </div>
                  <div class="row" style="padding-top: 2rem;">
                      <div class="col-12">
                        <h3 class="footer-heading mb-4 text-primary" style="text-align: center;">Email</h3>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                          <p style="text-align: center;"><i class="fas fa-envelope"></i> asmita@iiita.ac.in
                        </div>
                    </div>
        
        
                    <div class="row" style="padding-top: 2rem;">
                        <div class="col-12">
                          <h3 class="footer-heading mb-4 text-primary" style="text-align: center;">Follow Us</h3>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <p style="text-align: center;">
                                  <a href="https://www.facebook.com/asmitaiiita" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                                  <a href="https://www.instagram.com/asmita_iiita/" class="p-2"><span class="icon-instagram"></span></a>
                                </p>
                            </div>
                    </div>
            </div>
        </div>


        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | Made with <i class="icon-heart text-primary" aria-hidden="true"></i> by Team Asmita
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
  </script>
  <script src="main.js"></script>

  </div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/scroller.js"></script>
<script src="js/main.js"></script>

</body>
</html>

