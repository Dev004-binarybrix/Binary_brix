@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@section('content')
    @include('includes.website.navbar')

    <style>
        .imgContainer {
            position: relative;
            margin-bottom: 30px;
            width: 100%;
        }

        .img-overlay {
            position: relative;
            width: 100%;
            height: 60vh;
            overflow: hidden;
            border-radius: 50px;
            border: 1px solid #e8dede;
        }

        .img-overlay img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: inherit;
        }

        .overlayContainer {
            position: relative;
            top: -30px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
            width: 90%;
            max-width: 800px;
            z-index: 1;
        }

        .overlayContainer h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .overlayContainer span {
            font-size: 1rem;
            color: #555;
        }

        /* .paraDiv {
                line-height: 1.6;
                padding: 0 5%;
            }

            .paraDiv .p {
                text-align: justify;
            } */

        .paraDiv {
            line-height: 1.6;
            padding-left: 10%;
            padding-right: 10%;
        }

        .paraDiv .p {
            text-align: justify;
            font-size: 1rem;
            /* Default font size for larger screens */
        }

        /* Media query for smaller screens (max-width 768px) */
        @media (max-width: 768px) {
            .paraDiv {
                padding-left: 5%;
                padding-right: 5%;
            }

            .paraDiv .p {
                font-size: 0.9rem;
                /* Adjust font size for tablets */
            }
        }

        /* Media query for very small screens (max-width 576px) */
        @media (max-width: 576px) {
            .paraDiv {
                padding-left: 5%;
                padding-right: 5%;
            }

            .paraDiv .p {
                font-size: 0.8rem;
                /* Smaller font size for phones */
            }
        }

       
        @media (max-width: 400px) {
            .paraDiv .p {
                font-size: 0.75rem;

            }
        }

        /* Default styles for larger screens */
        .header {
            color: black !important;
            z-index: 997;
            background-color: #ffffff !important;
        }

        .header.scrolled {
            background-color: #ffffff;
            box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
        }

        .navmenu a {
            color: black !important;
        }

        ul {
            list-style: none;
        }

        ul i {
            font-size: 20px;
            margin-right: 8px;
            color: #e15497;
        }

        .blogHeader,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Arial', sans-serif;
            font-weight: 700;
        }

        .blogImage {
            width: 100%;
            height: 70vh;
        }

        .blogImage img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .paraDiv h4 {
            margin-top: 2px;
        }

        @media (max-width: 768px) {
            .img-overlay {
                height: 40vh;
                border-radius: 30px;
            }

            .overlayContainer {
                top: -20px;
                width: 90%;
            }

            .overlayContainer h1 {
                font-size: 1.5rem;
            }

            .paraDiv {
                padding: 0 10px;
            }

            .blogImage {
                height: 40vh;
            }

            .carousel-item {
                margin-bottom: 30px;
            }

            .card-title {
                font-size: 1rem;
            }

            .card-text {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .img-overlay {
                height: 30vh;
                border-radius: 15px;
            }

            .overlayContainer {
                top: -10px;
                width: 90%;
                padding: 10px;
            }

            .overlayContainer h1 {
                font-size: 1.25rem;
            }

            .blogImage {
                height: 30vh;
            }

            .card-title {
                font-size: 0.85rem;
            }

            .card-text {
                font-size: 0.75rem;
            }

            .imgContainer {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>


    <main class="main">
        <div class="container imgContainer">
            <div class="img-overlay">
                <img src="assets/img/blog/mainImage.jpg" alt="Blog image" class="img-responsive" />
            </div>
            <div class="overlayContainer">
                <h1 class="blogHeader">Empowering Women in Tech: Navigate Breast Cancer with Strength and Support!</h1>
                <span id="date">October 10, 2024, <strong>Admin</strong></span>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 shadow-lg mb-5 bg-body rounded">
                    <div class="paraDiv mt-5 mb-5">
                        <p><b>October</b> is a month filled with mixed emotions of joy, support,
                            festivals, and a terrorizing reminder to <b>breast cancer</b> survivors and people who are
                            still
                            fighting it. It's a month of mixed emotions as, for some, it might be a reminder of the pain
                            and
                            horrors of the brutal disease, but for some, it's a testament to courage, a tap on the back
                            that if
                            you can defeat this disease, you can do anything.
                        </p>
                        <p><b>Pink October</b> is the breast care awareness month designated to raise awareness
                            and educate people about this dangerous disease. <b>October 19th is International Breast
                                Cancer
                                Day</b>, but to emphasize the importance of the matter, the entire month of October is
                            observed as
                            the breast care awareness month.
                        </p>
                        {{-- <div class="blogImage">
                        <img src="assets/img/blog/2.jpg" alt="">
                    </div> --}}
                        <p>
                            Pink color and pink ribbons are associated with the disease.
                            It's a simple and effective campaign that has been able to create a
                            significant impact in spreading awareness and raising money to fund the research
                            to stop breast cancer.
                        </p>

                        <div class="blogImage">
                            <img src="assets/img/blog/3.jpg" alt="Blog Imgae" class="blogImage">
                        </div>
                        <h4 class="mt-5">
                            What is Breast Cancer?
                        </h4>
                        <p>
                            According to the World Health Organization, breast cancer is a disease where the tissues
                            in the milk duct grow abnormally to the extent that they cause a tumor. The initial state
                            where cancer tissues are contained is called non-invasive cancer, which is not fatal and
                            can be cured completely.

                        </p>
                        <p>
                            In the second stage, cancer tissues start spreading to the adjacent tissues and multiplying
                            the risk factor. This is called invasive cancer, and if not contained immediately, it can be
                            fatal.
                            Breast cancer is the most common type of cancer in the world, surpassing lung cancer. 2.2
                            million new breast cancer cases were recorded in 2020, and it was estimated that almost
                            300,000 women will be affected by the disease only in the United States alone.
                        </p>
                        <p>
                            Even though the risk of breast cancer is shallow in men 1 in 833 compared to women, 1 in 8
                            2800 men are expected to be diagnosed with this disease in 2023. On the fatality count,
                            684,996 women died globally from breast cancer, and around 43,000 more are expected to lose
                            the fight against cancer this year, along with 530 men.
                        </p>
                        <p>
                            The positive news is that the death rate from breast cancer has dialed down an impressive
                            43% in 2020, and it's continuously coming down. The breast cancer movement pink ribbons and
                            Pink October as the awareness month has a lot to do with these impressive numbers.
                        </p>
                        <h4>What are the symptoms of breast cancer?
                        </h4>

                        <p>
                            Breast cancer has several symptoms ranging from very uncomfortable pain to entirely
                            unnoticeable. In the initial stage of the disease, the symptoms are almost indiscernible and
                            start to agitate the victims as the problem starts to get out of hand. Symptoms of breast
                            cancer are as follows,

                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Painless lump on the breast, only noticeable to
                                    touch.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>The size or the shape of the breast or nipples
                                    starts to change.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Rashes or redness of the breast.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Lump near or in the armpit.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Abnormal discharge from nipples.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Dimpling or denting of the breast.</span></li>
                        </ul>
                        <div class="blogImage">
                            <img src="assets/img/blog/1.jpg" alt="Blog Imgae" class="blogImage">
                        </div>
                        <p class="mt-3">
                            Women are the primary victims of breast cancer, but it can develop in older men as well.
                            Breast cancer is likely to develop in women over 40 years of age, suffering from obesity,
                            drinking alcohol, smoking, radiation exposure, reproductive problems or regression with age,
                            and most importantly, if someone in your close family mother, sister has it.

                        </p>
                        <h4>How to detect Breast cancer initially?</h4>

                        <p>
                            Breast cancer is a curable disease with millions of survivors around the world. The key is
                            to detect the problem early. The most significant point of Breast Cancer Awareness Month is
                            to educate and encourage people to conduct regular self-examinations and visit a
                            professional medical practitioner every now and then.

                        </p>
                        <p>
                            For the self-examination,
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Stand in front of a mirror and touch your
                                    breast while closely examining any lumps or abnormalities.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Look for the change of color or shape from the
                                    last examination.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Document your findings.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>If you feel any change, even a little, consult
                                    a general medical practitioner or your family doctor immediately.</span></li>
                        </ul>
                        <h4>
                            How to prevent breast cancer?
                        </h4>

                        <p>
                            "Prevention is better than cure" is a million dollar piece of advice. Breast cancer is a
                            preventable problem with little lifestyle changes. If you have someone close in your family
                            suffering from or surviving breast cancer, you must be focusing on a healthy lifestyle.
                        </p>

                        <h6>1. Maintain a Healthy Weight</h6>
                        <p>Being overweight or obese, especially after menopause, increases the risk of breast cancer.
                            Managing a healthy weight through balanced eating and regular physical activity can reduce
                            this risk.</p>
                        <h6>2. Exercise Regularly</h6>
                        <p>Engaging in physical activity for at least 30 minutes a day has been shown to lower breast
                            cancer risk. Even moderate-intensity activities like walking can be beneficial.</p>
                        <h6>3. Limit Alcohol Consumption</h6>
                        <p>
                            Alcohol consumption is linked to an increased risk of breast cancer. Limiting alcohol intake
                            to no more than one drink per day for women can lower the risk.
                        </p>
                        <h6>
                            4. Quit Smoking
                        </h6>
                        <p>
                            Smoking has been associated with various types of cancer, including breast cancer. Quitting
                            smoking can help reduce this risk and provide other health benefits.
                        </p>
                        <h6>
                            5. Breastfeed, if Possible
                        </h6>
                        <p>
                            Breastfeeding for several months may reduce the risk of breast cancer. The longer a woman
                            breastfeeds, the greater the protective effect.
                        </p>
                        <h6>
                            6. Limit Hormone Replacement Therapy (HRT)
                        </h6>
                        <p>
                            Hormone replacement therapy used during menopause has been linked to a higher risk of breast
                            cancer. Limiting the duration of HRT or seeking alternatives can help reduce this risk.
                        </p>
                        <h6>7. Be Aware of Family History</h6>
                        <p>
                            Genetic predispositions can significantly influence breast cancer risk. Knowing your
                            family’s history and considering genetic counseling may be helpful if there are close
                            relatives with breast cancer.

                        </p>
                        <h6>
                            8. Maintain a Healthy Diet
                        </h6>
                        <p>
                            Eating a diet rich in fruits, vegetables, whole grains, and lean proteins while limiting
                            processed foods, red meat, and sugary foods can contribute to overall health and potentially
                            reduce cancer risk.

                        </p>
                        <h6>
                            9. Regular Screening and Self-Exams
                        </h6>
                        <p>
                            Regular mammograms, clinical breast exams, and self-examinations can help detect breast
                            cancer early. Early detection improves treatment outcomes and increases survival rates.
                        </p>
                        <h6>
                            10. Limit Exposure to Radiation and Environmental Pollutants
                        </h6>
                        <p>
                            Some forms of radiation, such as those used in medical imaging, and exposure to harmful
                            chemicals found in the environment have been linked to increased cancer risk. Reducing
                            unnecessary exposure to these factors can help.
                        </p>
                        <p>
                            By incorporating these lifestyle changes and being proactive about health, individuals can
                            take significant steps to reduce the risk of breast cancer.
                        </p>

                        <h4>How to spread breast cancer awareness? </h4>
                        <p>
                            The pink ribbon movement has contributed massively to educating people about the causes and
                            prevention of breast cancer and encouraging people to self-examine.
                        </p>
                        <p>
                            If you want to be a part of the movement, here are the ways to do it,
                        </p>

                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Educate your employees about the disease and
                                    promote self-examination. Share educational literature with them.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Display posters and graphical guides on the
                                    agenda board and in the common room, like the cafeteria or the activity room.</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>Organize doctor visits and educational sessions
                                    in your workspace</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Offer flexible working hours and allow
                                    employees to work from the comfort of their home when they can't travel.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Offer medical assistance along with paid leave
                                    to show your support and encouragement.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Show them your support by offering gym
                                    memberships, wellness programs for prevention</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Participate in events being organized around
                                    you with your employees, such as races, marathons, bake-offs, etc.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Organize charity events to educate your
                                    audience and encourage them to share your
                                    content.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Create a supportive environment for employees
                                    suffering from the disease or taking care of their loved ones suffering from
                                    it.</span></li>
                        </ul>
                        <div class="blogImage">
                            <img src="assets/img/blog/5.jpg" alt="Blog Imgae">
                        </div>
                        <p class="mt-3">
                            As we move through 2024, the fight against breast cancer remains more important than ever.
                            With advancements in research, improved screening methods, and increasing awareness, we are
                            better equipped to detect and treat this disease early. However, the journey is far from
                            over. It is crucial for individuals to stay informed, prioritize regular check-ups, and
                            understand the signs and risk factors associated with breast cancer.
                        </p>
                        <p>
                            Together, we can continue to support those affected by the disease, advocate for greater
                            access to healthcare, and contribute to the ongoing push for a cure. By spreading awareness,
                            we not only empower ourselves but also others, fostering a community where no one fights
                            alone. Remember, early detection saves lives—let’s make 2024 a year of action and hope.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        {{-- <section id="blog" class="blog section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Blog</h2>
                <p><span>Discover Insights on Our </span> <span class="description-title">Blog!</span></p>
            </div>

            <div class="container">
                <div class="row">
                    <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active mb-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <a href="{{ route('pink-ribbon') }}" class="card-link">
                                            <div class="card">
                                                <img src="assets/img/blog/2.jpg" class="card-img-top p-3"
                                                    alt="Blog image 1">
                                                <div class="card-body">
                                                    <p class="text-muted">By <strong>Admin</strong></p>
                                                    <h6 class="card-title">Tech Women, Stronger Together Against Breast Cancer!</h6>
                                                    <p class="card-text">For women in tech, balancing health and a demanding career adds an extra layer of complexity. Here's how you can navigate this journey with strength and support...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </section> --}}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </main>
@endsection

@section('admininsertjavascript')
    <script>
        $(document).ready(function() {
            const logo = document.getElementById('brand-logo');
            logo.src = "./assets/img/brixBlue.png";

            window.addEventListener('scroll', function() {
                logo.src = "./assets/img/brixBlue.png";
            });
        });
    </script>
@endsection
