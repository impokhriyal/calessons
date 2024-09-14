<div class="row">
                <nav id="caNav" class="navbar navbar-expand-lg navbar-light navbar-transparent py-0">
                    <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#caNavigation"
                        aria-controls="caNavigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a tabindex="0" class="navbar-brand me-0" href="<?php echo $website_url; ?>">
                        <picture>
                            <source type="image/webp" media="(max-width:576px)" 
                            data-srcset="<?php echo $assets_url; ?>/assets/img/lisa-flowers-communication-acceleration-mobile.webp" />
                            <!-- <source type="image/webp" media="(max-width:576px)" 
                            data-srcset="<?php echo $assets_url; ?>/assets/img/lisa-flowers-communication-acceleration-logo-mobile.webp" /> -->
                            <source type="image/webp" 
                            data-srcset="<?php echo $assets_url; ?>/assets/img/lisa-flowers-communication-acceleration-logo.webp" />
                            <img itemprop="thumbnailUrl" 
                            src="<?php echo $assets_url; ?>/assets/img/img-placeholder.png" 
                            data-src="<?php echo $assets_url; ?>/assets/img/lisa-flowers-communication-acceleration-logo.png" 
                            alt="Lisa G. Flowers - Speech Therapist" width="300" height="257" class="img-fluid lazyload">
                        </picture>
                    </a>
                    <div class="collapse navbar-collapse" id="caNavigation">
                        <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="navbar-nav mt-0">
                            <li class="nav-item active">
                                <a tabindex="0" class="nav-link active" aria-current="page" href="<?php echo $website_url; ?>/index.php">
                                    <span>Home</span>
                                </a>
                            </li>							
                            <?php /*<li itemprop="hasPart" class="nav-item">
                                <a tabindex="0" class="nav-link" href="<?php echo $website_url; ?>/about-educator-lisa-flowers">
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li itemprop="hasPart" class="nav-item">
                                <a tabindex="0" class="nav-link" href="<?php echo $website_url; ?>/fifty-two-lessons-for-fifty-two-weeks-package">
                                    <span>The 52 Lessons Package</span>
                                </a>
                            </li> */ ?>
                            <li itemprop="hasPart" class="nav-item dropdown">
                                <a tabindex="0" class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" aria-expanded="false" id="socialSkillsNav">
                                    <span>Social Skills</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-dark bg-success" aria-labelledby="socialSkillsNav" style="overflow-y:auto;">
                                    <a tabindex="0" href="<?php echo $website_url; ?>/speech-therapy-social-skills-worksheets-pdfs" class="dropdown-item fw-bold">
                                        <span>Social Skills Worksheets and Activities</span>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a tabindex="0" href="<?php echo $website_url; ?>/adhd-worksheets-for-children" class="dropdown-item">
                                        <span>Conversation Narratives - Set The Scene</span>
                                    </a>
                                    <a tabindex="0" title="Interpersonal Skills Assessment - Printable PDF" href="<?php echo $website_url; ?>/speech-therapy-worksheet-communication-skills-questionnaire-pdf" class="dropdown-item">
                                        <span>Communication Skills Questionnaire</span>
                                    </a>
                                    <a tabindex="0" title="Conversation Skills Worksheets in PDF" href="<?php echo $website_url; ?>/a-conversation-activity-worksheet-for-autistic-teens" class="dropdown-item">
                                        <span>Entering Conversations</span>
                                    </a>
                                    <a tabindex="0" href="<?php echo $website_url; ?>/social-skills-worksheet-conversation-turn-taking" class="dropdown-item">
                                        <span>Conversational Elaboration</span>
                                    </a>
                                    <a tabindex="0" href="<?php echo $website_url; ?>/autism-perspective-taking-worksheets-pdf" class="dropdown-item">
                                        <span>Polite Wording</span>
                                    </a>
                                    <a tabindex="0" title="An ASD Worksheet" href="<?php echo $website_url; ?>/autism-perspective-taking-high-school" class="dropdown-item">
                                        <span>Tact</span>
                                    </a>
                                    <a tabindex="0" title="An Interpersonal Skills Worksheet" href="<?php echo $website_url; ?>/autism-adolescent-therapy-activities-pdf" class="dropdown-item">
                                        <span>Time Sensitivity and Conversation Skills</span>
                                    </a>
                                    <a tabindex="0" href="<?php echo $website_url; ?>/autistic-child-worksheets-kinesics-interest-vs-disinterest" class="dropdown-item">
                                        <span>Kinesics - Interest vs. Disinterest</span>
                                    </a>
                                    <a tabindex="0" title="Conversation Skills Worksheets in PDF" href="<?php echo $website_url; ?>/autistic-child-worksheets-improve-social-skills-teenager-worksheets" class="dropdown-item">
                                        <span>Editing Verbal Narratives</span>
                                    </a>
                                    <a tabindex="0" href="<?php echo $website_url; ?>/social-emotional-learning-activity-speaking-to-different-communicative-partners" class="dropdown-item">
                                        <span>Speaking to Different Conversational Partners</span>
                                    </a>
                                    <a tabindex="0" title="Theory of Mind Activities Worksheets" href="<?php echo $website_url; ?>/pdf-worksheets-how-to-teach-empathy-classroom" class="dropdown-item">
                                        <span>Developing Empathy</span>
                                    </a>
                                    <a tabindex="0" href="<?php echo $website_url; ?>/social-skills-complaint-letter-worksheet-pdf" class="dropdown-item">
                                        <span>Complaint Letters - Reader Presupposition</span>
                                    </a>
                                    <a tabindex="0" title="Perspective Taking - Homework Assignment" href="<?php echo $website_url; ?>/perspective-taking-activities-autistic-child" class="dropdown-item">
                                        <span>Perspective Taking - Homework Assignment</span>
                                    </a>               
                                    <a tabindex="0" title="Being a Good Conversationalist" href="<?php echo $website_url; ?>/being-a-good-conversationalist-social-skills-worksheet" class="dropdown-item">
                                        <span>Being a Good Conversationalist</span>
                                    </a>
                                    <a tabindex="0" title="Choosing Conversation Topics" href="<?php echo $website_url; ?>/social-skills-choosing-conversation-topics" class="dropdown-item">
                                        <span>Choosing Conversation Topics</span>
                                    </a>
                                    <a tabindex="0" title="Interviewing Others" href="<?php echo $website_url; ?>/interviewing-others-social-skills-worksheet" class="dropdown-item">
                                        <span>Interviewing Others</span>
                                    </a>
                                    <a tabindex="0" title="Post-Conversation Questionnaire" href="<?php echo $website_url; ?>/post-conversation-questionnaire-social-skills-worksheet" class="dropdown-item">
                                        <span>Post-Conversation Questionnaire</span>
                                    </a>
                                    <a tabindex="0" title="Tone of Voice" href="<?php echo $website_url; ?>/tone-of-voice-social-skills-worksheet" class="dropdown-item">
                                        <span>Tone of Voice</span>
                                    </a>
                                    <a tabindex="0" title="Interpreting Non-Verbal Communication Homework" href="<?php echo $website_url; ?>/interpreting-non-verbal-communication-homework-social-skills-worksheets" class="dropdown-item">
                                        <span>Interpreting Non-Verbal Communication Homework</span>
                                    </a>
                                    <a tabindex="0" title="Impressions from Appearances" href="<?php echo $website_url; ?>/impressions-from-appearances-social-emotional-learning-activity" class="dropdown-item">
                                        <span>Impressions from Appearances</span>
                                    </a>
                                    <?php /*<a tabindex="0" title="Attaining Targeted Impressions" href="<?php echo $website_url; ?>/attaining-targeted-impressions-social-emotional-learning-activity" class="dropdown-item">
                                        <span>Attaining Targeted Impressions</span>
                                    </a>
                                    <a tabindex="0" title="Impressions and Altruism" href="<?php echo $website_url; ?>/impressions-and-altruism-social-emotional-learning-activity" class="dropdown-item">
                                        <span>Impressions and Altruism</span>
                                    </a>*/ ?>
                                    <a tabindex="0" title="Understanding Others Reference Sheet" href="<?php echo $website_url; ?>/social-emotional-learning-activity-understanding-others-reference-sheet" class="dropdown-item">
                                        <span>Understanding Others Reference Sheet</span>
                                    </a>
                                    <a tabindex="0" title="Greetings" href="<?php echo $website_url; ?>/greetings-social-skills-worksheet" class="dropdown-item">
                                        <span>Greetings</span>
                                    </a>
                                    <a tabindex="0" title="Getting Someone's Attention" href="<?php echo $website_url; ?>/getting-someones-attention-social-skills-worksheets" class="dropdown-item">
                                        <span>Getting Someone's Attention</span>
                                    </a>
                                    <a tabindex="0" title="Restaurant Etiquette" href="<?php echo $website_url; ?>/restaurant-etiquette-social-skills-activity" class="dropdown-item">
                                        <span>Restaurant Etiquette</span>
                                    </a>
                                    <a tabindex="0" title="Answering Job Interview Questions" href="<?php echo $website_url; ?>/answering-job-interview-questions-social-skills-classroom-activity" class="dropdown-item">
                                        <span>Answering Job Interview Questions</span>
                                    </a>
                                    <a tabindex="0" title="Passive Aggression" href="<?php echo $website_url; ?>/passive-aggression-social-skills-activity-pdf" class="dropdown-item">
                                        <span>Passive Aggression</span>
                                    </a>
                                    <a tabindex="0" title="Social Skills Packet: all thirteen Lessons" href="<?php echo $website_url; ?>/social-emotional-learning-activities-for-autism" class="dropdown-item">
                                        <span>Social Skills Packet: All Twenty Eight Lessons</span>
                                    </a>
                                </div>
                            </li>
                            <li itemprop="hasPart" class="nav-item dropdown">
                                <a tabindex="0" class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" aria-expanded="false" id="grammerNav">
                                    <span>Grammar</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-dark bg-success" aria-labelledby="grammerNav"style="overflow-y:auto;">
                                    <div class="dropdown-menu-wrapper">
                                        <div class="menu">
                                            <a tabindex="0" href="<?php echo $website_url; ?>/high-school-middle-school-grammar-worksheets-pdf" class="dropdown-item fw-bold">
                                                <span>Grammar Worksheets & Activities</span>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a tabindex="0" title="subject verb object exercises" href="<?php echo $website_url; ?>/subject-verb-object-social-skills-worksheets" class="dropdown-item">
                                                <span>Subjects, Verbs, Objects</span>
                                            </a>
                                            <a tabindex="0" title="prepositional phrase worksheet" href="<?php echo $website_url; ?>/preposition-worksheets" class="dropdown-item">
                                                <span>Subjects, Verbs, Objects, and Prepositional Phrases</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/adverbs-worksheets" class="dropdown-item">
                                                <span>Subjects, Verbs, Objects, and Adverbial Phrases</span>
                                            </a>
                                            <a tabindex="0" title="simple present tense worksheets " href="<?php echo $website_url; ?>/verb-tense-worksheets" class="dropdown-item">
                                                <span>Verb Tense</span>
                                            </a>
                                            <a tabindex="0" title="Noun Pronoun Activities Worksheets" href="<?php echo $website_url; ?>/noun-pronoun-agreement-worksheet-pdf" class="dropdown-item">
                                                <span>Noun-Pronoun Agreement</span>
                                            </a>
                                            <a tabindex="0" title="subject verb agreement worksheets printable pdf" href="<?php echo $website_url; ?>/grammar-subject-verb-agreement-worksheets-pdf" class="dropdown-item">
                                                <span>Subject-Verb Agreement</span>
                                            </a>
                                            <a tabindex="0" title="parallelism examples sentence structure worksheets" href="<?php echo $website_url; ?>/grammar-parallelism-worksheet-pdf" class="dropdown-item">
                                                <span>Parallelism</span>
                                            </a>
                                            <a tabindex="0" title="Adjectives and Adverbs Worksheets" href="<?php echo $website_url; ?>/adjectives-worksheet-activities-pdfs" class="dropdown-item">
                                                <span>Adjectives and Adverbs</span>
                                            </a>
                                            <a tabindex="0" title="Perspective Consistency Activities Worksheets " href="<?php echo $website_url; ?>/consistency-in-writing-grammar-worksheets" class="dropdown-item">
                                                <span>Perspective Consistency</span>
                                            </a>
                                            <a tabindex="0" title="passive voice exercises - examples" href="<?php echo $website_url; ?>/passive-and-active-voice-worksheet-pdfs" class="dropdown-item">
                                                <span>Passive and Active Voice</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/grammar-worksheets" class="dropdown-item">
                                                <span>Grammar Packet: All Ten Lessons</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li itemprop="hasPart" class="nav-item dropdown">
                                <a tabindex="0" class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" aria-expanded="false" id="readingComprehensionNav">
                                    <span>Reading Comprehension</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-dark bg-success" aria-labelledby="readingComprehensionNav"style="overflow-y:auto;">
                                    <div class="dropdown-menu-wrapper">
                                        <div class="menu">
                                            <a tabindex="0" href="<?php echo $website_url; ?>/middle-school-reading-comprehension-worksheets-pdf" class="dropdown-item fw-bold">
                                                <span>Reading Comprehension Worksheets</span>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a tabindex="0" title="prefix and suffix games for kids " href="<?php echo $website_url; ?>/word-roots-worksheets" class="dropdown-item">
                                                <span>Word Roots</span>
                                            </a>
                                            <a tabindex="0" title="english grammar exercises " href="<?php echo $website_url; ?>/prefixes-and-suffixes-worksheets" class="dropdown-item">
                                                <span>Prefixes and Suffixes</span>
                                            </a>
                                            <a tabindex="0" title="teaching context clues to middle school students " href="<?php echo $website_url; ?>/context-clues-worksheets" class="dropdown-item">
                                                <span>Using Context Clues</span>
                                            </a>
                                            <a tabindex="0" title="reading comprehension exercises intermediate" href="<?php echo $website_url; ?>/idioms-worksheets-pdf" class="dropdown-item">
                                                <span>Obfuscations</span>
                                            </a>
                                            <a tabindex="0" title="paraphrasing worksheets middle school " href="<?php echo $website_url; ?>/reading-comprehension-skills-middle-school" class="dropdown-item">
                                                <span>Paraphrases and Meanings</span>
                                            </a>
                                            <a tabindex="0" title="Reading Comprehension Worksheets Printable PDF " href="<?php echo $website_url; ?>/middle-school-reading-comprehension-activities-worksheet-pdfs" class="dropdown-item">
                                                <span>Conceptual Relationships</span>
                                            </a>
                                            <a tabindex="0" title="Advanced Reading Comprehension Printable PDF" href="<?php echo $website_url; ?>/reading-comprehension-activity-worksheets" class="dropdown-item">
                                                <span>Conceptual Relationships Advanced</span>
                                            </a>
                                            <a tabindex="0" title="Leisure Time Language Input" href="<?php echo $website_url; ?>/downloadable-comprehension-activities" class="dropdown-item">
                                                <span>Leisure Time Language Input</span>
                                            </a>
                                            <a tabindex="0" title="Identifying Main Idea" href="<?php echo $website_url; ?>/reading-comprehension-activity-identifying-main-idea" class="dropdown-item">
                                                <span>Identifying Main Idea</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/reading-comprehension-activity-worksheet-pdfs" class="dropdown-item">
                                                <span>Reading Comprehension Packet: All Nine Lessons</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li itemprop="hasPart" class="nav-item dropdown">
                                <a tabindex="0" class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" aria-expanded="false" id="grammerNav">
                                    <span>Writing Skills</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-dark bg-success" aria-labelledby="writingSkillsNav"style="overflow-y:auto;">
                                    <div class="dropdown-menu-wrapper">
                                        <div class="menu">
                                            <a tabindex="0" href="<?php echo $website_url; ?>/high-school-writing-skills-worksheets-pdf" class="dropdown-item fw-bold">
                                                <span>Writing Skills Worksheets</span>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a tabindex="0" href="<?php echo $website_url; ?>/middle-school-writing-worksheet-pdfs" class="dropdown-item">
                                                <span>Linguistic Specificity</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/vocabulary-activities-for-middle-school-pdfs" class="dropdown-item">
                                                <span>Linguistic Flexibility</span>
                                            </a>
                                            <?php /*<a tabindex="0" href="<?php echo $website_url; ?>/descriptive-writing-worksheets" class="dropdown-item">
                                                <span>Descriptive Writing - Adjectives and Adverbs</span>
                                            </a>*/ ?>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/grammar-redundancy-exercises-pdf" class="dropdown-item">
                                                <span>Redundancy</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/sentence-clarity-exercises-pdf" class="dropdown-item">
                                                <span>Clarity and Simplification</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/elaboration-in-writing-pdf" class="dropdown-item">
                                                <span>Adding Meaning - Simplify and Elaborate</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/elaboration-worksheets-7th-8th-grade" class="dropdown-item">
                                                <span>Elaboration when Answering Homework Questions</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/8th-grade-english-writing-activity" class="dropdown-item">
                                                <span>Perspective Consistency</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/download-active-and-passive-voice-exercises" class="dropdown-item">
                                                <span>Passive and Active Voice</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/character-description-worksheet-pdf" class="dropdown-item">
                                                <span>Character Description</span>
                                            </a>
                                            <a tabindex="0" title="Movie Review Template" href="<?php echo $website_url; ?>/movie-review-worksheets" class="dropdown-item">
                                                <span>Movie Review Template</span>
                                            </a>
                                            <a tabindex="0" title="Presupposition in Pragmatics" href="<?php echo $website_url; ?>/writing-a-letter-worksheet" class="dropdown-item">
                                                <span>Complaint Letters - Reader Presupposition</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/middle-school-high-school-writing-worksheets-pdf" class="dropdown-item">
                                                <span>Transition Words And Phrases</span>
                                            </a>
                                            <a tabindex="0" href="<?php echo $website_url; ?>/writing-skills-worksheets-high-school-for-teenagers-pdf" class="dropdown-item">
                                                <span>Writing Skills Packet: All Thirteen Lessons</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php /* <li itemprop="hasPart" class="nav-item dropdown">
                                <a tabindex="0" href="https://store.52worksheets.com/" class="nav-link dropdown-toggle" id="cartNav">
                                    Cart
                                </a>
                                <div class="dropdown-menu dropdown-menu-dark bg-success" aria-labelledby="cartNav">
                                    <div class="dropdown-menu-wrapper">
                                        <div class="menu">
                                            <a tabindex="0" href="https://store.52worksheets.com/my-account" class="dropdown-item">
                                                <span>My Account</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li itemprop="hasPart" class="nav-item">
                                <a tabindex="0" class="nav-link" href="https://store.52worksheets.com/checkout/">
                                    <span>Checkout</span>
                                </a>
                            </li> */ ?>
                            <li itemprop="hasPart" class="nav-item d-block d-md-none">
                                <a tabindex="0" class="nav-link" href="<?php echo $website_url; ?>/contact-educator-lisa-flowers">Contact Us</a>
                            </li>
                            <li itemprop="hasPart" class="nav-item d-block d-md-none">
                                <a tabindex="0" class="nav-link" href="<?php echo $website_url; ?>/terms-and-conditions">Terms &amp; Conditions</a>
                            </li>
                            <li itemprop="hasPart" class="nav-item d-block d-md-none">
                                <a tabindex="0" class="nav-link" href="<?php echo $website_url; ?>/return-policy">Return Policy</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>

            <!-- <div class="row d-flex align-items-center justify-content-center border-top border-bottom text-center text-24">
                <div class="col">
                    <a tabindex="0" href="javascript:void(0);" class="d-block px-3 py-2"><i class="fa fa-cart"></i></a>
                </div>
                <div class="col border-left border-right">
                    <a tabindex="0" href="javascript:void(0);" class="d-block px-3 py-2"><i class="fa fa-store"></i></a>
                </div>
                <div class="col">
                    <a tabindex="0" href="javascript:void(0);" class="d-block px-3 py-2"><i class="fa fa-user"></i></a>
                </div>
            </div> -->

            <div itemscope itemtype="https://schema.org/WebPage" class="footer d-none d-md-block">
                <span itemprop="copyrightHolder" class="small">Copyright ©<?php echo date ('Y'); ?>, Communication Acceleration</span>
            </div>