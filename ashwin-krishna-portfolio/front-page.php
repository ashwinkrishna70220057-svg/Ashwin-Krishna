<?php
/**
 * The template for displaying the front page
 *
 * @package Ashwin_Krishna_Portfolio
 * @version 1.0.0
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

    <!-- Main Content Container -->
    <main id="main-content">
        
        <!-- HERO SECTION -->
        <section class="hero-section" id="hero">
            <div class="hero-container">
                <div class="hero-grid">
                    <!-- Left: Hero Copy & Value Proposition -->
                    <div class="hero-content">
                        <div class="badge-row">
                            <div class="hero-badge">
                                <i class="fa-solid fa-award"></i>
                                <span>B.Com Finance & Taxation</span>
                            </div>
                            <div class="hero-badge badge-accent">
                                <i class="fa-solid fa-bolt"></i>
                                <span>Hardworking & Analytical</span>
                            </div>
                        </div>

                        <h1 class="hero-headline">
                            Deciphering <span class="text-gradient">Finance</span>,<br>
                            Transforming the <span class="text-serif">Corporate Arena</span>.
                        </h1>

                        <p class="hero-subline">
                            I am <strong>Ashwin Krishna</strong>, a 21-year-old commerce and taxation strategist from <strong>Bhavan's College of Arts & Commerce, Thammanam</strong>. Blending rigorous fiscal analysis with forward-looking research on the <em>Corporate Life of Gen Z</em>.
                        </p>

                        <!-- Key Information Bento Chips -->
                        <div class="hero-chips-grid">
                            <div class="hero-chip">
                                <span class="chip-label">AGE / FOCUS</span>
                                <span class="chip-val">21 Yrs &bull; Finance & Tax</span>
                            </div>
                            <div class="hero-chip">
                                <span class="chip-label">ALMA MATER</span>
                                <span class="chip-val">Bhavan's College, Thammanam</span>
                            </div>
                            <div class="hero-chip">
                                <span class="chip-label">SPECIALIZED PROJECT</span>
                                <span class="chip-val">Corporate Life of Gen Z</span>
                            </div>
                            <div class="hero-chip">
                                <span class="chip-label">CORE DRIVE</span>
                                <span class="chip-val">Relentless Hard Work & Insight</span>
                            </div>
                        </div>

                        <!-- CTA Row -->
                        <div class="hero-cta-group">
                            <a href="#research" class="btn-primary-magnetic magnetic-target">
                                <span>Explore Gen Z Research</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="#academics" class="btn-secondary-glass magnetic-target">
                                <i class="fa-solid fa-file-invoice-dollar"></i>
                                <span>View Financial Competencies</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Hero Visual & Interactive Card -->
                    <div class="hero-visual-col">
                        <div class="hero-card-wrapper" id="heroCardWrapper">
                            <div class="hero-image-card">
                                <div class="image-frame">
                                    <img src="<?php echo esc_url( $theme_uri . '/assets/images/hero_portrait.jpg' ); ?>" alt="Ashwin Krishna - Finance & Taxation Scholar" class="hero-img" loading="eager">
                                    <div class="image-overlay-gradient"></div>
                                </div>

                                <!-- Floating Interactive Badges -->
                                <div class="floating-badge badge-top-left glass-card">
                                    <div class="badge-icon-box">
                                        <i class="fa-solid fa-chart-line"></i>
                                    </div>
                                    <div class="badge-meta">
                                        <span class="meta-title">Taxation & Audit</span>
                                        <span class="meta-sub">Direct & Indirect Tax</span>
                                    </div>
                                </div>

                                <div class="floating-badge badge-bottom-right glass-card">
                                    <div class="badge-icon-box gold-icon">
                                        <i class="fa-solid fa-clapperboard"></i>
                                    </div>
                                    <div class="badge-meta">
                                        <span class="meta-title">Cinephile & Thinker</span>
                                        <span class="meta-sub">Narrative & Structure</span>
                                    </div>
                                </div>

                                <div class="floating-badge badge-bottom-left glass-card">
                                    <span class="online-indicator"></span>
                                    <span class="meta-status">Based in Thammanam, Kochi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live Metrics Strip -->
                <div class="hero-stats-strip glass-card">
                    <div class="stat-item">
                        <span class="stat-number" data-target="21">21</span>
                        <span class="stat-title">Years of Driven Ambition</span>
                        <span class="stat-desc">Young, dynamic & adaptable</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="100" data-suffix="%">100%</span>
                        <span class="stat-title">Commitment to Rigor</span>
                        <span class="stat-desc">Hardworking ethic in every task</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="1" data-prefix="#">#1</span>
                        <span class="stat-title">Flagship Research Focus</span>
                        <span class="stat-desc">Corporate Life of Gen Z</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="360" data-suffix="°">360°</span>
                        <span class="stat-title">Commerce Foundation</span>
                        <span class="stat-desc">Tax, Law, Auditing & Financials</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- INFINITE MARQUEE TICKER -->
        <div class="marquee-wrapper">
            <div class="marquee-track">
                <div class="marquee-item"><i class="fa-solid fa-gem"></i> CORPORATE TAXATION</div>
                <div class="marquee-item"><i class="fa-solid fa-chart-column"></i> FINANCIAL MODELING</div>
                <div class="marquee-item"><i class="fa-solid fa-users-gear"></i> GEN Z WORKPLACE BEHAVIOR</div>
                <div class="marquee-item"><i class="fa-solid fa-calculator"></i> GST COMPLIANCE & AUDIT</div>
                <div class="marquee-item"><i class="fa-solid fa-film"></i> CINEMATIC STORYTELLING</div>
                <div class="marquee-item"><i class="fa-solid fa-landmark"></i> BHAVAN'S COLLEGE THAMMAMAM</div>
                <div class="marquee-item"><i class="fa-solid fa-brain"></i> FISCAL STRATEGY</div>
                <!-- Duplicate for seamless infinite loop -->
                <div class="marquee-item"><i class="fa-solid fa-gem"></i> CORPORATE TAXATION</div>
                <div class="marquee-item"><i class="fa-solid fa-chart-column"></i> FINANCIAL MODELING</div>
                <div class="marquee-item"><i class="fa-solid fa-users-gear"></i> GEN Z WORKPLACE BEHAVIOR</div>
                <div class="marquee-item"><i class="fa-solid fa-calculator"></i> GST COMPLIANCE & AUDIT</div>
                <div class="marquee-item"><i class="fa-solid fa-film"></i> CINEMATIC STORYTELLING</div>
                <div class="marquee-item"><i class="fa-solid fa-landmark"></i> BHAVAN'S COLLEGE THAMMAMAM</div>
                <div class="marquee-item"><i class="fa-solid fa-brain"></i> FISCAL STRATEGY</div>
            </div>
        </div>

        <!-- ABOUT & PHILOSOPHY SECTION -->
        <section class="section about-section" id="about">
            <div class="container">
                <div class="section-header">
                    <div class="section-tag"><i class="fa-regular fa-id-badge"></i> PROFILE DISCOVERY</div>
                    <h2 class="section-title">The Analytical Mind Behind the Numbers</h2>
                    <p class="section-subtitle">Bridging traditional commerce principles with the fast-moving ethos of the modern generation.</p>
                </div>

                <div class="about-bento-grid">
                    <!-- Bento Card 1: Core Story -->
                    <div class="bento-card bento-span-2 glass-card">
                        <div class="card-inner">
                            <div class="card-icon-bubble">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <h3>Relentless Work Ethic & Sharp Analytical Acumen</h3>
                            <p class="bento-text">
                                At 21, my journey in commerce isn't just about balancing ledgers or memorizing taxation tax slabs—it's about understanding how capital, policies, and human talent interact in the real economy. Pursuing <strong>B.Com in Finance & Taxation at Bhavan's College of Arts and Commerce, Thammanam</strong>, I have cultivated a structured approach to solving complex problems.
                            </p>
                            <p class="bento-text">
                                Known among peers and mentors as a deeply <strong>hardworking and self-driven individual</strong>, I approach every project with meticulous attention to detail, whether verifying statutory compliance or synthesizing sociological workplace trends.
                            </p>
                            <div class="bento-tags-row">
                                <span class="tag-pill"><i class="fa-solid fa-check"></i> High Meticulousness</span>
                                <span class="tag-pill"><i class="fa-solid fa-check"></i> Direct & Indirect Tax</span>
                                <span class="tag-pill"><i class="fa-solid fa-check"></i> Deep Research Focus</span>
                                <span class="tag-pill"><i class="fa-solid fa-check"></i> Strategic Problem Solving</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bento Card 2: Identity & Coordinates -->
                    <div class="bento-card glass-card">
                        <div class="card-inner">
                            <div class="card-icon-bubble accent-bubble">
                                <i class="fa-solid fa-compass"></i>
                            </div>
                            <h3>Quick Identity Profile</h3>
                            <ul class="profile-info-list">
                                <li>
                                    <span class="info-key">Full Name</span>
                                    <span class="info-val">Ashwin Krishna</span>
                                </li>
                                <li>
                                    <span class="info-key">Current Age</span>
                                    <span class="info-val">21 Years</span>
                                </li>
                                <li>
                                    <span class="info-key">Degree</span>
                                    <span class="info-val">B.Com (Finance & Tax)</span>
                                </li>
                                <li>
                                    <span class="info-key">Location</span>
                                    <span class="info-val">Thammanam, Kochi, Kerala</span>
                                </li>
                                <li>
                                    <span class="info-key">Key Personality</span>
                                    <span class="info-val highlight-gold">Hardworking & Resilient</span>
                                </li>
                                <li>
                                    <span class="info-key">Primary Passion</span>
                                    <span class="info-val">Finance & Cinema</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Bento Card 3: College Heritage -->
                    <div class="bento-card glass-card">
                        <div class="card-inner">
                            <div class="card-icon-bubble">
                                <i class="fa-solid fa-building-columns"></i>
                            </div>
                            <h3>Bhavan's College of Arts & Commerce</h3>
                            <p class="bento-text">
                                Situated in <strong>Thammanam</strong>, Bhavan's College has been the crucible for honing my financial and taxation intellect, instilling ethical corporate governance, business law comprehension, and rigorous analytical discipline.
                            </p>
                            <div class="college-features">
                                <div class="col-feat-item">
                                    <i class="fa-solid fa-book-open"></i>
                                    <span>Comprehensive Tax Curriculum</span>
                                </div>
                                <div class="col-feat-item">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <span>Ethical Business Standards</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bento Card 4: The Dual Philosophy (Numbers + Cinema) -->
                    <div class="bento-card bento-span-2 glass-card spotlight-card">
                        <div class="card-inner flex-row-responsive">
                            <div class="spotlight-content">
                                <div class="card-icon-bubble gold-bubble">
                                    <i class="fa-solid fa-masks-theater"></i>
                                </div>
                                <h3>Why Cinema Shapes My Analytical Mind</h3>
                                <p class="bento-text">
                                    Outside spreadsheets and fiscal laws, I am a passionate cinephile. Cinema teaches structural pacing, character motivation, and macro-worldbuilding—skills that directly enhance my ability to present business cases, understand organizational behaviors, and tell compelling stories through financial data.
                                </p>
                                <a href="#cinema" class="link-inline">Explore Cinema Vault <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="spotlight-visual">
                                <img src="<?php echo esc_url( $theme_uri . '/assets/images/cinema_reel.jpg' ); ?>" alt="Cinematic Passion" class="spotlight-img" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FLAGSHIP RESEARCH PROJECT: CORPORATE LIFE OF GEN Z -->
        <section class="section project-section" id="research">
            <div class="container">
                <div class="section-header">
                    <div class="section-tag highlight-tag"><i class="fa-solid fa-flask-vial"></i> FLAGSHIP RESEARCH PROJECT</div>
                    <h2 class="section-title">Corporate Life of Gen Z</h2>
                    <p class="section-subtitle">An empirical & qualitative study decoding how the next generation is redefining work, taxation planning, career trajectories, and organizational culture.</p>
                </div>

                <div class="project-showcase-box glass-card">
                    <div class="project-hero-media">
                        <img src="<?php echo esc_url( $theme_uri . '/assets/images/genz_corporate.jpg' ); ?>" alt="Corporate Life of Gen Z Research Case Study" class="project-banner-img" loading="lazy">
                        <div class="media-badge">
                            <i class="fa-solid fa-circle-check"></i> Primary Research Project
                        </div>
                    </div>

                    <div class="project-body-content">
                        <div class="project-meta-bar">
                            <div class="p-meta-item">
                                <span class="p-meta-label">AUTHOR / LEAD</span>
                                <span class="p-meta-val">Ashwin Krishna</span>
                            </div>
                            <div class="p-meta-item">
                                <span class="p-meta-label">INSTITUTION</span>
                                <span class="p-meta-val">Bhavan's College, Thammanam</span>
                            </div>
                            <div class="p-meta-item">
                                <span class="p-meta-label">DOMAIN</span>
                                <span class="p-meta-val">Corporate Finance & Organizational Dynamics</span>
                            </div>
                            <div class="p-meta-item">
                                <span class="p-meta-label">STATUS</span>
                                <span class="p-meta-val highlight-cyan">Completed & Documented</span>
                            </div>
                        </div>

                        <!-- Interactive Research Tabs -->
                        <div class="research-tabs-wrapper">
                            <div class="tab-buttons" role="tablist">
                                <button class="tab-btn active" data-tab="overview" role="tab" aria-selected="true">
                                    <i class="fa-solid fa-lightbulb"></i> Project Executive Summary
                                </button>
                                <button class="tab-btn" data-tab="financial" role="tab" aria-selected="false">
                                    <i class="fa-solid fa-coins"></i> Financial & Tax Savviness
                                </button>
                                <button class="tab-btn" data-tab="workplace" role="tab" aria-selected="false">
                                    <i class="fa-solid fa-laptop-code"></i> Hybrid Work & Autonomy
                                </button>
                                <button class="tab-btn" data-tab="findings" role="tab" aria-selected="false">
                                    <i class="fa-solid fa-square-poll-vertical"></i> Core Findings & Data
                                </button>
                            </div>

                            <!-- Tab 1: Executive Summary -->
                            <div class="tab-pane active" id="tab-overview">
                                <div class="tab-pane-grid">
                                    <div class="tab-text-col">
                                        <h4>The Shifting Paradigm in Modern Workplaces</h4>
                                        <p>
                                            Generation Z (born between late 1990s and early 2010s) represents the most digitally native, financially inquisitive, and culturally vocal demographic to ever enter corporate India. This research investigates how their values clash and integrate with established legacy corporate norms.
                                        </p>
                                        <p>
                                            Through structured observation, student-worker surveys, and corporate case analysis, the project uncovers how traditional retention models must evolve to satisfy an ambition-driven workforce that values autonomy, ethical compliance, and rapid skill acquisition.
                                        </p>
                                        <div class="key-takeaway-box">
                                            <i class="fa-solid fa-quote-left"></i>
                                            <p>"Gen Z doesn't just seek employment; they seek alignment—where fiscal clarity, career acceleration, and workplace humanity converge."</p>
                                        </div>
                                    </div>
                                    <div class="tab-metrics-col">
                                        <div class="insight-metric-card">
                                            <span class="metric-num">78%</span>
                                            <span class="metric-label">Prioritize Hybrid Flexibility</span>
                                            <p class="metric-sub">Over rigid 9-to-5 mandatory office presence without productivity justification.</p>
                                        </div>
                                        <div class="insight-metric-card">
                                            <span class="metric-num">64%</span>
                                            <span class="metric-label">Early Equities & Tax Planning</span>
                                            <p class="metric-sub">Engage in SIPs, mutual funds, and tax deductions from their very first stipend/salary.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 2: Financial & Tax Savviness -->
                            <div class="tab-pane" id="tab-financial">
                                <div class="tab-pane-grid">
                                    <div class="tab-text-col">
                                        <h4>Demystifying Gen Z's Fiscal Philosophy</h4>
                                        <p>
                                            Unlike previous generations that relied predominantly on Fixed Deposits and gold, Gen Z corporate entrants utilize digital fintech tools, stock micro-investing, and actively educate themselves on the new vs old tax regimes (Sections 80C, 80D, NPS, and capital gains structures).
                                        </p>
                                        <ul class="research-point-list">
                                            <li><i class="fa-solid fa-arrow-trend-up"></i> <strong>Proactive Tax Optimization:</strong> High interest in minimizing TDS through structured allowances and diversified investment pools.</li>
                                            <li><i class="fa-solid fa-shield-halved"></i> <strong>Financial Independence Mindset:</strong> Strong orientation towards early wealth creation and multiple income streams.</li>
                                            <li><i class="fa-solid fa-receipt"></i> <strong>Transparency in Compensation:</strong> Demand for clear CTC breakdowns and fair ESOP/bonus distributions.</li>
                                        </ul>
                                    </div>
                                    <div class="tab-metrics-col">
                                        <div class="insight-metric-card">
                                            <span class="metric-num">85%</span>
                                            <span class="metric-label">Demand Tax-Efficient CTC</span>
                                            <p class="metric-sub">Preference for structured reimbursements and clear corporate health benefits.</p>
                                        </div>
                                        <div class="insight-metric-card">
                                            <span class="metric-num">3.2x</span>
                                            <span class="metric-label">Higher FinTech Adoption</span>
                                            <p class="metric-sub">Compared to historical baselines at similar early-career stages.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 3: Hybrid Work & Autonomy -->
                            <div class="tab-pane" id="tab-workplace">
                                <div class="tab-pane-grid">
                                    <div class="tab-text-col">
                                        <h4>Redefining Productivity & Psychological Safety</h4>
                                        <p>
                                            The project analyzed the impact of asynchronous communication, transparent leadership hierarchies, and mental health initiatives on Gen Z employee retention. 
                                        </p>
                                        <div class="bento-mini-grid">
                                            <div class="mini-card">
                                                <h5><i class="fa-solid fa-clock-rotate-left"></i> Outcome Over Hours</h5>
                                                <p>Valuing deliverables and velocity over physical seat time in cubicles.</p>
                                            </div>
                                            <div class="mini-card">
                                                <h5><i class="fa-solid fa-handshake-simple"></i> Feedback Loops</h5>
                                                <p>Regular, constructive 1-on-1s preferred over opaque annual appraisal rituals.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-metrics-col">
                                        <div class="insight-metric-card">
                                            <span class="metric-num">91%</span>
                                            <span class="metric-label">Retention Correlation</span>
                                            <p class="metric-sub">Directly linked to transparent managerial communication and continuous learning opportunities.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab 4: Core Findings & Recommendations -->
                            <div class="tab-pane" id="tab-findings">
                                <div class="findings-grid">
                                    <div class="finding-card">
                                        <div class="finding-badge">Key Insight 01</div>
                                        <h4>Financial Literacy as an Employer Value Prop</h4>
                                        <p>Organizations providing employee financial wellness workshops and tax-planning guidance experience 40% higher entry-level loyalty.</p>
                                    </div>
                                    <div class="finding-card">
                                        <div class="finding-badge">Key Insight 02</div>
                                        <h4>Technology-Driven Operations</h4>
                                        <p>Clunky legacy ERP systems and manual paper approvals cause workplace friction; seamless modern toolstacks are essential.</p>
                                    </div>
                                    <div class="finding-card">
                                        <div class="finding-badge">Key Insight 03</div>
                                        <h4>Ethical Governance & Authenticity</h4>
                                        <p>Gen Z professionals rigorously vet company ethics, CSR impact, and tax transparency prior to accepting offers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project Action Bottom Bar -->
                        <div class="project-cta-bar">
                            <div class="cta-info">
                                <i class="fa-solid fa-file-lines"></i>
                                <span>Academic Project conducted under B.Com curriculum at Bhavan's College of Arts and Commerce, Thammanam.</span>
                            </div>
                            <button class="btn-primary-magnetic magnetic-target" id="openProjectModal">
                                <span>View Research Abstract</span>
                                <i class="fa-solid fa-expand"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ACADEMICS & FINANCIAL SKILLS SECTION -->
        <section class="section academics-section" id="academics">
            <div class="container">
                <div class="section-header">
                    <div class="section-tag"><i class="fa-solid fa-scale-balanced"></i> KNOWLEDGE ENGINE</div>
                    <h2 class="section-title">Academic Heritage & Skill Matrix</h2>
                    <p class="section-subtitle">Rigorous commerce foundation built on taxation principles, corporate accounting, auditing, and financial strategy.</p>
                </div>

                <div class="academics-grid">
                    <!-- Left: Institutional Profile -->
                    <div class="college-profile-card glass-card">
                        <div class="inst-header">
                            <div class="inst-seal">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="inst-title">
                                <h3>Bhavan's College of Arts & Commerce</h3>
                                <span class="inst-location"><i class="fa-solid fa-location-dot"></i> Thammanam, Kochi, Kerala</span>
                            </div>
                        </div>

                        <div class="degree-badge-box">
                            <span class="degree-badge">Bachelor of Commerce (B.Com)</span>
                            <span class="specialization-badge">Specialization: Finance & Taxation</span>
                        </div>

                        <div class="curriculum-highlights">
                            <h4>Core Curriculum Mastered:</h4>
                            <ul class="highlight-checklist">
                                <li>
                                    <div class="check-icon"><i class="fa-solid fa-check-double"></i></div>
                                    <div>
                                        <strong>Direct Taxation (Income Tax Act):</strong>
                                        <p>Computation of Total Income, Salary heads, House property, Capital Gains, Deductions & TDS filing.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-icon"><i class="fa-solid fa-check-double"></i></div>
                                    <div>
                                        <strong>Indirect Taxes & GST:</strong>
                                        <p>CGST, SGST, IGST frameworks, Input Tax Credit (ITC) mechanism, returns and reverse charge mechanisms.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-icon"><i class="fa-solid fa-check-double"></i></div>
                                    <div>
                                        <strong>Corporate Accounting & Auditing:</strong>
                                        <p>Final accounts preparation, company balance sheets, statutory audit standards, and internal verification controls.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-icon"><i class="fa-solid fa-check-double"></i></div>
                                    <div>
                                        <strong>Financial Management & Costing:</strong>
                                        <p>Capital budgeting, cost-volume-profit analysis, working capital optimization, and financial statement ratio analysis.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right: Interactive Skill Bars & Competencies -->
                    <div class="skills-matrix-card glass-card">
                        <div class="skills-header">
                            <h3>Domain Competency Matrix</h3>
                            <span class="skills-sub">Quantitative, technical and professional attributes</span>
                        </div>

                        <div class="skill-category-group">
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name"><i class="fa-solid fa-file-invoice"></i> Income Tax & Computation</span>
                                    <span class="skill-percent">95%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar" style="width: 95%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name"><i class="fa-solid fa-percent"></i> GST Compliance & Filing Principles</span>
                                    <span class="skill-percent">90%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name"><i class="fa-solid fa-chart-simple"></i> Financial Statement & Ratio Analysis</span>
                                    <span class="skill-percent">92%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar" style="width: 92%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name"><i class="fa-solid fa-magnifying-glass-dollar"></i> Auditing Procedures & Internal Control</span>
                                    <span class="skill-percent">88%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar" style="width: 88%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name"><i class="fa-solid fa-table"></i> Financial Modeling & Advanced Spreadsheets</span>
                                    <span class="skill-percent">90%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>
                            </div>

                            <div class="skill-item">
                                <div class="skill-info">
                                    <span class="skill-name"><i class="fa-solid fa-brain"></i> Analytical Research & Case Synthesis</span>
                                    <span class="skill-percent">96%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar" style="width: 96%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Professional Traits Badges -->
                        <div class="traits-container">
                            <h4 class="traits-title">Core Character & Professional Traits</h4>
                            <div class="traits-tags">
                                <span class="trait-tag"><i class="fa-solid fa-fire"></i> Hardworking Mindset</span>
                                <span class="trait-tag"><i class="fa-solid fa-bullseye"></i> Goal-Oriented</span>
                                <span class="trait-tag"><i class="fa-solid fa-clock"></i> Punctual & Disciplined</span>
                                <span class="trait-tag"><i class="fa-solid fa-lightbulb"></i> Critical Thinker</span>
                                <span class="trait-tag"><i class="fa-solid fa-handshake"></i> Ethical Integrity</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CINEMA VAULT / HOBBIES SECTION -->
        <section class="section cinema-section" id="cinema">
            <div class="container">
                <div class="section-header">
                    <div class="section-tag gold-tag"><i class="fa-solid fa-film"></i> CULTURAL PASSION & HOBBIES</div>
                    <h2 class="section-title">The Cinephile Vault</h2>
                    <p class="section-subtitle">Exploring narrative architecture, screenwriting mastery, and the art of visual storytelling.</p>
                </div>

                <div class="cinema-bento">
                    <div class="cinema-featured-card glass-card">
                        <div class="cinema-media-frame">
                            <img src="<?php echo esc_url( $theme_uri . '/assets/images/cinema_reel.jpg' ); ?>" alt="Cinema Reel & Film Aesthetics" class="cinema-art-img" loading="lazy">
                            <div class="cinema-overlay">
                                <span class="cinema-pill"><i class="fa-solid fa-video"></i> Cinephile & Film Enthusiast</span>
                                <h3>"Cinema is truth at 24 frames per second."</h3>
                            </div>
                        </div>
                        <div class="cinema-desc-body">
                            <p>
                                Movies are more than weekend entertainment for me—they are an intensive masterclass in <strong>observation, human psychology, rhythm, and visual economy</strong>. Just as a financial audit requires spotting anomalies in dense ledgers, dissecting a film requires recognizing subtle foreshadowing, lighting cues, and thematic subtext.
                            </p>
                            <div class="cinema-stats-row">
                                <div class="c-stat">
                                    <span class="c-val">500+</span>
                                    <span class="c-lbl">Films Analyzed</span>
                                </div>
                                <div class="c-stat">
                                    <span class="c-val">Global</span>
                                    <span class="c-lbl">Cinema Scope</span>
                                </div>
                                <div class="c-stat">
                                    <span class="c-val">100%</span>
                                    <span class="c-lbl">Storytelling Passion</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cinema Connection Cards -->
                    <div class="cinema-cards-col">
                        <div class="film-aspect-card glass-card">
                            <div class="f-icon"><i class="fa-solid fa-cubes-stacked"></i></div>
                            <div>
                                <h4>Structural Pacing & Structure</h4>
                                <p>Understanding 3-act structures and narrative tension helps me design clear, engaging corporate presentations and financial reports.</p>
                            </div>
                        </div>

                        <div class="film-aspect-card glass-card">
                            <div class="f-icon"><i class="fa-solid fa-eye"></i></div>
                            <div>
                                <h4>Visual Economy & Clarity</h4>
                                <p>A great director wastes no frame. I apply that same philosophy to dashboards and spreadsheets: maximum signal, minimum clutter.</p>
                            </div>
                        </div>

                        <div class="film-aspect-card glass-card">
                            <div class="f-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                            <div>
                                <h4>Empathy & Human Insights</h4>
                                <p>Cinema deepens emotional intelligence, enriching my research on workplace dynamics and cross-generational employee sentiment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HARDWORKING WORK ETHIC MANIFESTO -->
        <section class="section manifesto-section">
            <div class="container">
                <div class="manifesto-card glass-card">
                    <div class="manifesto-badge">
                        <i class="fa-solid fa-fingerprint"></i> CORE VALUE MANIFESTO
                    </div>
                    <blockquote class="manifesto-quote">
                        "Hard work isn't just about putting in long hours—it's the discipline to dig deeper into the numbers, verify every statutory clause, and deliver excellence when nobody is watching."
                    </blockquote>
                    <div class="manifesto-author">
                        <div class="author-avatar">AK</div>
                        <div class="author-details">
                            <span class="author-name">Ashwin Krishna</span>
                            <span class="author-title">B.Com Finance & Taxation &bull; Bhavan's College, Thammanam</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT & SOCIALS SECTION -->
        <section class="section contact-section" id="contact">
            <div class="container">
                <div class="section-header">
                    <div class="section-tag"><i class="fa-regular fa-paper-plane"></i> INITIATE CONTACT</div>
                    <h2 class="section-title">Let's Build Something Exceptional</h2>
                    <p class="section-subtitle">Open for corporate finance opportunities, tax consulting internships, research collaborations, and professional networking.</p>
                </div>

                <div class="contact-grid">
                    <!-- Left: Contact Details & Social Links -->
                    <div class="contact-info-card glass-card">
                        <h3>Connect Directly</h3>
                        <p class="contact-intro">
                            Whether you want to discuss the <em>Corporate Life of Gen Z</em> research, taxation strategies, or discuss cinematic masterpieces, I look forward to connecting.
                        </p>

                        <div class="contact-channels">
                            <!-- Instagram Channel -->
                            <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="channel-item glass-card magnetic-target">
                                <div class="channel-icon insta-gradient">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                                <div class="channel-text">
                                    <span class="channel-name">Instagram</span>
                                    <span class="channel-val">@Ashwin Krishna</span>
                                </div>
                                <i class="fa-solid fa-arrow-up-right-from-square channel-arrow"></i>
                            </a>

                            <!-- Location Channel -->
                            <div class="channel-item glass-card">
                                <div class="channel-icon location-color">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="channel-text">
                                    <span class="channel-name">Base Location</span>
                                    <span class="channel-val">Thammanam, Kochi, Kerala, India</span>
                                </div>
                            </div>

                            <!-- Academic Affiliation -->
                            <div class="channel-item glass-card">
                                <div class="channel-icon college-color">
                                    <i class="fa-solid fa-building-columns"></i>
                                </div>
                                <div class="channel-text">
                                    <span class="channel-name">Institution</span>
                                    <span class="channel-val">Bhavan's College of Arts and Commerce</span>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Copy Email Feature -->
                        <div class="quick-copy-box">
                            <span class="copy-label">Official Inquiries:</span>
                            <div class="copy-action-row">
                                <code id="emailAddress">ashwinkrishna.official@gmail.com</code>
                                <button class="btn-copy" id="copyEmailBtn" title="Copy Email Address">
                                    <i class="fa-regular fa-copy"></i>
                                    <span id="copyBtnText">Copy</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Interactive Message Form -->
                    <div class="contact-form-card glass-card">
                        <h3>Send a Message</h3>
                        <form id="contactForm" class="contact-form" onsubmit="return false;">
                            <div class="form-group">
                                <label for="senderName">Your Name / Organization <span class="req">*</span></label>
                                <div class="input-wrap">
                                    <i class="fa-regular fa-user"></i>
                                    <input type="text" id="senderName" name="name" placeholder="e.g. Anand Menon / Deloitte" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="senderEmail">Your Email Address <span class="req">*</span></label>
                                <div class="input-wrap">
                                    <i class="fa-regular fa-envelope"></i>
                                    <input type="email" id="senderEmail" name="email" placeholder="e.g. anand@company.com" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inquirySubject">Purpose of Outreach <span class="req">*</span></label>
                                <div class="input-wrap">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <select id="inquirySubject" name="subject" required>
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="Finance & Tax Opportunity">Financial Analyst / Tax Role</option>
                                        <option value="Gen Z Research Discussion">Discuss Gen Z Corporate Research</option>
                                        <option value="Academic / College Collaboration">Academic / College Collaboration</option>
                                        <option value="Cinema & Creative Discussion">Cinema & Cultural Exchange</option>
                                        <option value="General Networking">General Professional Networking</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="senderMessage">Your Message <span class="req">*</span></label>
                                <div class="input-wrap textarea-wrap">
                                    <textarea id="senderMessage" name="message" rows="4" placeholder="Write your message or inquiry here..." required></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn-primary-magnetic btn-submit magnetic-target" id="submitFormBtn">
                                <span>Send Message</span>
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                            <div class="form-feedback" id="formFeedback"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
