<!-- footer-area -->
<footer>
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-5">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="{{ route('welcome') }}"><img src="\Images\logo imani web.png" width="200"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-7">
                        <div class="footer-widget">
                            <h2 class="fw-title">Contact</h2>
                            <div class="footer-contact">
                                <p>Westlands , Lower kabete,<br> Nairobi, Kenya</p>
                                <ul class="list-wrap">
                                    <li><a href="mailto:nyamatufaith@gmail.com">nyamatufaith@gmail.com</a></li>
                                    <li><a href="tel:254 717 646244">+254 717 646244</a></li>
                                    <li><a href="tel:254 736 848244">+254 736 848244</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-5">
                        <div class="footer-widget">
                            <h2 class="fw-title">Useful links</h2>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li><a href="{{ route('faqs') }}">Terms & Conditions</a></li>
                                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                                    <li><a href="{{ route('our-services') }}">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-5 col-sm-7">
                        <div class="footer-widget">
                            <h2 class="fw-title">Newsletter</h2>
                            <div class="footer-newsletter">
                                <form id="newsletterForm" method="POST" action="">
                                    @csrf
                                    <input type="email" placeholder="Email address..." name="email" required
                                        id="email">
                                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                                </form>
                                <div id="loading" style="display: none;">
                                    <span class="spinner-grow spinner-grow-sm me-2" role="status"
                                        aria-hidden="true"></span>
                                </div>
                            </div>

                            <!-- Success/Error Message -->
                            <div id="responseMessage" style="display: none;"></div>

                            <!-- Loading Spinner and Background Blur -->
                            <div id="overlay" style="display: none;">
                                <div class="spinner"></div>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

                            <script>
                                document.getElementById('newsletterForm').addEventListener('submit', function(e) {
                                    e.preventDefault();

                                    const email = document.getElementById('email').value;

                                    // Disable the submit button
                                    document.querySelector('button').disabled = true;
                                    document.getElementById('loading').style.display = 'inline-block';
                                    document.getElementById('overlay').style.display = 'block';

                                    // Prepare form data
                                    const formData = new FormData();
                                    formData.append('email', email);

                                    // Send AJAX request
                                    axios.post("{{ route('newsletter.subscribe') }}", formData)
                                        .then(response => {
                                            // Show success message
                                            showResponseMessage('Thank you for subscribing!', 'success');
                                        })
                                        .catch(error => {
                                            // Show error message
                                            showResponseMessage('There was an error with the subscription. Please try again later.',
                                                'error');
                                        })
                                        .finally(() => {
                                            // Re-enable the submit button and hide the spinner/overlay
                                            document.querySelector('button').disabled = false;
                                            document.getElementById('loading').style.display = 'none';
                                            document.getElementById('overlay').style.display = 'none';
                                        });
                                });

                                function showResponseMessage(message, type) {
                                    let responseMessage = document.getElementById('responseMessage');
                                    responseMessage.style.display = 'block';
                                    responseMessage.innerText = message;

                                    if (type === 'success') {
                                        responseMessage.style.color = 'green';
                                    } else {
                                        responseMessage.style.color = 'red';
                                    }

                                    setTimeout(() => {
                                        responseMessage.style.display = 'none';
                                    }, 5000); // Hide message after 5 seconds
                                }
                            </script>

                            <style>
                                /* Spinner */
                                .spinner {
                                    position: fixed;
                                    top: 50%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);
                                    border: 5px solid rgba(255, 255, 255, 0.3);
                                    border-top: 5px solid #3498db;
                                    border-radius: 50%;
                                    width: 50px;
                                    height: 50px;
                                    animation: spin 1s linear infinite;
                                }

                                @keyframes spin {
                                    0% {
                                        transform: rotate(0deg);
                                    }

                                    100% {
                                        transform: rotate(360deg);
                                    }
                                }

                                /* Background Blur */
                                #overlay {
                                    position: fixed;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    background-color: rgba(0, 0, 0, 0.5);
                                    backdrop-filter: blur(5px);
                                    z-index: 999;
                                    display: none;
                                }

                                #responseMessage {
                                    position: fixed;
                                    bottom: 20px;
                                    left: 50%;
                                    transform: translateX(-50%);
                                    padding: 10px 20px;
                                    background-color: rgba(0, 0, 0, 0.7);
                                    color: white;
                                    border-radius: 5px;
                                    display: none;
                                }
                            </style>


                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center">
                            <p>
                                Copyright © <span>{{ config('app.name', 'Imani Elite Realty') }}</span>
                                <span id="currentYear">{{ date('Y') }}</span>. All Rights Reserved.
                                Designed and Developed by
                                <a href="https://jrmhd.tech/" target="_blank">JRMHD Technologies</a>.
                            </p>
                        </div>

                        <div class="footer-social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
