<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Personal portfolio website for Mariel Joyce, an IT student, developer, and creator.">

        <title>Mariel Joyce | IT Student, Developer, and Creator</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#fbfaf6] font-sans text-[#2F2F2F] antialiased selection:bg-[#FFEE99] selection:text-[#2F2F2F]">
        <div class="min-h-screen overflow-hidden">
            <header class="fixed inset-x-0 top-0 z-50 border-b border-[#2F2F2F]/10 bg-[#FFFDF6]/88 backdrop-blur-xl">
                <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8 lg:px-10" aria-label="Primary navigation">
                    <a href="#home" class="group flex items-center gap-3 font-bold text-[#242424]" aria-label="Mariel Joyce home">
                        <span class="grid size-11 place-items-center rounded-lg border border-[#2F2F2F]/10 bg-[#FFEE99] shadow-[6px_6px_0_#2F2F2F] transition duration-300 group-hover:-translate-y-0.5 group-hover:shadow-[8px_8px_0_#2F2F2F]">MJ</span>
                        <span class="hidden text-sm uppercase tracking-[0.18em] sm:block">Mariel Joyce</span>
                    </a>

                    <div class="hidden items-center gap-2 rounded-full border border-[#2F2F2F]/10 bg-white/70 p-1 text-sm font-semibold text-[#555] shadow-sm md:flex">
                        <a class="nav-link" href="#about">About</a>
                        <a class="nav-link" href="#education">Education</a>
                        <a class="nav-link" href="#projects">Projects</a>
                        <a class="nav-link" href="#contact">Contact</a>
                    </div>

                    <a href="#contact" class="hidden rounded-full bg-[#2F2F2F] px-5 py-3 text-sm font-bold text-white shadow-[0_12px_30px_rgba(47,47,47,0.18)] transition duration-300 hover:-translate-y-0.5 hover:bg-[#1f1f1f] lg:inline-flex">Let's connect</a>

                    <button type="button" class="mobile-menu-button inline-grid size-11 place-items-center rounded-lg border border-[#2F2F2F]/10 bg-white text-[#2F2F2F] md:hidden" aria-expanded="false" aria-controls="mobile-menu" aria-label="Open navigation menu">
                        <span class="sr-only">Open menu</span>
                        <span class="menu-line"></span>
                    </button>
                </nav>

                <div id="mobile-menu" class="mobile-menu hidden border-t border-[#2F2F2F]/10 bg-[#FFFDF6] px-5 pb-5 md:hidden">
                    <div class="grid gap-2 pt-4 text-sm font-bold">
                        <a class="mobile-link" href="#about">About</a>
                        <a class="mobile-link" href="#education">Education</a>
                        <a class="mobile-link" href="#projects">Projects</a>
                        <a class="mobile-link" href="#contact">Contact</a>
                    </div>
                </div>
            </header>

            <main id="home">
                <section class="relative min-h-screen overflow-hidden px-5 pt-28 sm:px-8 lg:px-10">
                    <div class="absolute inset-x-0 top-0 -z-10 h-[54rem] bg-[linear-gradient(135deg,#fbfaf6_0%,#fff4c7_42%,#edf5f4_100%)]"></div>
                    <div class="mx-auto grid max-w-7xl items-center gap-12 pb-16 pt-8 md:grid-cols-[1.03fr_0.97fr] lg:min-h-[calc(100vh-7rem)] lg:pb-20">
                        <div class="reveal max-w-3xl">
                            <p class="mb-5 inline-flex items-center gap-2 rounded-full border border-[#2F2F2F]/10 bg-white/70 px-4 py-2 text-sm font-bold text-[#585858] shadow-sm">
                                <span class="size-2 rounded-full bg-[#FFEE99] ring-4 ring-[#FFEE99]/35"></span>
                                Portfolio / 2026
                            </p>
                            <h1 class="max-w-4xl text-5xl font-extrabold leading-[1.02] text-[#242424] sm:text-6xl lg:text-7xl">
                                Hi, I'm <span class="highlight-mark">Mariel Joyce</span>
                            </h1>
                            <p class="mt-6 text-xl font-semibold text-[#4B4B4B] sm:text-2xl">IT Student, Developer, and Creator</p>
                            <p class="mt-6 max-w-2xl text-base leading-8 text-[#626262] sm:text-lg">
                                Welcome to my digital space. I love turning thoughtful ideas into useful, human-centered web systems, from school organization tools to assistive technology that supports real-world safety and care.
                            </p>

                            <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                                <a href="#projects" class="inline-flex items-center justify-center rounded-full bg-[#FFEE99] px-6 py-4 text-sm font-extrabold text-[#2F2F2F] shadow-[0_14px_30px_rgba(47,47,47,0.16)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_36px_rgba(47,47,47,0.2)]">
                                    View my work
                                </a>
                                <a href="#education" class="inline-flex items-center justify-center rounded-full border border-[#2F2F2F]/15 bg-white px-6 py-4 text-sm font-extrabold text-[#2F2F2F] transition duration-300 hover:-translate-y-1 hover:border-[#2F2F2F]/30">
                                    Explore journey
                                </a>
                            </div>

                            <div class="mt-10 grid max-w-xl grid-cols-3 gap-3">
                                <div class="stat-tile"><strong>4+</strong><span>Major projects</span></div>
                                <div class="stat-tile"><strong>ICT</strong><span>Programming</span></div>
                                <div class="stat-tile"><strong>IoT</strong><span>Capstone focus</span></div>
                            </div>
                        </div>

                        <div class="reveal relative mx-auto w-full max-w-[34rem] delay-150">
                            <div class="absolute -left-4 top-10 hidden h-24 w-24 rounded-lg bg-[#FFEE99] shadow-[10px_10px_0_#2F2F2F] sm:block"></div>
                            <div class="absolute -right-3 bottom-20 z-20 hidden rounded-lg border border-[#2F2F2F]/10 bg-white px-5 py-4 shadow-xl sm:block">
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#777]">Currently building</p>
                                <p class="mt-1 font-extrabold text-[#2F2F2F]">Gabay</p>
                            </div>
                            <div class="profile-frame relative overflow-hidden rounded-[2rem] border border-[#2F2F2F]/10 bg-white p-4 shadow-[0_28px_80px_rgba(47,47,47,0.16)]">
                                <img class="portrait-media aspect-[4/5] rounded-[1.45rem] object-[50%_42%]" src="{{ asset('images/mariel-workstation.png') }}" alt="Mariel Joyce holding a laptop in a professional portrait">
                            </div>
                        </div>
                    </div>
                </section>

                <section id="about" class="section-shell bg-white">
                    <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 sm:px-8 lg:grid-cols-[0.82fr_1.18fr] lg:px-10">
                        <div class="reveal section-photo section-photo-blue">
                            <img src="{{ asset('images/mariel-portrait-blue.png') }}" alt="Smiling portrait of Mariel Joyce in a blue blazer">
                        </div>
                        <div class="reveal delay-100">
                            <p class="section-kicker">About Me</p>
                            <h2 class="section-title">Building digital solutions with curiosity, care, and purpose.</h2>
                            <p class="mt-6 text-lg leading-8 text-[#626262]">
                                Mariel Joyce is a passionate tech student who loves building functional digital solutions that solve real-world problems. Her work blends practical programming, creative collaboration, and a deep interest in technology that supports people in everyday life.
                            </p>
                            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                                <div class="soft-panel">
                                    <p class="font-extrabold text-[#2F2F2F]">Developer mindset</p>
                                    <p class="mt-2 text-sm leading-6 text-[#666]">Focused on clear interfaces, useful systems, and dependable user experiences.</p>
                                </div>
                                <div class="soft-panel">
                                    <p class="font-extrabold text-[#2F2F2F]">Creative range</p>
                                    <p class="mt-2 text-sm leading-6 text-[#666]">Comfortable collaborating across software projects, storytelling, media, and design.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="education" class="section-shell bg-[#FFF9DF]">
                    <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
                        <div class="reveal max-w-3xl">
                            <p class="section-kicker">Education Journey</p>
                            <h2 class="section-title">A steady path through ICT, programming, and achievement.</h2>
                        </div>

                        <div class="mt-12 grid gap-8 lg:grid-cols-[0.72fr_1.28fr]">
                            <div class="reveal section-photo section-photo-brown min-h-[28rem]">
                                <img src="{{ asset('images/mariel-portrait-brown.png') }}" alt="Professional portrait of Mariel Joyce in a black blazer">
                            </div>

                            <div class="timeline reveal delay-100">
                                <article class="timeline-item">
                                    <span class="timeline-dot"></span>
                                    <p class="text-sm font-extrabold uppercase tracking-[0.16em] text-[#7a6a25]">Junior High School</p>
                                    <h3>La Filipina National High School</h3>
                                    <p>Graduated from La Filipina National High School, building the academic foundation for her technology journey.</p>
                                </article>
                                <article class="timeline-item">
                                    <span class="timeline-dot"></span>
                                    <p class="text-sm font-extrabold uppercase tracking-[0.16em] text-[#7a6a25]">Senior High School</p>
                                    <h3>CARD-MRI Development Institute, Inc.</h3>
                                    <p>Completed Technical-Vocational-Livelihood (TVL) - ICT Programming with a strong focus on applied technology and software fundamentals.</p>
                                    <div class="mt-4 inline-flex rounded-full bg-[#FFEE99] px-4 py-2 text-sm font-extrabold text-[#2F2F2F]">With High Honors / Soaring High Honors</div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="projects" class="section-shell bg-[#F8F8F4]">
                    <div class="mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
                        <div class="reveal flex flex-col justify-between gap-6 md:flex-row md:items-end">
                            <div class="max-w-3xl">
                                <p class="section-kicker">College Journey & Projects</p>
                                <h2 class="section-title">Milestones shaped by systems, stories, commerce, and care.</h2>
                            </div>
                            <p class="max-w-md text-base leading-7 text-[#666]">A snapshot of the work that shaped my technical practice, from student systems to care-centered IoT.</p>
                        </div>

                        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                            <article class="project-card reveal">
                                <div class="project-media bg-[#e8f0ef]">
                                    <span>01</span>
                                    <strong>Organization System</strong>
                                </div>
                                <p class="project-year">1st Year Milestone</p>
                                <h3>School Organization Management System</h3>
                                <p>Developed a specialized management system designed to help a school organization organize operations and member-related workflows.</p>
                            </article>

                            <article class="project-card reveal delay-100">
                                <div class="project-media bg-[#f6e7d9]">
                                    <span>02</span>
                                    <strong>Sarming</strong>
                                </div>
                                <p class="project-year">1st Year Collaboration</p>
                                <h3>Sarming</h3>
                                <p>Collaborated on a short film project where the team won the Best Sound Engineering award.</p>
                            </article>

                            <article class="project-card reveal delay-150">
                                <div class="project-media bg-[#fff0b8]">
                                    <span>03</span>
                                    <strong>Merch Haven+</strong>
                                </div>
                                <p class="project-year">2nd Year Milestone</p>
                                <h3>Merch Haven+</h3>
                                <p>Created a vibrant e-commerce website dedicated to K-pop, J-pop, and P-pop merchandise with a lively shopping experience.</p>
                            </article>

                            <article class="project-card featured-card reveal delay-200">
                                <div class="project-media bg-[#232323] text-white">
                                    <span>04</span>
                                    <strong>Gabay</strong>
                                </div>
                                <p class="project-year">Current / Capstone</p>
                                <h3>Gabay</h3>
                                <p>An IoT-enabled web system bridging visually impaired navigators and caregivers through real-time safety, navigation support, and peace of mind.</p>
                            </article>
                        </div>
                    </div>
                </section>

                <section id="contact" class="bg-[#2F2F2F] px-5 py-20 text-white sm:px-8 lg:px-10">
                    <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-[1.1fr_0.9fr] md:items-end">
                        <div class="reveal">
                            <p class="section-kicker text-[#FFEE99]">Contact</p>
                            <h2 class="max-w-3xl text-4xl font-extrabold leading-tight sm:text-5xl">Let's build something thoughtful, useful, and beautifully clear.</h2>
                            <p class="mt-5 max-w-2xl text-lg leading-8 text-white/70">Open for student collaborations, web development projects, creative tech work, and capstone conversations.</p>
                        </div>
                        <div class="reveal grid gap-3 text-sm font-bold md:justify-end">
                            <a class="contact-link" href="mailto:marieljoyce@example.com">batulanon.marieljoyce@dnsc.edu.ph</a>
                            <a class="contact-link" href="https://github.com/" target="_blank" rel="https://github.com/mariyeel">GitHub</a>
                            <a class="contact-link" href="https://www.facebook.com/" target="_blank" rel="https://www.facebook.com/mari.yeeel">Facebook</a>
                        </div>
                    </div>
                    <div class="mx-auto mt-14 flex max-w-7xl flex-col gap-3 border-t border-white/10 pt-7 text-sm text-white/55 sm:flex-row sm:items-center sm:justify-between">
                        <p>&copy; {{ date('Y') }} Mariel Joyce. All rights reserved.</p>
                        <p>Designed with #FFEE99 warmth and developer polish.</p>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
