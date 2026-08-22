    <!-- RESEARCH MODAL POPUP -->
    <div class="modal-backdrop" id="projectModalBackdrop">
        <div class="modal-container glass-card" role="dialog" aria-modal="true">
            <div class="modal-header">
                <div class="modal-title-group">
                    <span class="modal-tag">RESEARCH PAPER ABSTRACT</span>
                    <h3>Corporate Life of Gen Z</h3>
                    <p class="modal-sub">Author: Ashwin Krishna | Bhavan's College of Arts and Commerce, Thammanam</p>
                </div>
                <button class="modal-close-btn" id="modalCloseBtn" aria-label="Close modal"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <h4>Research Abstract & Scope</h4>
                <p>
                    This comprehensive exploratory study examines the integration of Generation Z individuals into contemporary corporate environments. Focused on early-career commerce graduates and corporate trainees, the study investigates the intersection of fiscal motivations, career longevity, digital-first communication, and workplace satisfaction.
                </p>
                
                <h4>Key Methodology Highlights</h4>
                <ul class="modal-list">
                    <li><strong>Primary Sample Size:</strong> 150+ early-career professionals & final-year commerce scholars.</li>
                    <li><strong>Quantitative Metrics:</strong> Investment allocation habits, tax regime preferences, retention probability vs work-life balance scores.</li>
                    <li><strong>Qualitative Field Interviews:</strong> Corporate HR managers and entry-level finance analysts across South India.</li>
                </ul>

                <h4>Core Strategic Takeaway</h4>
                <p>
                    Organizations that combine clear tax-efficient pay structures with outcome-based autonomy experience significantly higher Gen Z engagement and lower 1st-year attrition rates.
                </p>

                <div class="modal-action-row">
                    <button class="btn-secondary-glass" id="modalDismissBtn">Close Abstract</button>
                    <a href="#contact" class="btn-primary-magnetic" id="modalContactTrigger">
                        <span>Inquire with Ashwin</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- SITE FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="#hero" class="brand-logo">
                        <span class="logo-box">AK</span>
                        <span class="logo-text">Ashwin<span>Krishna</span></span>
                    </a>
                    <p class="footer-tagline">
                        B.Com Finance & Taxation &bull; Bhavan's College of Arts and Commerce, Thammanam &bull; Age 21
                    </p>
                </div>

                <div class="footer-nav-groups">
                    <div class="footer-nav-col">
                        <h5>Explore</h5>
                        <ul>
                            <li><a href="#about">About Ashwin</a></li>
                            <li><a href="#research">Gen Z Research</a></li>
                            <li><a href="#academics">Academics & Tax</a></li>
                            <li><a href="#cinema">Cinema Vault</a></li>
                        </ul>
                    </div>

                    <div class="footer-nav-col">
                        <h5>Social & Reach</h5>
                        <ul>
                            <li><a href="https://instagram.com" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i> Instagram (@Ashwin Krishna)</a></li>
                            <li><a href="#contact"><i class="fa-regular fa-envelope"></i> Send Inquiries</a></li>
                            <li><span class="footer-location"><i class="fa-solid fa-location-dot"></i> Thammanam, Kochi</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="copyright">
                    &copy; <?php echo date('Y'); ?> Ashwin Krishna. Handcrafted with bespoke UI/UX architecture.
                </div>
                <div class="footer-time-badge">
                    <span class="time-dot"></span>
                    <span>Local Time (Kochi / IST): </span>
                    <strong id="liveISTClock">--:--:-- IST</strong>
                </div>
                <a href="#hero" class="back-to-top" title="Scroll to Top" aria-label="Back to Top">
                    <i class="fa-solid fa-arrow-up"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div class="toast-notification" id="toastNotification">
        <i class="fa-solid fa-circle-check"></i>
        <span id="toastMsg">Email copied to clipboard!</span>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
