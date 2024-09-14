<?php
    // GLOBAL SETTINGS / VARIABLES
    $website_name       =       "CA Lessons";
    $school_name        =       "P.S. Q023 @ Queens Children Center";
    // $website_url        =       "http://localhost/calessons.com/75q023"; // LOCALHOST
    $website_url        =       "https://75q023.calessons.com";
    $assets_url         =       "https://www.calessons.com"; // IMG / CSS / JS
    $web_cat_url        =       NULL;
    $page_keyword       =       NULL;

    // SOCIAL SETTINGS
    $twitter_url        =       "https://twitter.com/";
    $twitter_handle     =       "@";
    $facebook_url       =       "https://www.facebook.com/profile.php?id=100067162400403";
    $linkedin_url       =       "https://www.linkedin.com/";
    $pinterest_url      =       "https://in.pinterest.com/";
    $youtube_url        =       "https://www.youtube.com/@communicationacceleration3431";

    defined('WEB_URL')        OR define('WEB_URL', $website_url.'/');
?>

<?php 
    define('HTTP_SERVER', $website_url);
    define('HTTPS_SERVER', $website_url);
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    $http_origin = $_SERVER['HTTP_ORIGIN'];

    if ($http_origin == $website_url || $http_origin == $assets_url)
    {  
        header("Access-Control-Allow-Origin: $http_origin");
    }
?>

<?php
    // ISO FORMAT DATE
    $date = date('Y-m-d H:i:s');
    $last_modification = date_format(date_create('@'. strtotime($date)), 'c');
?>

<?php
    // $canonical_url = $website_url . "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $canonical_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    function base64url_encode($str) {
        return strtr(base64_encode($str), '+/', '-_');
    }
    function base64url_decode($base64url) {
        return base64_decode(strtr($base64url, '-_', '+/'));
    }

    function checkmobiledevice() {
        $useragent = $_SERVER['HTTP_USER_AGENT']; 
        $iPod = stripos($useragent, "iPod"); 
        $iPad = stripos($useragent, "iPad"); 
        $iPhone = stripos($useragent, "iPhone");
        $Android = stripos($useragent, "Android"); 
        $iOS = stripos($useragent, "iOS");
        $webOS = stripos($useragent, "webOS");
        $Blackberry = stripos($useragent, "Blackberry");
        $IEMobile = stripos($useragent, "IEMobile");
        $OperaMini = stripos($useragent, "OperaMini");

        $DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS||$webOS||$Blackberry||$IEMobile||$OperaMini);

        if ($DEVICE !=true) {
            return false;
        }
        else{ 
            return true;
        }
    }
?>

<?php
    // PRODUCT CONFIGS
    $product_currency                               =           '$';

    // 52 Lessons 
    $fifty_two_lessons_price                        =           '49';
    $fifty_two_lessons_offer_price                  =           '29';
    $fifty_two_lessons_id                           =           '18708';
    $fifty_two_lessons_sku                          =           '1035CA035';
    $fifty_two_lessons_rev_author                   =           'Lori J. Brewer';

    // Social Skills Worksheet
    $social_skills_packet_price                     =           '36';
    $social_skills_packet_offer_price               =           '19';
    $social_skills_packet_id                        =           '18710';
    $social_skills_packet_sku                       =           '1035CA035';
    $social_skills_packet_rev_author                =           'Jonathan Mackenzie';

    // Grammar Worksheets
    $grammar_worksheets_packet_price                =           '28';
    $grammar_worksheets_packet_offer_price          =           '15';
    $grammar_worksheets_packet_id                   =           '18712';
    $grammar_worksheets_packet_sku                  =           '1016CA016';
    $grammar_worksheets_packet_rev_author           =           'Jessica Kerr';


    // Reading Comprehension Worksheets
    $reading_comprehension_packet_price             =           '28';
    $reading_comprehension_packet_offer_price       =           '15';
    $reading_comprehension_packet_id                =           '18713';
    $reading_comprehension_packet_sku               =           '1028CA028';
    $reading_comprehension_packet_rev_author        =           'Trevor Blake';

    // Writing Skills Worksheets
    $writing_skills_packet_price                    =           '28';
    $writing_skills_packet_offer_price              =           '15';
    $writing_skills_packet_id                       =           '18714';
    $writing_skills_packet_sku                      =           '1043CA043';
    $writing_skills_packet_rev_author               =           'Cameron Russell';
?>

<?php 
    // Worksheet Video Configs
    $fiftytwo_worksheets_video = "https://youtu.be/FoNskCJhBl4";
    $fiftytwo_worksheets_video_date = "2023-05-27";

    // Social Skills
    $adhd_worksheets_for_child_pdf = "https://youtu.be/Opzfi45SsuA";
    $adhd_worksheets_for_child_pdf_date = "2023-05-27";

    $communication_skills_questionnaire = "https://youtu.be/HgZUnpw05Ls";
    $communication_skills_questionnaire_date = "2023-05-27";

    $conversation_worksheets_for_autism = "https://youtu.be/y6agRG9srMA";
    $conversation_worksheets_for_autism_date = "2023-05-27";

    $conversation_turn_taking = "https://www.youtube.com/embed/XikFOsehO1c";
    $conversation_turn_taking_date = "2023-05-27";

    $perspective_taking_worksheets_video = "https://youtu.be/mtza7zbtCFU";
    $perspective_taking_worksheets_video_date = "2023-05-27";

    $perspective_taking_high_school_video = "https://youtu.be/LlRGwr4emxs";
    $perspective_taking_high_school_video_date = "2023-05-27";

    $adolescent_therapy_activities_video = "https://youtu.be/oHrn8HO5oyw";
    $adolescent_therapy_activities_video_date = "2023-05-27";

    $kinesics_interest_vs_disinterest_video = "https://youtu.be/7QZu5tlvtL8";
    $kinesics_interest_vs_disinterest_video_date = "2023-05-27";

    $improve_social_skills_teenager_worksheets_video = "https://youtu.be/ge2maM4p-N4";
    $improve_social_skills_teenager_worksheets_video_date = "2023-05-27";

    $speaking_to_different_communicative_partners_video = "https://youtu.be/uDavOJ_MeBE";
    $speaking_to_different_communicative_partners_video_date = "2023-05-27";

    $how_to_teach_empathy_in_the_classroom_video = "https://youtu.be/wtigdPDiqHo";
    $how_to_teach_empathy_in_the_classroom_video_date = "2023-05-27";

    $letter_of_complaint_exercises_worksheet_video = "https://youtu.be/Os_TxDAPLB0";
    $letter_of_complaint_exercises_worksheet_video_date = "2023-05-27";

    $perspective_taking_activities_autism_video = "https://youtu.be/Pr5r0ORo16M";
    $perspective_taking_activities_autism_video_date = "2023-05-27";

    $being_a_good_conversationalist_video = "https://youtu.be/bSrFvQB5mmE";
    $being_a_good_conversationalist_video_date = "2023-05-27";

    $choosing_conversation_topics_video = "https://youtu.be/obSm_uc_C_4";
    $choosing_conversation_topics_video_date = "2023-05-27";

    $interviewing_others_video = "https://youtu.be/XFVUKE14QRs";
    $interviewing_others_video_date = "2023-05-27";

    $post_conversation_questionnaire_video = "https://youtu.be/3wc9-VGAzKk";
    $post_conversation_questionnaire_video_date = "2023-05-27";

    $tone_of_voice_video = "https://youtu.be/ZmA6a43Ugnw";
    $tone_of_voice_video_date = "2023-05-27";

    $interpreting_non_verbal_communication_video = "https://youtu.be/a8l5UjWbGP4";
    $interpreting_non_verbal_communication_video_date = "2023-05-27";

    $impressions_from_appearances_video = "https://youtu.be/_XUaHgewLtc";
    $impressions_from_appearances_video_date = "2023-05-27";

    $attaining_targeted_impressions_video = "https://youtu.be/TtFjzv7-mm4";
    $attaining_targeted_impressions_video_date = "2023-05-27";

    $impressions_and_altruism_video = "https://youtu.be/VXiDKbL6NkE";
    $impressions_and_altruism_video_date = "2023-05-27";

    $understanding_others_reference_sheet_video = "https://youtu.be/2NoMVfCXEDg";
    $understanding_others_reference_sheet_video_date = "2023-05-27";

    $greetings_video = "https://youtu.be/Io1_f6EM-PQ";
    $greetings_video_date = "2023-05-27";

    $getting_someones_attention_video = "https://youtu.be/Q9OUlQK7dhM";
    $getting_someones_attention_video_date = "2023-05-27";

    $restaurant_etiquette_video = "https://youtu.be/oZ1YCWQ7xjc";
    $restaurant_etiquette_video_date = "2023-05-27";

    $answering_job_interview_questions_video = "https://youtu.be/xVDHqxFIvo8";
    $answering_job_interview_questions_video_date = "2023-05-27";

    $passive_aggression_video = "https://youtu.be/OzH9_QOmWw8";
    $passive_aggression_video_date = "2023-05-27";

    $social_skills_packet_video = "https://www.youtube.com/embed/videoid";
    $social_skills_packet_video_date = "2023-05-27";

    // Grammar Worksheets
    $subject_verb_object_worksheets_video = "https://youtu.be/ab1UAJf0vqY";
    $subject_verb_object_worksheets_video_date = "2023-05-27";

    $preposition_worksheets_video = "https://youtu.be/Gevxzx7iD_c";
    $preposition_worksheets_video_date = "2023-05-27";

    $adverbs_worksheet_video = "https://youtu.be/GKIyetEplIo";
    $adverbs_worksheet_video_date = "2023-05-27";

    $verb_tense_worksheets_video = "https://www.youtube.com/embed/videoid";
    $verb_tense_worksheets_video_date = "2023-05-27";

    $noun_pronoun_agreement_worksheet_video = "https://youtu.be/IiQAuaujB9w";
    $noun_pronoun_agreement_worksheet_video_date = "2023-05-27";

    $subject_verb_agreement_worksheets_video = "https://www.youtube.com/embed/videoid";
    $subject_verb_agreement_worksheets_video_date = "2023-05-27";

    $parallelism_worksheet_video = "https://youtu.be/3AUuiPZDl9I";
    $parallelism_worksheet_video_date = "2023-05-27";

    $adjectives_worksheet_video = "https://www.youtube.com/embed/videoid";
    $adjectives_worksheet_video_date = "2023-05-27";

    $perspective_consistency_grammar_worksheets = "https://www.youtube.com/embed/videoid";
    $perspective_consistency_grammar_worksheets_date = "2023-05-27";

    $passive_and_active_voice_worksheet_video = "https://www.youtube.com/embed/videoid";
    $passive_and_active_voice_worksheet_video_date = "2023-05-27";

    $grammar_worksheets_packet_video = "https://www.youtube.com/embed/_ZGGTPPjx6M";
    $grammar_worksheets_packet_video_date = "2023-05-27";

    // Reading Comprehension Worksheets
    $word_roots_video = "https://youtu.be/VLNw9ptrWAA";
    $word_roots_video_date = "2023-05-27";

    $prefixes_and_suffixes_worksheets_video = "https://youtu.be/5mxaqM_knXw";
    $prefixes_and_suffixes_worksheets_video_date = "2023-05-27";

    $using_context_clues_video = "https://youtu.be/kLtKIyHabdc";
    $using_context_clues_video_date = "2023-05-27";

    $obfuscations_worksheets_video = "https://youtu.be/Gsbc82o-qak";
    $obfuscations_worksheets_video_date = "2023-05-27";

    $paraphrases_and_meanings_video = "https://youtu.be/6hicSELd7fk";
    $paraphrases_and_meanings_video_date = "2023-05-27";

    $conceptual_relationships_video = "https://www.youtube.com/embed/EvtNZyOIQVM";
    $conceptual_relationships_video_date = "2023-05-27";

    $conceptual_relationships_advanced_video = "https://youtu.be/50cAVMZ1ryg";
    $conceptual_relationships_advanced_video_date = "2023-05-27";

    $comprehension_activities_video = "https://youtu.be/0X-fyMDkYw0";
    $comprehension_activities_video_date = "2023-05-27";

    $identifying_main_idea_video = "https://www.youtube.com/embed/videoid";
    $identifying_main_idea_video_date = "2023-05-27";

    $reading_comprehension_packet_video = "https://www.youtube.com/embed/videoid";
    $reading_comprehension_packet_video_date = "2023-05-27";

    // Writing Skills Worksheets
    $middle_school_writing_worksheet_video = "https://youtu.be/ns8TqvQiXRw";
    $middle_school_writing_worksheet_video_date = "2023-05-27";

    $linguistic_flexibility_video = "https://youtu.be/ns8TqvQiXRw?si=pjEBYqnNpIbW_Rn2";
    $linguistic_flexibility_video_date = "2023-05-27";

    $descriptive_writing_video = "https://www.youtube.com/watch?v=FoeCgcjgeXY";
    $descriptive_writing_video_date = "2023-05-27";

    $redundancy_exercises_video = "https://youtu.be/3_dFqnVH2e8";
    $redundancy_exercises_video_date = "2023-05-27";

    $sentence_clarity_exercises_video = "https://youtu.be/y8cp4GGhu6Y";
    $sentence_clarity_exercises_video_date = "2023-05-27";

    $elaboration_in_writing_video = "https://youtu.be/SMHME_g1hBU";
    $elaboration_in_writing_video_date = "2023-05-27";

    $elaboration_worksheets_seventh_grade_video = "https://youtu.be/I9EI9VXeDYA";
    $elaboration_worksheets_seventh_grade_video_date = "2023-05-27";

    $perspective_consistency_video = "https://youtu.be/NrEMTBlAhVU";
    $perspective_consistency_video_date = "2023-05-27";

    $active_and_passive_voice_exercises_video = "https://youtu.be/yshLGoeVA-w";
    $active_and_passive_voice_exercises_video_date = "2023-05-27";

    $character_description_worksheet_video = "https://youtu.be/wW6SlhJHlzE";
    $character_description_worksheet_video_date = "2023-05-27";

    $movie_review_worksheet_video = "https://youtu.be/H4NX-8RTdmE";
    $movie_review_worksheet_video_date = "2023-05-27";

    $writing_a_letter_worksheet_video = "https://youtu.be/ZB8-P0ABK3Y";
    $writing_a_letter_worksheet_video_date = "2023-05-27";

    $writing_worksheets_video = "https://youtu.be/JMzhIEU75yE";
    $writing_worksheets_video_date = "2023-05-27";

    $writing_skills_worksheets_packet_video = "https://www.youtube.com/embed/videoid";
    $writing_skills_worksheets_packet_video_date = "2023-05-27";
?>