@extends('layout.app')

@section('content')

<!-- 
=============================================
    Inner Banner
============================================== 
-->
<div class="inner-banner-one pt-225 lg-pt-200 md-pt-150 pb-100 md-pb-70 position-relative"
    style="background-image: url(images/media/img_26.jpg);">
    
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="hero-heading d-inline-block position-relative me-xl-4">
                    YC ConnectX Connector’s List
                    <img src="images/shape/shape_25.svg" alt="">
                </h1>
            </div>

            <div class="col-xl-4 col-lg-5 ms-auto">
                <p class="text-white text-lg mb-70 lg-mb-40">
                    Explore the diverse ecosystem of leaders, innovators, founders, creators, experts, and changemakers connected through Young Chanakya ConnectX.
                </p>

                <ul class="style-none d-inline-flex pager">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>/</li>
                    <li>Connector’s List</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- 
=============================================
    Connector Categories
============================================== 
-->
<div class="faq-section-one position-relative mt-150 lg-mt-80 mb-150 lg-mb-80">
    <div class="container">

        <div class="title-one text-center mb-60 lg-mb-40">
            <h2>Explore Our Connector Ecosystem</h2>
            <p class="text-lg mt-20">
                A curated network of professionals, entrepreneurs, innovators, educators, creators, and leaders across industries.
            </p>
        </div>

        <div class="accordion accordion-style-two" id="accordionOne">

            <!-- Business & Entrepreneurship -->
            <div class="accordion-item">
                <div class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Business & Entrepreneurship
                    </button>
                </div>

                <div id="collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="headingOne" data-bs-parent="#accordionOne">

                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="style-none list-item">
                                    <li>Startup Founders</li>
                                    <li>Women Entrepreneurs</li>
                                    <li>Businessmen</li>
                                    <li>Businesswomen</li>
                                    <li>Business Strategists</li>
                                    <li>Family Business Owners</li>
                                    <li>MSME Leaders</li>
                                </ul>
                            </div>

                            <div class="col-lg-4">
                                <ul class="style-none list-item">
                                    <li>Franchisors & Consultants</li>
                                    <li>D2C Brand Founders</li>
                                    <li>Retail & E-commerce Leaders</li>
                                    <li>Export-Import Specialists</li>
                                    <li>Supply Chain Experts</li>
                                    <li>Industrialists</li>
                                    <li>Manufacturing Innovators</li>
                                </ul>
                            </div>

                            <div class="col-lg-4">
                                <ul class="style-none list-item">
                                    <li>FMCG Leaders</li>
                                    <li>Corporate CXOs</li>
                                    <li>Billionaires</li>
                                    <li>Business Coaches</li>
                                    <li>Leadership Consultants</li>
                                    <li>Entrepreneurs in Residence (EIRs)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Innovation & Technology -->
            <div class="accordion-item">
                <div class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo">
                        Innovation & Technology
                    </button>
                </div>

                <div id="collapseTwo" class="accordion-collapse collapse"
                    data-bs-parent="#accordionOne">

                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="style-none list-item">
                                    <li>Technology Innovators</li>
                                    <li>AI & Data Science Experts</li>
                                    <li>Cybersecurity Specialists</li>
                                    <li>Blockchain & Web3 Entrepreneurs</li>
                                    <li>FinTech Founders</li>
                                </ul>
                            </div>

                            <div class="col-lg-4">
                                <ul class="style-none list-item">
                                    <li>SaaS Entrepreneurs</li>
                                    <li>HealthTech Innovators</li>
                                    <li>EdTech Founders</li>
                                    <li>AgriTech Entrepreneurs</li>
                                    <li>CleanTech & GreenTech Leaders</li>
                                </ul>
                            </div>

                            <div class="col-lg-4">
                                <ul class="style-none list-item">
                                    <li>DeepTech Researchers</li>
                                    <li>Product Managers & Tech Strategists</li>
                                    <li>Robotics & Automation Experts</li>
                                    <li>IoT Innovators</li>
                                    <li>AR/VR Entrepreneurs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Finance -->
            <div class="accordion-item">
                <div class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree">
                        Finance, Investment & Policy
                    </button>
                </div>

                <div id="collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionOne">

                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="style-none list-item">
                                    <li>Investors & Venture Capitalists</li>
                                    <li>Angel Investors</li>
                                    <li>Wealth Managers</li>
                                    <li>Chartered Accountants & Auditors</li>
                                    <li>Taxation Experts</li>
                                    <li>Stock Market & Equity Traders</li>
                                    <li>Banking Leaders</li>
                                </ul>
                            </div>

                            <div class="col-lg-6">
                                <ul class="style-none list-item">
                                    <li>Insurance Experts</li>
                                    <li>Financial Experts</li>
                                    <li>Corporate Lawyers</li>
                                    <li>Policy Makers & Bureaucrats</li>
                                    <li>Government Advisors</li>
                                    <li>Economists</li>
                                    <li>Legal & Compliance Specialists</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Leadership -->
            <div class="accordion-item">
                <div class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour">
                        Leadership, People & Growth
                    </button>
                </div>

                <div id="collapseFour" class="accordion-collapse collapse"
                    data-bs-parent="#accordionOne">

                    <div class="accordion-body">
                        <ul class="style-none list-item">
                            <li>Industry Experts</li>
                            <li>Leadership Trainers</li>
                            <li>HR Leaders & Talent Managers</li>
                            <li>Diversity & Inclusion Advocates</li>
                            <li>Career Counselors & Student Mentors</li>
                            <li>Life Coaches & Mentors</li>
                            <li>Communication Coaches</li>
                            <li>Workplace Culture Architects</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Creative -->
            <div class="accordion-item">
                <div class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive">
                        Creative, Media & Marketing
                    </button>
                </div>

                <div id="collapseFive" class="accordion-collapse collapse"
                    data-bs-parent="#accordionOne">

                    <div class="accordion-body">
                        <ul class="style-none list-item">
                            <li>Marketing Gurus</li>
                            <li>Branding Experts</li>
                            <li>PR & Communications Specialists</li>
                            <li>Content Creators & Influencers</li>
                            <li>Authors & Business Writers</li>
                            <li>Film & Media Entrepreneurs</li>
                            <li>Podcast Hosts & Storytellers</li>
                            <li>Community Builders & Networkers</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Social Impact -->
            <div class="accordion-item">
                <div class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix">
                        Social Impact
                    </button>
                </div>

                <div id="collapseSix" class="accordion-collapse collapse"
                    data-bs-parent="#accordionOne">

                    <div class="accordion-body">
                        <ul class="style-none list-item">
                            <li>Social Entrepreneurs</li>
                            <li>Sustainability Champions</li>
                            <li>Philanthropists</li>
                            <li>Environmental Activists</li>
                            <li>Climate Tech Founders</li>
                            <li>Impact Investors</li>
                            <li>Non-Profit Leaders</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Academic -->
            <div class="accordion-item">
                <div class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven">
                        Academic
                    </button>
                </div>

                <div id="collapseSeven" class="accordion-collapse collapse"
                    data-bs-parent="#accordionOne">

                    <div class="accordion-body">
                        <ul class="style-none list-item">
                            <li>Academic Experts & Educators</li>
                            <li>Professors & Scholars</li>
                            <li>Researchers & Innovators</li>
                            <li>Education Policy Experts</li>
                            <li>School & College Leaders</li>
                            <li>Student Leaders & Innovators</li>
                            <li>Career Development Experts</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection